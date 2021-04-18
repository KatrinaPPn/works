<?php
	include_once "./conn/conn.php";
	@session_start();
	$cardID = $_SESSION['cardID'];
	$realname = $_SESSION['realname'];
	$password=$_POST['password'];
	$sql1="";
	$password=md5($password);
	$sql="UPDATE user SET password='$password' WHERE cardID='$cardID'";
	mysqli_query($conn,$sql);
	mysqli_close();
	$errmsg="您的密码已重置，请您重新"; //设置反馈信息
	header("Location:set_new_psd.php?succend=1&isnew=0&errmsg=".$errmsg);
?>