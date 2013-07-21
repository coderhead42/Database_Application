<?php
include("config.php");
session_start();
//echo "yahan pe hu bhai";
//echo $_SERVER["REQUEST_METHOD"];
if($_SERVER["REQUEST_METHOD"]=="POST"){
	
	//echo "yahan pe hu";
	//echo $_POST['username'];
	//echo $_POST['password'];
	$myusername=addslashes($_POST['username']);
	$mypassword=addslashes($_POST['password']);
	//echo "yahan pe tha";
	echo $myusername,"$$$$$",$mypassword;
	//echo "ab yahan hun";

	$sql2="SELECT ssn FROM workers WHERE ssn='$myusername' and passcode='$mypassword'";
	$sql1="SELECT ssn FROM manager WHERE ssn='$myusername' and passcode='$mypassword'";
	$sql="SELECT ssn FROM employee WHERE ssn='$myusername' and passcode='$mypassword'";
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
	//echo $count,"***",$count1;
	if(($count1==1&&$count2==0&&$count==0)||($count==1&&$count2==0&&$count1==0)||($count2==1&&$count==0&&$count1==0)){
		//echo "hakuna matata";
		session_register("myusername");
		$_SESSION['login_user']=$myusername;
		if($count1==1){
			$_SESSION['manager']="true";
			header("location:welcome_manager.php");
		}
		else if($count2==1){
			$_SESSION['employee']="true";
			header("location:welcome_employee.php");
		}
		else if($count==1){
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
<!--<body>
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
</body>-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>Login</title>
<link rel="shortcut icon" href="logo.jpg">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="Expand, contract, animate forms with jQuery wihtout leaving the page" />
        <meta name="keywords" content="expand, form, css3, jquery, animate, width, height, adapt, unobtrusive javascript"/>
		<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon"/>
        <link rel="stylesheet" type="text/css" href="AnimatedFormSwitching/css/style.css" />
	<!--	<script src="js/cufon-yui.js" type="text/javascript"></script>
		<script src="js/ChunkFive_400.font.js" type="text/javascript"></script>
		<script type="text/javascript">
			Cufon.replace('h1',{ textShadow: '1px 1px #fff'});
			Cufon.replace('h2',{ textShadow: '1px 1px #fff'});
			Cufon.replace('h3',{ textShadow: '1px 1px #000'});
			Cufon.replace('.back');
		</script>-->
    </head>
    <body style="background-image:url(b3.jpeg)">
		<div class="wrapper">
			<h2 style="text-decoration:underline;color:red;font-style:bold;text-align:center">Welcome to turmeric industry</h2>
			<div class="content">
				<div id="form_wrapper" class="form_wrapper">
					<form class="login active">
						<h3>Login</h3>
						<div>
							<label>Ssn:</label>
							<input type="text" name="username"/>
							<span class="error">This is an error</span>
						</div>
						<div>
							<label>Password:</label>
							<input type="password" name="password"/>
							<span class="error">This is an error</span>
						</div>
						<div class="bottom">
							<div class="remember"><input type="checkbox" /><span>Keep me logged in</span></div>
							<input type="submit" value="Login"></input>
							<div class="clear"></div>
						</div>
					</form>
					</div>
					</div>
					</div>
					</body>
					</html>
