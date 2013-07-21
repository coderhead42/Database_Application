<?php
include('lock.php');
if($_SERVER["REQUEST_METHOD"]=="GET"){
        $bill_no=$_GET['billno'];
        $sql="SELECT * from bill where bill_no='$bill_no' ";
        $ses_sql=mysql_query($sql);
        $row=mysql_num_rows($ses_sql);
        if($row!=1)
        header("location: maintainence.php");
        else{
        $u_due_date=mysql_result($ses_sql,$i,"due_date");
        $u_penalty=mysql_result($ses_sql,$i,"penalty");
        $u_date_of_payment=mysql_result($ses_sql,$i,"date_of_payment");
        $u_wssn=mysql_result($ses_sql,$i,"wssn");
	$u_cost=mysql_result($ses_sql,$i,"cost");
        }
}
?>
<html>
<head>
<body>
<form action="bill_update_post.php?billno=<?php echo $bill_no; ?>" method="post">
<table>
<tr><td>COST:</TD><td><input type="text" name="cost" value="<?php echo $u_cost ; ?>"/></td></tr>
<tr><td>DUE DATE:</TD><td><input type="text" name="due_date" value="<?php echo $u_due_date ?>"/></td></tr>
<tr><td>PENALTY#:</TD><td><input type="text" name="penalty" value="<?php echo $u_penalty ?>"/></td></tr>
<tr><td>DATE OF PAYMENT#:</TD><td><input type="text" name="date_of_payment" value="<?php echo $u_date_of_payment ;?>"/></td></tr>
<tr><td>WORKER SSN:</TD><td><input type="text" name="wssn" value="<?php echo $u_wssn ;?>"/></td></tr>
</table>
<input type="submit" />
</form>
<h3><?php echo $_GET['message']; ?></h3>
<button type=submit><a href="maintainence.php">Back</a></button>
</body>
</html>
