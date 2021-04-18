<?php
	@session_start();
	$CardID = $_SESSION['CardID'];
	$Realname = $_SESSION['Realname'];
	$Password=$_POST['Password'];
	$sql1="";
	require_once("opendata.php.inc");
	$Password=md5($Password);
	$sql="UPDATE user SET Password='$Password' WHERE CardID='$CardID'";
	mysql_query($sql);
	mysql_close();
	$errmsg="您的密码已重置，请您重新"; //设置反馈信息
	header("Location:edit_password.php?succend=1&isnew=0&errmsg=".$errmsg);
?>