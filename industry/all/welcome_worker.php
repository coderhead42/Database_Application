<?php
include('lock.php');
$ses_sql=mysql_query("select * from employee join department on dno=dnumber where ssn='$user_check' ");
$login_session_fname=mysql_result($ses_sql,0,"fname");
$login_session_lname=mysql_result($ses_sql,0,"lname");
$login_session_sex=mysql_result($ses_sql,0,"sex");
$login_session_contact=mysql_result($ses_sql,0,"phone_no");
$login_session_bdate=mysql_result($ses_sql,0,"bdate");
$login_session_address=mysql_result($ses_sql,0,"address");
$login_session_super_ssn=mysql_result($ses_sql,0,"super_ssn");
$login_session_joindate=mysql_result($ses_sql,0,"join_date");
$login_session_dno=mysql_result($ses_sql,0,"dno");
$login_session_leavedate=mysql_result($ses_sql,0,"leave_date");
$login_session_passcode=mysql_result($ses_sql,0,"passcode");
$login_session_dlocation=mysql_result($ses_sql,0,"dlocation");
$login_session_purpose=mysql_result($ses_sql,0,"purpose");
$login_session_open_time=mysql_result($ses_sql,0,"open_time");
$login_session_close_time=mysql_result($ses_sql,0,"close_time");
$login_session_dname=mysql_result($ses_sql,0,"dname");
$ses_sql1=mysql_query("select * from wages where dno='$login_session_dno' ");
$login_session_wages_hour=mysql_result($ses_sql1,0,"wages_hour");
$login_session_hours_work=mysql_result($ses_sql1,0,"hours_work");
$ses_sql2=mysql_query("select * from employee where ssn='$login_session_super_ssn' ");
$login_session_super_fname=mysql_result($ses_sql2,0,"fname");
$login_session_super_lname=mysql_result($ses_sql2,0,"lname");
$login_session_super_sex=mysql_result($ses_sql2,0,"sex");
$login_session_super_contact=mysql_result($ses_sql2,0,"contact_no");
$login_session_super_bdate=mysql_result($ses_sql2,0,"bdate");
$login_session_super_address=mysql_result($ses_sql2,0,"address");
$login_session_super_ssn=mysql_result($ses_sql2,0,"ssn");
$ses_sql3=mysql_query("select * from dependents where essn='$login_session__ssn' ");
$ani=mysql_num_rows($ses_sql3);
$login_session_dname=mysql_result($ses_sql3,0,"name");
$login_session_dsex=mysql_result($ses_sql3,0,"sex");
$login_session_dbdate=mysql_result($ses_sql3,0,"bdate");
$login_session_drelation=mysql_result($ses_sql3,0,"relationship");
?>
<html>
<body>
<h1>Welcome <?php echo $login_session_fname," ",$login_session_lname; ?></h1>
<h3>Personal Info : </h3>
<table>
<tr><td>First Name:</td><td><?php echo $login_session_fname; ?></td></tr>
<tr><td>Last Name:</td><td><?php echo $login_session_lname; ?></td></tr>
<tr><td>Sex:</td><td><?php echo $login_session_sex; ?></td></tr>
<tr><td>Contact Number:</td><td><?php echo $login_session_contact; ?></td></tr>
<tr><td>Ssn:</td><td><?php echo $login_session_ssn; ?></td></tr>
<tr><td>Birth date:</td><td><?php echo $login_session_bdate; ?></td>
<tr><td>Address:</td><td><?php echo $login_session_address; ?></td></tr>
<tr><td>Salary:</td><td><?php echo $login_session_salary; ?></td></tr>
<tr><td>Joining Date:</td><td><?php echo $login_session_joindate; ?></td></tr>
<tr><td>Leaving Date:</td><td><?php echo $login_session_leavedate; ?></td></tr>
<tr><td>Password:</td><td><?php echo $login_session_passcode; ?></td></tr> 
</table>
<button type=submit><a href="update.php">Update</a></button><br /><br />
<h3>Work Info : </h3>
<table>
<tr><td>Employment Type:</td><td>Worker</td></tr>
<tr><td>Department Name:</td><td><?php echo $login_session_dname; ?></td></tr>
<tr><td>Department Number:</td><td><?php echo $login_session_dno; ?></td></tr>
<tr><td>Department Location:</td><td><?php echo $login_session_dlocation; ?></td></tr>
<tr><td>Purpose:</td><td><?php echo $login_session_purpose; ?></td></tr>
<tr><td>Open Time:</td><td><?php echo $login_session_open_time; ?></td>
<tr><td>Close Time:</td><td><?php echo $login_session_close_time; ?></td></tr>
<tr><td>Hours Of Work:</td><td><?php echo $login_session_hours_work; ?></td></tr>
<tr><td>Wages per hours Of Work:</td><td><?php echo $login_session_wages_hour; ?></td></tr>
</table>
<h3>Supervisor Info : </h3>
<table>
<tr><td>First Name:</td><td><?php echo $login_session_super_fname; ?></td></tr>
<tr><td>Last Name:</td><td><?php echo $login_session_super_lname; ?></td></tr>
<tr><td>Sex:</td><td><?php echo $login_session_super_sex; ?></td></tr>
<tr><td>Contact Number:</td><td><?php echo $login_session_super_contact; ?></td></tr>
<tr><td>Birth date:</td><td><?php echo $login_session_super_bdate; ?></td>
<tr><td>Address:</td><td><?php echo $login_session_super_address; ?></td></tr>
<tr><td>Ssn:</td><td><?php echo $login_session_super_ssn; ?></td></tr>
</table>
<?php
if($ani>=1){
echo "<h3>Dependent Info : </h3>";
?>
<button type=submit><a href="show_dependents.php?ssn=<?php echo $login_session_ssn;?>">Show Dependents</a></button><br /><br />
<?php 
/*echo "<table>
<tr><td>Name:</td><td>$login_session_dname</td></tr>
<tr><td>Sex:</td><td>$login_session_dsex</td></tr>
<tr><td>Birth date:</td><td>$login_session_dbdate</td>
<tr><td>Address:</td><td>$login_session_super_daddress</td></tr>
<tr><td>Relation:</td><td>$login_session_drelation</td></tr>
</table>";
*/
}
else{
echo "<h3>No Dependents</h3>";
}
?>
<button type=submit><a href="query.php">Search</a></button><br /><br />
<button type=submit><a href="logout.php">Logout</a></button>
</body>
</html>
