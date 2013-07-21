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
$dno=$_GET['dno'];
$flag=0;
$len=strlen($_REQUEST['dnumber']);
for($i=0;$i<$len;$i++){if(ord($_REQUEST['dnumber'][$i])<48 || ord($_REQUEST['dnumber'][$i])>57){$flag=1;break;}}
$len=strlen($_REQUEST['profit_earned']);
for($i=0;$i<$len;$i++){if(ord($_REQUEST['profit_earned'][$i])<48 || ord($_REQUEST['profit_earned'][$i])>57){$flag=1;break;}}
$len=strlen($_REQUEST['maintain_cost']);
for($i=0;$i<$len;$i++){if(ord($_REQUEST['maintain_cost'][$i])<48 || ord($_REQUEST['maintain_cost'][$i])>57){$flag=1;break;}}
if($flag==1){
$sql="update department dname='$_POST[dname]',dlocation='$_POST[dlocation]',purpose='$_POST[purpose]',open_time='$_POST[open_time]',close_time='$_POST[close_time]',profit_earned=$_POST[profit_earned]',maintain_cost='$_POST[maintain_cost]' where dnumber='$dno' ";
}
if(!mysql_query($sql,$con))
	  {
$var=mysql_error();		  
header('Location:department.php?message=SOME+FIELDS+ARE+NOT+PROPERLY+INSERTED');
		      }
else{
header('Location:department.php?message=1+record+updated');
}
mysql_close($con);
?> 
</body>
</html>

