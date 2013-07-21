<?php
include('lock.php');
$ses_sql=mysql_query("select * from employee join department on dno=dnumber where ssn='$user_check' ");
$login_session_fname=mysql_result($ses_sql,0,"fname");
$login_session_lname=mysql_result($ses_sql,0,"lname");
$login_session_sex=mysql_result($ses_sql,0,"sex");
$login_session_contact=mysql_result($ses_sql,0,"contact_no");
$login_session_bdate=mysql_result($ses_sql,0,"bdate");
$login_session_salary=mysql_result($ses_sql,0,"salary");
$login_session_address=mysql_result($ses_sql,0,"address");
$login_session_joindate=mysql_result($ses_sql,0,"join_date");
$login_session_dno=mysql_result($ses_sql,0,"dno");
$login_session_leavedate=mysql_result($ses_sql,0,"leave_date");
$login_session_passcode=mysql_result($ses_sql,0,"passcode");
$login_session_office_no=mysql_result($ses_sql,0,"office_no");
$login_session_home_no=mysql_result($ses_sql,0,"home_no");
$login_session_dlocation=mysql_result($ses_sql,0,"dlocation");
$login_session_purpose=mysql_result($ses_sql,0,"purpose");
$login_session_open_time=mysql_result($ses_sql,0,"open_time");
$login_session_close_time=mysql_result($ses_sql,0,"close_time");
$login_session_dname=mysql_result($ses_sql,0,"dname");
$ses_sql3=mysql_query("select * from dependent where essn='$login_session_ssn' ");
$ani=mysql_num_rows($ses_sql3);
$login_session_dname=mysql_result($ses_sql3,0,"name");
$login_session_dsex=mysql_result($ses_sql3,0,"sex");
$login_session_dbdate=mysql_result($ses_sql3,0,"bdate");
$login_session_drelation=mysql_result($ses_sql3,0,"relationship");
//if($login_session_dno==1){
//$ses_sql4=mysql_query("select * from customers");
//}
echo "<h3>".$_GET['message']."</h3>";
?>
<html>
<head>
<title>Welcome <?php echo $login_session_fname," ",$login_session_lname; ?></title>
<link rel="shortcut icon" href="logo.jpg">
<style type="text/css">
tr td {background-color:black;color:white;}
button {background-color:black;}
table {border:thick groove red; padding:"10"; }
a {color:#4863A0;}
h1,h2,h3,h4,h5,h6  { text-decoration:underline; color:#6960EC}
</style>
</head>
<body style="background-image:url(b6.jpeg)">
<h1 style="color:red">Welcome <?php echo $login_session_fname," ",$login_session_lname; ?></h1>
<h3>Personal Info : </h3>
<p>
<table>
<tr><td width=10%>First Name:</td><td width=90%><?php echo $login_session_fname; ?></td></tr>
<tr><td>Last Name:</td><td><?php echo $login_session_lname; ?></td></tr>
<tr><td>Sex:</td><td><?php echo $login_session_sex; ?></td></tr>
<tr><td>Contact Number:</td><td><?php echo $login_session_contact; ?></td></tr>
<tr><td>Birth date:</td><td><?php echo $login_session_bdate; ?></td>
<tr><td>Address:</td><td><?php echo $login_session_address; ?></td></tr>
<tr><td>Salary:</td><td><?php echo $login_session_salary; ?></td></tr>
<tr><td>Password:</td><td><?php echo $login_session_passcode; ?></td></tr> 
</table>
</p>
<p>
<button type=submit><a href="update_employee.php?ssn=<?php echo $login_session_ssn;?>">Update</a></button><br /><br /></p>
<p><h3>Work Info : </h3></p>
<p>
<table>
<tr><td width="10%">Employment Type:</td><td width="90%">Supervisor</td></tr>
<tr><td>Department Name:</td><td><?php echo $login_session_dname; ?></td></tr>
<tr><td>Department Number:</td><td><?php echo $login_session_dno; ?></td></tr>
<tr><td>Department Location:</td><td><?php echo $login_session_dlocation; ?></td></tr>
<tr><td>Purpose:</td><td><?php echo $login_session_purpose; ?></td></tr>
<tr><td>Open Time:</td><td><?php echo $login_session_open_time; ?></td>
<tr><td>Close Time:</td><td><?php echo $login_session_close_time; ?></td></tr>
</table>
</p>
<?php
if($ani>=1){
echo "<h3>Dependent Info : </h3>";			
?>
<button type=submit><a href="show_dependents.php?ssn=<?php echo $login_session_ssn;?>">Show Dependents</a></button><br /><br />
<?php
/*<table>
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
echo "<button type=submit><a href='dependent.php?essn=$login_session_ssn'>Insert New Dependent</a></button><br /><br />";
}
echo "<button type=submit><a href='workers.php?ssn=$login_session_ssn&&dno=$login_session_dno'>Insert New Worker</a></button><br /><br>";
?>
<button type=submit><a href="query.php?dno=<?php echo $login_session_dno;?>">Search</a></button>
<button type="submit"><a href="logout.php">Logout</a></button>
<?php
$_SESSION['prev']="welcome_employee.php?";
?>
</body>
</html>
