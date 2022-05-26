<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>: : Create an account-Signup : :</title>
	<meta name="viewport" content="width=device-width, initial-scaled=1.0">
	<link rel="stylesheet" type="text/css" href="../assets/Stylesheets/Stylesheet.css">
</head>
<body>
	<div class= "container">
		<h1>Rajahmundry Tourism</h1>
		<!-- <h3>Welcomes you !</h3> -->
	</div>
		<div class= "transbox">
			<form action="signup.i.php" method="post"> <!--This POST method is more secure than the GET method-->
				<h2>
				Sign Up
				</h2>
				<h3>
					Its quick and Easy!
				</h3>
				
				<div class="margin-sm"><input type="text" placeholder="Username" name="username" required></div>
				<div class="margin-sm"><input type="password" placeholder="Password" name="password_hash" required></div>
				<div class="margin-sm"><input type="text" placeholder="Forename" name="customer_forename" required></div>
				<div class="margin-sm"><input type="text" placeholder="Surname" name="customer_surname" required></div>
				<div class="margin-sm"><input type="text" placeholder="Postcode" name="customer_postcode" required></div>
				<div class="margin-sm"><input type="text" placeholder="Address 1" name="customer_address1" required></div>
				<div class="margin-sm"><input type="text" placeholder="Address 2" name="customer_address2" required></div>
				<div class="margin-sm"><input type="date" placeholder="Date of Birth" name="date_of_birth" required></div>
				<div class="margin-sm"><button class=register type=submit name=register>Register</button></div>
				<!--<a class="submit" align="center" name="submit">Register</a>--> <br>
				<div class="margin-sm"><p>Already registered?<a href="Login.php" class=login role=button name=submit>Login</a></p></div>
			</form>
		</div>
		
</body>
</html>