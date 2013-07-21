<html>
<head>
<body>
<form action="dealer_post.php" method="post">
<table>
<tr><td>ID:</td><td><input type="text" name="id"/></td></tr>
<tr><td>TYPE:</td><td><input type="text" name="type"/></td></tr>
<tr><td>NAME:</td><td><input type="text" name="name"/></td></tr>
<TR><TD>SEX:</td><td><input type="radio" name="sex" checked="checked" value='M'/>Male&nbsp;<input type="radio" name="sex" value='F'/>Female&nbsp;<input type="radio" name="sex" value='G'/>Other</td></tr>
<TR><TD>ADDRESS:</td><td><textarea name="address" maxlength="50"></textarea></td></tr>
<tr><td>PHONE#:</td><td><input type="text" name="phone_no"/></td></tr>
<tr><td>PAYMENT TO GIVE:</td><td><input type="text" name="payment_to_give"/></td></tr>
</table>
<input type="submit" />
</form>
<h3><?php echo $_REQUEST['message']; ?></h3>
<button type=submit><a href="welcome_manager.php">Back</a></button>
</body>
</html>
