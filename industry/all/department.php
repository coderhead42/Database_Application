<html>
<head>
<title>Department Form</title>
<title>Dependent Form</title>
<link rel="stylesheet" type="text/css" href="css/screen.css"/>
<link rel="shortcut icon" href="logo.jpg">

<style type="text/css">
tr { color:white;}
</style>
</head>
<body style="background-image:url(kerala.jpeg)">
<center>
<h3 style="color:black;text-decoration:underline;">Department Form</h3>
<form id="form2" action="department_post.php" method="post">
<fieldset>
<table>
<tr><td><label for="dname">DEPARTMENT NAME:</label></td><td><input type="text" name="dname"/></td></tr>
<tr><td><label for="dnumber">DEPARTMENT#:</label></td><td><input type="text" name="dnumber"/></td></tr>
<tr><td><label for="dlocation">DEPARTMENT LOCATION:</label></td><td><input type="text" name="dlocation"/></td></tr>
<tr><td><label for="purpose">PURPOSE:</label></td><td><input type="text" name="purpose"/></td></tr>
<tr><td><label for="open_time">OPEN TIME:</label></td><td><input type="text" name="open_time" value="HH:MM:SS"/></td></tr>
<tr><td><label for="close_time">CLOSE TIME:</label></td><td><input type="text" name="close_time" VALUE="HH:MM:SS"/></td></tr>
<tr><td><label for="profit_earned">PROFIT EARNED:</label></td><td><input type="text" name="profit_earned"/></td></tr>
<tr><td><label for="maintain_cost">MAINTAINENCE COST:</label></td><td><input type="text" name="maintain_cost"/></td></tr>

</table>
<button type="submit">Submit</button>
</fieldset>
</form>
</center>
<h3><?php echo $_GET['message']; ?></h3>
</body>
</html>
