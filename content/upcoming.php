<?php 
	session_start();
	if(!$_SESSION['username'])
	{
		header("location:Login.php");
	}
	require 'connh.i.php';
?>


<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<title>: : My Bookings : :</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../assets/Stylesheets/upcoming-style.css">
	
</head>
<body>
<center>
<div class="wrapper">
<div class="logo margin.sm"> Rajahmundry Tourism</div>
<div class="margin-sm">
<nav>
<a  href="index.php">Home</a>
<a href="bookings.php">Make a Tour</a>
<a href="search.loc.php">Search Locations</a>
<a class="active" href="upcoming.php">Upcoming</a>
<a href="about.php">About</a>
<a href="logout.i.php">Logout</a>
</nav>
</div>
</div>



<div class="responsive-table">

		<h2>My Bookings</h2>
		<div style="overflow-x:auto;">
		<table class="ret-database">
		<tr height="100%"> 
		<h3>
			<th width="10%"> Activity ID </th>
			<th width="10%"> Customer ID </th>
			<th width="12%"> Date of Booking </th>
			<th width="15%"> Number of Tickets Booked </th>
			<th width="15%"> Bookings </th>
		</h3>
		</tr> <br>
		
		
		<?php
			
			
			
			$conn = mysqli_connect($serverName, $dBUserName, 
					$dBPassword, $dBName);
			if ($conn-> connect_error) {
				die("connection failed:" . $conn-> connect_error);
			}
			
			$sql = "SELECT activityID, customerID, 
					date_of_activity, number_of_tickets FROM booked_activities";
			$result = $conn-> query($sql);
			
			if ($result-> num_rows > 0) {
				while ($row = $result-> fetch_assoc()){
					echo "<tr><th>" . $row["activityID"] . "
					</th><th>" . $row["customerID"] . "
					</th><th>" . $row["date_of_activity"] . "
					</th><th>" . $row["number_of_tickets"] . "
					</th><th> <a href='bookings.php'> View Activity </a> 
					</th></tr>";
				}
				echo "</table>";
			}
			else {
				echo "0 result";
			}
			
			$conn-> close();
		?>
		<br>
		<br>
		
		
		
		<div class="id">
		<?php
		if (isset($_SESSION["customerID"])) {
			echo "<h4> Your Customer ID- " . $_SESSION["customerID"] . "</h4>";
		}
		?>
		</div>
	</table>
	</div>
	
	
	

		



</div>
	



















</center>
</body>
</html>