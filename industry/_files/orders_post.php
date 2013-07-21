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
if($_REQUEST['dealer_id']>0 && $_REQUEST['order_no']>0 && $_REQUEST['amount_order']>0 && $_REQUEST['cost_kg']>0)$flag=1;
$len=strlen($_REQUEST['dealer_id']);
for($i=0;$i<$len;$i++){if(ord($_REQUEST['dealer_id'][$i])<48 || ord($_REQUEST['dealer_id'][$i])>57){$flag=0;break;}}
$len=strlen($_REQUEST['order_no']);
for($i=0;$i<$len;$i++){if(ord($_REQUEST['order_no'][$i])<48 || ord($_REQUEST['order_no'][$i])>57){$flag=0;break;}}
$len=strlen($_REQUEST['amount_order']);
for($i=0;$i<$len;$i++){if(ord($_REQUEST['amount_order'][$i])<48 || ord($_REQUEST['amount_order'][$i])>57){$flag=0;break;}}
$len=strlen($_REQUEST['cost_kg']);
for($i=0;$i<$len;$i++){if(ord($_REQUEST['cost_kg'][$i])<48 || ord($_REQUEST['cost_kg'][$i])>57){$flag=0;break;}}

if($_REQUEST['date_of_delivery']!=NULL){
	$due_y=(int)substr($_REQUEST['date_of_delivery'],0,4);
	if($_REQUEST['date_of_delivery'][6]=='-'){
		$due_m=(int)substr($_REQUEST['date_of_delivery'],5,1);
		if(ord($_REQUEST['date_of_delivery'][8])==0)
			$due_d=(int)substr($_REQUEST['date_of_delivery'],7,1);
		else
			$due_d=(int)substr($_REQUEST['date_of_delivery'],7,2);
	}
	else{
		$due_m=(int)substr($_REQUEST['date_of_delivery'],5,2);
		if(ord($_REQUEST['date_of_delivery'][9])==0)
			$due_d=(int)substr($_REQUEST['date_of_delivery'],8,1);
		else
			$due_d=(int)substr($_REQUEST['date_of_delivery'],8,2);
	}
	$pay_y=(int)substr($_REQUEST['date_of_order'],0,4);
	if($_REQUEST['date_of_order'][6]=='-'){
		$pay_m=(int)substr($_REQUEST['date_of_order'],5,1);
		if(ord($_REQUEST['date_of_delivery'][8])==0)
			$pay_d=(int)substr($_REQUEST['date_of_order'],7,1);
		else
			$pay_d=(int)substr($_REQUEST['date_of_order'],7,2);
	}
	else{
		$pay_m=(int)substr($_REQUEST['date_of_order'],5,2);
		if(ord($_REQUEST['date_of_order'][9])==0)
			$pay_d=(int)substr($_REQUEST['date_of_order'],8,1);
		else
			$pay_d=(int)substr($_REQUEST['date_of_order'],8,2);
	}
	if((int)$pay_y<=(int)$due_y){
			if((int)$pay_m<=(int)$due_m){
						if((int)$pay_d>(int)$due_d)$flag=0;
							}
				else{$flag=0;}
								
	}
		else{$flag=0;}
}


if($flag==1){
$sql="INSERT INTO orders 
VALUES
('$_REQUEST[dealer_id]','$_REQUEST[order_no]','$_REQUEST[amount_order]','$_REQUEST[cost_kg]','$_REQUEST[date_of_delivery]','$_REQUEST[date_of_order]')";
}
if ($flag==0||!mysql_query($sql,$con))
	  {
header('Location:orders.php?message=error');
		      }
else{
header('Location:orders.php?message=1+record+added');
}
mysql_close($con);
?> 
</body>
</html>

