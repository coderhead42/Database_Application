<?php
include('lock.php');
if($_SERVER["REQUEST_METHOD"]=="GET"){
	$id=$_GET['id'];
        $sql="SELECT from customer where id='$id' ";
	$res=mysql_query($sql);
	$row=mysql_num_rows($res);
	if($row!=1)
	header("location: shop.php");
	else{
	$lname=mysql_result($res,0,'lname');
	$fname=mysql_result($res,0,'fname');
	$sex=mysql_result($res,0,'sex');
	$address=mysql_result($res,0,'address');
	$contact_no=mysql_result($res,0,'contact_no');
	$payment=mysql_result($res,0,'payment_pending');
	$profitable=mysql_result($res,0,'profitable');
	$essn=mysql_result($res,0,'essn');
	}
}
else if($_SERVER["REQUEST_METHOD"]=="POST"){
	$u_fname=$_POST['fname'];
        $u_lname=$_POST['lname'];
        $u_sex=$_POST['sex'];
        $u_contact_no=$_POST['contact_no'];
        $u_address=$_POST['address'];
        $u_payment=$_POST['payment_pending'];
        $u_profitable=$_POST['profitable'];
        $u_essn=$_POST['essn'];
        $sql="UPDATE customers SET fname='$u_fname',lname='$u_lname',sex='$u_sex',contact_no='$u_contact_no',address='$u_address',payment_pending='$u_payment',profitable='$u_profitable',essn='$u_essn' WHERE id='$id' ";
        mysql_query($sql);
        mysql_close();
        header('Location: shop.php');
}
?>
<html>
<head>
<body>
<form action="customer_update.php" method="post">
<table>
<tr><td>FIRSTNAME:</td><td><input type="text" name="fname" value="<?php echo $fname;?>"/></td></tr>
<tr><td>LASTNAME:</td><td><input type="text" name="lname" value="<?php echo $lname;?>"/></td></tr>
<TR><TD>SEX:</td><td><input type="radio" name="sex" checked="checked" value='M'/>Male&nbsp;<input type="radio" name="sex"  value='F'/>Female&nbsp;<input type="radio" name="sex"  value='G'/>Other</td></tr>
<TR><TD>ADDRESS:</td><td><textarea name="address" maxlength="50"><?php echo $address;?></textarea></td></tr>
<TR><TD>PHONE NUMBER:</td><td><input type="text" name="phone_no" value="<?php echo $contact_no;?>"/></td></tr>
<TR><TD>PAYMENT PENDING:</td><td><input type="text" name="payment_ending" value="<?php echo $payment; ?>"/></td></tr>
<TR><TD>PROFITABLE:</td><td><input type="text" name="profitable" value="<?php echo $profitable; ?>"/></td></tr>
<TR><TD>ESSN:</td><td><input type="text" name="essn" value="<?php echo $essn; ?>"/></td></tr>
</table>
<input type="submit" />
</form>
<h3><?php echo $_GET['message']; ?></h3>
<button type=submit><a href="shop.php">Back</a></button>
</body>
</html>
