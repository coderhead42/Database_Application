<html>
<body>
<?php
include('lock.php');
/*$con = mysql_connect("localhost","root","admin");
if (!$con)
	  {
		    die('Could not connect: ' . mysql_error());
		      }

mysql_select_db("turmeric_industry", $con);
*/
$name=$_GET['name'];
$essn=$_GET['essn'];
$flag=0;
//$len=strlen($_REQUEST['essn']);
//for($i=0;$i<$len;$i++){if(ord($_REQUEST['essn'][$i])<48 || ord($_REQUEST['essn'][$i])>57){$flag=1;break;}}
echo $name;
echo $essn;
echo $_REQUEST['sex'];
echo $_REQUEST['bdate'];
echo $_REQUEST['relationship'];
echo $_SESSION['prev'];
if($flag==0){
$sql="update dependent set sex='$_REQUEST[sex]',bdate='$_REQUEST[bdate]',relationship='$_REQUEST[relationship]' where essn='$essn' and name='$name' ";
}
if ($flag!=0 ||!mysql_query($sql))
	  {
header('Location:'.$_SESSION['prev'].'message=error');
		      }
else{
header('Location:'.$_SESSION['prev'].'message=1+record+updated');
}
//mysql_close();
?> 
</body>
</html>

