<?php 
	include_once "./conn/conn.php";
	//查询简历
	 $uid = $_SESSION['login_user']['uid'];
	 $sginfo = array();
	 $sql = "select * from resume where uid ='{$uid}' order by id desc limit 1";
	 
	
	 $ret = mysqli_query($conn,$sql);
	 $datarow = mysqli_num_rows($ret);
	for ($i=0; $i < $datarow; $i++) { 
	  $sginfo[] = mysqli_fetch_array($ret);
	}
 ?>

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
			<div class="center">
				<p>个人简历</p>
				<div class="line" style="margin-bottom: 70px;"></div>
				<form class="info_input" method="post" action="jianlisql.php">
					<table class="table_box" >
						<tr>
							<td>姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名 ：<input class="text_box" type="text" name="name" value="<?php echo $sginfo[0]['name'];?>"/></td>
						</tr>
						<tr>
							<td>性&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;别 ：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="sex" value="0" <?php if($sginfo[0]['sex']==0){echo 'checked';}?>/>
			  男 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			  <input type="radio" name="sex" value="1" <?php if($sginfo[0]['sex']==0){echo 'checked';}?>/> 
			女</td>
						</tr>
						<tr>
							<td>出生日期 ：<input class="text_box" type="tex" name="date" value="<?php echo $sginfo[0]['date'];?>" /></td>
						</tr>
						<tr>
							<td>联系电话 ：<input class="text_box" type="text" name="tel"  value="<?php echo $sginfo[0]['tel'];?>" /></td>
						</tr>
						<tr>
							<td>联系邮箱 ：<input class="text_box" type="text" name="email"  value="<?php echo $sginfo[0]['email'];?>"/></td>
						</tr>
						<tr>
							<td>所在城市 ：<input class="text_box" type="text" name="city" value="<?php echo $sginfo[0]['city'];?>" /></td>
						</tr>
						<tr>
							<td>相关证书 ：<textarea class="text_box" name="license"><?php echo $sginfo[0]['license'];?> </textarea></td>
						</tr>
						<tr>
							<td>教育背景 ：<textarea class="text_box" name="education"><?php echo $sginfo[0]['education'];?> </textarea></td>
						</tr>
						<tr>
							<td>校外实践 ：<textarea class="text_box" name="outschool"><?php echo $sginfo[0]['outschool'];?> </textarea></td>
						</tr>
						<tr>
							<td>校内实践 ：<textarea class="text_box" name="inschool"><?php echo $sginfo[0]['inschool'];?> </textarea></td>
						</tr>
						<tr>
							<td>自我评价 ：<textarea class="text_box" name="myself"><?php echo $sginfo[0]['myself'];?> </textarea></td>
						</tr>
						<tr>
							<td><input class="submit_input" type="submit" name="submit" value="更新简历"></td>
						</tr>
						
					</table>
				</form>
			</div>
		</div>		
	</body>
</html>

                        