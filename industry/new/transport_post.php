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
if($_REQUEST['model_no']>0 && $_REQUEST['reg_no']>0)$flag=1;
$len=strlen($_REQUEST['model_no']);
for($i=0;$i<$len;$i++){if(ord($_REQUEST['model_no'][$i])<48 || ord($_REQUEST['model_no'][$i])>57){$flag=0;break;}}
$len=strlen($_REQUEST['reg_no']);
for($i=0;$i<$len;$i++){if(ord($_REQUEST['reg_no'][$i])<48 || ord($_REQUEST['reg_no'][$i])>57){$flag=0;break;}}
if($flag==1){
$sql="INSERT INTO transport 
VALUES
('$_REQUEST[type]','$_REQUEST[model_no]','$_REQUEST[reg_no]','$_REQUEST[essn]')";
}
if ($flag==0||!mysql_query($sql,$con))
	  {
header('Location:transport.php?message=error');
		      }
else{
header('Location:transport.php?message=1+record+added');
}
mysql_close($con);
?> 
</body>
</html>

