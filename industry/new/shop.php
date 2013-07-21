<?php
include('lock.php');
echo $_GET['message'];
echo "<h2>List of Customers :-</h2>";
echo "<br /><button type=submit><a href='customer.php'>Insert New Customer</a></button><br /><br />";
$ses_sql=mysql_query("select * from customers");
$rows=mysql_num_rows($ses_sql);
$i=0;
while($i<$rows){
                $u_fname=mysql_result($ses_sql,$i,"fname");
                $u_lname=mysql_result($ses_sql,$i,"lname");
                $u_sex=mysql_result($ses_sql,$i,"sex");
                $u_address=mysql_result($ses_sql,$i,"address");
                $u_essn=mysql_result($ses_sql,$i,"essn");
                $u_id=mysql_result($ses_sql,$i,"id");
                $u_phone_no=mysql_result($ses_sql,$i,"phone_no");
                $u_payment_pending=mysql_result($ses_sql,$i,"payment_pending");
                $u_profitable=mysql_result($ses_sql,$i,"profitable");
                echo "<table>
<tr><td>Firstname:</td><td>$u_fname</td><td></tr>
<tr><td>Lastname:</td><td>$u_lname</td></tr>
<tr><td>Sex:</td><td>$u_sex</td></tr>
<tr><td>Contact_no: </td><td>$u_phone_no</td></tr>
<tr><td>Address:</td><td>$u_address</td></tr>
<tr><td>Essn:</td><td>$u_essn</td></tr>
<tr><td>Profitable:</td><td>$u_profitable</td></tr>
<tr><td>Payment Pending:</td><td>$u_payment_pending</td></tr>";
                echo "</table>";
                echo "<br />";
		echo "<button type=submit><a href='customer_update.php?id=$u_id'>Update</a></button><br /><br />";
		echo "<button type=submit><a href='customer_delete.php?id=$u_id'>Delete</a></button><br /><br />";
                $i++;
}
?>
