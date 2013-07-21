<html>
<head><title>query_result</title>
<link rel="stylesheet" type="text/css" href="css/screen.css"/>
<link rel="shortcut icon" href="logo.jpg">
<style type="text/css">
tr td {background-color:black;color:white;}
button {background-color:black;}
table {border:thick groove red;}
a {color:#808080;}
h1,h2,h3,h4,h5,h6  { text-decoration:underline; color:yellow}
</style>
</head>
<body style="background-image:url(kerala.jpeg)">
<?php
include('lock.php');
$arr[0]=0;
function display($search){
	global $arr,$count,$count1;
	$rows=mysql_num_rows($search);
	$i=0;
	while($i<$rows){
		$u_ssn=mysql_result($search,$i,"ssn");
		$u_fname=mysql_result($search,$i,"fname");
		$u_lname=mysql_result($search,$i,"lname");
		$u_sex=mysql_result($search,$i,"sex");
		$u_contact_no=mysql_result($search,$i,"contact_no");
$u_phone_no=mysql_result($search,$i,"phone_no");
		$u_bdate=mysql_result($search,$i,"bdate");
		$u_address=mysql_result($search,$i,"address");
		$u_join_date=mysql_result($search,$i,"join_date");
		$u_dno=mysql_result($search,$i,"dno");
		$u_leave_date=mysql_result($search,$i,"leave_date");
		$u_super_ssn=mysql_result($search,$i,"super_ssn");
		if($arr[$u_ssn]==1){
			$i++;
			continue;
		}
		echo "<table border=1>
<tr><td width=10%>Firstname:</td><td width=90%>$u_fname</td></tr>
<tr><td>Lastname:</td><td>$u_lname</td></tr>
<tr><td>Sex:</td><td>$u_sex</td></tr>

<tr><td>Bdate:</td><td>$u_bdate</td></tr>
<tr><td>Address:</td><td>$u_address</td></tr>
<tr><td>Join Date:</td><td>$u_join_date</td></tr>
<tr><td>Department No:</td><td>$u_dno</td></tr>
<tr><td>Leave Date:</td><td>$u_leave_date</td></tr>";
		if($u_super_ssn!=""){
echo "<tr><td>Contact_no: </td><td>$u_phone_no</td></tr>";
			echo "<tr><td>Supervisor SSn:</td><td>$u_super_ssn</td></tr>";}
else
echo "<tr><td>Contact_no: </td><td>$u_contact_no</td></tr>";
		if($_SESSION['manager']=="true"){
		echo "<button type=submit><a href='update.php?ssn=$u_ssn'>Update</a></button><br /><br />";
		echo "<button type=submit><a href='del.php?ssn=$u_ssn'>Delete</a></button><br /><br />";
		echo "<button type=submit><a href='show_dependents.php?ssn=$u_ssn'> Show Dependents</a></button><br /><br />";
		}
		else if($_SESSION['employee']=="true"&&$u_super_ssn!=""&&$u_dno==$_GET['dno']){
		echo "<button type=submit><a href='update_worker.php?ssn=$u_ssn'>Update</a></button><br /><br />";
		echo "<button type=submit><a href='del.php?ssn=$u_ssn'>Delete</a></button><br /><br />";
		}
		echo "</table>";
		echo "<br />";
		if($u_super_ssn!="")
			$count1++;
		else
			$count++;
		$arr[$u_ssn]=1;
		$i++;
	}
	return $rows;
}
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$sex=$_POST['sex'];
$contact_no=$_POST['contact_no'];
$bdate=$_POST['bdate'];
$address=$_POST['address'];
$ssn=$_POST['ssn'];
$join_date=$_POST['join_date'];
$dno=$_POST['dno'];
$leave_date=$_POST['leave_date'];
$super_ssn=$_POST['super_ssn'];
echo "<h1>Search Results :- </h1>";
if($_SESSION['employee']=="true"||$_SESSION['manager']=="true")
{
echo "<h2>Showing Employees - </h2>";
$count=0;
if($_POST['all']=="true"){
	$sql="select * from employee";
	$result=mysql_query($sql);
	$cnt=display($result);
}
else{
if($fname!=""){
	//echo "<h3>Displaying Results for fname :</h3>";
	$sql="select * from employee where fname = '$fname' ";
	$result=mysql_query($sql);
	$cnt=display($result);
	//$count+=$cnt;
	//echo "Number of Results :",$cnt,"<br />";
}
if($lname!=""){
	//echo "<h3>Displaying Results for lname :</h3>";
	$sql="select * from employee where lname = '$lname' ";
	$result=mysql_query($sql);
	$cnt=display($result);
	//$count+=$cnt;
	//echo "Number of Results :",$cnt,"<br />";
}
if($sex!=""){
	//echo "<h3>Displaying Results for sex :</h3>";
	$sql="select * from employee where sex = '$sex' ";
	$result=mysql_query($sql);
	$cnt=display($result);
	//$count+=$cnt;
	//echo "Number of Results :",$cnt,"<br />";
}
if($contact_no!=""){
	//echo "<h3>Displaying Results for contact number :</h3>";
	$sql="select * from employee where contact_no = '$contact_no' ";
	$result=mysql_query($sql);
	$cnt=display($result);
	//$count+=$cnt;
	//echo "Number of Results :",$cnt,"<br />";
}
if($bdate!=""){
	//echo "<h3>Displaying Results for birth date :</h3>";
	$sql="select * from employee where bdate = '$bdate' ";
	$result=mysql_query($sql);
	$cnt=display($result);
	//$count+=$cnt;
	//echo "Number of Results :",$cnt,"<br />";
}
if($address!=""){
	//echo "<h3>Displaying Results for address :</h3>";
	$sql="select * from employee where address = '$address' ";
	$result=mysql_query($sql);
	$cnt=display($result);
	//$count+=$cnt;
	//echo "Number of Results :",$cnt,"<br />";
}
if($ssn!=""){
	//echo "<h3>Displaying Results for ssn :</h3>";
	$sql="select * from employee where ssn = '$ssn' ";
	$result=mysql_query($sql);
	$cnt=display($result);
	//$count+=$cnt;
	//echo "Number of Results :",$cnt,"<br />";
}
if($join_date!=""){
	//echo "<h3>Displaying Results for joining date :</h3>";
	$sql="select * from employee where join_date = '$join_date' ";
	$result=mysql_query($sql);
	$cnt=display($result);
	//$count+=$cnt;
	//echo "Number of Results :",$cnt,"<br />";
}
if($dno!=""){
	//echo "<h3>Displaying Results for department number :</h3>";
	$sql="select * from employee where dno = '$dno' ";
	$result=mysql_query($sql);
	$cnt=display($result);
	//$count+=$cnt;
	//echo "Number of Results :",$cnt,"<br />";
}
if($leave_date!=""){
	//echo "<h3>Displaying Results for leaving date :</h3>";
	$sql="select * from employee where leave_date = '$leave_date' ";
	$result=mysql_query($sql);
	$cnt=display($result);
	//$count+=$cnt;
	//echo "Number of Results :",$cnt,"<br />";
}
}
echo "<h3> Total Number of Results :",$count,"</h3>";
}
echo "<h2>Showing Workers</h2>";
$count1=0;
if($_POST['all']=="true"){
	$sql="select * from workers";
	$result=mysql_query($sql);
	$cnt=display($result);
}
else{
if($fname!=""){
	//echo "<h3>Displaying Results for fname :</h3>";
	$sql="select * from workers where fname = '$fname' ";
	$result=mysql_query($sql);
	$cnt=display($result);
	//$count+=$cnt;
	//echo "Number of Results :",$cnt,"<br />";
}
if($lname!=""){
	//echo "<h3>Displaying Results for lname :</h3>";
	$sql="select * from workers where lname = '$lname' ";
	$result=mysql_query($sql);
	$cnt=display($result);
	//$count+=$cnt;
	//echo "Number of Results :",$cnt,"<br />";
}
if($sex!=""){
	//echo "<h3>Displaying Results for sex :</h3>";
	$sql="select * from workers where sex = '$sex' ";
	$result=mysql_query($sql);
	$cnt=display($result);
	//$count+=$cnt;
	//echo "Number of Results :",$cnt,"<br />";
}
if($contact_no!=""){
	//echo "<h3>Displaying Results for contact number :</h3>";
	$sql="select * from workers where contact_no = '$contact_no' ";
	$result=mysql_query($sql);
	$cnt=display($result);
	//$count+=$cnt;
	//echo "Number of Results :",$cnt,"<br />";
}
if($bdate!=""){
	//echo "<h3>Displaying Results for birth date :</h3>";
	$sql="select * from workers where bdate = '$bdate' ";
	$result=mysql_query($sql);
	$cnt=display($result);
	//$count+=$cnt;
	//echo "Number of Results :",$cnt,"<br />";
}
if($address!=""){
	//echo "<h3>Displaying Results for address :</h3>";
	$sql="select * from workers where address = '$address' ";
	$result=mysql_query($sql);
	$cnt=display($result);
	//$count+=$cnt;
	//echo "Number of Results :",$cnt,"<br />";
}
if($ssn!=""){
	//echo "<h3>Displaying Results for ssn :</h3>";
	$sql="select * from workers where ssn = '$ssn' ";
	$result=mysql_query($sql);
	$cnt=display($result);
	//$count+=$cnt;
	//echo "Number of Results :",$cnt,"<br />";
}
if($join_date!=""){
	//echo "<h3>Displaying Results for joining date :</h3>";
	$sql="select * from workers where join_date = '$join_date' ";
	$result=mysql_query($sql);
	$cnt=display($result);
	//$count+=$cnt;
	//echo "Number of Results :",$cnt,"<br />";
}
if($dno!=""){
	//echo "<h3>Displaying Results for department number :</h3>";
	$sql="select * from workers where dno = '$dno' ";
	$result=mysql_query($sql);
	$cnt=display($result);
	//$count+=$cnt;
	//echo "Number of Results :",$cnt,"<br />";
}
if($leave_date!=""){
	//echo "<h3>Displaying Results for leaving date :</h3>";
	$sql="select * from workers where leave_date = '$leave_date' ";
	$result=mysql_query($sql);
	$cnt=display($result);
	//$count+=$cnt;
	//echo "Number of Results :",$cnt,"<br />";
}
if($super_ssn!=""){
	//echo "<h3>Displaying Results for leaving date :</h3>";
	$sql="select * from workers where super_ssn = '$super_ssn' ";
	$result=mysql_query($sql);
	$cnt=display($result);
	//$count+=$cnt;
	//echo "Number of Results :",$cnt,"<br />";
}
}
echo "<h3> Total Number of Results :",$count1,"</h3>";
//$_SESSION['prev']="query_result.php?dno=".$_GET['dno'];
?>
</body>
</html>	
