<?php
include('lock.php');
if($_SERVER["REQUEST_METHOD"]=="GET"){
$dealer_id=$GET['dealerid'];
$order_no=$GET['orderno'];
$sql="DELETE from orders where dealer_id='$dealer_id' and order_no='$order_no' ";
mysql_query($sql);
mysql_close();
header('Location: maintainence.php');
}
