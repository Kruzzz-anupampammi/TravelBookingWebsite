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
	<title>: : Homepage : :</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../assets/Stylesheets/index-style.css">
	
</head>
<body>
<center>
<div class="wrapper">
<div class="logo margin.sm"> Rajahmundry Tourism


</div>
<div class="margin-sm">
<nav>
<a class="active" href="index.php">Home</a>
<a href="bookings.php">Make a Tour</a>
<a href="search.loc.php">Search Locations</a>
<a href="upcoming.php">Upcoming</a>
<a href="about.php">About</a>
<a href="logout.i.php">Logout</a>



</nav>
</div>
</div>


<div class="greeting">
	<?php
	if (isset($_SESSION["username"])) {
		echo "<h2>Hey, " . $_SESSION["username"] . "</h2>";
	}
	?>
</div>

<div class="id">
	<?php
	if (isset($_SESSION["customerID"])) {
		echo "<h4> Customer ID- " . $_SESSION["customerID"] . "</h4>";
	}
	?>
</div>


<div class="transbox">
<h2>About Rajahmundry..</h2> <br>
<h3>Rajahmundry is one of the major cities in the Indian state of Andhra Pradesh. It is located at the Godavari River, in East Godavari district of the Andhra Pradesh.The city is the mandal headquarters to both Rajahmundry (rural) and Rajahmundry (urban) mandals. It is also the divisional headquarters of Rajahmundry revenue division and one of the two municipal corporations in the district, alongside Kakinada.
<br><br>Rajahmundry got back its original name, Rajamahendravaram. On 10 October 2015, Chief Minister N. Chandrababu Naidu’s cabinet made the official announcement after a meeting.The city is most notable for its historic agricultural, economic and cultural backgrounds. Hence, the city is also known as the Cultural Capital of Andhra Pradesh. One of the largest road cum rail bridges is on the Godavari River, connecting Kovvur and Rajahmundry.</h3>

<br><br><br>

<div class="report">
<h3> Academic Security Report </h3> <a href="security-report.php"> Click here  </a><br>
</div>
</div>














	
	
	
</center>
</body>
</html>