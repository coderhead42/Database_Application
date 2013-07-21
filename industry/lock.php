<?php
include('config.php');
session_start();
$user_check=$_SESSION['login_user'];
if($_SESSION['manager']=="true")
	$ses_sql=mysql_query("select * from manager where ssn='$user_check' ");
else if($_SESSION['employee']=="true")
	$ses_sql=mysql_query("select * from employee where ssn='$user_check' ");
else if($_SESSION['worker']=="true")
	$ses_sql=mysql_query("select * from workers where ssn='$user_check' ");
//$row=mysql_fetch_array($ses_sql);
//$login_session_fname=$row['fname'];
//$login_session_lname=$row['lname'];
//echo $user_check,"<br />";
//echo $ses_sql,"<br />";
//echo $row,"<br />";
//echo $row['fname'];

$cnt=mysql_num_rows($ses_sql);
$login_session_ssn=mysql_result($ses_sql,0,"ssn");

/*echo $_SESSION['manager'],"&&&&&",$_SESSION['employee'],"&&&&&&",$_SESSION['worker'];
echo "****";
echo $cnt;
echo "****";
echo $login_session_ssn;
*/
//if(!isset($login_session_ssn)||$login_session_ssn==""||$cnt!=1){
if($login_session_ssn==""||$cnt!=1){
	
	//echo "Gand lag yai yaar!!!";
	header("Location: login.php?message='Please Log In to Continue.....' ");
}
?>
