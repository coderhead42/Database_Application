<html>
<head>
<body>
<form action="transport_post.php" method="post">
<table>
<tr><td>TYPE OF TRANSPORT:</td><td><input type="text" name="type"/></td></tr>
<tr><td>MODEL#:</td><td><input type="text" name="model_no"/></td></tr>
<tr><td>REGISTRATION#:</td><td><input type="text" name="reg_no"/></td></tr>
<tr><td>ESSN:</td><td><input type="text" name="essn"/></td></tr>
</table>

<input type="submit" />
</form>
<h3><?php echo $_GET['message']; ?></h3>
<button type=submit><a href="welcome_manager.php">Back</a></button>
</body>
</html>
