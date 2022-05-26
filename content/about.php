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
	<title>: : About : :</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../assets/Stylesheets/about-style.css">
	
</head>
<body>
<div class="wrapper">
<div class="logo margin.sm"> Rajahmundry Tourism</div>
<div class="margin-sm">
<nav>
<a  href="index.php">Home</a>
<a href="bookings.php">Make a Tour</a>
<a href="search.loc.php">Search Locations</a>
<a href="upcoming.php">Upcoming</a>
<a class="active" href="about.php">About</a>
<a href="logout.i.php">Logout</a>
</nav>
</div>
</div>
<center>


<div class="container">

<div class="links">
<h2> Quick Links </h2><br><br>
<h3>  Academic Security Report <a href="security-report.php"> Click here</a></h3><br>

<h3> References for the images and Information <a href="image-ref.php"> Click here </a></h3><br>


</div>
</div>









</center>
</body>
</html>