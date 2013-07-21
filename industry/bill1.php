<?php
include('lock.php');
if($_SERVER["REQUEST_METHOD"]=="GET"){
	$bill_no=$_GET['billno'];
        $sql="SELECT from bill where bill_no='$bill_no' ";
	$res=mysql_query($sql);
	$row=mysql_num_rows($res);
	if($row!=1)
	header("location: maintainence.php");
	else{
	$cost=mysql_result($res,0,'cost');
	$due_date=mysql_result($res,0,'due_date');
	$penalty=mysql_result($res,0,'penalty');
	$date_of_payment=mysql_result($res,0,'date_of_payment');
	$wssn=mysql_result($res,0,'wssn');
	}
}
else if($_SERVER["REQUEST_METHOD"]=="POST"){
	$u_cost=$_POST['cost'];
        $u_due_date=$_POST['due_date'];
        $u_penalty=$_POST['penalty'];
        $u_date_of_payment=$_POST['date_of_payment'];
        $u_wssn=$_POST['wssn'];
        $sql="UPDATE bill SET cost='$u_cost',due_date='$u_due_date',penalty='$u_penalty',date_of_payment='$u_date_of_payment',wssn='$u_wssn' WHERE bill_no='$bill_no' ";
        mysql_query($sql);
        mysql_close();
        header('Location: maintainence.php');
}
?>
<html>
<head>
<body>
<form action="customer_update.php" method="post">
<table>
<tr><td>Cost:</td><td><input type="text" name="cost" value="<?php echo $cost;?>"/></td></tr>
<tr><td>Due Date:</td><td><input type="text" name="due_date" value="<?php echo $due_date;?>"/></td></tr>
<TR><TD>Penalty:</td><td><input type="text" name="penalty" value="<?php echo $penalty;?>"/></td></tr>
<TR><TD>Date of Payment:</td><td><input type="text" name="date_of_payment" value="<?php echo $date_of_payment; ?>"/></td></tr>
<TR><TD>Wssn:</td><td><input type="text" name="wssn" value="<?php echo $wssn; ?>"/></td></tr>
</table>
<input type="submit" />
</form>
<h3><?php echo $_GET['message']; ?></h3>
<button type=submit><a href="maintainence.php">Back</a></button>
</body>
</html>
