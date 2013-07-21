<?php
include('lock.php');
if($_SERVER["REQUEST_METHOD"]=="GET"){
        $dno=$_GET['dno'];
        $sql="SELECT * from wages where dno='$dno' ";
        $ses_sql=mysql_query($sql);
        $row=mysql_num_rows($ses_sql);
        if($row!=1)
        header("location: welcome_manager.php");
        else{
        $hours=mysql_result($ses_sql,0,"hours_work");
        $wages=mysql_result($ses_sql,0,"wages_hour");
	}
}
?>
<html>
<head>
<body>
<form action="wages_update_post.php?dno=<?php echo $dno; ?>" method="post">
<table>
<tr><td>HOURS OF WORK:</td><td><input type="text" name="hours_work" value="<?php echo $hours; ?>"/></td>
<tr><td>WAGES PER HOUR:</td><td><input type="text" name="wages_hour" value="<?php echo $wages; ?>"/></td>
</table>
<input type="submit" />
</form>
<h3><?php echo $_GET['message']; ?></h3>
</body>
</html>
