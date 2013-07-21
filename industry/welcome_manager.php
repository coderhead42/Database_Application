<?php
include('lock.php');
$ses_sql=mysql_query("select * from manager where ssn='$user_check' ");
$login_session_fname=mysql_result($ses_sql,0,"fname");
$login_session_lname=mysql_result($ses_sql,0,"lname");
$login_session_sex=mysql_result($ses_sql,0,"sex");
$login_session_office_no=mysql_result($ses_sql,0,"office_no");
$login_session_home_no=mysql_result($ses_sql,0,"home_no");
$login_session_bdate=mysql_result($ses_sql,0,"bdate");
//$login_session_salary=mysql_result($ses_sql,0,"salary");
$login_session_address=mysql_result($ses_sql,0,"address");
//$login_session_joindate=mysql_result($ses_sql,0,"join_date");
//$login_session_dno=mysql_result($ses_sql,0,"dno");
//$login_session_leavedate=mysql_result($ses_sql,0,"leave_date");
$login_session_passcode=mysql_result($ses_sql,0,"passcode");
//$login_session_office_no=mysql_result($ses_sql,0,"office_no");
//$login_session_home_no=mysql_result($ses_sql,0,"home_no");
//$login_session_dlocation=mysql_result($ses_sql,0,"dlocation");
//$login_session_purpose=msql_result($ses_sql,0,"purpose");
//$login_session_open_time=msql_result($ses_sql,0,"open_time");
//$login_session_close_time=msql_result($ses_sql,0,"close_time");
//$login_session_dname=msql_result($ses_sql,0,"dname");
/*$ses_sqli3=mysql_query("select * from dependents where essn='$login_session__ssn' ");
$ani=mysql_num_rows($ses_sql3);
$login_session_dname=mysql_result($ses_sql3,0,"name");
$login_session_dsex=mysql_result($ses_sql3,0,"sex");
$login_session_dbdate=mysql_result($ses_sql3,0,"bdate");
$login_session_drelation=mysql_result($ses_sql3,0,"relationship");
*/
echo $_GET['message'];
?>
<html>
<head>
<title>Welcome Manager<?php echo $login_session_fname," ",$login_session_lname; ?></title>
<link rel="shortcut icon" href="logo.jpg">
<style type="text/css">
tr td {background-color:black;color:white;}
button {background-color:black;}
table {border:thick groove red;}
a {color:#808080;}
h1,h2,h3,h4,h5,h6  { text-decoration:underline; color:yellow}
</style>
</head>
<body style="background-image:url(b4.jpeg)">
<h1 style="color:red">Welcome Manager <?php echo $login_session_fname," ",$login_session_lname; ?></h1>
<h3>Personal Info : </h3>
<table border=1>
<tr><td width=10%>Firstname:</td><td width="90%"><?php echo $login_session_fname; ?></td></tr>
<tr><td>Lastname:</td><td><?php echo $login_session_lname; ?></td></tr>
<tr><td>Sex:</td><td><?php echo $login_session_sex; ?></td></tr>
<tr><td>Office no: </td><td><?php echo $login_session_office_no; ?></td></tr>
<tr><td>Home no: </td><td><?php echo $login_session_home_no; ?></td></tr>
<tr><td>Bdate:</td><td><?php echo $login_session_bdate; ?></td>
<tr><td>Address:</td><td><?php echo $login_session_address; ?></td></tr>
<tr><td>Password:</td><td><?php echo $login_session_passcode; ?></td></tr> 
</table>
<h3>Departments in the Organisation :</h3>
<?php 
echo "<button type=submit><a href='department.php'>Insert New Department</a></button><br /><br>";
echo "<ul>";
$ses_sql=mysql_query("select * from department");
$rows=mysql_num_rows($ses_sql);
$i=0;
while($i<$rows){
                $u_dnumber=mysql_result($ses_sql,$i,"dnumber");
                $u_dlocation=mysql_result($ses_sql,$i,"dlocation");
                $u_purpose=mysql_result($ses_sql,$i,"purpose");
                $u_open_time=mysql_result($ses_sql,$i,"open_time");
                $u_close_time=mysql_result($ses_sql,$i,"close_time");
                $u_profit_earned=mysql_result($ses_sql,$i,"profit_earned");
                $u_maintain_cost=mysql_result($ses_sql,$i,"maintain_cost");
                $u_dname=mysql_result($ses_sql,$i,"dname");
                $u_profitable=mysql_result($ses_sql,$i,"profitable");
                echo "<li> $u_dname :- ";
		$t=$u_dname.".php";
		echo "<button type=submit><a href='$t'>View Department Profile</a></button><br /><br />";
		echo "<table border=1>
<tr><td width=10%>Department Location:</td><td width=90%>$u_dlocation</td><td></tr>
<tr><td>Purpose:</td><td>$u_purpose</td></tr>
<tr><td>Open Time:</td><td>$u_open_time</td></tr>
<tr><td>Close Time: </td><td>$u_close_time</td></tr>
<tr><td>Profit Earned:</td><td>$u_profit_earned</td></tr>
<tr><td>Maintain Cost:</td><td>$u_maintain_cost</td></tr>
<tr><td>Profitable:</td><td>$u_profitable</td></tr>";
                echo "</table>";
                echo "<br />";
		echo "<button type=submit><a href='department_update.php?dno=$u_dnumber'>Update Department</a></button><br /><br />";
		$sql1="select * from wages where dno='$u_dnumber' ";
		$res=mysql_query($sql1);
		$cn=mysql_num_rows($res);
		if($cn==1){
		echo "<h5> Wages of this Department </h5>";
		$hours=mysql_result($res,0,"hours_work");
		$wages=mysql_result($res,0,"wages_hour");
		echo "<table>
		<tr><td>Hours Of Work:</td><td>$hours</td></tr>
		<tr><td>Wages per Hour:</td><td>$wages</td></tr>
		</table>";
		echo "<button type=submit><a href='wages_update.php?dno=$u_dnumber'>Update Wages of this Department</a></button><br /><br />";
		}echo "</li>";
		$i++;
}
echo "</ul>";
?>
<h3>Employees in the Organisation :</h3>
<button type=submit><a href="employee.php">Insert New Employee</a></button><br /><br>
<button type=submit><a href="workers.php">Insert New Worker</a></button><br /><br>
<button type=submit><a href="query.php">Search Existing Database</a></button><br /><br>
<?php
/*<button type=submit><a href="query.php">Search</a></button><br /><br />
<button type=submit><a href="customer.php">Insert New Customer</a></button><br /><br>
<button type=submit><a href="machinery.php">Insert New Machinery</a></button><br /><br>
<button type=submit><a href="profitable_customer.php">Insert New Profitable Customer</a></button><br /><br>
<button type=submit><a href="transport.php">Insert New Transport Vehicle</a></button><br /><br>
<button type=submit><a href="orders.php">Insert New Order</a></button><br /><br>
<button type=submit><a href="wages.php">Insert New Wages</a></button><br /><br>
*/
$_SESSION['prev']="welcome_manager.php?"
?>
<button type=submit ><a href="logout.php" style="color:red">Logout</a></button><br /><br>
</body>
</html>
