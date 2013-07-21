<?php
include('lock.php');
if($_SERVER["REQUEST_METHOD"]=="GET"){
        $essn=$_GET['essn'];
	$name=$_GET['name'];
        $sql="SELECT * from dependent where essn='$essn' and name='$name' ";
        $ses_sql=mysql_query($sql);
        $row=mysql_num_rows($ses_sql);
        if($row!=1)
        header("location: show_dependents.php");
        else{
        $u_name=mysql_result($ses_sql,$i,"name");
        $u_bdate=mysql_result($ses_sql,$i,"bdate");
        $u_sex=mysql_result($ses_sql,$i,"sex");
        $u_address=mysql_result($ses_sql,$i,"address");
        $u_essn=mysql_result($ses_sql,$i,"essn");
        $u_relation=mysql_result($ses_sql,$i,"relationship");
        }
}
?>
<html>
<head>
<body>
<form action="dependent_update_post.php?essn="<?php echo $essn; ?>"&&name="<?php echo $name; ?>" "method="post">
<table>
<tr><td>SEX:</td><td><input type="radio" name="sex" value='M' checked="checked">Male&nbsp;<input type="radio" name="sex" value='F'>Female&nbsp;<input type="radio" name="sex" value='G'>Other</td></tr>
<tr><td>BIRTH DATE:</td><td><input type="text" name="bdate" value="<?php echo $u_bdate; ?>"></td></tr>
<tr><td>ADDRESS:</td><td><input type="text" name="bdate" value="<?php echo $u_address; ?>"></td></tr>
<tr><td>RELATIONSHIP:</td><td><input type="text" name="relationship" value="<?php echo $u_relation; ?>"></td></tr>
</table>
<input type="submit" />
</form>
<h3><?php echo $_GET['message']; ?></h3>
<button type=submit><a href="show_dependents.php">Back</a></button>
</body>
</html>
