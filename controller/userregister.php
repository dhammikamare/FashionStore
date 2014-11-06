<?php

$Title = $_GET['Title'];
$FirstName = $_GET['FirstName'];
$LastName = $_GET['LastName'];
$Address = $_GET['Address'];
$Email = $_GET['Email'];
$Password = $_GET['Password'];
$Telephone = $_GET['Telephone'];
$Gender = $_GET['Gender'];
$TypeOfWear = $_GET['TypeOfWear'];
$UserTypeID = 2;

include("dbconnect.php");

$sql = "INSERT INTO USER (Title,FirstName,LastName,Address,Email,Password,Telephone,Gender,TypeOfWear,UserTypeID)"
        . "VALUES ('" . $Title . "', '" . $FirstName . "', '" . $LastName . "', '" . $Address . "', '" . $Email . "', "
        . "'" . $Password . "', '" . $Telephone . "', '" . $Gender . "','" . $TypeOfWear . "'," . $UserTypeID . ")";

if (isset($_GET['UserID'])) {
    $sql = "UPDATE USER SET Title='" . $Title . "', FirstName='" . $FirstName . "', LastName='" . $LastName . "', "
            . "Address='" . $Address . "', Email='" . $Email . "', Password='" . $Password . "', "
            . "Telephone='" . $Telephone . "', Gender='" . $Gender . "', TypeOfWear='" . $TypeOfWear . "' "
            . "WHERE UserID='" . $_GET['UserID'] . "'";
}
mysql_query($sql);

header('Location: ../home.php?msg=Successfully Saved.');

mysql_close($con);
?> 
