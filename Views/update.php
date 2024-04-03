<?php

if (isset($_POST['update'])) {
	$firstname =$_POST['firstname'] ;
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $id = $_POST['ID'];
    $password =$_POST['password'] ;
    

    $sql = "UPDATE `tbluser` SET `firstname`= '$firstname', `lastname` = '$lastname', `email` = '$email', `phoneNumber` = '$phoneNumber', `ID` = '$id', `password` = '$password', WHERE `ID` = '$id' ";
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
}


 if(isset($_GET['email'])) {
 	$email = $_GET['email'];

 	$sql = "UPDATE `tbluser` SET `firstname`= '$firstname', `lastname` = '$lastname', `email` = '$email', `phoneNumber` = '$phoneNumber', `ID` = '$id', `password` = '$password', WHERE `ID` = '$id' ";
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "dbutibu";
  
    $conn = new mysqli($servername, $username, $password, $database);
    $result = mysqli_query($conn, $sql);

 	if (mysqli_num_rows($result) >0) {
    	 while($row = mysqli_fetch_assoc($result)) {
            $firstname =$_POST['firstname'] ;
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $phoneNumber = $_POST['phoneNumber'];
            $id = $_POST['ID'];
            $password =$_POST['password'] ;
            
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
		 ">User update form</h2>


		<div class="box">
	    <form class="form" action="" method="POST" autocomplete="off">
			<input type="text" name="firstname" placeholder="id" value="<?php echo $firstname; ?>" required>
			<input type="text" class="fullname" placeholder="Fullname" name="lastname"  value="<?php echo $lastname; ?>" required>
			<input type="email" class="email" placeholder="name@gmail.com" name="email" value="<?php echo $email; ?>" required>
			<input type="text" class="username" placeholder="Phone Number" name="phoneNumber" value="<?php echo $phoneNumber; ?>" required>
			<input type="password" class="password" placeholder="Password" name="password" value="<?php echo $password; ?>" required>
			<input type="number" class="password" placeholder="ID" name="ID" value="<?php echo $id; ?>" required>
			<input type="submit" class="button" value="Update" name= "update">
			</div>
	</form>
	</div>

<?php  


    }else {
    	header("location: pagination.php");
    }

 }

 
  ?>