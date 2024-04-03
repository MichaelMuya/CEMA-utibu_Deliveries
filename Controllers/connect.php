<?php 

function connect(){
	$servername = "localhost";
    $username = "root";
    $password = "";
    $database = "dbutibu";
  
    $conn = new mysqli($servername, $username, $password, $database);
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	return $conn;
}

function getData($sql) {
	$db = connect();
	$result = mysqli_query($db, $sql);

	while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
		$rows[] = $row;
	}
	return $rows;
}
function setData($sql) {
	$db = connect();
	if(mysqli_query($db, $sql)) {
		echo "Item inserted";
	}else {
		echo "Item not inserted";
	}
}
?>

