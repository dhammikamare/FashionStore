<link rel="stylesheet" type="text/css" href="css/items.css"/>
<?php
include("controller\dbconnect.php");

$sql = "SELECT * FROM PRODUCT_SPEC WHERE 1=1 ";
if (isset($_GET['TypeOfWear'])) {
    $sql = $sql . "AND TypeOfWear='" . $_GET['TypeOfWear'] . "' ";
}
if (isset($_GET['Category'])) {
    $sql = $sql . "AND Category='" . $_GET['Category'] . "' ";
}
if (isset($_GET['Material'])) {
    $sql = $sql . "AND Material='" . $_GET['Material'] . "' ";
}
if (isset($_GET['Variety'])) {
    if ($_GET['Variety'] != 'null') {
        $sql = $sql . "AND Variety='" . $_GET['Variety'] . "' ";
    }
}
/*
  if (isset($_GET['Price'])) {
  $sql = $sql . "AND Price='" . $_GET['Price'] . "' ";
  }
 */
$result = mysql_query($sql);
?>
<div >
    <?php include("./searchheader.php"); ?>
</div>
<div class="borderaround" >
    <table>
        <tr>
            <?php
            $item = 0;
            $rowcount = 1;
            while ($row = mysql_fetch_array($result)) {
                ?>
                <td class="box<?php echo $rowcount ?>" >
                    <img class="productimage" src="images/product/<?php echo $row['FrontImg'] ?>.jpg" alt="<?php echo $row['ProductID'] ?>" >
                    <p><?php echo $row['Name'] ?></p>
                    <p><?php echo $row['Brand'] ?></p>
                    <p><a href="itemview.php?ProductID=<?php echo $row['ProductID'] ?>">
                            <button class="button<?php echo $rowcount ?>" type="button">Buy Now</button></a> </p>
                </td>
                <?php
                $item++;
                $rowcount++;
                if ($item % 3 == 0) {
                    $rowcount = 1;
                    ?>
                </tr>
                <tr>
                    <?php
                }
            }
            ?>
        </tr>

        <?php
        if ($item == 0) {
            ?>
            <tr>
                <td>
                    <h2>No items found for search ...</h2>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>
<?php
mysql_close($con);
?>