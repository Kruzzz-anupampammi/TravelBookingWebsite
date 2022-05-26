<?php

$serverName = "kf7013.co.uk:12322";
$dBUserName = "w19046797";
$dBPassword = "PAMMI";
$dBName = "w19046797";

$conn = mysqli_connect($serverName, $dBUserName, $dBPassword, $dBName);

//$link = new mysqli('localhost', 'root', '', 'travel');

if(!$conn) {
	die("Sorry, Connection Failed: " . mysqli_connect_error());
}
	