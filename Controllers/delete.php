<?php  

if (isset($_GET['email'])) { 
	$email = $_GET['email'];

	$sql = "DELETE FROM `tbluser` WHERE `email` = '$email' ";
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "dbutibu";
  
    $conn = new mysqli($servername, $username, $password, $database);
	$result = mysqli_query($conn, $sql);
    if ($result == TRUE) {
    	echo "Record deleted successfully ";
    }else {
    	echo "Error: ". $sql . "<br>". mysqli_error();
    }
   }
   
?>
