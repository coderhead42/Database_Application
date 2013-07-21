<?php
include('lock.php');
echo "<h2>List of Orders :-</h2>";
echo "<button type=submit><a href="orders.php">Insert New Order</a></button><br /><br />";
$ses_sql=mysql_query("select * from orders");
$rows=mysql_num_rows($ses_sql);
$i=0;
while($i<$rows){
                $u_dealer_id=mysql_result($ses_sql,$i,"dealer_id");
                $u_order_no=mysql_result($ses_sql,$i,"order_no");
                $u_amount_order=mysql_result($ses_sql,$i,"amount_order");
                $u_cost_kg=mysql_result($ses_sql,$i,"cost_kg");
                $u_date_of_delivery=mysql_result($ses_sql,$i,"date_of_delivery");
                $u_date_of_order=mysql_result($ses_sql,$i,"date_of_order");
                echo "<table>
<tr><td>Dealer Id:</td><td>$u_dealer_id</td><td></tr>
<tr><td>Order No:</td><td>$u_order_no</td></tr>
<tr><td>Amount Ordered:</td><td>$u_amount_order</td></tr>
<tr><td>Cost per Kg: </td><td>$u_cost_kg</td></tr>
<tr><td>Date of Order:</td><td>$u_date_of_order</td></tr>
<tr><td>Date of Delivery:</td><td>$u_date_of_delivery</td></tr>";
                echo "</table>";
                echo "<br />";
		echo "<button type=submit><a href="dealer_update.php?dealerid=$u_dealer_id&&orderno=$u_order_no">Update</a></button><br /><br />";
		echo "<button type=submit><a href="dealer_delete.php?dealerid=$u_dealer_id&&orderno=$u_order_no">Delete</a></button><br /><br />";
                $i++;
}
echo "<h2>List of Dealers :-</h2>";
echo "<button type=submit><a href="dealers.php">Insert New Dealer</a></button><br /><br />";
$ses_sql=mysql_query("select * from dealer");
$rows=mysql_num_rows($ses_sql);
$i=0;
while($i<$rows){
                $u_id=mysql_result($search,$i,"id");
                $u_type=mysql_result($search,$i,"type");
                $u_name=mysql_result($search,$i,"name");
                $u_sex=mysql_result($search,$i,"sex");
                $u_address=mysql_result($search,$i,"address");
                $u_phone_no=mysql_result($search,$i,"phone_no");
                $u_payment_to_give=mysql_result($search,$i,"payment_to_give");
                echo "<table>
<tr><td>Id:</td><td>$u_id</td><td></tr>
<tr><td>Type:</td><td>$u_type</td></tr>
<tr><td>Name:</td><td>$u_name</td></tr>
<tr><td>Sex: </td><td>$u_sex</td></tr>
<tr><td>Address: </td><td>$u_address</td></tr>
<tr><td>Phone No: </td><td>$u_phone_no</td></tr>
<tr><td>Payment to Give: </td><td>$u_payment_to_give</td></tr>";
                echo "</table>";
                echo "<br />";
		echo "<button type=submit><a href="dealer_update.php?did=$u_id">Update</a></button><br /><br />";
		echo "<button type=submit><a href="dealer_delete.php?id=$u_id">Delete</a></button><br /><br />";
                $i++;
}
?>
