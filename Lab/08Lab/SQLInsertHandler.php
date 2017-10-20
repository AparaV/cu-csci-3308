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

	$Id = $_REQUEST['Id'];
	$Name = $_REQUEST['Name'];
	$Quantity = $_REQUEST['Quantity'];
	$Price = $_REQUEST['Price'];

	$queryInsert = "INSERT INTO store (id, name, qty, price)
				VALUES ('$Id', '$Name', '$Quantity', '$Price')";

	mysqli_query($conn, $queryInsert);

	echo "Successfully inserted new item into the database";
	include('store.php');
?>
