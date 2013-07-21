<html>
<head>
<body>
<form action="department_post.php" method="post">
<table>
<tr><td>DEPARTMENT NAME:</td><td><input type="text" name="dname"/></td></tr>
<tr><td>DEPARTMENT#:</td><td><input type="text" name="dnumber"/></td></tr>
<tr><td>DEPARTMENT LOCATION:</td><td><input type="text" name="dlocation"/></td></tr>
<tr><td>PURPOSE:</td><td><input type="text" name="purpose"/></td></tr>
<tr><td>OPEN TIME:</td><td><input type="text" name="open_time" value="HH:MM:SS"/></td></tr>
<tr><td>CLOSE TIME:</td><td><input type="text" name="close_time" VALUE="HH:MM:SS"/></td></tr>
<tr><td>PROFIT EARNED:</td><td><input type="text" name="profit_earned"/></td></tr>
<tr><td>MAINTAINENCE COST:</td><td><input type="text" name="maintain_cost"/></td></tr>

</table>
<input type="submit" />
</form>
<h3><?php echo $_GET['message']; ?></h3>
<button type=submit><a href="welcome_manager.php">Back</a></button>
</body>
</html>
