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
$len=strlen($_REQUEST['bill_no']);
for($i=0;$i<$len;$i++){if(ord($_REQUEST['bill_no'][$i])<48 || ord($_REQUEST['bill_no'][$i])>57){$flag=1;break;}}
$len=strlen($_REQUEST['cost']);
for($i=0;$i<$len;$i++){if(ord($_REQUEST['cost'][$i])<48 || ord($_REQUEST['cost'][$i])>57){$flag=1;break;}}
$len=strlen($_REQUEST['penalty']);
for($i=0;$i<$len;$i++){if(ord($_REQUEST['penalty'][$i])<48 || ord($_REQUEST['penalty'][$i])>57){$flag=1;break;}}
if($flag==0){
$due_y=(int)substr($_REQUEST['due_date'],0,4);
if($_REQUEST['due_date'][6]=='-'){
$due_m=(int)substr($_REQUEST['due_date'],5,1);
if(ord($_REQUEST['due_date'][8])==0)
$due_d=(int)substr($_REQUEST['due_date'],7,1);
else
$due_d=(int)substr($_REQUEST['due_date'],7,2);
}
else{
$due_m=(int)substr($_REQUEST['due_date'],5,2);
if(ord($_REQUEST['due_date'][9])==0)
$due_d=(int)substr($_REQUEST['due_date'],8,1);
else
$due_d=(int)substr($_REQUEST['due_date'],8,2);
}
$pay_y=(int)substr($_REQUEST['date_of_payment'],0,4);
if($_REQUEST['date_of_payment'][6]=='-'){
$pay_m=(int)substr($_REQUEST['date_of_payment'],5,1);
if(ord($_REQUEST['due_date'][8])==0)
$pay_d=(int)substr($_REQUEST['date_of_payment'],7,1);
else
$pay_d=(int)substr($_REQUEST['date_of_payment'],7,2);
}
else{
$pay_m=(int)substr($_REQUEST['date_of_payment'],5,2);
if(ord($_REQUEST['date_of_payment'][9])==0)
$pay_d=(int)substr($_REQUEST['date_of_payment'],8,1);
else
$pay_d=(int)substr($_REQUEST['date_of_payment'],8,2);
}
if((int)$pay_y<=(int)$due_y){
	if((int)$pay_m<=(int)$due_m){
		if((int)$pay_d<=(int)$due_d)$_REQUEST['penalty']=0;
	elseif((int)$_REQUEST['penalty']==0){$_REQUEST['penalty']=10*((int)$pay_d-(int)$due_d);}
	}
	elseif((int)$_REQUEST['penalty']==0){
		if($pay_m-$due_m<=5)
		$_REQUEST['penalty']=10*(30*($pay_m-$due_m)/*+($pay_d-$due_d)*/);
				else{$flag=1;}
				}
				
}
	elseif((int)$_REQUEST['penalty']==0){$flag=1;}
}

if($flag==0){
$sql="INSERT INTO bill
VALUES
('$_REQUEST[bill_no]','$_REQUEST[cost]','$_REQUEST[due_date]','$_REQUEST[penalty]','$_REQUEST[date_of_payment]','$_REQUEST[wssn]')";
}
if ($flag!=0 ||!mysql_query($sql,$con))
	  {
header('Location:bill.php?message=error');
		      }
else{
header('Location:bill.php?message=1+record+added');
}
mysql_close($con);
?> 
</body>
</html>

