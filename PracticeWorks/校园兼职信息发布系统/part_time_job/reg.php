<?php include_once "./conn/conn.php";?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>用户注册</title>
		<link rel="stylesheet" type="text/css" href="./css/reg.css">
		<style type="text/css">
			#container .info_input .table_box .submit_input{
				display: inline-block;
				width: 350px;
				margin: 60px 125px;
			}
			#container .center .table_box .text_box{
				display: inline-block;
				width: 250px;
				line-height: 28px;
				font-size: 16px;
				border:1px solid #ccc;
				padding: 4px 10px;
			}
		</style>
	</head>
	<body>
		<div id="container">
			<div class="logo">
				<a href="index.php">
				<img src="images/logo.jpg"/>
				</a>
			</div>
			<div class="center">
				<p>用户注册</p>
				<div class="line" style="margin-bottom: 70px;"></div>
				<form class="info_input" method="post" action="regsql.php">
					<table class="table_box" >
						<tr>
							<td>用&nbsp;&nbsp;户&nbsp;&nbsp;名 ：<input class="text_box" type="text" name="username" placeholder="请填入您的用户名"/><span>*2-8 位的汉字、数字、英文字母、下划线</span></td>
						</tr>
						<tr>
							<td>账号密码 ：<input class="text_box" type="password" name="password" placeholder="请填入您的账号密码"/><span>*6位以上字符</span></td>
						</tr>
						<tr>
							<td>确认密码 ：<input class="text_box" type="password" name="contfit_psd" placeholder="请您再次确认密码"/><span>*两次密码要输入一致哦</span></td>
						</tr>
						<tr>
							<td>身份证号 ：<input class="text_box" type="text" name="cardID" placeholder="请填入您的身份证号"/><span>*用于实名认证</span></td>
						</tr>
						<tr>
							<td>真实姓名 ：<input class="text_box" type="text" name="realname" placeholder="请填入您的真实姓名"/><span>*用于实名认证</span></td>
						</tr>
						<tr>
							<td>电话号码 ：<input class="text_box" type="text" name="mobile" placeholder="请填入11位手机号"/><span>*填写下手机号吧，方便我们联系您！</span></td>
						</tr>
						<tr>
							<td>
								&nbsp;&nbsp;&nbsp;E-mail ：<input class="text_box" type="text" name="email" placeholder="请按正确的邮箱格式进行填写"/><span>*填写下邮箱吧，方便我们联系您！</span>
							</td>
						</tr>
						<tr>
							<td>
								<label>意向兼职 ：</label>
								<div class="inputbox" style="margin: -20px 50px;"><br><br>
									<?php if(!empty($zhiwei_list)){
										foreach($zhiwei_list as $k=>$v){?>
											<span style="display:block;float:left;padding:10px;width:100px;font-size:13px;color: #000000;"> 
											<input type="checkbox" name="intention[]" value="<?php echo $v;?>">
											<?php echo $v;?>&nbsp;&nbsp;</span>
										<?php }
									}?>
            					</div>
							</td>
						</tr>
						<tr>
							<td><input class="submit_input" type="submit" name="submit" value="立即注册"></td>
						</tr>
						
					</table>
				</form>
			</div>
		<iframe src="./bottom.php" width="100%" height="400px" scrolling="no" border="0" marginwidth="0" marginheight="0" frameborder="0" align="center"></iframe>
		</div>		
	</body>
</html>

                        