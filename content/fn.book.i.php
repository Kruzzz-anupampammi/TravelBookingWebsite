<?php


//Ticket booking functions

function emptyInputPurchase($activityId, $customerID, $date_of_activity, $number_of_tickets) {
	//$result = false;
	
	//All of the below do not need to be empty
	if (empty($activityId) || empty($customerID) || empty($date_of_activity) || empty($number_of_tickets)) {
		//$result = true;
		echo "blank input";
	} 
	//return $result;
}

function createBooking ($conn, $activityId, $customerID, $date_of_activity, $number_of_tickets) {
	$sql = "INSERT INTO booked_activities (activityId, customerID, date_of_activity, number_of_tickets) VALUES (?, ?, ?, ?);";
	
	//This prepared statements are used to secure the webpage, by not allowing any sort of other data except which is asked for while purchasing
	$stmt = mysqli_stmt_init($conn); 	//Initialising some prepared statements from the sql statement above
	
	if (!mysqli_stmt_prepare($stmt, $sql)) {   //This line says to run the SQL code above inside the database and check for errors
		header("location: bookings.php?error=wrongvalues");
		exit();
	}
	
	
	
	mysqli_stmt_bind_param($stmt, "iisi", $activityId, $customerID, $date_of_activity, $number_of_tickets);  //This is used to bind the parameters
	mysqli_stmt_execute($stmt);
	
	//echo "$activityId, $customerID, $date_of_activity, $number_of_tickets";
	header("location: upcoming.php?error=none");
		exit();
}