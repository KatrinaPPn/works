<?php 
//引用数据库连接文件
	include_once "./conn/conn.php";
	$job_id = $_GET['id'];
	$sginfo = array();

//执行sql
 $sql = "select * from  job where job_id ='{$job_id}' ";
 

 $ret = mysqli_query($conn,$sql);
 $datarow = mysqli_num_rows($ret);
 //查找数据
for ($i=0; $i < $datarow; $i++) { 
  $sginfo[] = mysqli_fetch_array($ret);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="./css/base.css">
	<title>校园兼职信息发布系统</title>
	</head>
	
	<style>
		.info_box p{
			text-align: left;
			padding: 5px 40px;
			font-weight: bold;
		}
		.info_box label{
			padding-left: 40px;
			line-height: 30px;
			font-weight: normal;
		}
		.link a{
			color: #FF6500;
			text-decoration: none;
		}
		.link a:hover{
			color: #FFC13E;;
			text-decoration: underline;
		}
	</style>
	<body>
		<table width="1000" border="0" align="center">
			<tr >
			  <td colspan="2"><img src="images/top1.jpg" width="1000" height="200" /></td>
			</tr>
			 <tr >
			  <td  colspan="2"><?php include_once "./top.php";?></td>
			</tr>
		    <tr >
		      <td width="1000" align="center" colspan="2"><?php include_once "./release.php";?></td>
		    </tr>
		    <tr>
				<td colspan="2">
				<h2 style="padding-left: 20px;">当前职位详情</h2>
					<div class="info_box">
						<p>名称
							<label><?php echo $sginfo[0]['title'];?>
							</label>
						</p>
						<p>薪资
							<label><?php echo $sginfo[0]['salary'];?>
							</label>
						</p>
						<p>公司
							<label><?php echo $sginfo[0]['company'];?>
							</label>
						</p>
						<p>联系人
							<label><?php echo $sginfo[0]['contacts'];?>
							</label>
						</p>
						<p>联系电话
							<label><?php echo $sginfo[0]['tel'];?>
							</label>
						</p>
						<p>截止日期
							<label><?php echo $sginfo[0]['edate'];?>
							</label>
						</p>
						<p>工作描述
							<label><?php echo $sginfo[0]['content'];?>
							</label>
						</p>
					</div>
					<p class="link">
						<a href="tou.php?id=<?php echo $sginfo[0]['job_id'];?>">我要投简历</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<a href="javascript:history.go(-1);">返回上一页</a>
					</p>
				</td>
		    </tr>
		    <tr>
		      <td align="center" colspan="2"><?php include_once "./bottom.php";?></td>
		    </tr>
		</table>
	</body>
</html>
