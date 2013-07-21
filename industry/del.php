<?php
include('lock.php');
if($_SERVER["REQUEST_METHOD"]=="GET"){
$ssn=$_GET['ssn'];
$sql1="select * from employee where ssn='$ssn' ";
        $sql2="select * from workers where ssn='$ssn' ";
        $res1=mysql_query($sql1);
        $res2=mysql_query($sql2);
        $cn1=mysql_num_rows($res1);
        $cn2=mysql_num_rows($res2);
if($cn1==1)
$sql="DELETE from employee where ssn='$ssn' ";
else if($cn2==1)
$sql="DELETE from workers where ssn='$ssn' ";
mysql_query($sql);
mysql_close();
header('Location:'.$_SESSION['prev']."message=".mysql_error());
}
