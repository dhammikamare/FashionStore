<?php

session_start();
include("dbconnect.php");

if (isset($_SESSION['UserID'])) {
    $UserID = $_SESSION['UserID'];
    $sql = "UPDATE USER SET LastAccess = now() WHERE UserID = " . $UserID . "";
    mysql_query($sql);
    session_destroy();
    mysql_close($con);
    header('Location: ../home.php?msg=Successfully Logout.');
}
?>