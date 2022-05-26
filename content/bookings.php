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
	<title>: : Make a booking : :</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../assets/Stylesheets/bookings-style.css">
	
</head>
<body>
<center>
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
<br><br>




<div class="responsive-table"><br>
	<h2> Book a Tour </h2> <br>
	
	
	<div style="overflow-x:auto;">
	<table class="database">
		<tr height="100%"> 
		<h3>
			<th width="5%"> Activity ID </th>
			<th width="12%"> Name </th>
			<th width="60%"> Description </th>
			<th width="5%"> Price </th>
			<th width="10%"> Location </th>
			<th width="8%"> Preference </th>
			<!--<th width="8%"> Book</th>-->
		</h3>
		</tr> <br>
		<?php
			
			
			$conn = mysqli_connect($serverName, $dBUserName, 
					$dBPassword, $dBName);
			if ($conn-> connect_error) {
				die("connection failed:" . $conn-> connect_error);
			}
			
			$sql = "SELECT activityID, activity_name, 
					description, price, location FROM activities";
			$result = $conn-> query($sql);
			
			if ($result-> num_rows > 0) {
				while ($row = $result-> fetch_assoc()){
					echo "<tr><td>" . $row["activityID"] . "
					</td><td>" . $row["activity_name"] . "
					</td><td>" . $row["description"] . "
					</td><td>" . $row["price"] . "
					</td><td>" . $row["location"] . "
					</td><td><a href='book.i.php?rel=".$row["activityID"]."'>Book
					</a></td></tr>";
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
		<br>
		<br>
	</table>
	</div>
</div>



</center>
</body>
</html>