  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>LOGIN</title>
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="../Assets/styles.css">
  </head>
  <body>
    <div class="container">
      <div class="content">
        <div class="image">
          <img id="logImg" src="../Assets/IMAGES/homeDoc.jpg" alt="">
        </div>
        <form action="../Controllers/login.php" autocomplete="off" method="POST">
          <h1>UTIBU DELIVERIES</h1>
          <h2>Login</h2>
          <input type="email" placeholder="Email" name="email" required>
          <input type="password" placeholder="Password" name="password" required>
          <button type="submit" name="submitBtn">LOG IN</button>
        </form>
      </div>
        <a href="Signup.php" target="_self">Don't Have An Account?</a>
        <a href="adminLoginpage.php" target="_self">Login as admin</a>
    </div>
  </body>
  </html>

    