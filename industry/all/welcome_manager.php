<?php
include('lock.php');
?>
<html>
<body>
<h1>Welcome Manager <?php echo $login_session_fname," ",$login_session_lname; ?></h1>
<h3>Personal Info : </h3>
<table>
<tr><td>Firstname:</td><td><?php echo $login_session_fname; ?></td></tr>
<tr><td>Lastname:</td><td><?php echo $login_session_lname; ?></td></tr>
<tr><td>Sex:</td><td><?php echo $login_session_sex; ?></td></tr>
<tr><td>Office no: </td><td><?php echo $login_session_office_no; ?></td></tr>
<tr><td>Home no: </td><td><?php echo $login_session_home_no; ?></td></tr>
<tr><td>Bdate:</td><td><?php echo $login_session_bdate; ?></td>
<tr><td>Address:</td><td><?php echo $login_session_address; ?></td></tr>
<tr><td>Password:</td><td><?php echo $login_session_passcode; ?></td></tr> 
</table>

<button type=submit><a href="update_manager.php">Update</a></button><br /><br />
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
