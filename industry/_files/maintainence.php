<?php
include('lock.php');
echo "<h2>List of Bills :-</h2>";
echo "<button type=submit><a href="bill.php">Insert New Bill</a></button><br /><br />";
$ses_sql=mysql_query("select * from bill");
$rows=mysql_num_rows($ses_sql);
$i=0;
while($i<$rows){
                $u_bill_no=mysql_result($search,$i,"bill_no");
                $u_cost=mysql_result($search,$i,"cost");
                $u_due_date=mysql_result($search,$i,"due_date");
                $u_penalty=mysql_result($search,$i,"penalty");
                $u_date_of_payment=mysql_result($search,$i,"date_of_payment");
                $u_wssn=mysql_result($search,$i,"wssn");
                echo "<table>
<tr><td>Bill No:</td><td>$u_bill_no</td><td></tr>
<tr><td>Cost:</td><td>$u_cost</td></tr>
<tr><td>Due Date:</td><td>$u_due_date</td></tr>
<tr><td>Penalty: </td><td>$u_penalty</td></tr>
<tr><td>Date of Payment:</td><td>$u_date_of_payment</td></tr>
<tr><td>Wssn:</td><td>$u_wssn</td></tr>";
                echo "</table>";
                echo "<br />";
		echo "<button type=submit><a href="bill_update.php?billno=$u_bill_no">Update</a></button><br /><br />";
		echo "<button type=submit><a href="bill_delete.php?billno=$u_bill_no">Delete</a></button><br /><br />";
                $i++;
}
echo "<h2>List of Machinery :-</h2>";
echo "<button type=submit><a href="machinery.php">Insert New Machinery</a></button><br /><br />";
$ses_sql=mysql_query("select * from machinery");
$rows=mysql_num_rows($ses_sql);
$i=0;
while($i<$rows){
                $u_machine_id=mysql_result($search,$i,"machine_id");
                $u_date_purchase=mysql_result($search,$i,"date_purchase");
                $u_model_no=mysql_result($search,$i,"model_no");
                $u_dno=mysql_result($search,$i,"dno");
                echo "<table>
<tr><td>Machine Id:</td><td>$u_machine_id</td><td></tr>
<tr><td>Date Of Purchase:</td><td>$u_date_purchase</td></tr>
<tr><td>Model No:</td><td>$u_model_no</td></tr>
<tr><td>Department No: </td><td>$u_dno</td></tr>";
                echo "</table>";
                echo "<br />";
		echo "<button type=submit><a href="machinery_update.php?machineid=$u_machine_id">Update</a></button><br /><br />";
		echo "<button type=submit><a href="machinery_delete.php?machineid=$u_machine_id">Delete</a></button><br /><br />";
                $i++;
}
?>
