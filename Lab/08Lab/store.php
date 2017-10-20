<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>My Store Web Application</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	</head>
	<body>
		<h1>My Store Web Application</h1>
		<?php

		// Variables
		$dbServerName = "localhost";
		$dbUsername = "root";
		$dbPassword = "magicismight";
		$dbName = "csci3308_lab8";
		$success = false;

		$conn = mysqli_connect($dbServerName, $dbUsername, $dbPassword, $dbName); // Connect to the database

		// Check for errors and echo them
		if (mysqli_connect_errno()) {
		    echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		else {
			$success = true;
			echo "<h4>Successfully connected to MySQL: </h4>";

			$query = "SELECT * FROM store;";
			$resultSet = mysqli_query($conn, $query);
			$numRows = mysqli_num_rows($resultSet);

			echo "The query returned $numRows rows.";
			echo "<table>";
			echo "<tr> <th>Id</th> <th>Name</th> <th>Quantity</th> <th>Price</th> </tr>";
			while ($row = mysqli_fetch_array($resultSet, MYSQLI_NUM)) {
				echo "<tr>";
				echo "<td>$row[0]</td> <td>$row[1]</td> <td>$row[2]</td> <td>$row[3]</td>";
				echo "<td><input type=\"submit\" class=\"button\" name=\"".$row[0]."\"value=\"Delete\"/></td>";
				echo "</tr>";
			}
			echo "</table>";

		}
		?>
		<h3>Insert a new row into the "store" table</h3>
		<!-- <?php //include('SQLInsertHandler.php'); ?> -->
		<form enctype="multipart/form-data" action="SQLInsertHandler.php">
			<p>
				Id:&nbsp; <input type="text" name="Id" size="10" maxlength="11" />
			</p>
			<p>
				Name:&nbsp; <input type="text" name="Name" size="10" maxlength="20" />
			</p>
			<p>
				Quantity:&nbsp; <input type="text" name="Quantity" size="10" maxlength="30"/>
			</p>
			<p>
				Price:&nbsp; <input type="text" name="Price" size="10" maxlength="10" />
			</p>
			<br>
			<input type="submit" name="add-item" value="Add item" /> &nbsp; <input type="reset" />
		</form>

		<script>
			$(document).ready(function(){
				$('.button').click(function(){
					var clickBtnName = $(this).attr('name');
					var ajaxurl = 'http://localhost:8000/SQLDeleteHandler.php';
					var data = {'id': clickBtnName};
					$.post(ajaxurl, data, function(response) {
						window.location.href="http://localhost:8000/store.php";
					});
				});
			});
		</script>

	</body>
</html>
