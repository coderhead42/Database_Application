<html>
<head>
<body>
<form action="machinery_post.php" method="post">
<table>
<tr><td>MACHINE_ID:</Td><TD><input type="text" name="machine_id"/></td></tr>
<tr><td>DATE OF PURCHASE</Td><TD><input type="text" name="date_purchase" value="YYYY-MM-DD"/></td></tr>
<tr><td>MODEL NO:</Td><TD><input type="text" name="nodel_no"/></td></tr>
<tr><td>DEPARTMENT:</Td><TD><input type="text" name="dno"/></td></tr>
</table>
<input type="submit" />
</form>
<h3><?php echo $_GET['message']; ?></h3>
<button type=submit><a href="welcome_manager.php">Back</a></button>
</body>
</html>
