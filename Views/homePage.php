<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Utibu Deliveries</title>
  <link rel="stylesheet" href="../Assets/homeStyles.css">
</head>
<body>
<div class="container">
  <div class="box">
    <ul>
      <li id="utibuDel">UTIBU DELIVERIES</li>
      <li><a href="orders.php">Buy Medicine</a></li>
      <li><a href="../Controllers/logout.php">Logout</a></li>            
      <li><a href="aboutUs.php">About us</a></li>
      <li><a id="profileName" href="profilePage.php">
              <?php
              session_start();
              if (isset($_SESSION['email']) || isset($_SESSION['password'])) {
                  echo $_SESSION['firstname']. ' '. $_SESSION['lastname'];
                }else {
                  header("location: loginPage.php");
                }
              ?>
            </a>
      </li>
    </ul>
  </div>
  <div class="hero">
    <h1>Get Utibu Services<br /><span>Instantly</span></h1>
    <a id="orderBtn" href="orders.php" >ORDER NOW</a>
    <img id="homeImg" src="../Assets/IMAGES/homePage.jpg" >
  </div>
  <footer>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</div>
</body>
</html>
