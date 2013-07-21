<?php
$ssn=$_GET['ssn'];
$dno=$_GET['dno'];
?>
<html>
<head>
<title>Worker Form</title>
<link rel="stylesheet" type="text/css" href="css/screen.css"/>
<link rel="shortcut icon" href="logo.jpg">

<style type="text/css">
tr { color:white;}
</style>
</head>
<body style="background-image:url(kerala.jpeg)">
<center>
<h3 style="color:black;text-decoration:underline;">Worker Form</h3>
<form id="form2" action="workers_post.php?ssn=<?php echo $ssn; ?>&&dno=<?php echo $dno; ?>" method="post">
<fieldset>
<table>
<tr>
<td><label for="fname">Firstname:</label></td>
<td><input type="text" name="fname" /></td>
</tr>
<tr>
<td><label for="lname">
Lastname:</label>
</td>
<td><input type="text" name="lname" /></td>
</tr>
<tr>
<td><label for="sex">
Sex:</label>
</td>
<td>
<input type="radio" name="sex" value="M" checked="checked"/>Male&nbsp;<input type="radio" name="sex" value="F"/>Female&nbsp;<input type="radio" name="sex" value="G"/>Other</td>
</tr>
<tr>
<td><label for="phone_no">
Contact_no: </label>
</td>
<td><input type="text" name="phone_no"/></td>
</tr>
<tr>
<td><label for="bdate">
Bdate:</label>
</td>
<td><input type="text" name="bdate"/></td>
<tr><td><label for="ssn">Ssn:</label></td><td> <input type="text" name="ssn"/></td></tr>
<tr><td><label for="address">Address:</label></td><td><textarea maxlength="50" name="address"></textarea></td></tr>
<tr><td><label for="join_date">Join_Date:</label></td><td><input type="text" name="join_date" value="YYYY-MM-DD"/></td></tr>
<tr><td><label for="leave_date">Leave_Date:</td><td><input type="text" name="leave_date" value="YYYY-MM-DD"></td></tr>
<tr><td><label for="dno">Department#:</label></td><td> <input type="text" name="dno"/></td></tr>
<tr><td><label for="super_ssn">SUPERVISOR SSN:</label></td><td> <input type="text" name="super_ssn"/></td></tr>
<tr><td>PASSWORD</td><td><input type="password" name="passcode"/></td></tr>
<tr><td>CONFIRM PASSWORD</td><td><input type="password" name="confirm_passcode"/></td></tr>
</table>
<button type="submit">Submit</button>
</fieldset>
</form>
</center>
<h3><?php echo $_GET['message']; ?></h3>
</body>
</html>
