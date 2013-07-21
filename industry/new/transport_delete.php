<?php
include('lock.php');
if($_SERVER["REQUEST_METHOD"]=="GET"){
$reg_no=$_GET['regno'];
$sql="DELETE from transport where reg_no='$reg_no' ";
mysql_query($sql);
mysql_close();
header('Location: transportation.php');
}
