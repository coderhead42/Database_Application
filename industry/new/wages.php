<html>
<head>
<body>
<form action="wages_post.php" method="post">
<table>
<tr><td>DEPARTMENT NUMBER:</td><td><input type="text" name="dno"/></td>
<tr><td>HOURS OF WORK:</td><td><input type="text" name="hours_work"/></td>
<tr><td>WAGES PER HOUR:</td><td><input type="text" name="wages_hour"/></td>
</table>
<input type="submit" />
</form>
<h3><?php echo $_GET['message']; ?></h3>
<button type=submit><a href="welcome_manager.php">Back</a></button>
</body>
</html>
