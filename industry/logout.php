<?php
session_start();
if(session_destroy()){
	$_SESSION['manager']="false";
	$_SESSION['employee']="false";
	$_SESSION['worker']="false";
	header("Location: login.php");
}
?>
