<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Order Medicine</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
	<a href="allOrders.php">Order History<input hidden value="" name="orderHistory"></a>
	<form action="" method="POST" enctype="multipart/form-data">
		<div class="flex">
		<table>
			<thead>
				<tr>
					<th>Medicine Image</th>
					<th>Medicine Name</th>
					<th>Price</th>
					<th> </th>
				</tr>
			</thead>
<?php
echo '<head><link rel="stylesheet" href="../Assets/medicine.css"></head>';
$sql = "SELECT * FROM tblmedicine";
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbutibu";
  
$conn = new mysqli($servername, $username, $password, $database);
$result = mysqli_query($conn, $sql);


while ($row = mysqli_fetch_array($result)) {
	?>
	<tr>
		<form method="POST" action="viewOrders.php">
		<td> 
			<img src="<?php echo "../Assets/IMAGES".$row['medicineImage']; ?>" alt="Image" width="240px" height="160px">
		</td> 
		<td> <?php echo $row['medicineName'] ?> </td>
		<td> <?php echo $row['medicinePrice'] ?> </td>
		<input type="number" name="food-id" hidden value="<?php echo $row['id'] ?>">
		<input type="number" name="price" hidden value="<?php echo $row['medicinePrice'] ?>">
		<td><button style="cursor:pointer;" type="submit" name="addFood" value="<?php echo $row['medicineName'] ?> "><i class="fas fa-cart-plus"></i></button></td>
		</form>
	</tr>

	<?php 
}

 ?>
		</table>
		</div>
	</form>
</body>
</html>