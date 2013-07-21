<?php
include('lock.php');
if($_SERVER["REQUEST_METHOD"]=="GET"){
        $dealer_id=$_GET['dealerid'];
        $order_no=$_GET['orderno'];
        $sql="SELECT * from orders where order_no='$order_no' && dealer_id='$dealer_id' ";
        $ses_sql=mysql_query($sql);
        $row=mysql_num_rows($ses_sql);
        if($row!=1)
        header("location: maintainence.php");
        else{
        $u_amount_order=mysql_result($ses_sql,$i,"amount_order");
	$u_cost_kg=mysql_result($ses_sql,$i,"cost_kg");
        $u_date_of_delivery=mysql_result($ses_sql,$i,"date_of_delivery");
        $u_date_of_order=mysql_result($ses_sql,$i,"date_of_order");

        }
}
?>
<html>
<head>
<body>
<form action="orders_update_post.php?dealerid=<?php echo "$dealer_id";?>&&orderno=<?php echo "$order_no";?>" method="post">
<table>
<tr><td>AMOUNT OF ORDER(Kg):</TD><TD><INPUT TYPE="text" name="amount_order" value="<?php echo $u_amount_order; ?>"/></td></tr> 
<tr><td>COST PER Kg:</TD><TD><INPUT TYPE="text" name="cost_kg" value="<?php echo $u_cost_kg; ?>"/></td></tr>
<tr><td>DATE OF ORDER:</TD><TD><INPUT TYPE="text" name="date_of_order" value="<?php echo $u_date_of_order; ?>" /></td></tr> 
<tr><td>DATE OF DELIVERY:</TD><TD><INPUT TYPE="text" name="date_of_delivery" value="<?php echo $u_date_of_delivery; ?>"/></td></tr>
</table>

<input type="submit" />
</form>
<h3><?php echo $_GET['message']; ?></h3>
<button type=submit><a href="factory.php">Back</a></button>
</body>
</html>
