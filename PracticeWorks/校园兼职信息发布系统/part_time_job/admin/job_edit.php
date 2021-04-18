<?php
	include_once "../conn/conn.php";
	$job_id = $_GET['id'];
	if($_GET['act']=='ok'){
		
		$job_id =$_POST[id];
		$type=$_POST[type];
		$title=$_POST[title];
		$content=$_POST[content];
		$salary=$_POST[salary];
		$contacts=$_POST[contacts];
		$company=$_POST[company];
		$site=$_POST[site];
		$tel=$_POST[tel];
		$sdate=date("Y-m-d");
		$sql = "UPDATE `job` SET `type` = '{$type}'
		, `title` = '{$title}'
		, `content` = '{$content}'
		, `salary` = '{$salary}'
		, `company` = '{$company}'
		, `site` = '{$site}'
		, `contacts` = '{$contacts}'
		, `tel` = '{$tel}'
		, `edate` = '{$sdate}' 
		WHERE `job_id` = '{$job_id}';
		";
		$sql=mysqli_query($conn,$sql);
		if($sql){
			echo "<script>alert('信息发布成功！'); parent.mainFrame.location.href='job_list.php';</script>";
		}else{
			echo "<script>alert('信息发布失败！');history.back();</script>";
		}
	}
	$sql="select * from job where job_id='{$job_id}' ";
	
	$result=mysqli_query($conn,$sql);
	
	$info=mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link href="../css/style.css" rel="stylesheet">
		<title>发布信息修改</title>
		<script language="javascript">
			function checkform(form){
				for(i=0;i<form.length;i++){
					if(form.elements[i].value==""){
						alert("请将发布信息填写完整！");
						form.elements[i].focus();
						return false;
					}
				}
			}
		</script>
		<style type="text/css">
			.submit{
				border:none;
				width: 200px;
				height: 45px;
				margin:35px auto;
				background: grey;
				color: #fff; 
				font-size: 20px;
				font-weight: bold;
				letter-spacing: 4px;
				cursor:pointer;
				border-radius: 7px;
				line-height: 45px;
				text-align: center;
			}
			.submit:hover{
				background: orange;
			}
		</style>
	</head>
	<body>
		<table width="776" border="0" cellspacing="0" cellpadding="0" style="background-color: whitesmoke;">
			<tr>
				<td height="32" style="background-color: gainsboro;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;您现在的位置：校园兼职信息发布系统&nbsp;&gt;&nbsp;后台管理系统</td>
			</tr>
			<tr>
				<td height="488" align="center" valign="top">
			        <table width="563" height="407" border="0" cellpadding="0" cellspacing="0">
			          <tr>
			            <td width="563" height="407" valign="top" >
			            	<form name="form1" method="post" action="?act=ok">
			                <table width="563" border="0" cellspacing="0" cellpadding="0" style="margin-top: 50px;">
			                	<tr>
				                    <td width="130" height="30" align="right">类别：</td>
				                    <td width="433" height="30">
									<input name="type" type="text" id="title" size="50" value="<?php echo $info['type'];?>">
									<input name="id" type="hidden" id="id" size="50" value="<?php echo $info['job_id'];?>">
				             		</td>
			                	</tr>
			                	<tr>
				                    <td height="30" align="right">标题：</td>
				                    <td height="30"><input name="title" type="text" id="title" size="50" value="<?php echo $info['title'];?>"></td>
			                	</tr>
			                	<tr>
				                    <td height="30" align="right">内容：</td>
				                    <td height="30">
				                      <textarea name="content" cols="55" rows="4" id="textarea"><?php echo $info['content'];?></textarea>
				                    </td>
			                	</tr>
			                	<tr>
				                    <td height="30" align="right">薪资：</td>
				                    <td height="30"><input name="salary" type="text" id="salary" size="30" value="<?php echo $info['salary'];?>"></td>
			                	</tr>
			                	<tr>
				                    <td height="30" align="right">联&nbsp;系&nbsp;人：</td>
				                    <td height="30"><input name="contacts" type="text" id="contacts" size="30" value="<?php echo $info['contacts'];?>"></td>
			                	</tr>
			                	<tr>
				                    <td height="30" align="right">地址：</td>
				                    <td height="30"><input name="site" type="text" id="site" size="30" value="<?php echo $info['site'];?>"></td>
			                	</tr>
			                	<tr>
				                    <td height="30" align="right">公司：</td>
				                    <td height="30"><input name="company" type="text" id="company" size="30" value="<?php echo $info['company'];?>"></td>
			                	</tr>
			                	<tr>
				                    <td height="30" align="right">联系电话：</td>
				                    <td height="30"><input name="tel" type="text" id="tel" size="30" value="<?php echo $info['tel'];?>"></td>
			                	</tr>
			                	<tr align="center">
				                    <td colspan="2">
				                      <input name="imageField" type="submit" class="submit" value="确认提交" >
				                    <!--<input name="imageField" type="image" class="input1" src="images/post.jpg" width="145" height="46" border="0" style="margin-top: 10px;">-->
				                    </td>
			                	</tr>
			                </table>
			           		</form>
			        	</td>
			    	</tr>
				</table>
		        	<br>
		    		<p>&nbsp;</p></td>
			</tr>
		</table>
	</body>
</html>



