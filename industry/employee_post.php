<html>
<body>
<?php
include('lock.php');
/*$con = mysql_connect("localhost","root","admin");
if (!$con)
	  {
		    die('Could not connect: ' . mysql_error());
		      }

mysql_select_db("turmeric_industry", $con);*/
$flag=0;
if($_REQUEST['salary']<0)$flag=1;
$len=strlen($_REQUEST['salary']);
for($i=0;$i<$len;$i++){if(ord($_REQUEST['salary'][$i])<48 || ord($_REQUEST['salary'][$i])>57){$flag=1;break;}}
$len=strlen($_REQUEST['ssn']);
for($i=0;$i<$len;$i++){if(ord($_REQUEST['ssn'][$i])<48 || ord($_REQUEST['ssn'][$i])>57){$flag=1;break;}}
$len=strlen($_REQUEST['contact_no']);
for($i=0;$i<$len;$i++){if(ord($_REQUEST['contact_no'][$i])<48 || ord($_REQUEST['contact_no'][$i])>57){$flag=1;break;}}

if($_REQUEST['leave_date']!=NULL){
$due_y=(int)substr($_REQUEST['leave_date'],0,4);
if($_REQUEST['leave_date'][6]=='-'){
$due_m=(int)substr($_REQUEST['leave_date'],5,1);
if(ord($_REQUEST['leave_date'][8])==0)
$due_d=(int)substr($_REQUEST['leave_date'],7,1);
else
$due_d=(int)substr($_REQUEST['leave_date'],7,2);
}
else{
$due_m=(int)substr($_REQUEST['leave_date'],5,2);
if(ord($_REQUEST['leave_date'][9])==0)
$due_d=(int)substr($_REQUEST['leave_date'],8,1);
else
$due_d=(int)substr($_REQUEST['leave_date'],8,2);
}
$pay_y=(int)substr($_REQUEST['join_date'],0,4);
if($_REQUEST['join_date'][6]=='-'){
$pay_m=(int)substr($_REQUEST['join_date'],5,1);
if(ord($_REQUEST['leave_date'][8])==0)
$pay_d=(int)substr($_REQUEST['join_date'],7,1);
else
$pay_d=(int)substr($_REQUEST['join_date'],7,2);
}
else{
$pay_m=(int)substr($_REQUEST['join_date'],5,2);
if(ord($_REQUEST['join_date'][9])==0)
$pay_d=(int)substr($_REQUEST['join_date'],8,1);
else
$pay_d=(int)substr($_REQUEST['join_date'],8,2);
}
if((int)$pay_y<=(int)$due_y){
	if((int)$pay_m<=(int)$due_m){
		if((int)$pay_d>(int)$due_d)$flag=1;
	}
	else{$flag=1;}
				
}
	else{$flag=1;}
}
if($_REQUEST['passcode']!==$_REQUEST['confirm_passcode'])$flag=1;

if($flag==0){
$sql="INSERT INTO employee 
VALUES
('$_REQUEST[fname]','$_REQUEST[lname]','$_REQUEST[sex]','$_REQUEST[contact_no]','$_REQUEST[bdate]','$_REQUEST[ssn]','$_REQUEST[salary]','$_REQUEST[address]','$_REQUEST[join_date]','$_REQUEST[dno]','$_REQUEST[leave_date]','$_REQUEST[passcode]')";
}
if ($flag!=0 ||!mysql_query($sql))
	  {
header('Location:employee.php?message=error');
		      }
else{
header('Location:employee.php?message=1+record+added');
}
mysql_close();
?> 
</body>
</html>

