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
$len=strlen($_REQUEST['dnumber']);
for($i=0;$i<$len;$i++){if(ord($_REQUEST['dnumber'][$i])<48 || ord($_REQUEST['dnumber'][$i])>57){$flag=1;break;}}
$len=strlen($_REQUEST['profit_earned']);
for($i=0;$i<$len;$i++){if(ord($_REQUEST['profit_earned'][$i])<48 || ord($_REQUEST['profit_earned'][$i])>57){$flag=1;break;}}
$len=strlen($_REQUEST['maintain_cost']);
for($i=0;$i<$len;$i++){if(ord($_REQUEST['maintain_cost'][$i])<48 || ord($_REQUEST['maintain_cost'][$i])>57){$flag=1;break;}}
if($flag==1){
$sql="INSERT INTO department 
VALUES
('$_POST[dname]','$_POST[dnumber]','$_POST[dlocation]','$_POST[purpose]','$_POST[open_time]','$_POST[close_time]','$_POST[profit_earned]','$_POST[maintain_cost]' )";
}
if(!mysql_query($sql,$con))
	  {
$var=mysql_error();		  
header('Location:department.php?message=SOME+FIELDS+ARE+NOT+PROPERLY+INSERTED');
		      }
else{
header('Location:department.php?message=1+record+added');
}
mysql_close($con);
?> 
</body>
</html>

