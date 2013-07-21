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
if($_REQUEST['profitable']==0 || $_REQUEST['profitable']=='1')$flag=1;
$len=strlen($_REQUEST['phone_no']);
for($i=0;$i<$len;$i++){if(ord($_REQUEST['phone_no'][$i])<48 || ord($_REQUEST['phone_no'][$i])>57){$flag=0;break;}}
if($_REQUEST['payment_pending']<0)$flag=0;
$len=strlen($_REQUEST['payment_pending']);
for($i=0;$i<$len;$i++){if(ord($_REQUEST['payment_pending'][$i])<48 || ord($_REQUEST['payment_pending'][$i])>57){$flag=0;break;}}
if($flag==1){
$sql="INSERT INTO customers (fname,lname,sex,address,phone_no,payment_pending,profitable,essn)
VALUES
('$_REQUEST[fname]','$_REQUEST[lname]','$_REQUEST[sex]','$_REQUEST[address]','$_REQUEST[phone_no]','$_REQUEST[payment_pending]','$_REQUEST[profitable]','$_REQUEST[essn]')";
}
if ($flag==0||!mysql_query($sql))
	  {
header('Location:customer.php?message='.mysql_error());
		      }
else{
header('Location:customer.php?message=1+record+added');
}
mysql_close();
?> 
</body>
</html>

