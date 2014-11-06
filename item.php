<link rel="stylesheet" type="text/css" href="css/item.css"/>
<?php
include("controller\dbconnect.php");

$ProductID = $_GET['ProductID'];
$sql = "SELECT * FROM PRODUCT_SPEC WHERE ProductID=" . $ProductID . "";
$result = mysql_query($sql);
while ($row = mysql_fetch_array($result)) {
    $Name = $row['Name'];
    $FrontImg = $row['FrontImg'];
    $BackImg = $row['BackImg'];
    $Description = $row['Description'];
}
?>
<div class="borderaround" >
    <form action="controller/addtocart.php">
        <input id="ProductId" type="hidden" name="ProductID" value="<?php echo $ProductID ?>" >
        <table>
            <tr>
            <table>
                <tr>
                    <td class="h1" style="border: 5px solid #dc143c ; background-color: #dc143c" >
                        <font size="6"><b><?php echo $Name ?></b></font></td>
                </tr>
                <table>
                    </tr>
                    <tr>
                        <td>
                            <img border="0" src="images/product/<?php echo $FrontImg ?>.jpg" alt="<?php echo $ProductID ?>" width="200" height="300">
                            <p style="text-align: center">Front Image </p>

                        </td>
                        <td>
                            <img border="0" src="images/product/<?php echo $BackImg ?>.jpg" alt="<?php echo $ProductID ?>" width="200" height="300">
                            <p style="text-align: center">Back Image </p>
                        </td>
                        <td>
                            <table>
                                <tr>
                                    <td class="smallbox" style="border: 5px solid #e02b50 ; background-color: #e02b50" >
                                        <b>Colour:</b></td>
                                    <td>
                                        <select name="ColourID">
                                            <?php
                                            $sql = "SELECT ColourID, ColourName FROM COLOUR NATURAL JOIN ITEM WHERE ProduCTID IN (SELECT ProductID FROM PRODUCT_SPEC WHERE ProductID = " . $ProductID . ")";
                                            $result = mysql_query($sql);
                                            while ($row = mysql_fetch_array($result)) {
                                                ?>
                                                <option value="<?php echo $row['ColourID'] ?>"><?php echo $row['ColourName'] ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="smallbox" style="border: 5px solid #e34363 ; background-color: #e34363">
                                        <b>Size:</b></td>
                                    <td>
                                        <select name="Size">
                                            <?php
                                            $sql = "SELECT DISTINCT Size FROM ITEM NATURAL JOIN PRODUCT_SPEC WHERE ProductID = " . $ProductID . "";
                                            $result = mysql_query($sql);
                                            while ($row = mysql_fetch_array($result)) {
                                                ?>
                                                <option value="<?php echo $row['Size'] ?>"><?php echo $row['Size'] ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="smallbox" style="border: 5px solid #e65b77 ; background-color: #e65b77">
                                        <b>Quantity</b></td>
                                    <td><p style="text-align: center">
                                            <input type="number" name="Quantity" value="1"></p></td>
                                </tr>

                                <tr>
                                <table>
                                    <tr>
                                        <td><center>
                                        <p style="text-align: center"><font color="#ff6347" size ="5">
                                            <b>Description</b></font></p>
                                        <p style="text-align: center"><?php echo $Description ?></p></center>
                                    <table class="sizetable">
                                        <tr>
                                            <th>Size</th>
                                            <th>Colour</th>
                                            <th>Price</th>
                                            <th>QtyInStock</th>
                                        </tr>
                                        <?php
                                        $sql = "SELECT * FROM ITEM NATURAL JOIN COLOUR WHERE ProductID = " . $ProductID . "";
                                        $result = mysql_query($sql);
                                        while ($row = mysql_fetch_array($result)) {
                                            ?>
                                            <tr>
                                                <td><?php echo $row['Size'] ?></td>
                                                <td><?php echo $row['ColourName'] ?></td>
                                                <td><?php echo $row['Price'] ?></td>
                                                <td><?php echo $row['QtyInStock'] ?></td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                    </table>
                                    </td>
                                    </tr>
                                    <tr>
                                        <td >
                                            <input class="button" style="background-color: #ea728a" type="submit" value="Buy now">
                                        </td>
                                    </tr>
                                </table>
                    </tr>
                </table>
                </td>
                </tr>
            </table>
    </form>
</div>
<?php
mysql_close($con);
?>