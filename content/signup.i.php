<?php
//if the user fills the form properly....
if(isset($_POST["register"])){
	
	$username = $_POST["username"];
	$password_hash = $_POST["password_hash"];
	$customer_forename = $_POST["customer_forename"];
	$customer_surname = $_POST["customer_surname"];
	$customer_postcode = $_POST["customer_postcode"];
	$customer_address1 = $_POST["customer_address1"];
	$customer_address2 = $_POST["customer_address2"];
	$date_of_birth = $_POST["date_of_birth"];
	
	
	require_once 'connh.i.php';
	require_once 'functions.i.php';
	
	//error handling functions
	if(emptyInputSignup($username, $password_hash, $customer_forename, $customer_surname, $customer_postcode, $customer_address1, $customer_address2, $date_of_birth) !== false){
		header("location: Signup.php?error=emptyinput"); 
		exit();
	}
	if(usernameExists($conn, $username) !==false){
		header("location: Signup.php?error=usernametaken");
		exit();
	}
	
	//if there are no mistakes, signup the user into the system
	createUser($conn, $username, $password_hash, $customer_forename, $customer_surname, $customer_postcode, $customer_address1, $customer_address2, $date_of_birth);
}
else {
	header("location: Signup.php"); //if the user didnt fill the form properly, send him back to signup page
	exit();
}