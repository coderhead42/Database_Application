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
$len=strlen($_REQUEST['essn']);
for($i=0;$i<$len;$i++){if(ord($_REQUEST['essn'][$i])<48 || ord($_REQUEST['essn'][$i])>57){$flag=1;break;}}
if($flag==0){
$sql="INSERT INTO dependent 
VALUES
('$_REQUEST[essn]','$_REQUEST[name]','$_REQUEST[sex]','$_REQUEST[bdate]','$_REQUEST[relationship]')";
}
if ($flag!=0 ||!mysql_query($sql,$con))
	  {
header('Location:dependent.php?message=error');
		      }
else{
header('Location:dependent.php?message=1+record+added');
}
mysql_close($con);
?> 
</body>
</html>

