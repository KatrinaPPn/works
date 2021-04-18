<?php
	@session_start();
	$CardID = $_SESSION['CardID'];
	$Realname = $_SESSION['Realname'];
	$succend = 0;
	if(isset($_GET['succend'])) $succend = (int)$_GET['succend'];
	$errmsg = "";
	if(isset($_GET['errmsg'])) $errmsg = $_GET['errmsg'];
?>
<script language="JavaScript" type="text/javascript">
	function pdsr(){
		var pds = document.getElementById("New_password").value;
		var pds1 = document.getElementById("Cont_psd").value;
		if(pds.length<6 || pds.length>20){
			alert("密码长度不合法，请重新输入");
			document.getElementById("New_password").innerHTML = "New_password";
			document.getElementById('New_password').focus();
		}
		else{
			if(pds != pds1){
				alert("两次密码不一致，请再次输入");
				document.getElementById("Cont_psd").innerHTML = "";
				document.getElementById('Cont_psd').focus();
			}
		}
	}
</script>
<html>
	<head>
		<meta charset="UTF-8">
		<title>忘记密码</title>
		<link rel="stylesheet" type="text/css" href="style/common.css">
		<style type="text/css">
			#container .info_input .table_box .submit_input{
				display: inline-block;
				width: 250px;
				margin: 40px 100px;
			}
			#container .center{
				width: 1000px;
				height:450px;
				margin:0 auto;
				background:#fff;
				color:#000;
				border-radius: 6px;
			}
			#container .center .succed_msg{
				margin: 50px auto;
				color: #a3a1a1;
				font-weight: bold;
			}
			#container .center .succed_msg a{
				text-decoration: none;
				
			}
			#container .center .succed_msg img{
				display: block; width:150px; height: 150px; margin: 20px auto;
			}
		</style>
	</head>
	<body>
		<div id="container">
			<div class="logo">
				<img src="./images/other/background_logo.png"/>
			</div>
			<div class="center">
				<p>忘记密码</p>
				<div class="line" style="margin-bottom: 25px;"></div>
				<?php
					if($succend != 1){ ?>
					<p style="font-size: 12px; color: #a3a1a1; margin-left: 50px; margin-bottom: 30px;"> 正在为您重置密码，请输入您的新密码</p>
					<form class="info_input" method="post" action="modify_psd.php" name="frm">
						<table class="table_box" >
							
							<tr>
								<td>&nbsp;新&nbsp;密&nbsp;码&nbsp;&nbsp;：<input id="New_password" class="text_box" type="password" name="Password" value=""/><span>*</span></td>
							</tr>
							<tr>
								<td>确认密码 ：<input id="Cont_psd" class="text_box" type="password" name="Contfit_psd"/><span>*</span></td>
							</tr>
							<tr>
								<td><input class="submit_input" type="submit" name="submit" value="确认提交" onmousedown="pdsr()"></td>
							</tr>	
					</table>
				</form>
				<?php
				}else{
				?>
					<div class="succed_msg" align="center">
						<img src="./images/other/check.png"/>
						<?php echo $errmsg; ?><a href="login.html">登陆</a>
					</div>
				<?php
					}
				?>
			</div>
		<iframe src="bottom.html" width="100%" height="400px" scrolling="no" border="0" marginwidth="0" marginheight="0" frameborder="0" align="center"></iframe>
		</div>		
	</body>
</html>