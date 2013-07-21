<?php
include('lock.php');
$ssn=$_GET['ssn'];
echo "<h2>List of Dependents :-</h2>";
echo "<button type=submit><a href="transport.php">Insert New Dependent</a></button><br /><br />";
$ses_sql=mysql_query("select * from dependent where essn='$ssn' ");
$rows=mysql_num_rows($ses_sql);
$i=0;
while($i<$rows){
                $u_name=mysql_result($ses_sql,$i,"name");
                $u_sex=mysql_result($ses_sql,$i,"sex");
                $u_bdate=mysql_result($ses_sql,$i,"bdate");
                $u_relationship=mysql_result($ses_sql,$i,"relationship");
                echo "<table>
<tr><td>Name:</td><td>$u_name</td><td></tr>
<tr><td>Sex:</td><td>$u_sex</td></tr>
<tr><td>Birth Date:</td><td>$u_bdate</td></tr>
<tr><td>RelationShip: </td><td>$u_relationship</td></tr>";
                echo "</table>";
                echo "<br />";
		echo "<button type=submit><a href="dependent_update.php?regno=$u_regno">Update</a></button><br /><br />";
		echo "<button type=submit><a href="dependent_delete.php?regno=$u_regno">Delete</a></button><br /><br />";
                $i++;
}
?>
