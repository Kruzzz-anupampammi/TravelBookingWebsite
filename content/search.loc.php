<?php 
	session_start();
	if(!$_SESSION['username'])
	{
		header("location:Login.php");
	}
	
?>

<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<title>: : Search : :</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../assets/Stylesheets/search.loc-style.css">
	
</head>
<body>
<center>
<div class="wrapper">
<div class="logo margin.sm"> Rajahmundry Tourism</div>
<div class="margin-sm">
<nav>
<a  href="index.php">Home</a>
<a href="bookings.php">Make a Tour</a>
<a class="active" href="search.loc.php">Search Locations</a>
<a href="upcoming.php">Upcoming</a>
<a href="about.php">About</a>
<a href="logout.i.php">Logout</a>
</nav>
</div>
	<div class="container">
		</br>
		<h2>Search for Locations</h2></br> 
		
	
		<form method="post" action="search.php">  
				<div class="margin-sm"><input type="text" placeholder="Enter Name, Price, Location" name="search" required></div><br>
                     
				<div class="margin-sm"><button type="submit" class="btn btn-info" name="submit">Search</button></div>
        </form> 
		
		<br><br>
		
	

	</div>
	
	
	
	
</div>
</center>
</body>
</html>