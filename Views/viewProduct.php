<?php  
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbutibu";

$conn = new mysqli($servername, $username, $password, $database);
echo '<head><link rel="stylesheet" href="../Assets/medicine.css"></head>';
$results_per_page = 6;

// find out the number of results stored in database
$sql='SELECT * FROM tblmedicine';
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
 $sql = "SELECT * FROM tblmedicine LIMIT ". $this_page_first_result. ",". $results_per_page;

 	$result = mysqli_query($conn, $sql);
    // display the links to the pages

    for ($page=1; $page<=$number_of_pages ; $page++) { 
        echo "<a href='viewProduct.php?page=" . $page ."'>" . $page . " </a> ";
        echo "&nbsp"; 
        }
    echo "<br>";
    echo "<br>";
 	echo "<table>";
    ?>
    <style>  
        table {
                margin-right: 150px;
                margin-top: 50px;
            }
    </style>
    
            <?php
            echo "<tr>";
                echo "<th>Medicine Name</th>";
                echo "<th>Image</th>";
                echo "<th>Price</th>";
                echo "<th>ID</th>";
                echo "<a href='pagination.php'>MAIN</a>";
                echo "<th> </th>";
            echo "</tr>";
              while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
                echo "<td>" . $row['medicineName'] . "</td>";
                echo "<td><img src='../Assets/IMAGES/" . $row['medicineImage'] . "' alt='Image' width='250px' height='130px'></td>";
                echo "<td>" . $row['medicinePrice'] . "</td>";
                echo "<td>" . $row['id'] . "</td>";
                echo"<td>";
                ?>
          <a href="editFood.php?id=<?php echo $row['id']; ?>"name="edit" class="edit">EDIT</a>
          <a href="delete2.php?id=<?php echo $row['id']; ?>"name="deletion" class="delete">DELETE</a>
         <?php 
               echo "</td>";
            echo "</tr>";
          }
  echo "</table>";
  
         mysqli_free_result($result);   
          ?>
 