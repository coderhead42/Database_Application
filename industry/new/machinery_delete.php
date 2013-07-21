<?php
include('lock.php');
if($_SERVER["REQUEST_METHOD"]=="GET"){
$machine_id=$_GET['machineid'];
$sql="DELETE from machinery where machine_id='$machine_id' ";
mysql_query($sql);
mysql_close();
header('Location: maintainence.php');
}
