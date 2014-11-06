<?php
//session_start();
if (!isset($_SESSION['UserID'])) {
    header('Location: home.php');
}
date_default_timezone_set('Asia/Colombo');
include("controller\dbconnect.php");
?>

<link rel="stylesheet" type="text/css" href="css/cart.css"/>
<div>
    <table id="orderDetails">
        <tr>
            <td>Order:</td>
            <td><?php echo $_GET['OrderID'] ?></td>
        </tr>
        <tr>
            <td>Order date:</td>
            <td><?php echo date("Y-m-d H:i:s"); ?></td>
        </tr>
        <tr>
            <td>User:</td>
            <td><?php echo $_SESSION['User'] ?></td>
        </tr>
    </table>
    <table id="heading"><th>My shopping cart</th></table>

    <table id="cart">
        <th>Description</th><th>Unit price</th><th>Quantity</th><th>Total</th><th></th>
        <?php
        $sql = "SELECT * FROM ORDER_DETAILS WHERE OrderID=" . $_GET['OrderID'] . "";
        $result = mysql_query($sql);
        $SubTotal = 0.0;
        $items = 0;
        while ($row = mysql_fetch_array($result)) {
            $Total = $row['Quantity'] * $row['UnitPrice'];
            ?>
            <tr>
                <td align="left">
                    <?php echo $row['ItemID'] ?>
                    <!--img src="images/product/1.jpg" id="dress" align="left">
                    Rose print tea dress<br><br>
                    Size:Small<br>
                    Colour:Black</td-->	
                <td>$ <?php echo $row['UnitPrice'] ?></td>
                <td align="center">
                    <form method="get" action="controller/updatecart.php">
                        <input type="hidden" name="OrderID" value="<?php echo $row['OrderID'] ?>"/>
                        <input type="hidden" name="ItemID" value="<?php echo $row['ItemID'] ?>"/>
                        <input id="updatetxt" type="text" name="Quantity" value="<?php echo $row['Quantity'] ?>"/>
                        <input id="updatebtn" type="submit" name="update" value="Update">
                    </form>
                </td>
                <td align="center">$ <?php echo $Total ?></td>

                <td align="center">
                    <a href="controller/deletecart.php?OrderID=<?php echo $_GET['OrderID'] ?>&ItemID=<?php echo $row['ItemID'] ?>">
                        <button id="remove" type="button">X</button></a></td>
            </tr>
            <?php
            $SubTotal = $SubTotal + $Total;
            $items = $items + $row['Quantity'];
        }
        ?>
    </table>
    <table id="summary">
        <tr>
            <td>
                <table id="item">
                    <tr>
                        <td>Number of items:</td>
                        <td><?php echo $items ?></td>
                    </tr>
                </table>
            </td>
            <td align="right">
                <table id="total">
                    <tr>
                        <td>Total amount:</td>
                        <td>$ <?php echo $SubTotal ?></td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <table id="buttonTwo">
        <tr>
            <td><a href="home.php"><button id="continue" type="button">< Continue Shopping</button></a></td>
            <td><a href="controller/checkout.php?OrderID=<?php echo $_GET['OrderID'] ?>">
                    <button id="order" type="button">Place order >></button></a></td>
        </tr>
    </table>
</div>
<?php
mysql_close($con);
?>
