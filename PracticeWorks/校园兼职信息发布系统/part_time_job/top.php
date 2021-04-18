<?php 
//连接数据库
include_once "./conn/conn.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>导航</title>
		<link rel="stylesheet" type="text/css" href="css/base.css"/>
		<style>
			li{
				width: 15%;
			}
		</style>
	</head>
	<body>
		<?php 
		if(isset($_SESSION['login_user'])){
			echo '<ul id="nav">';
			echo '<li><a href="index.php">首页</a></li>';
			echo	'<li><a href="zhiwei.php">职位</a></li>';
			echo	'<li><a href="./user_edit.php">个人信息</a></li>';
			echo	'<li><a href="./jianli.php">简历</a></li>';
			echo	'<li><a href="./users.php">已投递职位</a></li>';
			echo	'<li><a href="./loginout.php">安全退出</a></li>';
			echo '</ul>';
		}else{
			echo '<ul id="nav">';
			echo	'<li><a href="index.php">首页</a></li>';
			echo	'<li><a href="zhiwei.php">职位</a></li>';
			echo	'<li><a href="gongsi.php">公司</a></li>';
			echo	'<li><a href="login.php">个人登录</a></li>';
			echo	'<li><a href="admin/login.php">企业登录</a></li>';
			echo '</ul>';
		}
		
		?>
	</body>
</html>