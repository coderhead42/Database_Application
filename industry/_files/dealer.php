<html>
<head>
<title>Dealer form</title>
<link rel="stylesheet" type="text/css" href="css/screen.css"/>
<link rel="shortcut icon" href="logo.jpg">

<style type="text/css">
tr { color:white;}
</style>

</head>
<body style="background-image:url(kerala.jpeg)">
<center>
<h3 style="color:black;text-decoration:underline;">Dealer Form</h3>
<form id="form2" action="dealer_post.php" method="post">
<fieldset>
<table>
<tr><td><label for="id">ID:</label></td><td><input type="text" name="id"/></td></tr>
<tr><td><label for="type">TYPE:</label></td><td><input type="text" name="type"/></td></tr>
<tr><td><label for="name">NAME:</label></td><td><input type="text" name="name"/></td></tr>
<TR><TD><label for="sex">SEX:</label></td><td><input type="radio" name="sex" checked="checked" value='M'/>Male&nbsp;<input type="radio" name="sex" value='F'/>Female&nbsp;<input type="radio" name="sex" value='G'/>Other</td></tr>
<TR><TD><label for="address">ADDRESS:</label></td><td><textarea name="address" maxlength="50"></textarea></td></tr>
<tr><td><label for="phone_no">PHONE#:</label></td><td><input type="text" name="phone_no"/></td></tr>
<tr><td><label for="payment_to_give">PAYMENT TO GIVE:</label></td><td><input type="text" name="payment_to_give"/></td></tr>
</table>
<p><button type="submit" >Submit</button></p>
</fieldset>
</form>
</center>
<h3><?php echo $_REQUEST['message']; ?></h3>
</body>
</html>
