<?php

// Variables
$dbServerName = "localhost";
$dbUsername = "root";
$dbPassword = "magicismight";
$dbName = "csci3308_lab8";

$conn = mysqli_connect($dbServerName, $dbUsername, $dbPassword, $dbName); // Connect to the database

// Check for errors and echo them
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

	$Id = $_REQUEST['id'];
	echo "$Id";

	$queryInsert = "DELETE FROM store WHERE id='$Id'";

	mysqli_query($conn, $queryInsert);

	echo "Successfully delete item '$Id' from the database";
	//include('store.php');
?>
