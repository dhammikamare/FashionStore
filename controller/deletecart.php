<?php

session_start();
if (!isset($_SESSION['UserID'])) {
    header('Location: ../home.php');
}
if (isset($_GET['OrderID'], $_GET['ItemID'])) {
    include("dbconnect.php");
    $sql = "DELETE FROM ORDER_DETAILS "
            . "WHERE OrderID = " . $_GET['OrderID'] . " AND ItemID = " . $_GET['ItemID'] . "";
    mysql_query($sql);
    mysql_close($con);
}
header('Location: ../mycart.php?OrderID=' . $_GET['OrderID'] . '');
?>