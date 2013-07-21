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
$flag=0;
$regno=$_GET['regno'];
if($_REQUEST['model_no']<0)$flag=1;
$len=strlen($_REQUEST['model_no']);
for($i=0;$i<$len;$i++){if(ord($_REQUEST['model_no'][$i])<48 || ord($_REQUEST['model_no'][$i])>57){$flag=1;break;}}
//$len=strlen($_REQUEST['reg_no']);
//for($i=0;$i<$len;$i++){if(ord($_REQUEST['reg_no'][$i])<48 || ord($_REQUEST['reg_no'][$i])>57){$flag=1;break;}}
if($flag==0){
$sql="update transport set type='$_REQUEST[type]',model_no='$_REQUEST[model_no]',essn='$_REQUEST[essn]' where reg_no='$regno' ";
}
if ($flag!=0||!mysql_query($sql))
	  {
header('Location:transport_update.php?message='.mysql_error());
		      }
else{
header('Location:transport_update.php?message=1+record+updated');
}
mysql_close();
?> 
</body>
</html>

