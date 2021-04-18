<?php 
 include_once "../conn/conn.php" ;
if(!isset($_SESSION['admin'])){
	ok_info('./login.php','请登录后操作');
}
?>
<!DOCTYPE html>
<html>
	<head>
		<link href="../css/style.css" rel="stylesheet">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>校园兼职信息发布系统--后台管理系统</title>
	</head>
	<body>
		<div style="height: 38px;background-color: gainsboro;">
			<a href="../index.php" style="line-height: 28px;font-size:18px; padding-left: 1000px;">网站首页</a>
		</div>
		<table width="1000" style="margin:0 auto;">
			<tr><td colspan="1"><?php include_once 'top.php';?></td></tr>
			<tr>
				<td  width="300">
					<?php include_once 'left.php';?>
				</td>
				<td>
					<iframe name="mainFrame" id="Main" src='main.php' frameborder="false" width="100%" height="520" allowtransparency="true" scrolling="no" ></iframe>
				</td>
			</tr>
			<tr>
				<td colspan="2"><?php include_once 'bottom.php';?></td>
			</tr>
		</table>
	</body>
</html>
