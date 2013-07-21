<?php
include("config.php");
session_start();
//echo "yahan pe hu bhai";
//echo $_SERVER["REQUEST_METHOD"];
echo $_GET['message'];
if($_SERVER["REQUEST_METHOD"]=="POST"){
	
	//echo "yahan pe hu";
	//echo $_POST['username'];
	//echo $_POST['password'];
	$_SESSION['manager']="false";
	$_SESSION['worker']="false";
	$_SESSION['employee']="false";
	$myusername=addslashes($_POST['username']);
	$mypassword=addslashes($_POST['password']);
	//echo "yahan pe tha";
	echo $myusername,"$$$$$",$mypassword;
	//echo "ab yahan hun";

	$sql="SELECT ssn FROM workers WHERE ssn='$myusername' and passcode='$mypassword'";
	$sql1="SELECT ssn FROM manager WHERE ssn='$myusername' and passcode='$mypassword'";
	$sql2="SELECT ssn FROM employee WHERE ssn='$myusername' and passcode='$mypassword'";
	//$sql="SELECT username FROM admin WHERE username='$myusername' and passcode='$mypassword'";
	$result=mysql_query($sql);
	$result1=mysql_query($sql1);
	$result2=mysql_query($sql2);
	//$row=mysql_fetch_array($result);
	//$active=$row['active'];
	$count=mysql_num_rows($result);
	$count1=mysql_num_rows($result1);
	$count2=mysql_num_rows($result2);
	//echo mysql_result$result;
	//echo $row;
	echo $count."***".$count1."******".$count2;
	if(($count1==1&&$count2==0&&$count==0)||($count==1&&$count2==0&&$count1==0)||($count2==1&&$count==0&&$count1==0)){
		echo "hakuna matata";
		//session_register("myusername");
		$_SESSION['count']=1;
		$_SESSION['login_user']=$myusername;
		if($count1==1){
			$_SESSION['manager']="true";
			header("location:welcome_manager.php");
		}
		else if($count2==1){
			$_SESSION['employee']="true";
			header("location:welcome_employee.php");
		}
		else if($_SESSION['count']==1){
			$_SESSION['worker']="true";
			header("location:welcome_worker.php");
		}
		else{
			echo "Unable to login, please try again.";
		}
	}
	else{
		$error="Your Login Name or Password is invalid";
		echo $error;
	}
}
//else
//	echo "\nkyon nahi aa raha?\n";
?>
<body>
<h1> Welcome !! </h1>
<form action="" method="post">
<table>
<tr>
<td>
<label>Ssn :</label>
</td>
<td><input type="text" name="username"/> </td></tr>
<tr><td>
<label>Password :</label></td>
<td><input type="password" name="password"/></td></tr>
</table>
<br /><br />
<input type="submit" value="Login"/><br />
</form>
</body>
