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
$len=strlen($_REQUEST['super_id']);
for($i=0;$i<$len;$i++){if(ord($_REQUEST['super_id'][$i])<48 || ord($_REQUEST['super_id'][$i])>57){$flag=1;break;}}
$len=strlen($_REQUEST['office_no']);
for($i=0;$i<$len;$i++){if(ord($_REQUEST['office_no'][$i])<48 || ord($_REQUEST['office_no'][$i])>57){$flag=1;break;}}
$len=strlen($_REQUEST['home_no']);
for($i=0;$i<$len;$i++){if(ord($_REQUEST['home_no'][$i])<48 || ord($_REQUEST['home_no'][$i])>57){$flag=1;break;}}
if($flag==0){
$sql="INSERT INTO manager 
VALUES
('$_REQUEST[fname]','$_REQUEST[lname]','$_REQUEST[sex]','$_REQUEST[bdate]','$_REQUEST[address]','$_REQUEST[office_no]','$_REQUEST[home_no]','$_REQUEST[super_id]')";
}
if ($flag!=0 ||!mysql_query($sql,$con))
	  {
header('Location:manager.php?message=error');
		      }
else{
header('Location:manager.php?message=1+record+added');
}
mysql_close($con);
?> 
</body>
</html>

