<html>
<head>
<title>Machinery</title>
<link rel="stylesheet" type="text/css" href="css/screen.css"/>
<link rel="shortcut icon" href="logo.jpg">

<style type="text/css">
tr { color:white;}
</style>
</head>
<body style="background-image:url(kerala.jpeg)">
<center>
<h3 style="color:black;text-decoration:underline;">Machinery</h3>
<form id="form2" action="machinery_post.php" method="post">
<fieldset>
<table>
<tr><td><label for="machine_id">MACHINE_ID:</label></Td><TD><input type="text" name="machine_id"/></td></tr>
<tr><td><label for="date_purchase">DATE OF PURCHASE</label></Td><TD><input type="text" name="date_purchase" value="YYYY-MM-DD"/></td></tr>
<tr><td><label for="model_no">MODEL NO:</label></Td><TD><input type="text" name="nodel_no"/></td></tr>
<tr><td><label for="dno">DEPARTMENT:</label></Td><TD><input type="text" name="dno"/></td></tr>
</table>
<button type="submit" >Submit</button>
</fieldset>
</form>
</center>
<h3><?php echo $_GET['message']; ?></h3>
</body>
</html>
