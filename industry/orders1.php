<?php
include('lock.php');
if($_SERVER["REQUEST_METHOD"]=="GET"){
	$dealer_id=$_GET['dealerid'];
	$order_no=$_GET['orderno'];
        $sql="SELECT from orders where dealer_id='$dealer_id' and order_no='$order_no' ";
	$res=mysql_query($sql);
	$row=mysql_num_rows($res);
	if($row!=1)
	header("location: factory.php");
	else{
        $amount_order=mysql_result($ses_sql,$i,"amount_order");
        $cost_kg=mysql_result($ses_sql,$i,"cost_kg");
        $date_of_delivery=mysql_result($ses_sql,$i,"date_of_delivery");
        $date_of_order=mysql_result($ses_sql,$i,"date_of_order");
	}
}
else if($_SERVER["REQUEST_METHOD"]=="POST"){
	$u_amount_order=$_POST['amount_order'];
        $u_cost_kg=$_POST['cost_kg'];
        $u_date_of_delivery=$_POST['date_of_delivery'];
        $u_date_of_order=$_POST['date_of_order'];
        $sql="UPDATE orders SET amount_order='$u_amount_order',cost_kg='$u_cost_kg',date_of_delivery='$u_date_of_delivery',date_of_order='$u_date_of_order' WHERE dealer_id='$dealer_id' and order_no='$order_no' ";
        mysql_query($sql);
        mysql_close();
        header('Location: factory.php');
}
?>
<html>
<head>
<body>
<form action="orders_update.php" method="post">
<table>
<tr><td>Amount of Order:</td><td><input type="text" name="amount_order" value="<?php echo $amount_order;?>"/></td></tr>
<tr><td>Cost per Kg:</td><td><input type="text" name="cost_kg" value="<?php echo $cost_kg;?>"/></td></tr>
<TR><TD>Date of Delivery:</td><td><input type="text" name="date_of_delivery" value="<?php echo $date_of_delivery; ?>"/></td></tr>
<TR><TD>Date of Order:</td><td><input type="text" name="date_of_order" value="<?php echo $date_of_order; ?>"/></td></tr>
</table>
<input type="submit" />
</form>
<h3><?php echo $_GET['message']; ?></h3>
<button type=submit><a href="factory.php">Back</a></button>
</body>
</html>
