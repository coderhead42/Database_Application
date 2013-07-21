<html>
<body>
<?php
/*$con = mysql_connect("localhost","root","admin");
if (!$con)
	  {
		    die('Could not connect: ' . mysql_error());
		      }

mysql_select_db("turmeric_industry", $con);
*/
include('lock.php');
$dno=$_GET['dno'];
$flag=0;
if($_REQUEST['hour_work']>8)$flag=1;
$len=strlen($_REQUEST['hours_work']);
if($len>1||ord($_REQUEST['hours_work'][0])<=48 || ord($_REQUEST['hours_work'])>56){$flag=1;}
/*$len=strlen($_REQUEST['wages_hour']);
for($i=0;$i<$len;$i++){if(ord($_REQUEST['wages_hour'][$i])<48 || ord($_REQUEST['wages_hour'][$i])>57){$flag=1;break;}}
*/
if($flag==0){
$sql="update wages set hours_work='$_REQUEST[hours_work]',wages_hour='$_REQUEST[wages_hour]' where dno='$dno' ";
}
if ($flag!=0 ||!mysql_query($sql))
	  {
header('Location:welcome_manager.php?message='.mysql_error());
		      }
else{
header('Location:welcome_manager.php?message=1+record+updated');
}
mysql_close();
?> 
</body>
</html>

