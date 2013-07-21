<?php
include('lock.php');
if($_SERVER["REQUEST_METHOD"]=="GET"){
$id=$GET['id'];
$sql="DELETE from dealer where id='$id' ";
mysql_query($sql);
mysql_close();
header('Location: factory.php');
}
