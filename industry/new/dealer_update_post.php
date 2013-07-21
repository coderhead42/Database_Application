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
$flag=1;
$id=$_GET['did'];
if($_REQUEST['payment_to_give']>0)$flag=1;
//$len=strlen($_REQUEST['id']);
//for($i=0;$i<$len;$i++){if(ord($_REQUEST['id'][$i])<48 || ord($_REQUEST['id'][$i])>57){$flag=0;break;}}
$len=strlen($_REQUEST['payment_to_give']);
for($i=0;$i<$len;$i++){if(ord($_REQUEST['payment_to_give'][$i])<48 || ord($_REQUEST['payment_to_give'][$i])>57){$flag=0;break;}}
$len=strlen($_REQUEST['phone_no']);
for($i=0;$i<$len;$i++){if(ord($_REQUEST['phone_no'][$i])<48 || ord($_REQUEST['phone_no'][$i])>57){$flag=0;break;}}
if($flag==1){
$sql="UPDATE dealer 
SET type='$_REQUEST[type]',name='$_REQUEST[name]',sex='$_REQUEST[sex]',address='$_REQUEST[address]',phone_no='$_REQUEST[phone_no]',payment_to_give='$_REQUEST[payment_to_give]' where id='$id' ";
}
//echo $flag."qwerty";
if ($flag==0||!mysql_query($sql))
	  {
header('Location:factory.php?message='.mysql_error());
		      }
else{
header('Location:factory.php?message=1+record+updated');
}
mysql_close();
?> 
</body>
</html>

