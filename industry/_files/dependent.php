<html>
<head>
<title>Dependent Form</title>
<link rel="stylesheet" type="text/css" href="css/screen.css"/>
<link rel="shortcut icon" href="logo.jpg">

<style type="text/css">
tr { color:white;}
</style>
</head>
<body style="background-image:url(kerala.jpeg)">
<center>
<h3 style="color:black;text-decoration:underline;">Dependent Form</h3>
<form id="form2" action="dependent_post.php" method="post">
<fieldset>
<table width="50%" height="50%">
<p><tr><td><label for="essn">ESSN:</label></td><td><input type="text" name="essn"></td></tr></p>
<tr>&nbsp;</tr>
<p><tr><td><label for="name">NAME:</label></td><td><input type="text" name="name"></td></tr></p>
<p><tr><td><label for="sex">SEX:<label></td><td><input type="radio" name="sex" value='M' checked="checked">Male&nbsp;<input type="radio" name="sex" value='F'>Female&nbsp;<input type="radio" name="sex" value='G'>Other</td></tr></p>
<p><tr><td><label for="bdate">BIRTH DATE:</label></td><td><input type="text" name="bdate"></td></tr></p>
<p><tr><td><label for="relationship">RELATIONSHIP:</label></td><td><input type="text" name="relationship"></td></tr></p>
</table>
<p><button type="submit">Submit</button></p>
</fieldset>
</form>
</center>
<h3><?php echo $_GET['message']; ?></h3>
</body>
</html>
