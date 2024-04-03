<?php  
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbutibu";
  
$conn = new mysqli($servername, $username, $password, $database);

echo '<head><link rel="stylesheet" href="../Assets/medicine.css"></head>';
$results_per_page = 3;

$sql='SELECT * FROM tbluser';
$result = mysqli_query($conn, $sql);
$number_of_results = mysqli_num_rows($result);

// determine number of total pages available
$number_of_pages = ceil($number_of_results/$results_per_page);

// determine which page number visitor is currently on
if (!isset($_GET['page'])) {
  $page = 1;
} else {
  $page = $_GET['page'];
}

// determine the sql LIMIT starting number for the results on the displaying page
$this_page_first_result = ($page-1)*$results_per_page;

$result = mysqli_query($conn, $sql);

// retrieve selected results from database and display them on page 
 $sql = "SELECT * FROM tbluser LIMIT ". $this_page_first_result. ",". $results_per_page;

 $result = mysqli_query($conn, $sql);
    echo "<br>";
    for ($page=1; $page<=$number_of_pages ; $page++) { 
        echo "<a href='pagination.php?page=" . $page ."'>" . $page . " </a> ";
        echo "&nbsp"; 
        }
    ?>
    <a href="../Controllers/logout.php" id="link">Log out
            <style>
                #link {
                    margin-top: -10px;
                    margin-right: 20px;
                    float: right;
                }
            </style>
          </a>
          <br><br>
          <a href="postMed.php" name="edit" >ADD MEDICINE</a><br><br><br>
          <a href="viewProduct.php" name="deletion">VIEW PRODUCTS</a><br><br><br>
          <a href="adminSignup.php">REGISTER ADMIN</a><br><br><br>
          <a href="allOrders.php">ALL ORDERS</a><br><br><br>
          <?php
 	echo "<table>";
            ?>
            <style> table{
                margin-top: -350px;
                margin-right: 120px;
            } </style>
            <?php       
            echo "<tr>";
                echo "<th>firstname</th>";
                echo "<th>lastname</th>";
                echo "<th>email</th>";
                echo "<th>Phone Number</th>";
                echo "<th>ID</th>";
                echo "<th>Password</th>";
                echo "<th> </th>";
            echo "</tr>";
              while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
                echo "<td>" . $row['firstname'] . "</td>";
                echo "<td>" . $row['lastname'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['phoneNumber'] . "</td>";
                echo "<td>" . $row['ID'] . "</td>";
                echo "<td>" . $row['password'] . "</td>";
                echo"<td>";
                ?>
          <a href="../Controllers/delete.php?email=<?php echo $row['email']; ?>" name="deletion" class="delete">DELETE</a>
         <?php 
              echo "</td>";
              echo "<td>";
              echo "</td>";
              echo "</tr>";
          }
           
           echo "</table>";
         mysqli_free_result($result);   


echo "<br><br>";

        
 