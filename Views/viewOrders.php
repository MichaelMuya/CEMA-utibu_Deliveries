<?php  
session_start();
echo '<head><link rel="stylesheet" href="../Assets/medicine.css"></head>';
$sql = "SELECT * FROM tblmedicine";
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbutibu";
  
$conn = new mysqli($servername, $username, $password, $database);
$result = mysqli_query($conn, $sql);

if (!isset($_SESSION)) {
    session_start();
}
	if (isset($_POST['addFood'])) {
   $order = $_POST['addFood'];
   $price = $_POST['price'];
    $food_id = $_POST['food-id'];

   
    if (!in_array($order, $_SESSION['orders'])) {
        array_push($_SESSION['orders'], $order);
    }
  // header("location: viewPic.php");

    if (!in_array($price, $_SESSION['price'])) {
        array_push($_SESSION['price'], $price);
    }

    if (!in_array($food_id, $_SESSION['orderIDs'])) {
        array_push($_SESSION['orderIDs'], $food_id);
    }


}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>View Orders</title>

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
		
		<form action="../Controllers/orders.php" method="POST" enctype="multipart/form-data">
		<button id="style" type= "submit" name="order">Place order</button>
		<table>
			<style>  
        table {
                margin-right: 150px;
                margin-top: 50px;
            }
    </style>
			<thead>
				<tr>
					<th>Food Name</th>
					<th>quantity</th>
					<th></th>
				</tr>
			</thead>


<?php 
	 $j = 1;
    
    foreach ($_SESSION['orders'] as $key => $value) {
                                ?>
     <tr>
        <td><?php echo $value ?></td>
        <td><input type="number" id="order-value" value="1" min="1" name="order[]" /></td>
        <td><button id='' type="submit" name="delete-order" value="<?php echo $key ?>" class="w3-button w3-red">&times; 
        	
        </button></td>
    </tr>
    <?php
                       
    }       
    
 ?>

		</table>
	</form>
</body>
</html>

