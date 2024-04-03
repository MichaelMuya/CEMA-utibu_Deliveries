
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../Assets/styles.css">
  </head>
<body>
  <div class="container">
    <div class="content">
      <div class="image">
        <img id="regImg" src="../Assets/IMAGES/homeDoc.jpg" alt="">
      </div>
      <form action="../Controllers/registration.php" method="POST" autocomplete="off">
        <h1>UTIBU DELIVERIES</h1>
        <h2>Sign up</h2>
        <?php
            if (isset($_SESSION['signup_message'])) {
                echo "<p class='message'>" . $_SESSION['signup_message'] . "</p>";
            }
            ?>
        <input type="text" placeholder="First Name"name="firstname" required>
        <input type="text" placeholder="Last Name"name="lastname" required>
        <input type="email" placeholder="Email address"name="email" required>
        <input type="tel" placeholder="Mobile Number (+254)"name="phoneno" required>
        <input type="number" placeholder="ID number"name="ID" required>
        <input type="password" placeholder="Password"name="password" required>
        <button type="submit" name="submitBtn">REGISTER</button>
      </form>
    </div>
  </div>
  
  
</body>
</html>
