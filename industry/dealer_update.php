<?php
include('lock.php');
if($_SERVER["REQUEST_METHOD"]=="GET"){
        $id=$_GET['did'];
        $sql="SELECT * from dealer where id='$id' ";
        $ses_sql=mysql_query($sql);
        $row=mysql_num_rows($ses_sql);
        if($row!=1)
        header("location: factory.php");
        else{
	$u_type=mysql_result($ses_sql,$i,"type");
        $u_name=mysql_result($ses_sql,$i,"name");
        $u_sex=mysql_result($ses_sql,$i,"sex");
        $u_address=mysql_result($ses_sql,$i,"address");
        $u_phone_no=mysql_result($ses_sql,$i,"phone_no");
        $u_payment_to_give=mysql_result($ses_sql,$i,"payment_to_give");
        }
}
?>
<html>
<head>
<title>Dealer</title>
<link rel="stylesheet" type="text/css" href="css/screen.css"/>
<link rel="shortcut icon" href="logo.jpg">

<style type="text/css">
tr { color:white;}
</style>

</head>
<body style="background-image:url(kerala.jpeg)">
<center>
<h3 style="color:black;text-decoration:underline;">Dealer Form</h3>
<form id="form2" action="dealer_update_post.php?did=<?php echo $id; ?>" method="post">
<fieldset>
<table>
<tr><td><label for="type">TYPE:</label></td><td><input type="text" name="type" value="<?php echo $u_type; ?>"/></td></tr>
<tr><td><label for="name">NAME:</label></td><td><input type="text" name="name" value="<?php echo $u_name; ?>"/></td></tr>
<TR><TD><label for="sex">SEX:</label></td><td><input type="radio" name="sex" checked="checked" value='M'/>Male&nbsp;<input type="radio" name="sex" value='F'/>Female&nbsp;<input type="radio" name="sex" value='G'/>Other</td></tr>
<TR><TD><label for="address">ADDRESS:</label></td><td><textarea name="address" maxlength="50"><?php echo $u_address ?></textarea></td></tr>
<tr><td><label for="phone_no">PHONE#:</label></td><td><input type="text" name="phone_no" value="<?php echo $u_phone_no ?>" /></td></tr>
<tr><td><label for="payment_to_give">PAYMENT TO GIVE:</label></td><td><input type="text" name="payment_to_give" value="<?php echo $u_payment_to_give ?>" /></td></tr>
</table>
<button type="submit" >Submit</button>
</fieldset>
</form>
</center>
<h3><?php echo $_REQUEST['message']; ?></h3>
<center>
<button type=submit><a href="factory.php">Back</a></button>
</center>
</body>
</html>
