<?php 
	include_once "./conn/conn.php";
	if(!isset($_SESSION['login_user'])){
		ok_info('./login.php','请登录哦');
	}
	$username = $_SESSION['login_user']['username'];
	mysqli_query("set names utf8");
	$sql = "select * from user where username = '$username'";
	$zpinfo = mysqli_query($conn,$sql);
	// echo $sql;
	$datarow = mysqli_num_rows($zpinfo);
	for ($i=0; $i < $datarow; $i++) { 
	  $sginfo = mysqli_fetch_array($zpinfo);
	}
	$intention = $sginfo['intention'];
	$array_intention = explode("|",$intention);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>个人中心</title>
		<link rel="stylesheet" type="text/css" href="./css/reg.css">
	</head>
	<body>
		<div id="container">
			<div class="logo">
				<a href="main_logined.php">
				<img src="images/logo.jpg"/>
				</a>
			</div>
			<div class="center">
				<p>个人中心</p>
				<div class="line"></div>
				<div class="user_info">
	                <div>
	                    <img src="images/touxiang.jpg" alt="">
	                 </div>
	            </div>
					<form class="info_input" method="post" action="./useredit_sql.php">
						<table class="table_box" >
							<tr>
								<td>用&nbsp;&nbsp;户&nbsp;&nbsp;名 ：<input  id="username" class="text_box" type="text" name="username" disabled="disabled" value="<?php echo $username;?>"/></td>
							</tr>
							<tr>
								<td>手机号码 ：<input  id="cardID" class="text_box" type="text" name="mobile"/><span>*</span></td>
							</tr>
							<tr>
								<td>电子邮箱 ：<input id="realname" class="text_box" type="text" name="email" /><span>*</span></td>
							</tr>
							<tr>
								<td>居住地址 ：<input id="address" class="text_box" type="text" name="address" placeholder="请填入详细收货地址"/><span>*</span></td>
							</tr>
							<tr>
								<td>
									<label>意向兼职 ：</label>
									<div class="inputbox" style="margin: -20px 50px;"><br><br>
										<?php if(!empty($zhiwei_list)){
											foreach($zhiwei_list as $k=>$v){?>
												<span style="display:block;float:left;padding:10px;width:90px;font-size:13px;color: #000000;"> 
												<input type="checkbox" name="intention[]" value="<?php echo $v;?>">
												<?php echo $v;?>&nbsp;&nbsp;</span>
											<?php }
										}?>
	            					</div>
								</td>
							</tr>
							<tr align="center" style="margin-bottom: -40px;">
								<td>
									<p style="color: gray;padding-left: 0px; font-size: 14px; line-height: 20px; text-align: center;" >注：* 标记的为必填项</p>
								</td>
							</tr>
							<tr>
								<td colspan="2"><input class="submit_input" type="submit" name="submit" value="确认提交" ><input class="submit_input" type="submit" name="submit" value="重新填写" ></td>
							</tr>
						</table>
					</form>
			</div>
		<iframe src="./bottom.php" width="100%" height="400px" scrolling="no" border="0" marginwidth="0" marginheight="0" frameborder="0" align="center"></iframe>
		</div>		
	</body>
</html>

                        