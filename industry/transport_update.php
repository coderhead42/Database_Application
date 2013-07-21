<?php
include('lock.php');
if($_SERVER["REQUEST_METHOD"]=="GET"){
        $regno=$_GET['regno'];
        $sql="SELECT * from transport where reg_no='$regno' ";
 $ses_sql=mysql_query($sql);

        $row=mysql_num_rows($ses_sql);
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
<title>Transport</title>
<link rel="stylesheet" type="text/css" href="css/screen.css"/>
<link rel="shortcut icon" href="logo.jpg">

<style type="text/css">
tr { color:white;}
</style>
</head>
<body style="background-image:url(kerala.jpeg)">
<center>
<h3 style="color:black;text-decoration:underline;">Transport Form</h3>
<form id="form2" action="transport_update_post.php?regno=<?php echo $regno; ?>" method="post">
<fieldset>
<table>
<tr><td><label for="type">TYPE OF TRANSPORT:</label></td><td><input type="text" name="type" value="<?php echo $u_type; ?>"/></td></tr>
<tr><td><label for="model_no">MODEL#:</label></td><td><input type="text" name="model_no" value="<?php echo $u_model_no; ?>"/></td></tr>

<tr><td><label for="essn">ESSN:</label></td><td><input type="text" name="essn" value="<?php echo $u_essn ;?>"/></td></tr>
</table>

<Button type="submit" />Submit</button>
</fieldset>
</form>
</center>
<h3><?php echo $_GET['message']; ?></h3>
<center>
<button type=submit><a href="welcome_manager.php">Back</a></button>
</center>
</body>
</html>
