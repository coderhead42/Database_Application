<html>
<head>
<title>Bill Form</title>
<link rel="stylesheet" type="text/css" href="css/screen.css"/>
<link rel="shortcut icon" href="logo.jpg">

<style type="text/css">
tr {color:white;}
</style>
</head>
<body style="background-image:url(kerala.jpeg)">

<center>
<h3 style="text-decoration:underline;color:black">Bill form</h3>
<form id="form2"action="bill_post.php" method="post">
<fieldset>
<table>
<tr><td><label for="bill_no">BILL#:</label></TD><td><input type="text" name="bill_no"/></td></tr>
<tr><td><label for="cost"> COST:</label></TD><td><input type="text" name="cost"/></td></tr>
<tr><td><label for="due date">DUE DATE:</label></TD><td><input type="text" name="due_date" value="YYYY-MM-DD"/></td></tr>
<tr><td><label for="penalty">PENALTY#:</label></TD><td><input type="text" name="penalty"/></td></tr>
<tr><td><label for="date_of_payment">DATE OF PAYMENT#:</label></TD><td><input type="text" name="date_of_payment"/></td></tr>
<tr><td><label for="wssn">WORKER SSN:</label></label></TD><td><input type="text" name="wssn"/></td></tr>
</table>
<button type="submit">Submit</button>
</fieldset>
</form>
</center>
<h3><?php echo $_GET['message']; ?></h3>
<center>
<button type=submit><a href="welcome_manager.php">Back</a></button>
</center>
</body>
</html>
