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
$len=strlen($_REQUEST['ssn']);
for($i=0;$i<$len;$i++){if(ord($_REQUEST['ssn'][$i])<48 || ord($_REQUEST['ssn'][$i])>57){$flag=1;break;}}
$len=strlen($_REQUEST['phone_no']);
for($i=0;$i<$len;$i++){if(ord($_REQUEST['phone_no'][$i])<48 || ord($_REQUEST['phone_no'][$i])>57){$flag=1;break;}}
$result=mysql_query("select ssn from employee");
while($row = mysql_fetch_array($result))
	  {if($_REQUEST['ssn']==$row['ssn']){$flag=1;break;}}

if($flag==0){
$sql="INSERT INTO workers 
VALUES
('$_REQUEST[fname]','$_REQUEST[lname]','$_REQUEST[join_date]','$_REQUEST[leave_date]','$_REQUEST[ssn]','$_REQUEST[sex]','$_REQUEST[bdate]','$_REQUEST[dno]','$_REQUEST[address]','$_REQUEST[phone_no]','$_REQUEST[super_ssn]')";
}
if ($flag!=0 ||!mysql_query($sql,$con))
	  {
header('Location:workers.php?message=error');
		      }
else{
header('Location:workers.php?message=1+record+added');
}
mysql_close($con);
?> 
</body>
</html>

