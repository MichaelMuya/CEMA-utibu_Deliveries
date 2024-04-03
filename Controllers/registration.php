<?php
session_start();
if(isset($_POST['submitBtn2'])){
    $firstname =$_POST['firstname'] ;
    $lastname =$_POST['lastname'] ;
    $email = $_POST['email'] ;
    $number = $_POST['phoneno'];
    $ID = $_POST['ID'];
    $pass = $_POST['pass'] ;

    $sql_insert = "INSERT INTO tbluser(firstname,lastname,email,phoneNumber,ID,password)
    VALUES ('$firstname','$lastname','$email','$number','$ID','$pass')"; 

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "dbutibu";
  
    $conn = new mysqli($servername, $username, $password, $database);
    $result = mysqli_query($conn, $sql_insert);
    if ($result == TRUE) {
      $_SESSION['signup_message'] = "Sign up successful";    
      header("location: ../Views/loginPage.php");
    }else {
        echo "Error: ". $sql_insert . "<br>". mysqli_error($conn);
    }
    
}
if(isset($_POST['submitBtn'])){
    $firstname =$_POST['firstname'] ;
    $lastname =$_POST['lastname'] ;
    $email = $_POST['email'] ;
    $pass = $_POST['password'] ;

 $sql_insert2 = "INSERT INTO tbladmin(firstname,lastname, email, password)
    VALUES ('$firstname', '$lastname', '$email', '$pass')"; 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "dbutibu";
  
    $conn = new mysqli($servername, $username, $password, $database);
    if (mysqli_query($conn, $sql_insert2)) {
      $_SESSION['signup_message'] = "Sign up successful";    
      header("location: ../Views/adminLoginpage.php");
    } else {
      echo "Error: " . $sql_insert2 . "<br>" . mysqli_error($conn);
    }
}

?>