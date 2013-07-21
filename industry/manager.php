<html>
<head>
<title>Manager Form</title>
<link rel="stylesheet" type="text/css" href="css/screen.css"/>
<link rel="shortcut icon" href="logo.jpg">

<style type="text/css">
tr { color:white;}
</style>
</head>
<body style="background-image:url(kerala.jpeg)">
<center>
<h3 style="color:black;text-decoration:underline;">Manager Form</h3>
<form id="form2" action="manager_post.php" method="post">
<fieldset>
<table>
<tr>
<td><label for="fname">Firstname:</label></td>
<td><input type="text" name="fname" /></td>
</tr>
<tr>
<td><label for="lname">
Lastname:</label>
</td>
<td><input type="text" name="lname" /></td>
</tr>
<tr>
<td><label for="sex">
Sex:<label>
</td>
<td>
<input type="radio" name="sex" value="M" checked="checked"/>Male&nbsp;<input type="radio" name="sex" value="F"/>Female&nbsp;<input type="radio" name="sex" value="G"/>Other</td>
</tr>
<tr><td><label for="address">Address:</label></td><td><textarea maxlength="50" name="address"></textarea></td></tr>
<tr>
<td><label for="offic_no">
Office_no: </label>
</td>
<td><input type="text" name="office_no"/></td>
</tr>
<tr><td><label for="home_no">
Home_no: </label>
</td>
<td><input type="text" name="home_no"/></td>
</tr>
<tr><td><label for="super_id">Super_id:</label></td><td><input type="text" name="super_id"/></td></tr>
<tr><td><label for="passcode">PASSWORD:</label></td><td><input type="password" name="passcode"/></td></tr>
<tr><td><label for="confirm_passcode">CONFIRM PASSWORD:</label></td><td><input type="password" name="confirm_passcode"/></td></tr>
</table>
<button type="submit" >Submit</button>
</fieldset>
</form>
<center>
<h3><?php echo $_GET['message']; ?></h3>
</body>	
</html>
