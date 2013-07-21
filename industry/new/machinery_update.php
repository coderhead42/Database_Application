<?php
include('lock.php');
if($_SERVER["REQUEST_METHOD"]=="GET"){
	$machine_id=$_GET['machineid'];
        $_SESSION['modelno']=$machine_id;
	$sql="SELECT * from machinery where machine_id='$machine_id' ";
	$res=mysql_query($sql);
	$row=mysql_num_rows($res);
	if($row!=1)
	header("location: maintainence.php");
	else{
	$date_purchase=mysql_result($res,0,'date_purchase');
	$model_no=mysql_result($res,0,'model_no');
	$dno=mysql_result($res,0,'dno');
	}
}
else if($_SERVER["REQUEST_METHOD"]=="POST"){
	$machine_id=$_SESSION['modelno'];
	$u_date_purchase=$_POST['date_purchase'];
        $u_model_no=$_POST['model_no'];
        $u_dno=$_POST['dno'];
	echo $machine_id."AAAA".$u_date_purchase."AAAA".$u_model_no."AAAAA".$u_dno;
        $sql="update machinery set date_purchase='$u_date_purchase',model_no='$u_model_no',dno='$u_dno' where machine_id='$machine_id' ";
        mysql_query($sql);
	echo mysql_error();
        mysql_close();
       header('Location: maintainence.php');
}
?>
<html>
<head>
<body>
<form action="" method="post">
<table>
<TR><TD>Date of Purchase:</td><td><input type="text" name="date_purchase" value="<?php echo $date_purchase; ?>"/></td></tr>
<TR><TD>Model No:</td><td><input type="text" name="model_no" value="<?php echo $model_no; ?>"/></td></tr>
<TR><TD>Department No:</td><td><input type="text" name="dno" value="<?php echo $dno; ?>"/></td></tr>
</table>
<input type="submit" />
</form>
<h3><?php echo $_GET['message']; ?></h3>
<button type=submit><a href="maintainence.php">Back</a></button>
</body>
</html>
