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
$flag=1;
$id=$_GET['id'];
if($_REQUEST['profitable']==0 || $_REQUEST['profitable']=='1')$flag=1;
$len=strlen($_REQUEST['phone_no']);
for($i=0;$i<$len;$i++){if(ord($_REQUEST['phone_no'][$i])<48 || ord($_REQUEST['phone_no'][$i])>57){$flag=0;break;}}
if($_REQUEST['payment_pending']<0)$flag=0;
$len=strlen($_REQUEST['payment_pending']);
for($i=0;$i<$len;$i++){if(ord($_REQUEST['payment_pending'][$i])<48 || ord($_REQUEST['payment_pending'][$i])>57){$flag=0;break;}}
if($flag==1){
$sql="update customers set fname='$_REQUEST[fname]',lname='$_REQUEST[lname]',sex='$_REQUEST[sex]',address='$_REQUEST[address]',phone_no='$_REQUEST[phone_no]',payment_pending='$_REQUEST[payment_pending]',profitable='$_REQUEST[profitable]',essn='$_REQUEST[essn]' where id='$id' ";
}
if ($flag==0||!mysql_query($sql))
	  {
header('Location:shop.php?message='.mysql_error());
		      }
else{
header('Location:shop.php?message=1+record+updated');
}
mysql_close();
?> 
</body>
</html>

