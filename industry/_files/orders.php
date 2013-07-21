<html>
<head>
<title>Order Form</title>
<link rel="stylesheet" type="text/css" href="css/screen.css"/>
<link rel="shortcut icon" href="logo.jpg">

<style type="text/css">
tr { color:white;}
</style>
</head>
<body style="background-image:url(kerala.jpeg)">
<center>
<h3 style="color:black;text-decoration:underline;">Order Form</h3>
<form id="form2" action="orders_post.php" method="post">
<fieldset>
<table>
<tr><td>DEALER ID:</TD><TD><INPUT TYPE="text" name="dealer_id"/></td></tr> 
<tr><td>ORDER NUMBER:</TD><TD><INPUT TYPE="text" name="order_no"/></td></tr> 
<tr><td>AMOUNT OF ORDER(Kg):</TD><TD><INPUT TYPE="text" name="amount_order"/></td></tr> 
<tr><td>COST PER Kg:</TD><TD><INPUT TYPE="text" name="cost_kg"/></td></tr> 
<tr><td>DATE OF ORDER:</TD><TD><INPUT TYPE="text" name="date_of_order" value="YYYY-MM-DD"/></td></tr> 
<tr><td>DATE OF DELIVERY:</TD><TD><INPUT TYPE="text" name="date_of_delivery" value="YYYY-MM-DD"/></td></tr> 
</table>

<button type="submit" >Submit</button>
</center>
</fieldset>
</form>
<h3><?php echo $_GET['message']; ?></h3>
</body>
</html>
