<?php

session_start();

include("dbconnect.php");
$OrderID = 10001;
$UserID = 1;
if (isset($_SESSION['UserID'])) {
    $UserID = $_SESSION['UserID'];
} else {
    header('Location: ../home.php?msg=Please register in order to buy items.');
}
if (isset($_SESSION['OrderID'])) {
    $OrderID = $_SESSION['OrderID'];
} else {
    $sql = "select MAX(OrderID) AS OrderID from ORDERS WHERE Status='OnCart' AND UserID =" . $UserID . "";
    $result = mysql_query($sql);
    $i = 0;
    while ($row = mysql_fetch_array($result)) {
        $OrderID = $row['OrderID'];
        $i++;
    }
    if ($i == 0) {
        $sql = "INSERT INTO ORDERS(UserID, DateAndTime, Subtotal, Status) VALUES(" . $UserID . ", now(), 0, 'OnCart')";
        mysql_query($sql);

        $sql = "SELECT MAX(OrderID) AS OrderID FROM ORDERS";
        $result = mysql_query($sql);

        while ($row = mysql_fetch_array($result)) {
            $OrderID = $row['OrderID'];
        }
    }
    echo $OrderID;
    $_SESSION['OrderID'] = $OrderID;
}

if (isset($_GET['ProductID'], $_GET['ColourID'], $_GET['Size'], $_GET['Quantity'])) {
    $sql = "SELECT * FROM ITEM WHERE ProductID=" . $_GET['ProductID'] . " AND ColourID =" . $_GET['ColourID'] . " AND Size = '" . $_GET['Size'] . "'";
    echo $sql;
    $result = mysql_query($sql);
    $it = 0;
    while ($row = mysql_fetch_array($result)) {
        $ItemID = $row['ItemID'];
        $Price = $row['Price'];
        $QtyInStock = $row['QtyInStock'];
        $it++;
    }
    if($it==0){
        header('Location: ../home.php?msg=Item you selected is not in stock.');
    }
    if ($_GET['Quantity'] > $QtyInStock) {
        // don't have enough Qty in stock 
        $Quantity = $QtyInStock;
    } else {
        $Quantity = $_GET['Quantity'];
    }

    $sql = "INSERT INTO ORDER_DETAILS VALUES(" . $OrderID . ", " . $ItemID . ", " . $Quantity . ", " . $Price . ")";
    echo $sql;
    mysql_query($sql);

    header('Location: ../mycart.php?OrderID=' . $OrderID . '');
} else {
    header('Location: ../home.php');
}
mysql_close($con);
?>