<?php
	@session_start();
	$Username = $_SESSION['Username'];
	$Password = $_SESSION['Password'];
	$CardID = $_POST['CardID'];
	$Realname = $_POST['Realname'];
	$Address = $_POST['Address'];
	$Postcode = $_POST['Postcode'];
	$Tel=$_POST['Tel'];
	$Email = $_POST['Email'];
	$submit=$_POST['submit'];
	$sql1="";
	if($submit=="重新填写") header("Location:per_center.php?isnew=1"); //页面重定向
	if($submit=="确认提交") {  //单击“确认提交”按钮后的处理
		if($Address != "") $sql1.=",Address='$Address'";
		if($Postcode != "") $sql1.=",Postcode='$Postcode'";
		if($Tel != "") $sql1.=",Tel='$Tel'";
		if($Email != "") $sql1.=",Email='$Email'";
		require_once("opendata.php.inc");
		$sql="UPDATE user SET password= ".$sql1." WHERE Username='$Username'";
		mysql_query($sql);
		mysql_close();
		$errmsg = "您已经完成了个人资料的修改"; //设置反馈信息
		header("Location:per_center.php?succend=1&isnew=0&errmsg=".$errmsg);
	}
?>