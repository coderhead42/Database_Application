<?php
include('lock.php');
if($_SERVER["REQUEST_METHOD"]=="GET"){
$id=$GET['id'];
$sql="DELETE from customer where id='$id' ";
mysql_query($sql);
mysql_close();
header('Location: shop.php');
}
