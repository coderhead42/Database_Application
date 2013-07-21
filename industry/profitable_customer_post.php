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
$result = mysql_query("SELECT profitable FROM customers where id=$_REQUEST[pid] ");
$row = mysql_fetch_array($result);
if($row['profitable']=='1')$flag=1;
if($flag==1){
$sql="INSERT INTO profitable_customer
VALUES
	('$_REQUEST[pid]','$_REQUEST[bdate]','$_REQUEST[ann_date]')";
}
if ($flag==0||!mysql_query($sql,$con))
	  {
header('Location:profitable_customer.php?message=customer is not profitable');
		      }
else{
header('Location:profitable_customer.php?message=1+record+added');
}
mysql_close($con);
?> 
</body>
</html>

