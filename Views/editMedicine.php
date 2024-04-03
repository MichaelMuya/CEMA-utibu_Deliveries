<?php
 require 'connect.php';

if (isset($_POST['edit'])) {
 	$id = $_POST['id'];
	$medicineName =$_POST['medicineName'] ;
    $medicineImage = $_FILES['medicineImage']['tmp_name'];
    $price = $_POST['medicinePrice'];
   
   	$filePath = "asset/";
  
   	$originalFileName = $_FILES['medicineImage']['name'];
    if (move_uploaded_file($medicineImage, $filePath.$originalFileName)) {
    $sql = "UPDATE `tblmedicine` SET `medicineName`= '$medicineName', `medicineImage` = '$originalFileName', `medicinePrice` = '$price' WHERE `id` = '$id'";
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "dbutibu";
  
    $conn = new mysqli($servername, $username, $password, $database);
	$result = mysqli_query($conn, $sql);

    if ($result == TRUE) {
    	echo "Record updated successfully ";
    }else {
    	echo "Error: ". $sql . "<br>". mysqli_error();
    }

	}else {
	echo "imekataa";
}
}
if(isset($_GET['id'])) {
 	$id = $_GET['id'];

 	$sql = "SELECT * FROM tblmedicine WHERE `id` = '$id' ";
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "dbutibu";
   
    $conn = new mysqli($servername, $username, $password, $database);
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) >0) {
    	 while($row = mysqli_fetch_assoc($result)) {
    	 	$id = $row['id'] ;
            $medicineName = $row['medicineName'] ; 
            $medicineImage = $row['medicineImage'] ;
            $price = $row['medicinePrice'] ;
    	 }

?>
	<link rel="stylesheet" href="../Assets/registStyle.css">
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;700&display=swap" rel="stylesheet">
	<div class="background">
	<h2 class="update" style="text-align: justify; text-align: justify-all;
		font-family: latha;
		text-transform: uppercase;
		font-weight: 100px;
		margin: 40px auto;
		 ">EDIT MEDICINE</h2>

		<div class="box">
	<form class="form" action="" method="POST" autocomplete="off" enctype="multipart/form-data">
			<input type="text" name="id" placeholder="id" value="<?php echo $id; ?>" required>
			<input type="text" class="fullname" placeholder="food name" name="medicineName"  value="<?php echo $medicineName; ?>" required>
			<input type="file" class="email" placeholder="food image" name="medicineImage" value="<?php echo $medicineImage; ?>" required>
			<input type="number" class="username" placeholder="food price" name="medicinePrice" value="<?php echo $price; ?>" required>
			<input type="submit" class="button" value="Update" name= "edit">
			</div>
	</form>
	</div>

<?php  

    }else {
    	header("location: pagination.php");
    }

 }
