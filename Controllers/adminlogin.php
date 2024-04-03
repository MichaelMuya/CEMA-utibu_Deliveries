<?php  
echo '<head><link rel="stylesheet" href="../Assets/medicine.css"></head>';
require 'connect.php';
if(isset($_POST['submitBtn'])){
    $email =$_POST['email'] ;
    $password = $_POST['password'] ;
    $sql = "SELECT * FROM tbladmin WHERE email='".$email."' AND password ='".$password."' LIMIT 1";
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "dbutibu";
  
    $conn = new mysqli($servername, $username, $password, $database);
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) >0) {
    			session_start();
                $user = mysqli_fetch_assoc($result);
                print_r($user);
             
               $_SESSION['password'] = $user['password'];
               $_SESSION['firstname'] = $user['firstname'];
               $_SESSION['lastname'] = $user['lastname'];
               $_SESSION['phoneNumber'] = $user['phoneNumber'];
               $_SESSION['email'] = $user['email'];   
               $_SESSION['ID'] = $user['ID'];   
               $_SESSION['orders'] = [ ];   
               $_SESSION['price'] = [ ];  
               $_SESSION['orderIDs'] = [ ];  
               $_SESSION['User-ID'] = $user['ID'];
               $_SESSION['User-Type'] = "Admin";
               $_SESSION['User-Type'] = "User";
               if ($result == TRUE) {
                echo "Welcome admin". $_SESSION['firstname'] . ' ' . $_SESSION['lastname'] ; 
              }
               header("location: ../Views/pagination.php");
    }else {
                $_SESSION['error'] = "Incorrect email or password information";
                header("location: ../Views/adminLoginpage.php");
    			
    }


} 



?>
