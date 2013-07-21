<?php
include('lock.php');
echo "<h2>List of Vehicles :-</h2>";
echo "<button type=submit><a href='transport.php'>Insert New Vehicle</a></button><br /><br />";
$ses_sql=mysql_query("select * from transport");
$rows=mysql_num_rows($ses_sql);
$i=0;
while($i<$rows){
                $u_model_no=mysql_result($ses_sql,$i,"model_no");
                $u_reg_no=mysql_result($ses_sql,$i,"reg_no");
                $u_essn=mysql_result($ses_sql,$i,"essn");
                $u_type=mysql_result($ses_sql,$i,"type");
                echo "<table>
<tr><td>Type Of Vehicle:</td><td>$u_type</td><td></tr>
<tr><td>Model Number:</td><td>$u_model_no</td></tr>
<tr><td>Registration Number:</td><td>$u_reg_no</td></tr>
<tr><td>Essn: </td><td>$u_essn</td></tr>";
                echo "</table>";
                echo "<br />";
		echo "<button type=submit><a href='transport_update.php?regno=$u_reg_no'>Update</a></button><br /><br />";
		echo "<button type=submit><a href='transport_delete.php?regno=$u_reg_no'>Delete</a></button><br /><br />";
                $i++;
}
?>
