<?php 

if (!isset($_SESSION)) {
    session_start();
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../Assets/medicine.css">
	<title>ORDER HIST0RY</title>
</head>
<body>
	<table>
		<style>  
        table {
                margin-right: 160px;
                margin-top: 60px;
            }
    </style>
		<tr>
			<th>Order Date</th>
			<th>Cost</th>
			<th>Quantity</th>
			<th>Price</th>
			<th>Medicine name</th>
			<th>User ID</th>
		</tr>
			<?php

			if ($_SESSION['User-Type'] == "Admin")
			{
				$sql = "SELECT * FROM tblorder";
			}else {

		$sql = "SELECT `orderDate`, `cost`, `quantity`, `price`, `medicineName`, `ID` FROM tblorder WHERE `ID` = ".$_SESSION['ID'];
		}
		$servername = "localhost";
  	 	$username = "root";
   	 	$password = "";
   		$database = "dbutibu";
  
   		$conn = new mysqli($servername, $username, $password, $database);
    	$result = mysqli_query($conn, $sql);

		while ($row = mysqli_fetch_array($result)) {
			echo "<tr>";
				echo "<td>" . $row['orderDate'] . "</td>";
                echo "<td>" . $row['cost'] . "</td>";
                echo "<td>" . $row['quantity'] . "</td>";
                echo "<td>" . $row['price'] . "</td>";
                echo "<td>" . $row['medicineName'] . "</td>";
                echo "<td>" . $row['ID'] . "</td>";
             echo "</tr>";
            }
 			 ?>
	</table>
</body>
</html>