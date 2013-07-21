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
if($_REQUEST['id']>0 && $_REQUEST['payment_to_give']>0)$flag=1;
$len=strlen($_REQUEST['id']);
for($i=0;$i<$len;$i++){if(ord($_REQUEST['id'][$i])<48 || ord($_REQUEST['id'][$i])>57){$flag=0;break;}}
$len=strlen($_REQUEST['payment_to_give']);
for($i=0;$i<$len;$i++){if(ord($_REQUEST['payment_to_give'][$i])<48 || ord($_REQUEST['payment_to_give'][$i])>57){$flag=0;break;}}
$len=strlen($_REQUEST['phone_no']);
for($i=0;$i<$len;$i++){if(ord($_REQUEST['phone_no'][$i])<48 || ord($_REQUEST['phone_no'][$i])>57){$flag=0;break;}}
if($flag==1){
$sql="INSERT INTO dealer 
VALUES
('$_REQUEST[id]','$_REQUEST[type]','$_REQUEST[name]','$_REQUEST[sex]','$_REQUEST[address]','$_REQUEST[phone_no]','$_REQUEST[payment_to_give]')";
}
if ($flag==0||!mysql_query($sql,$con))
	  {
header('Location:dealer.php?message=error');
		      }
else{
header('Location:dealer.php?message=1+record+added');
}
mysql_close($con);
?> 
</body>
</html>

