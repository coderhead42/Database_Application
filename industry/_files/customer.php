<html>
<head>
<title>Customer Form</title>
<link rel="stylesheet" type="text/css" href="css/screen.css"/>
<link rel="shortcut icon" href="logo.jpg">
<style type="text/css">
tr {color:white}
</style>
</head>
<body style="background-image:url(kerala.jpeg)">
<center>
<h3 style="text-decoration:underline;coor:black;">Customer Form</h3>
<form id="form2" action="customer_post.php" method="post">
<fieldset>
<table>
<tr><td><label for="fname">FIRSTNAME:</label></td><td><input type="text" name="fname"/></td></tr>
<tr><td><label for="lname">LASTNAME:</label></td><td><input type="text" name="lname"/></td></tr>
<TR><TD><label for="sex">SEX:</label></td><td><input type="radio" name="sex" checked="checked" value='M'/>Male&nbsp;<input type="radio" name="sex"  value='F'/>Female&nbsp;<input type="radio" name="sex"  value='G'/>Other</td></tr>
<TR><TD><label for="address">ADDRESS:</label></td><td><textarea name="address" maxlength="50"></textarea></td></tr>
<TR><TD><label for="phone_no">PHONE NUMBER:</label></td><td><input type="text" name="phone_no"/></td></tr>
<TR><TD><label for="payment_pending">PAYMENT PENDING:</label></td><td><input type="text" name="payment_ending"/></td></tr>
<TR><TD><label for="profitable">PROFITABLE:</label></td><td><input type="text" name="profitable"/></td></tr>
<TR><TD><label for="essn">ESSN:</label></td><td><input type="text" name="essn"/></td></tr>
</table>
<p><button type="submit">Submit</button></p>
</fieldset>
</form>
<h3><?php echo $_GET['message']; ?></h3>
</body>
</html>
