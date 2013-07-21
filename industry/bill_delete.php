<?php
include('lock.php');
if($_SERVER["REQUEST_METHOD"]=="GET"){
$bill_no=$_GET['billno'];
$sql="DELETE from bill where bill_no='$bill_no' ";
mysql_query($sql);
mysql_close();
header('Location: maintainence.php');
}
