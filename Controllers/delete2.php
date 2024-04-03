<?php  

if (isset($_GET['id'])) { //  if the 'id' is set in the URL, we know that we need to edit a record
	$id = $_GET['id'];

    $sql = "DELETE FROM `tblmedicine` WHERE `id` = '$id' ";
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
