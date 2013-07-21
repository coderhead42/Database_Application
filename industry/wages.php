<html>
<head>
 <title>Wages Form</title>
 <link rel="stylesheet" type="text/css" href="css/screen.css"/>
 <link rel="shortcut icon" href="logo.jpg">

 <style type="text/css">
 tr {color:white;}
 </style>
 </head>
<body style="background-image:url(kerala.jpeg)">
<center>
<h3 style="color:black;text-decoration:underline;" >Wages Form</h3>
<form id="form2" action="wages_post.php" method="post">
<fieldset>
<table>
<tr><td><label for="dno">DEPARTMENT NUMBER:</label></td><td><input type="text" name="dno"/></td>
<tr><td><label for="hors_work">HOURS OF WORK:</td><td></label><input type="text" name="hours_work"/></td>
<tr><td><label for="wages_hour">WAGES PER HOUR:</td><td></label><input type="text" name="wages_hour"/></td>
</table>
<button type="submit">Submit</button>
</fieldset>
</form>
</center>
<h3><?php echo $_GET['message']; ?></h3>
</body>
</html>
