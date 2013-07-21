<html>
<head>
<title>Employee Form</title>
<style type="text/css">
* {color:white;}
</style>
<link rel="stylesheet" type="text/css" href="css/screen.css"/>
<link rel="shortcut icon" href="logo.jpg">

<body style="background-image:url(kerala.jpeg)">
<center>
<h3 style="color:black;text-decoration:underline">Employee form</h3>
<form id="form2" action="employee_post.php" method="post">
<fieldset>
<table>
<p><tr>
<td><label for="fname" style="color:white">Firstname:</label></td>
<td><input type="text" name="fname" /></td>
</tr></p>
<p><tr>
<td>
<label for="lname">
Lastname:
</label>
</td>
<td><input type="text" name="lname" /></td>
</tr></p>
<p><tr>
<td>
<label for"sex">
Sex:</label>
</td>
<td>
<input type="radio" name="sex" value="M" checked="checked"/>Male&nbsp;<input type="radio" name="sex" value="F"/>Female&nbsp;<input type="radio" name="sex" value="G"/>Other</td>
</tr></p>
<P><tr>
<td><label for="contact_no">
Contact_no: </label>
</td>
<td><input type="text" name="contact_no"/></td>
</tr></p>
<p><tr>
<td><label for="bdate">
Bdate:</label>
</td>
<td><input type="text" name="bdate"/></td></tr></p>
<p><tr><td><label for="ssn">Ssn:</label></td><td> <input type="text" name="ssn"/></td></tr></p>
<p><tr><td><label for="salary">Salary:</label></td><td><input type="text" name="salary"/></td></tr></p>
<p><tr><td><label for="address">Address:</label></td><td><textarea maxlength="50" name="address"></textarea></td></tr></p>
<p><tr><td><label for="join_date">Join_Date:</td></label><td><input type="text" name="join_date" value="YYYY-MM-DD"/></td></tr></p>
<p><tr><td><label for="leave_date">Leave_Date:</label></td><td><input type="text" name="leave_date" value="YYYY-MM-DD"></td></tr></p>
<p><tr><td><label for="dno">Department#:</label></td><td> <input type="text" name="dno"/></td></tr></p>
<p><tr><td><label for"passcode">PASSWORD:</label></td><td> <input type="password" name="passcode"/></td></tr></p>
<p><tr><td><label for="confirm_passcode">CONFIRM PASSWORD:</label></td><td> <input type="password" name="confirm_passcode"/></td></tr></p>

</table>
<p class="submit"><button type="submit" />Submit</button></p>
</fieldset>
</form>
</center>
<h3><?php echo $_GET['message']; ?></h3>
<center><button type=submit><a href="welcome_manager.php">Back</a></button></center>
</body>
</html>
