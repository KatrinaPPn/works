<?php include_once "../conn/conn.php";?>
<script language="javascript">
	  function chkinput(form){
	  if(form.name.value=="" | form.psd.value==""  | form.contfit_psd.value==""  | form.enterprise.value==""
	  | form.business_license.value=="" | form.mobile.value==""  | form.email.value==""){
			  alert("标记*为必填项，请确认已全部填写");
			  form.name.select();
			  return(false);
			}
			return(true);
	  }
</script>
<!DOCTYPE html>
	<html>
		<head>
			<meta charset="UTF-8">
			<title>企业管理员注册</title>
			<link rel="stylesheet" type="text/css" href="../css/reg.css">
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
					<a href="main.php">
					<img src="../images/logo.jpg"/>
					</a>
				</div>
				<div class="center">
					<p>企业管理员注册</p>
					<div class="line" style="margin-bottom: 70px;"></div>
					<form class="info_input" method="post" action="regadmin.php" onSubmit="return chkinput(this)">
						<table class="table_box" >
							<tr>
								<td>账&nbsp;&nbsp;号&nbsp;&nbsp;名 ：<input class="text_box" type="text" name="name" placeholder="请填入您的账号"/><span>*2-8 位汉字、数字、英文字母、下划线</span></td>
							</tr>
							<tr>
								<td>账号密码 ：<input class="text_box" type="password" name="password" placeholder="请填入您的账号密码"/><span>*6位以上字符</span></td>
							</tr>
							<tr>
								<td>确认密码 ：<input class="text_box" type="password" name="contfit_psd" placeholder="请您再次确认密码"/><span>*两次密码要输入一致哦</span></td>
							</tr>
							<tr>
								<td>公司名字 ：<input class="text_box" type="text" name="enterprise" placeholder="请填入您的公司名称"/><span>*请填入公司或店铺名称</span></td>
							</tr>
							<tr>
								<td>营业执照 ：<input class="text_box" type="text" name="business_license" placeholder="请填入您的营业执照编号"/><span>*用于进行资质核实</span></td>
							</tr>
							<tr>
								<td>联系方式 ：<input class="text_box" type="text" name="mobile" placeholder="请填入11位手机号"/><span>*填写下手机号吧，方便我们联系您！</span></td>
							</tr>
							<tr>
								<td>企业邮箱 ：<input class="text_box" type="text" name="email" placeholder="请按正确的邮箱格式进行填写"/><span>*填写下邮箱吧，方便我们联系您！</span></td>
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

                        
