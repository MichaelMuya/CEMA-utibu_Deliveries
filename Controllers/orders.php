<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "dbutibu";
$conn = new mysqli($servername, $username, $password, $database);

if (!isset($_SESSION)) {
    session_start();
}
if (isset($_POST['delete-order'])) {

    $x = intval($_POST['delete-order']);

    array_splice($_SESSION['orders'], $x, 1);
    array_splice($_SESSION['orderIDs'], $x, 1);
    array_splice($_SESSION['price'], $x, 1);

  header("location: ../Views/viewOrders.php");
}
 
if (isset($_POST['order'])) {
    $count = count($_SESSION['orders']);
    $date = date("Y-m-d");
    $transaction_id = "";
    $user_id = $_SESSION['ID'];

    $sql = "INSERT INTO tbltransaction(orderNums, transactionDate, ID) VALUES ($count, '$date', $user_id)";
    //$conn->query($sql);

    if ($conn->query($sql) == TRUE) {
        $last_record_sql = "SELECT transactionID FROM tbltransaction  
        ORDER BY transactionID DESC  
        LIMIT 1";

        $last_record = $conn->query($last_record_sql)->fetch_assoc();

        // print_r($last_record);
        $transaction_id = $last_record['transactionID'];
        $total_cost = 0;
      

        for ($i = 1; $i <= $count; $i++) {
         
            $id = $_SESSION['orderIDs'][$i - 1];
            $price = $_SESSION['price'][$i - 1];
            $orders = $_SESSION['orders'][$i - 1];
            $quantities = $_POST['order'];

            $orderKey = 'order' . $i;
            foreach ($quantities as $index => $quantity) {
                $orderKey = $index + 1; 
            }
            
            $cost = $quantity * $price;

            $total_cost += $cost;

            $order_sql = "INSERT INTO tblorder(medicineID, orderDate, cost, quantity, price, medicineName, ID, transcationID) VALUES ($id, '$date',$cost,$quantity,$price, '$orders',$user_id,$transaction_id)";

          
            if ( $conn->query($order_sql) == TRUE) {
                echo "ok";
            }
        }
       
        var_dump($_POST);

        $add_cost_sql = "UPDATE `tbltransaction` SET `totalCost` = $total_cost WHERE `transactionID` = $transaction_id";
        $conn->query($add_cost_sql);

        $_SESSION['orders'] = [];
        $_SESSION['orderIDs'] = [];
        $_SESSION['price'] = [];
    //header("location: ../Views/homePage.php");
    }

}
