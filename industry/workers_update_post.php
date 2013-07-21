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
$flag=0;
$ssn=$_GET['ssn'];
//$len=strlen($_REQUEST['ssn']);
//for($i=0;$i<$len;$i++){if(ord($_REQUEST['ssn'][$i])<48 || ord($_REQUEST['ssn'][$i])>57){$flag=1;break;}}
$len=strlen($_REQUEST['phone_no']);
for($i=0;$i<$len;$i++){if(ord($_REQUEST['phone_no'][$i])<48 || ord($_REQUEST['phone_no'][$i])>57){$flag=1;break;}}
$result=mysql_query("select ssn from employee");
//while($row = mysql_fetch_array($result))
//	  {if($_REQUEST['ssn']==$row['ssn']){$flag=1;break;}}

if($flag==0){
$sql="UPDATE workers SET fname='$_REQUEST[fname]',lname='$_REQUEST[lname]',sex='$_REQUEST[sex]',phone_no='$_REQUEST[contact_no]',bdate='$_REQUEST[bdate]',address='$_REQUEST[address]',passcode='$_REQUEST[passcode]',super_ssn='$_REQUEST[essn]' WHERE ssn='$ssn' ";
}
if ($flag!=0 ||!mysql_query($sql))
	  {
header('Location:update_worker.php?message='.mysql_error());
		      }
else{
header('Location:update_worker.php?message=1+record+updated');
}
mysql_close();
?> 
</body>
</html>

