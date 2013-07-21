<?php
include('lock.php');
if($_SERVER["REQUEST_METHOD"]=="POST"){
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$sex=$_POST['sex'];
	$contact_no=$_POST['contact_no'];
	$bdate=$_POST['bdate'];
	$address=$_POST['address'];
	$passcode=$_POST['passcode'];
	$sql="UPDATE employee SET fname='$fname',lname='$lname',sex='$sex',contact_no='$contact_no',bdate='$bdate',address='$address',passcode='$passcode' WHERE ssn='$user_check' ";
	mysql_query($sql);
	mysql_close();
	header('Location: welcome.php');
}
?>
<html>
<body>
<form action="" method="post">
<table>
<tr><td>Firstname:</td><td><input type="text" name="fname" value="<?php echo $login_session_fname; ?>" /></td></tr>
<tr><td>Lastname:</td><td><input type="text" name="lname" value="<?php echo $login_session_lname; ?>" /></td></tr>
<tr><td>Sex:</td><td><input type="radio" name="sex" value="M" checked="checked"/>Male&nbsp;<input type="radio" name="sex" value="F"/>Female&nbsp;</td></tr>
<tr><td>Contact_no: </td><td><input type="text" name="contact_no" value="<?php echo $login_session_contact; ?>" /></td></tr>
<tr><td>Bdate:</td><td><input type="text" name="bdate" value="<?php echo $login_session_bdate; ?>" /></td>
<tr><td>Address:</td><td><textarea maxlength="50" name="address"><?php echo $login_session_address; ?></textarea></td></tr>
<tr><td>Password:</td><td><input type="text" name="passcode" value="<?php echo $login_session_passcode; ?>" /></td></tr> 
</table>
<input type="submit" />
</form>
</body>
</html>
