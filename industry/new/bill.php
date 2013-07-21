<html>
<head>
<body>
<form action="bill_post.php" method="post">
<table>
<tr><td>BILL#:</TD><td><input type="text" name="bill_no"/></td></tr>
<tr><td>COST:</TD><td><input type="text" name="cost"/></td></tr>
<tr><td>DUE DATE:</TD><td><input type="text" name="due_date" value="YYYY-MM-DD"/></td></tr>
<tr><td>PENALTY#:</TD><td><input type="text" name="penalty"/></td></tr>
<tr><td>DATE OF PAYMENT#:</TD><td><input type="text" name="date_of_payment"/></td></tr>
<tr><td>WORKER SSN:</TD><td><input type="text" name="wssn"/></td></tr>
</table>
<input type="submit" />
</form>
<h3><?php echo $_GET['message']; ?></h3>
<button type=submit><a href="welcome_manager.php">Back</a></button>
</body>
</html>
