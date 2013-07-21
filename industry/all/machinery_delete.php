<?php
include('lock.php');
if($_SERVER["REQUEST_METHOD"]=="GET"){
$bill_no=$GET['billno'];
$sql="DELETE from customer where bill_no='$bill_no' ";
mysql_query($sql);
mysql_close();
header('Location: maintainence.php');
}
