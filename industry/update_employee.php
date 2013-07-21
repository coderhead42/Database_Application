<?php
include('lock.php');
if($_SERVER["REQUEST_METHOD"]=="GET"){
	$ssn=$_GET['ssn'];
	$sql1="select * from employee where ssn='$ssn' ";
	$res1=mysql_query($sql1);
	$cn1=mysql_num_rows($res1);
	echo "qweqeqqweqe$ssn";
	echo "zzz$res1","xxx$res2";
	echo "yyyy$cn1","qwqw","$cn2";
	$i=0;
	if($cn1==1){
	$u_fname=mysql_result($res1,$i,"fname");
        $u_lname=mysql_result($res1,$i,"lname");
        $u_sex=mysql_result($res1,$i,"sex");
        $u_address=mysql_result($res1,$i,"address");
        $u_bdate=mysql_result($res1,$i,"bdate");
        $u_contact_no=mysql_result($res1,$i,"contact_no");
        $u_passcode=mysql_result($res1,$i,"passcode");
	}
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$sex=$_POST['sex'];
	$contact_no=$_POST['contact_no'];
	$bdate=$_POST['bdate'];
	$address=$_POST['address'];
	$passcode=$_POST['passcode'];
	$sql="UPDATE employee SET fname='$fname',lname='$lname',sex='$sex',contact_no='$contact_no',bdate='$bdate',address='$address',passcode='$passcode' WHERE ssn='$ssn' ";
	mysql_query($sql);
	mysql_close();
	//header('Location: welcome.php');
}
?>
<html>
<body>
<form action="employee_update_post.php?ssn=<?php echo $ssn; ?>" method="post">
<table>
<tr><td>Firstname:</td><td><input type="text" name="fname" value="<?php echo $u_fname; ?>" /></td></tr>
<tr><td>Lastname:</td><td><input type="text" name="lname" value="<?php echo $u_lname; ?>" /></td></tr>
<tr><td>Sex:</td><td><input type="radio" name="sex" value="M" checked="checked"/>Male&nbsp;<input type="radio" name="sex" value="F"/>Female&nbsp;</td></tr>
<tr><td>Contact_no: </td><td><input type="text" name="contact_no" value="<?php echo $u_contact_no; ?>" /></td></tr>
<tr><td>Bdate:</td><td><input type="text" name="bdate" value="<?php echo $u_bdate; ?>" /></td>
<tr><td>Address:</td><td><textarea maxlength="50" name="address"><?php echo $u_address; ?></textarea></td></tr>
<tr><td>Password:</td><td><input type="text" name="passcode" value="<?php echo $u_passcode; ?>" /></td></tr> 
<tr><td>Confirm Password:</td><td><input type="text" name="confirm_passcode" value="<?php echo $u_passcode; ?>" /></td></tr> 
</table>
<input type="submit" />
</form>
</body>
</html>
