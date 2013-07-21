<?php
include('lock.php');
if($_SERVER["REQUEST_METHOD"]=="GET"){
        $dno=$_GET['dno'];
        $sql="SELECT * from department where dno='$dno' ";
        $ses_sql=mysql_query($sql);
        $row=mysql_num_rows($ses_sql);
        if($row!=1)
        header("location: welcome_manager.php");
        else{
        $u_dlocation=mysql_result($ses_sql,$i,"dlocation");
        $u_purpose=mysql_result($ses_sql,$i,"purpose");
        $u_open_time=mysql_result($ses_sql,$i,"open_time");
        $u_close_time=mysql_result($ses_sql,$i,"close_time");
        $u_profit_earned=mysql_result($ses_sql,$i,"profit_earned");
        $u_maintain_cost=mysql_result($ses_sql,$i,"maintain_cost");
        $u_dname=mysql_result($ses_sql,$i,"dname");
        $u_profitable=mysql_result($ses_sql,$i,"profitable");
	}
}
?>
<html>
<head>
<title>Department</title>
<link rel="stylesheet" type="text/css" href="css/screen.css"/>
<link rel="shortcut icon" href="logo.jpg">

<style type="text/css">
tr { color:white;}
</style>

</head>
<body style="background-image:url(kerala.jpeg)">
<center>
<h3 style="color:black;text-decoration:underline;">Department Form</h3>
<form id="form2" action="department_update_post.php?dno=<?php echo $dno; ?> " method="post">
<fieldset>
<table>
<tr><td><label for="dname">DEPARTMENT NAME:</label></td><td><input type="text" name="dname" value="<?php echo $u_dname; ?>"/></td></tr>
<tr><td><label for="dlocation">DEPARTMENT LOCATION:</label></td><td><input type="text" name="dlocation" value="<?php echo $u_dlocation?>"/></td></tr>
<tr><td><label for="purpose">PURPOSE:</label></td><td><input type="text" name="purpose" value="<?php echo $u_purpose; ?>"/></td></tr>
<tr><td><label for="open_time">OPEN TIME:</label></td><td><input type="text" name="open_time" value="<?php echo $u_open_time?>"/></td></tr>
<tr><td><label for="close_time">CLOSE TIME:</label></td><td><input type="text" name="close_time" VALUE="<?php echo $u_close_time?>"/></td></tr>
<tr><td><label for="profit_earned">PROFIT EARNED:</label></td><td><input type="text" name="profit_earned" value="<?php echo $u_profit_earned?>"/></td></tr>
<tr><td><label for="maintain_cost">MAINTAINENCE COST:</label></td><td><input type="text" name="maintain_cost" value="<?php echo $u_maintain_cost?>"/></td></tr>

</table>
<button type="submit" >Submit</button>
</center>
</fieldset>
</form>
<h3><?php echo $_GET['message']; ?></h3>
<center>
<button type=submit><a href="welcome_manager.php">Back</a></button>
</center>
</body>
</html>
