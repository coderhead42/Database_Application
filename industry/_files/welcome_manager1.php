<?php
/*include('lock.php');*/
?>
<html>
<head>
<title>Welcome <?php echo $login_session_fname," ",$login_session_lname; ?></title>
<link rel="shortcut icon" href="logo.jpg">
<style type="text/css">
tr td {background-color:black;color:white;}
button {background-color:black;}
a {color:#808080;}
</style>
</head>
<body style="background-image:url(b4.jpeg)">
<h1 style="color:red;text-decoration:blink">Welcome Manager <?php echo $login_session_fname," ",$login_session_lname; ?></h1>
<fieldset>
<legend>
<h3 >Personal Info : </h3>
</legend>
<table border=1 style="border:thick groove red" width="100%">
<tr><td width="10%">Firstname:</td><td width="90%"><?php echo $login_session_fname; ?></td></tr>
<tr><td>Lastname:</td><td><?php echo $login_session_lname; ?></td></tr>
<tr><td>Sex:</td><td><?php echo $login_session_sex; ?></td></tr>
<tr><td>Office no: </td><td><?php echo $login_session_office_no; ?></td></tr>
<tr><td>Home no: </td><td><?php echo $login_session_home_no; ?></td></tr>
<tr><td>Bdate:</td><td><?php echo $login_session_bdate; ?></td>
<tr><td>Address:</td><td><?php echo $login_session_address; ?></td></tr>
<tr><td>Password:</td><td><?php echo $login_session_passcode; ?></td></tr> 
</table>
</fieldset>
<br/>
<button type=submit ><a href="update_manager.php">Update</a></button><br /><br />
<button type=submit><a href="query.php">Search</a></button><br /><br />
<button type=submit><a href="department.php">Insert New Department</a></button><br /><br>
<button type=submit><a href="customer.php">Insert New Customer</a></button><br /><br>
<button type=submit><a href="employee.php">Insert New Employee</a></button><br /><br>
<button type=submit><a href="workers.php">Insert New Worker</a></button><br /><br>
<button type=submit><a href="machinery.php">Insert New Machinery</a></button><br /><br>
<button type=submit><a href="profitable_customer.php">Insert New Profitable Customer</a></button><br /><br>
<button type=submit><a href="transport.php">Insert New Transport Vehicle</a></button><br /><br>
<button type=submit><a href="orders.php">Insert New Order</a></button><br /><br>
<button type=submit><a href="wages.php">Insert New Wages</a></button><br /><br>
<button type=submit><a href="logout.php">Logout</a></button><br /><br>
</body>
</html>
