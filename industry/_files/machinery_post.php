<html>
<body>
<?php
$con = mysql_connect("localhost","root","1");
if (!$con)
	  {
		    die('Could not connect: ' . mysql_error());
		      }

mysql_select_db("turmeric_industry", $con);
$flag=0;
if($_REQUEST['model_no']>0&&$_REQUEST['machine_id']>0&&$_REQUEST['dno']>0)$flag=0;
$len=strlen($_REQUEST['model_no']);
for($i=0;$i<$len;$i++){if(ord($_REQUEST['model_no'][$i])<48 || ord($_REQUEST['model_no'][$i])>57){$flag=1;break;}}
$len=strlen($_REQUEST['machine_id']);
for($i=0;$i<$len;$i++){if(ord($_REQUEST['machine_id'][$i])<48 || ord($_REQUEST['machine_id'][$i])>57){$flag=1;break;}}
$len=strlen($_REQUEST['dno']);
for($i=0;$i<$len;$i++){if(ord($_REQUEST['dno'][$i])<48 || ord($_REQUEST['dno'][$i])>57){$flag=1;break;}}
if($flag==0){
$sql="INSERT INTO machinery 
VALUES
('$_REQUEST[machine_id]','$_REQUEST[date_purchase]','$_REQUEST[model_no]','$_REQUEST[dno]')";
}
if ($flag!=0 ||!mysql_query($sql,$con))
	  {
header('Location:machinery.php?message=error');
		      }
else{
header('Location:machinery.php?message=1+record+added');
}
mysql_close($con);
?> 
</body>
</html>

