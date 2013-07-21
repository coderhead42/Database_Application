<html>
<head>
<title>Transport</title>
<link rel="stylesheet" type="text/css" href="css/screen.css"/>
<link rel="shortcut icon" href="logo.jpg">

<style type="text/css">
tr { color:white;}
</style>
</head>
<body style="background-image:url(kerala.jpeg)">
<center>
<h3 style="color:black;text-decoration:underline;">Transport Form</h3>
<form id="form2" action="transport_post.php" method="post">
<fieldset>
<table>
<tr><td><label for="type">TYPE OF TRANSPORT:</label></td><td><input type="text" name="type"/></td></tr>
<tr><td><label for="model_no">MODEL#:</label></td><td><input type="text" name="model_no"/></td></tr>
<tr><td><label for="reg_no">REGISTRATION#:</label></td><td><input type="text" name="reg_no"/></td></tr>
<tr><td><label for="essn">ESSN:</label></td><td><input type="text" name="essn"/></td></tr>
</table>

<button type="submit" >Submit</button>
</fieldset>
</form>
</center>
<h3><?php echo $_GET['message']; ?></h3>
<center><button type=submit><a href="welcome_manager.php">Back</a></button></center>
</body>
</html>
