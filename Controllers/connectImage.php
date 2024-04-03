<?php 
require_once('connect.php');
if (isset($_POST["submitImage"])) {
	
	echo "<br>";
	
	$filePath = "../Assets/IMAGES";

	$originalFileName = $_FILES['medicineImage']['name'];
	
	$fileTempLocation = $_FILES['medicineImage']['tmp_name'];
	

	if (move_uploaded_file($fileTempLocation, $filePath.$originalFileName)) {
		$sql = "INSERT INTO tblmedicine(medicineName, medicineImage, medicinePrice) VALUES ('".$_POST['medicineName']."', '$originalFileName','".$_POST[ "medicinePrice"]."')";

		if(setData($sql)){
			header("location: order.php");
		}
	}
}

