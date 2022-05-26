
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
	<title>: : Make a booking : :</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../assets/Stylesheets/book.i.style.css">
	
</head>
<body>
<!--<div class="wrapper">-->
	<div class="logo margin.sm" type="logo"> Rajahmundry Tourism </div>
	<div class="margin-sm">
	<nav>
	<a  href="index.php">Home</a>
	<a class="active" href="bookings.php">Make a Tour</a>
	<a href="search.loc.php">Search Locations</a>
	<a href="upcoming.php">Upcoming</a>
	<a href="about.php">About</a>
	<a href="logout.i.php">Logout</a>
	</nav>
	</div>

	<div class="responsive-container">
		<form class="purchase" method="post"><br>
		<h2>Enter the following fields</h2><br>
		
		Journey Date: <br>
		<br><div class="margin-sm"><input type="date" placeholder="dd/mm/yy" name="date_of_activity" required></div><br>
		Number of tickets: <br>
		<br><div class="margin-sm"><input type="text" placeholder="Enter Value" name="number_of_tickets" required></div><br>
		
		<div class="margin-sm"><button class=book type=submit name=book>Purchase</button></div>
		</form>
	</div>
	
	
	
<?php 
		
		if(isset($_POST["book"])){
	
		$activityId = $_GET['rel'];
		$customerID = $_SESSION['customerID'];
		$date_of_activity = $_POST["date_of_activity"];
		$number_of_tickets = $_POST["number_of_tickets"];
		
		
		require 'connh.i.php';
		require 'fn.book.i.php';
		
		
		//error handling
		if(emptyInputPurchase($activityId, $customerID, $date_of_activity, $number_of_tickets) ){
		header("location: book.i.php?error=emptyinputs"); 
		exit();
		}
		
		else {
			createBooking ($conn, $activityId, $customerID, $date_of_activity, $number_of_tickets);
			exit();
		}
		}
?>



</body>

</html>

