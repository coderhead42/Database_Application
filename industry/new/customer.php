<html>
<head>
<body>
<form action="customer_post.php" method="post">
<table>
<tr><td>FIRSTNAME:</td><td><input type="text" name="fname"/></td></tr>
<tr><td>LASTNAME:</td><td><input type="text" name="lname"/></td></tr>
<TR><TD>SEX:</td><td><input type="radio" name="sex" checked="checked" value='M'/>Male&nbsp;<input type="radio" name="sex"  value='F'/>Female&nbsp;<input type="radio" name="sex"  value='G'/>Other</td></tr>
<TR><TD>ADDRESS:</td><td><textarea name="address" maxlength="50"></textarea></td></tr>
<TR><TD>PHONE NUMBER:</td><td><input type="text" name="phone_no"/></td></tr>
<TR><TD>PAYMENT PENDING:</td><td><input type="text" name="payment_ending"/></td></tr>
<TR><TD>PROFITABLE:</td><td><input type="text" name="profitable"/></td></tr>
<TR><TD>ESSN:</td><td><input type="text" name="essn"/></td></tr>
</table>
<input type="submit" />
</form>
<h3><?php echo $_GET['message']; ?></h3>
<button type=submit><a href="welcome_manager.php">Back</a></button>
</body>
</html>
