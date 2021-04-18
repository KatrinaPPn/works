<html>
	<head>
		<meta charset="UTF-8">
		<title>忘记密码</title>
		<link rel="stylesheet" type="text/css" href="./style/common.css">
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
			.error_box{
			width: 430px;
			height: 200px;
			margin:auto;
			padding-top:70px ;
			text-align: center;
			font-family: 微软雅黑 ;
			font-size: 14px;
			}
			ul,li{
				list-style-type: none;
				margin: 20px auto;
			}
			.reset_box{
				width: 430px;
				height: 25px;
				margin: auto;
				padding-top:10px;
				text-align: center;
				font-family: 微软雅黑 ;
				font-size: 14px;
			}
			a{
				color: red;
			}
		</style>
	</head>
	<body>
		<div id="container">
			<div class="logo">
				<img src="./images/other/background_logo.png"/>
			</div>
			<div class="center">
				<p>操作失败</p>
				<div class="line" style="margin-bottom: 25px;"></div>	
				<?php if(!empty($error)):  ?>
					<div class="error_box">操作失败，错误信息如下：
						<ul><?php foreach($error  as $v) echo  "<li>$v</li>"; ?></ul>
					<p style="color: black; font-family: '微软雅黑'; font-size: 14px; font-weight: normal;">请<a href="<?php echo $url;?>">重新尝试</a></p>
					</div>
				<?php endIf; ?>			
		<iframe src="bottom.html" width="100%" height="400px" scrolling="no" border="0" marginwidth="0" marginheight="0" frameborder="0" align="center"></iframe>
		</div>		
	</body>
</html>




