<?php
	@session_start();
	$Username = $_SESSION['Username'];
	$Password = $_SESSION['Password'];
	$CardID = $_SESSION['CardID'];
	$Realname = $_SESSION['Realname'];
	$isnew = 0;
	if(isset($_GET['isnew'])) $isnew = (int)$_GET['isnew'];
	$succend = 0;
	if(isset($_GET['succend'])) $succend = (int)$_GET['succend'];
	$errmsg = "";
	if(isset($_GET['errmsg'])) $errmsg = $_GET['errmsg'];
	if($isnew == 0){
		require_once('opendata.php.inc');
		$sql = "SELECT * FROM user WHERE Username = '$Username' ";
		$records = mysql_query($sql);
		$rows = mysql_fetch_array($records);
		$Address = $rows['Address'];
		$Postcode = $rows['Postcode'];
		$Tel=$rows['Tel'];
		$Email = $rows['Email'];
	}
	else if($isnew == 1){
		$Address = "";
		$Postcode = "";
		$Tel="";
		$Email = "";
	}
?>
<script  language="JavaScript" type="text/javascript">
	function checkEmail(obj){
	      var reg=/[a-zA-Z0-9]{1,10}@[a-zA-Z0-9]{1,5}\.[a-zA-Z0-9]{1,5}/;
//	      var reg = /^([a-zA-Z]|[0-9])(\w|\-)+@[a-zA-Z0-9]+\.([a-zA-Z]{2,4})$/;
	      if(!reg.test(obj)){
	        alert("您输入的E-mail格式有误，请重新输入");
	        document.getElementById("Email").innerHTML = "";
	      }
	    }
	function psdr(){
		var postcode = document.getElementById("Postcode").value;
		var tel = document.getElementById("Tel").value;
		var email = document.getElementById("Email").value;
		
		if(postcode.length != 6){
			alert("您输入的邮政编码错误，请重新输入");
			document.getElementById("Postcode").innerHTML = "";
			document.getElementById('Postcode').focus();
		}
		else if(tel.length != 11){
				alert("您输入的手机号码有误，请重新输入");
				document.getElementById("Tel").innerHTML = "";
				document.getElementById('Tel').focus();
		}
		else{
			checkEmail(email);
		}
	}
</script>
<html>
	<head>
		<meta charset="UTF-8">
		<title>个人中心</title>
		<link rel="stylesheet" type="text/css" href="./style/common.css">
	</head>
	<body>
		<div id="container">
			<div class="logo">
				<a href="main_logined.php">
				<img src="./images/other/background_logo.png"/>
				</a>
			</div>
			<div class="center">
				<p>个人中心</p>
				<div class="line"></div>
				<div class="user_info">
	                <div>
	                    <img src="./images/banner/touxiang.jpg" alt="">
	                 </div>
	            </div>
	            <?php
	            	if($succend !=1 ){
	            ?>
					<form class="info_input" method="post" action="./per_modify.php">
						<table class="table_box" >
							<tr>
								<td>用&nbsp;&nbsp;户&nbsp;&nbsp;名 ：<input  id="Username" class="text_box" type="text" name="Username" disabled="disabled" value="<?php echo $Username;?>"/></td>
							</tr>
							<tr>
								<td>身份证号 ：<input  id="CardID" class="text_box" type="text" name="CardID" disabled="disabled" value="<?php echo $CardID;?>"/></td>
							</tr>
							<tr>
								<td>真实姓名 ：<input id="Realname" class="text_box" type="text" name="Realname" disabled="disabled" value="<?php echo $Realname;?>"/></td>
							</tr>
							<tr>
								<td>收货地址 ：<input id="Address" class="text_box" type="text" name="Address" placeholder="请填入详细收货地址" value="<?php echo $Address;?>"/><span>*</span></td>
							</tr>
							<tr>
								<td>邮政编码 ：<input id="Postcode" class="text_box" type="text" name="Postcode" placeholder="请填入6位邮政编码" value="<?php echo $Postcode;?>"/><span>*</span></td>
							</tr>
							<tr>
								<td>电话号码 ：<input id="Tel" class="text_box" type="text" name="Tel" placeholder="请填入11位手机号" value="<?php echo $Tel;?>"/><span>*</span></td>
							</tr>
							<tr>
								<td>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E-mail ：<input id="Email" class="text_box" type="text" name="Email" placeholder="请按正确的邮箱格式进行填写" value="<?php echo $Email;?>"/><span>*</span>
								</td>
							</tr>
							<tr align="center" style="margin-bottom: -40px;">
								<td>
									<p style="color: gray; font-size: 14px; line-height: 20px; text-align: center;" >注：* 标记的为必填项</p>
								</td>
							</tr>
							<tr>
								<td colspan="2"><input class="submit_input" type="submit" name="submit" value="确认提交" onmousedown="psdr()"><input class="submit_input" type="submit" name="submit" value="重新填写" ></td>
							</tr>
						</table>
					</form>
				<?php
	            	}else{
	            ?>
		           <div class="err" align="center" style="height: 200px;">
		           		<p style="color: #a3a1a1; font-size: 16px; "><?php echo $errmsg?>跳转至<a href="./main_logined.php">商城首页</a></p>
		           </div>
	           <?php
	            }	
	            ?>
			</div>
		<iframe src="./bottom.html" width="100%" height="400px" scrolling="no" border="0" marginwidth="0" marginheight="0" frameborder="0" align="center"></iframe>
		</div>		
	</body>
</html>
