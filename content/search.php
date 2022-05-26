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
	<link rel="stylesheet" type="text/css" href="../assets/Stylesheets/search-style.css">
	
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
		<h2>Search for a Booking/Destination</h2></br> 
		
						<?php
							

							$search = $_POST['search'];
							include 'connh.i.php';
							
							
							
							$sql = "SELECT * FROM activities WHERE activity_name LIKE '%$search%' OR price LIKE '%$search%' OR location LIKE '%$search%'";
							
							$result = $conn->query($sql);

							if (!empty($result) && $result->num_rows > 0) {
							while($row = $result->fetch_assoc() ){
								echo $row["activity_name"]."  ".$row["price"]."  ".$row["location"]."<br>";
							}
							} else {
								echo "0 records";
							}

							$conn->close();
							
							
							
							
							
							
							
							
							
							
							

							//$search_query = $conn->prepare("SELECT activity_name FROM activities WHERE activity_name LIKE '%$search%'");
							//$search_query->mysqli_query($conn, $search);
							//$search_query->execute();
							//$search_query->store_result();
							//$search_rows = $search_query->num_rows;
							//$search_query->bind_result($activity_name);

							//if($search_rows > 0){
							//while($search_query->fetch()){
							//echo "Your search returned $search_rows results";
							//echo "$location <br>";
							//}
							//} else { echo "Sorry, the search word does not match with our records"; }   
						?>
	</div>
	
	
	
	
</div>
<center>
</body>
</html>