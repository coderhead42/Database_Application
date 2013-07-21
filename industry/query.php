<?php
include('lock.php');
$dno=$_GET['dno'];
?>
<html>
<head><title>query</title>
<link rel="stylesheet" type="text/css" href="css/screen.css"/>
<link rel="shortcut icon" href="logo.jpg">

<style type="text/css">
tr { color:white;}
</style>
</head>
<body style="background-image:url(kerala.jpeg)">
<center>
<h3 style="color:black;text-decoration:underline;">Queries</h3>
<form id="form2" action="query_result.php?dno=<?php echo $dno;?>" method="post">
<fieldset>
<table>
<tr><td><label for="fname">Firstname:</label></td><td><input type="text" name="fname" /></td></tr>
<tr><td><label for="lname">Lastname:</label></td><td><input type="text" name="lname" /></td></tr>
<tr><td><label for="sex">Sex:</label></td><td><input type="radio" name="sex" value="M" />Male&nbsp;<input type="radio" name="sex" value="F"/>Female&nbsp;<input type="radio" name="sex" value="G"/>Other</td></tr>
<tr><td><label for="contact_no">Contact_no: </label></td><td><input type="text" name="contact_no" /></td></tr>
<tr><td><label for="bdate">Bdate:</label></td><td><input type="text" name="bdate" /></td>
<tr><td><label for="address">Address:</label></td><td><textarea maxlength="50" name="address"></textarea></td></tr>
<tr><td><label for="ssn">Ssn:</label></td><td><input type="text" name="ssn" /></td></tr> 
<tr><td><label for="join_date">Join Date:</label></td><td><input type="text" name="join_date" /></td></tr> 
<tr><td><label for="dno">Department No:</label></td><td><input type="text" name="dno" /></td></tr> 
<tr><td><label for="leave_date">Leave Date:</label></td><td><input type="text" name="leave_date" /></td></tr> 
<?php
if($_SESSION['worker']=="true")
echo "<tr><td>Superviser Ssn:</td><td><input type='text' name='super_ssn' /></td></tr> ";
?>
</table>
<?php
if($_SESSION['manager']=="true"||$_SESSION['employee']=="true")
echo "<input type='checkbox' name='all' value='true' > Show all <br> ";
?>

<button type="submit" >Submit</button>
</fieldset>
</form>
</body>
</html>
