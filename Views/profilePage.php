<?php
echo '<head><link rel="stylesheet" href="../Controllers/medicine.css"></head>';

session_start();

if (isset($_SESSION['email']) || isset($_SESSION['password'])) {
    echo "to edit your details ";
	echo "<table>";
            echo "<tr>";
                echo "<th>First Name</th>";
                echo "<th>Last Name</th>";
                echo "<th>Email Address</th>";                
                echo "<th>Mobile Number</th>";                
                echo "<th>ID Number</th>";                
                echo "<th>Password</th>";
                echo "<th></th>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>" . $_SESSION['firstname'] . "</td>";
                echo "<td>" . $_SESSION['lastname']. "</td>"  ;
                echo "<td>" . $_SESSION['email']. "</td>";
                echo "<td>" . $_SESSION['phoneNumber'] . "</td>";
                echo "<td>" . $_SESSION['ID'] . "</td>";
                echo "<td>" . $_SESSION['password'] . "</td>";
                echo "<td>"
                ?>
          <a href="update.php?id=<?php echo $row['id']; ?>" name="username" >EDIT</a>
          <a href="delete.php?id=<?php echo $row['id']; ?>" name="deletion" >DELETE</a>
         <?php 
               echo "</td>";
            echo "</tr>";
        }
        else {
	echo "Please login first";
    echo "<a href='loginPage.php'>Login page</a>";
}
     echo "</table>";

