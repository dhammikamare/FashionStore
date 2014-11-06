<?php

$con = mysqli_connect("example.com", "peter", "abc123", "my_db");
// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// escape variables for security
$ProductID = mysqli_real_escape_string($con, $_GET['ProductID']);
$Name = mysqli_real_escape_string($con, $_GET['Name']);
$Brand = mysqli_real_escape_string($con, $_GET['Brand']);
$Variety = mysqli_real_escape_string($con, $_GET['Variety']);
$Category = mysqli_real_escape_string($con, $_GET['Category']);
$TypeOfWear = mysqli_real_escape_string($con, $_GET['TypeOfWear']);
$Material = mysqli_real_escape_string($con, $_GET['Material']);
//$Frontimg = mysqli_real_escape_string($con, $_GET['Frontimg']);
//$Frontimg = mysqli_real_escape_string($con, $_GET['Frontimg']);
$Description = mysqli_real_escape_string($con, $_GET['Description']);

$sql = "INSERT INTO PRODUCT_SPEC (ProductID,Name,Brand,Variety,Category,TypeOfWear,Material,Description)
VALUES ('$ProductID', '$Name', '$Brand','$Variety','$Category','$TypeOfWear','$Material','$Description')";

if (!mysqli_query($con, $sql)) {
    die('Error: ' . mysqli_error($con));
}
echo "1 record added";

mysqli_close($con);
?> 
