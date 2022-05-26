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
	<link rel="stylesheet" type="text/css" href="../assets/Stylesheets/ir-style.css">
	
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

<div class="ir">



<h1> REFERENCES </h1><br><br>

<h3> IMAGES </h3><br>

Image @ Login/Signup Page: 
<p> •	Havelock Bridge and Arch Bridge in Rajahmundry, AP, India (2021). Available at: https://www.flickr.com/photos/adityagopal27/9483209055 (Accessed: 14 January 2021).</p><br>

Website BG Image:
<p> •	Godavari Arch Bridge (2021). Available at: http://www.famousplacesinindia.in/Bridges/Godavari-Arch-Bridge.aspx (Accessed: 14 January 2021). </p><br>

<br>

<h3> INFORMATION </h3><br>

About Rajahmundry:
<p> •	About Rajahmundry (2021). Available at: http://rajahmundryrealestate.net/rajahmundry/ (Accessed: 14 January 2021). </p><br>

About various Activities @ Rajahmundry:
<p> •	Incredible India | Rajahmundry (2021). Available at: https://www.incredibleindia.org/content/incredibleindia/en/destinations/rajahmundry.html <br>(Accessed: 14 January 2021). </p><br>

<br>

<h3> TUTORIALS & DOCUMENTATIONS </h3><br>

<p>  •	Simple signup and login system with PHP and Mysql database | Full Tutorial (2021) Youtube.com. <br>Available at: https://www.youtube.com/watch?v=WYufSGgaCZ8&list=WL&index=3&t=1893s (Accessed: 14 January 2021).</p><br>

<p> •	Complete User Registration system using PHP and MySQL database (2021) Youtube.com. <br>Available at: https://www.youtube.com/watch?v=QxZxHUf7c_0&t=140s (Accessed: 14 January 2021). </p><br>

<p>  •	How to retrieve a single data/record from database using php mysql (2021) Youtube.com. <br>Available at: https://www.youtube.com/watch?v=Di_-HsYENO4&list=WL&index=1 (Accessed: 14 January 2021).</p><br>

<p>  • How To Display Data From A MySQL Database In A HTML Table Using PHP (2021) Youtube.com. <br>Available at: https://www.youtube.com/watch?v=TLqZZjwhHlM&t=5s (Accessed: 14 January 2021).</p><br>

<p>  • How to search multiple words at a time in Mysql php (2021) Youtube.com. <br>Available at: https://www.youtube.com/watch?v=NE1D5nUlZ1U (Accessed: 14 January 2021).</p><br>

<p>  •	PHP: Documentation (2021). <br>Available at: https://www.php.net/docs.php (Accessed: 14 January 2021).</p><br>

<p>  •	PHP Tutorial (2021). <br>Available at: https://www.w3schools.com/php/ (Accessed: 14 January 2021).</p><br>





</div>
</div>









</center>
</body>
</html>