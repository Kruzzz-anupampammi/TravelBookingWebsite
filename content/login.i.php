<?php

if (isset($_POST['submit'])) {
	
	$username = $_POST["username"];
	$password_hash = $_POST["password_hash"];
	
	require_once 'connh.i.php';
	require_once 'functions.i.php';
	
	
	if(emptyInputLogin($username, $password_hash) !== false){
		header("location: Login.php?error=emptyinput"); 
		exit();
}

	loginUser($conn, $username, $password_hash);
}
	else{
		header("location: Login.php");
		exit();
	}
	



