
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>会员登录</title>
		<link rel="stylesheet" type="text/css" href="./css/login.css">
	</head>
	<body class="a">
		<!-- login -->
		<!--顶部商标-->
		<div class="top center">
			<div class="logo center">
				<a href="./main.php" target="_blank"><img src="images/logo.jpg" alt="" style="padding: 20px;"></a>
			</div>
		</div>
		<form  method="post" action="loginsql.php" class="form center">
			<div class="background_login">
				<div class="login">
					<div class="login_center">
						<div class="login_top">
							<div class="left fl">会员登录</div>
							<div class="right fr">您还不是我们的会员？<a href="./reg.php" target="_self">立即注册</a></div>
							<div class="clear"></div>
							<div class="xian center"></div>
						</div>
						<div class="login_main center">
							<div class="login_input">用户名:&nbsp;&nbsp;<input class="inputbox" type="text" name="username" placeholder="请输入你的用户名"/></div>
							<div class="login_input">密&nbsp;&nbsp;&nbsp;&nbsp;码:&nbsp;&nbsp;<input class="inputbox" type="password" name="password" placeholder="请输入你的密码"/></div>
							<!--<div class="login_input">
								<div class="left fl">验证码:&nbsp;&nbsp;<input class="yanzhengma" type="text" name="login_input" placeholder="请输入验证码"/>&nbsp;&nbsp;<img src="../Climb/images/other/01.jpg" width="120" height="32"></div>			
							</div>-->
						</div>
						<div class="login_submit">
							<input class="submit" type="submit" value="立即登录">
						</div>
						<div class="forgot" align="right"><a href="./forget_psd.html" target="_self">忘记密码</a></div>
					</div>
				</div>
			</div>
		</form>
		<footer>
			<div class="copyright">简体 | 繁体 | English | 常见问题</div>
			<div class="copyright">兼职汪公司版权所有&nbsp;|&nbsp;京ICP备09667069号&nbsp;|&nbsp;京ICP证B0045-1596号&nbsp;|&nbsp;公安局XX分局备案编号：145827169120</div>
		</footer>
	</body>
</html>
                      