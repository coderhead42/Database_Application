<html>
<body>
<?php
$con = mysql_connect("localhost","root","admin");
if (!$con)
	  {
		    die('Could not connect: ' . mysql_error());
		      }

mysql_select_db("turmeric_industry", $con);
$flag=0;
if($_REQUEST['hour_work']>8)$flag=1;
$len=strlen($_REQUEST['hours_work']);
if($len>1||ord($_REQUEST['hours_work'][0])<=48 || ord($_REQUEST['hours_work'])>56){$flag=1;}
$len=strlen($_REQUEST['wages_hour']);
for($i=0;$i<$len;$i++){if(ord($_REQUEST['wages_hour'][$i])<48 || ord($_REQUEST['wages_hour'][$i])>57){$flag=1;break;}}

if($flag==0){
$sql="INSERT INTO wages 
VALUES
('$_REQUEST[dno]','$_REQUEST[hours_work]','$_REQUEST[wages_hour]')";
}
if ($flag!=0 ||!mysql_query($sql,$con))
	  {
header('Location:wages.php?message=error');
		      }
else{
header('Location:wages.php?message=1+record+added');
}
mysql_close($con);
?> 
</body>
</html>

