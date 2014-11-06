<?php

session_start();
include("dbconnect.php");
$sql = "SELECT * FROM USER WHERE Email = '" . $_GET['Email'] . "'";
$result = mysql_query($sql);
$check = FALSE;
while ($row = mysql_fetch_array($result)) {
    $check = TRUE;
    if ($row['Password'] == $_GET['Password']) {
        $_SESSION['UserID'] = $row['UserID'];
        $_SESSION['User'] = $row['Title'] . ' ' . $row['FirstName'] . ' ' . $row['LastName'];
        $_SESSION['UserTypeID'] = $row['UserTypeID'];
        header('Location: ../home.php?msg=Login Successful!');
    } else {
        header('Location: ../home.php?msg=Please check your username and password.');
    }
}
if (!$check) {
    header('Location: ../home.php?msg=Please check your username and password.');
}
mysql_close($con);
?>
