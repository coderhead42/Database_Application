<?php
$mysql_hostname="localhost";
$mysql_user="root";
$mysql_password="admin";
$mysql_database="turmeric_industry";
$bd=mysql_connect($mysql_hostname,$mysql_user,$mysql_password) or die("Could not connect to database.");
mysql_select_db($mysql_database, $bd) or die("Could not select database");
?>

