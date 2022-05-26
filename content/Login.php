<?php


?>
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<title>: : Login : :</title>
	<meta name="viewport" content="width=device-width, initial-scaled=1.0">
	<link rel="stylesheet" type="text/css" href="../assets/Stylesheets/Stylesheet.css">
</head>
<body>
	<div class= "container">
		<h1>Rajahmundry Tourism</h1>
		<!-- <h3>Welcomes you !</h3> -->
	</div>
		<div class= "transbox">
			<form action= "login.i.php" method="post">
				<h2>
				Login
				</h2>
				<div class="margin-sm"><input type="text" placeholder="Username" name="username" required></div>
				<div class="margin-sm"><input type="password" placeholder="Password" name="password_hash" required></div>
				<div class="margin-sm"><button class=login type=submit name=submit>Login </button></div>
				<!--<a href="#" class="submit" align="center" value="login">Login</a>--> <br><br>
				<div class="margin-sm"><p>Not yet registered?<br><br><a href="Signup.php"class=register role=button name=register>Signup</a></p></div>
				<!--<div class="margin-sm"><p class="signup">Not yet registered?<br><a href="Signup.php">Signup</a></p></div>-->
			</form>
		</div>


