<?php


//Signup Functions


function emptyInputSignup($username, $password_hash, $customer_forename, $customer_surname, $customer_postcode, $customer_address1, $customer_address2, $date_of_birth) {
	$result;
	//All of the below do not need to be empty
	if (empty($username) || empty($password_hash) || empty($customer_forename) || empty($customer_surname) || empty($customer_postcode) || empty($customer_address1) || empty($customer_address2) || empty($date_of_birth)) {
		$result = true;
	} else {
		$result = false;
	}
	return $result;
}

function usernameExists($conn, $username) {
	$sql = "SELECT * FROM customers WHERE username = ?;";
	
	//This prepared statements are used to secure the webpage, by not allowing any sort of other data except which is asked for while signup/login
	$stmt = mysqli_stmt_init($conn); 	//Initialising some prepared statements from the sql statement above
	
	if (!mysqli_stmt_prepare($stmt, $sql)) {   //This line says to run the SQL code above inside the database and check for errors
		header("location: Signup.php?error=wrongcredentials");
		exit();
	}
	mysqli_stmt_bind_param($stmt, "s", $username);
	mysqli_stmt_execute($stmt);
	
	
	$resultData = mysqli_stmt_get_result($stmt);
	
	//if the username exists in the database, this command below grabs the data from the database
	if($row = mysqli_fetch_assoc($resultData)) {		//assoc=associative array
		return $row;
	}
	else {
		$result = false;
		return $result;
	}
	
	mysqli_stmt_close($stmt);
}


function createUser ($conn, $username, $password_hash, $customer_forename, $customer_surname, $customer_postcode, $customer_address1, $customer_address2, $date_of_birth) {
	$sql = "INSERT INTO customers (username, password_hash, customer_forename, customer_surname, customer_postcode, customer_address1, customer_address2, date_of_birth) VALUES (?, ?, ?, ?, ?, ?, ?, ?);";
	
	//This prepared statements are used to secure the webpage, by not allowing any sort of other data except which is asked for while signup/login
	$stmt = mysqli_stmt_init($conn); 	//Initialising some prepared statements from the sql statement above
	
	if (!mysqli_stmt_prepare($stmt, $sql)) {   //This line says to run the SQL code above inside the database and check for errors
		header("location: Signup.php?error=wrongcredentials");
		exit();
	}
	
	//Password Encryption
	$hashedPwd = password_hash($password_hash, PASSWORD_DEFAULT);
	
	
	mysqli_stmt_bind_param($stmt, "ssssssss", $username, $hashedPwd, $customer_forename, $customer_surname, $customer_postcode, $customer_address1, $customer_address2, $date_of_birth);  //This is used to bind the parameters
	mysqli_stmt_execute($stmt);
	
	header("location: Login.php?error=none");
		exit();
}




//Login Functions


function emptyInputLogin($username, $password_hash) {
	$result;
	//All of the below do not need to be empty
	if (empty($username) || empty($password_hash)) {
		$result = true;
	} else {
		$result = false;
	}
	return $result;
}

function loginUser($conn, $username, $password_hash) {
	$usernameExists = usernameExists($conn, $username);
	
	//Error handling - This is to make sure, if the username doesnot exists
	if($usernameExists == false) {
		header("location: Login.php?error=wrongcredentials");
		exit();
	}
	
	$pwdHashed = $usernameExists["password_hash"];  	//if the given password is equal to the password inside the database
	$checkPwd = password_verify($password_hash, $pwdHashed);  		//Only if these 2 matches it logins the session

	if ($checkPwd === false) {
		header("location: Login.php?error=wrongcredentials");
		exit();
	}
	//If the password user provided matches with the database, it automatically logins the customer into the homepage of the website
	else if ($checkPwd === true) {		
		session_start();
		$_SESSION["customerID"] =  $usernameExists["customerID"];
		$_SESSION["username"] =  $usernameExists["username"];
		header("location: index.php");
		exit();
	}
}


