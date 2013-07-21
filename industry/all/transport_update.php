<?php
include('lock.php');
if($_SERVER["REQUEST_METHOD"]=="GET"){
        $regno=$_GET['regno'];
        $sql="SELECT * from transport where reg_no='$reg_no' ";
        $res=mysql_query($sql);
        $row=mysql_num_rows($res);
        if($row!=1)
        header("location: transport.php");
        else{
	$u_model_no=mysql_result($ses_sql,$i,"model_no");
        $u_reg_no=mysql_result($ses_sql,$i,"reg_no");
        $u_essn=mysql_result($ses_sql,$i,"essn");
       	$u_type=mysql_result($ses_sql,$i,"type");
        }
}
?>
<html>
<head>
<body>
<form action="transport_update_post.php?regno=<?php echo $regno; ?>" method="post">
<table>
<tr><td>TYPE OF TRANSPORT:</td><td><input type="text" name="type" value="<?php echo $u_type; ?>"/></td></tr>
<tr><td>MODEL#:</td><td><input type="text" name="model_no" value="<?php echo $u_model_no; ?>"/></td></tr>
<tr><td>REGISTRATION#:</td><td><input type="text" name="reg_no" value="<?php echo $u_reg_no ; ?>"/></td></tr>
<tr><td>ESSN:</td><td><input type="text" name="essn" value="<?php echo $u_essn ;?>"/></td></tr>
</table>

<input type="submit" />
</form>
<h3><?php echo $_GET['message']; ?></h3>
<button type=submit><a href="welcome_manager.php">Back</a></button>
</body>
</html>
