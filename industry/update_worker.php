<?php
include('lock.php');
echo $_GET['message'];
if($_SERVER["REQUEST_METHOD"]=="GET"){
	$ssn=$_GET['ssn'];
	$sql="select * from workers where ssn='$ssn' ";
	$res1=mysql_query($sql);
	$cn1=mysql_num_rows($res1);
//	echo "qweqeqqweqe$ssn";
//	echo "zzz$res1","xxx$res2";
//	echo "yyyy$cn1","qwqw","$cn2";
	$i=0;
	if($cn1==1){
	$u_fname=mysql_result($res1,$i,"fname");
        $u_lname=mysql_result($res1,$i,"lname");
        $u_sex=mysql_result($res1,$i,"sex");
        $u_address=mysql_result($res1,$i,"address");
        $u_bdate=mysql_result($res1,$i,"bdate");
        $u_contact_no=mysql_result($res1,$i,"phone_no");
        $u_passcode=mysql_result($res1,$i,"passcode");
        $u_essn=mysql_result($res1,$i,"super_ssn");
	}
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
//	echo "ho gaya be!!";
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$sex=$_POST['sex'];
	$contact_no=$_POST['contact_no'];
	$bdate=$_POST['bdate'];
	$address=$_POST['address'];
	$passcode=$_POST['passcode'];
	$essn=$_POST['essn'];
	echo $fname;
	echo $lname;
	echo $sex;
	echo $contact_no;
	echo $bdate;
	echo $address;
	echo $passcode;
	echo $essn;
	echo $ssn;
	
	$sql="UPDATE workers SET fname='$fname',lname='$lname',sex='$sex',phone_no='$contact_no',bdate='$bdate',address='$address',passcode='$passcode',super_ssn='$essn' WHERE ssn='$ssn' ";
	mysql_query($sql);
	echo mysql_errno($bd) . ": " . mysql_error($bd) . "\n";
	//mysql_close();
	//header('Location: welcome_worker.php');
}
?>
<html>
<head>
<title>Worker</title>
<link rel="stylesheet" type="text/css" href="css/screen.css"/>
<link rel="shortcut icon" href="logo.jpg">

<style type="text/css">
tr { color:white;}
</style>

<body style="background-image:url(kerala.jpeg)">
<h3 style="color:black;text-decoration:underline;">Worker Form</h3>
<center>
<form id="form2" action="workers_update_post.php?ssn=<?php echo $ssn; ?>" method="post">
<fieldset>
<table>
<tr><td><label for="fname">Firstname:</label></td><td><input type="text" name="fname" value="<?php echo $u_fname; ?>" /></td></tr>
<tr><td><label for="lname">Lastname:</label></td><td><input type="text" name="lname" value="<?php echo $u_lname; ?>" /></td></tr>
<tr><td><label for="sex">Sex:</label></td><td><input type="radio" name="sex" value="M" checked="checked"/>Male&nbsp;<input type="radio" name="sex" value="F"/>Female&nbsp;</td></tr>
<tr><td><label for="contact_no">Contact_no:</label> </td><td><input type="text" name="contact_no" value="<?php echo $u_contact_no; ?>" /></td></tr>
<tr><td><label for="bdate">Bdate:</label></td><td><input type="text" name="bdate" value="<?php echo $u_bdate; ?>" /></td>
<tr><td><label for="address">Address:</label></td><td><textarea maxlength="50" name="address"><?php echo $u_address; ?></textarea></td></tr>
<tr><td><label for="passcode">Password:</label></td><td><input type="text" name="passcode" value="<?php echo $u_passcode; ?>" /></td></tr> 
<tr><td><label for="essn">Super_Ssn:</td><td><input type="text" name="essn" value="<?php echo $u_essn; ?>" /></td></tr> 
</table>
<button type="submit" >Submit</button>
</center>
</fieldset>
</form>
</body>
</html>
