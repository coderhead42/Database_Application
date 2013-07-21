<html>
<head>
<body>
<form action="profitable_customer_post.php" method="post">
<table>
<TR><TD>ID:</td><td><input type="text" name="pid"/></td></tr>
<TR><TD>BIRTH DATE:</td><td><input type="text" name="bdate"/></td></tr>
<TR><TD>ANNIVERSARY:</td><td><input type="text" name="ann_date"/></td></tr>
</table>
<input type="submit" />
</form>
<h3><?php echo $_GET['message']; ?></h3>
<button type=submit><a href="welcome_manager.php">Back</a></button>
</body>
</html>
