<?php
include('lock.php');
if($_SERVER["REQUEST_METHOD"]=="GET"){
        $essn=$_GET['essn'];
	$name=$_GET['name'];
        $sql="SELECT * from dependent where essn='$essn' and name='$name' ";
        $ses_sql=mysql_query($sql);
        $row=mysql_num_rows($ses_sql);
        if($row!=1)
 header("location: show_dependents.php?ssn=$essn");

        else{
        $u_name=mysql_result($ses_sql,$i,"name");
        $u_bdate=mysql_result($ses_sql,$i,"bdate");
        $u_sex=mysql_result($ses_sql,$i,"sex");

        $u_essn=mysql_result($ses_sql,$i,"essn");
        $u_relation=mysql_result($ses_sql,$i,"relationship");
        }

?>
<html>
<head>
<title>Dependent</title>
<link rel="stylesheet" type="text/css" href="css/screen.css"/>
<link rel="shortcut icon" href="logo.jpg">

<style type="text/css">
tr { color:white;}
</style>

</head>
<body  style="background-image:url(kerala.jpeg)">
<center>
<h3 style="color:black;text-decoration:underline;">Dependent Form</h3>
<form id="form2" action="dependent_update_post.php?essn="<?php echo $essn; ?>"&&name="<?php echo $name; ?>" "method="post">
<fieldset>
<table>
<tr><td><label for="sex">SEX:</label></td><td><input type="radio" name="sex" value='M' checked="checked">Male&nbsp;<input type="radio" name="sex" value='F'>Female&nbsp;<input type="radio" name="sex" value='G'>Other</td></tr>
<tr><td><label for="bdate">BIRTH DATE:</label></td><td><input type="text" name="bdate" value="<?php echo $u_bdate; ?>"></td></tr>
<tr><td><label fot="relationship">RELATIONSHIP:</label></td><td><input type="text" name="relationship" value="<?php echo $u_relation; ?>"></td></tr>
</table>
<button type="submit">Submit</button>
</fieldset>
</form>
</center>
<h3><?php echo $_GET['message']; ?></h3>

</body>
</html>
