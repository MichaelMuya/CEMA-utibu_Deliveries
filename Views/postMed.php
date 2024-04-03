<!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>ADD MEDICINE</title>
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
		<form class="formTwo" action="../Controllers/connectImage.php" method="POST" enctype="multipart/form-data">
        <h1 class="h1Post">UTIBU DELIVERIES</h1>
		<input class="inputPost" type="text" name="medicineName" required="true" placeholder="Medicine Name"><br>

		<label class="labelImage">Image</label><br><br>
		<input class="ig" type="file" name="medicineImage" required="true"><br>

        <input class="inputPost" type="number" name="medicinePrice" placeholder="Medicine price in Ksh">

		<input type="submit" id="orderBtn" value="Submit" name="submitImage">	
        </form>
      </div>
    </div>
	<style>
		.container{
			max-width: 800px;
		}
		.ig{
			border: none;
		}
	</style>
  </body>
  </html>

    