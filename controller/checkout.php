<?php

session_start();

include("dbconnect.php");
if (isset($_SESSION['OrderID'])) {
    $OrderID = $_SESSION['OrderID'];
}

$sql = "SELECT * FROM ORDER_DETAILS WHERE OrderID=" . $_GET['OrderID'] . "";
echo $sql;
$result = mysql_query($sql);
$SubTotal = 0.0;
while ($row = mysql_fetch_array($result)) {
    // check QtyInStock with Qty
    // update QtyInStock
    $sqlin = "UPDATE ITEM SET QtyInStock = QtyInStock - " . $row['Quantity'] . " WHERE ItemID = " . $row['ItemID'] . "";
    echo $sqlin;
    mysql_query($sqlin);
    $Total = $row['Quantity'] * $row['UnitPrice'];
    $SubTotal = $SubTotal + $Total;
}
// update Subtotal
$sqladd = "UPDATE ORDERS "
        . "SET SubTotal = " . $SubTotal . ", "
        . "BillingAdd = (SELECT Address FROM USER WHERE UserID=" . $_SESSION['UserID'] . "), "
        . "Status = 'Checkout' "
        . "WHERE OrderID = " . $OrderID . "";
echo $sqladd;
mysql_query($sqladd);
mysql_close($con);
//header('Location: ../shipping.php');
header('Location: ../home.php?msg=Your Order has placed. ');
?>