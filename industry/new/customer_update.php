<?php
include('lock.php');
if($_SERVER["REQUEST_METHOD"]=="GET"){
        $id=$_GET['id'];
        $sql="SELECT * from customers where id='$id' ";
        $ses_sql=mysql_query($sql);
        $row=mysql_num_rows($ses_sql);
        if($row!=1)
        header("location: shop.php");
        else{
        $u_fname=mysql_result($ses_sql,$i,"fname");
        $u_lname=mysql_result($ses_sql,$i,"lname");
        $u_sex=mysql_result($ses_sql,$i,"sex");
        $u_address=mysql_result($ses_sql,$i,"address");
        $u_essn=mysql_result($ses_sql,$i,"essn");
        $u_phone_no=mysql_result($ses_sql,$i,"phone_no");
        $u_payment_pending=mysql_result($ses_sql,$i,"payment_pending");
        $u_profitable=mysql_result($ses_sql,$i,"profitable");
                                                                
        }   
}
?>
<html>
<head>
<body>
<form action="customer_update_post.php?id=<?php echo $id; ?>" method="post">
<table>
<tr><td>FIRSTNAME:</td><td><input type="text" name="fname" value="<?php echo $u_fname; ?>"/></td></tr>
<tr><td>LASTNAME:</td><td><input type="text" name="lname" value="<?php echo $u_lname; ?>"/></td></tr>
<TR><TD>SEX:</td><td><input type="radio" name="sex" checked="checked" value='M'/>Male&nbsp;<input type="radio" name="sex"  value='F'/>Female&nbsp;<input type="radio" name="sex"  value='G'/>Other</td></tr>
<TR><TD>ADDRESS:</td><td><textarea name="address" maxlength="50"><?php echo $u_address; ?></textarea></td></tr>
<TR><TD>PHONE NUMBER:</td><td><input type="text" name="phone_no" value="<?php echo $u_phone_no; ?>"/></td></tr>
<TR><TD>PAYMENT PENDING:</td><td><input type="text" name="payment_ending" value="<?php echo $u_payment_pending; ?>"/></td></tr>
<TR><TD>PROFITABLE:</td><td><input type="text" name="profitable" value="<?php echo $u_profitable; ?>"/></td></tr>
<TR><TD>ESSN:</td><td><input type="text" name="essn" value="<?php echo $u_essn;?>"/></td></tr>
</table>
<input type="submit" />
</form>
<h3><?php echo $_GET['message']; ?></h3>
<button type=submit><a href="shop.php">Back</a></button>
</body>
</html>
