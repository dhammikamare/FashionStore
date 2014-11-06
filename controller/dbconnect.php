<?php

$con = mysql_connect("localhost:3306", "root", "");
if (!$con) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db("project", $con);
?>
