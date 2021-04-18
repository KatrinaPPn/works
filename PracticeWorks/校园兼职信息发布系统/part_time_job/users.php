<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>用户简历投递情况</title>
	</head>
	<?php 
	 include_once "./conn/conn.php";
	if(!isset($_SESSION['login_user'])){
		ok_info('./login.php','请登录哦');
	}
	?>
	<body>
	  <table width="100" border="0" align="center">
		<tr >
		  <td colspan="2"><img src="images/top1.jpg" width="1000" height="200" /></td>
		</tr>
		 <tr >
		  <td  colspan="2"><?php include_once "./top.php";?></td>
		</tr>
	    <tr>
	     <td colspan="2" >
		 <?php 
	
	mysqli_query("set names utf8");
//	$sql = "select * from deliver 
//	left join job
//	on job.id=deliver.job_id
//	where deliver.uid = '{$_SESSION['login_user']['id']}' order by c_date desc ";
	$sql = "select * from deliver 
	left join job
	on job.job_id=deliver.job_id
	where deliver.uid = '{$_SESSION['login_user']['id']}' order by c_date desc ";
	$zpinfo = mysqli_query($conn,$sql);
	// echo $sql;
	$datarow = mysqli_num_rows($zpinfo);
	for ($i=0; $i < $datarow; $i++) { 
	  $sginfo[] = mysqli_fetch_array($zpinfo);
	}
	?>
	  
	  <table border="0" align="center" width="100%" class="table01">
	    <tr> <td colspan="7" style="" align="center" class="title">我应聘的职位</td></tr>
	    <tr>
	      <th width="15%" >名称</th>
	      <th width="15%" >薪资</th>
	      <th width="25%" >公司</th>	  
	      <th width="10%" >联系人</th>
	      <th width="10%" >联系电话</th>
	      <th width="10%" >截止日期</th>
	      <th width="5%"  >招聘详情</th>
	    </tr>
	    <?php foreach($sginfo as $k =>$v):?>
	    <tr>
	      <td  align="left"><?php echo $v['title'];?></td> 
	      <td  align="center"><?php echo $v['salary'];?></td> 
		  <td  align="center"><?php echo $v['company'];?></td>
	      <td  align="center"><?php echo $v['contacts'];?></td> 
	      <td  align="center"><?php echo $v['tel'];?></td> 
	      <td  align="center"><?php echo $v['edate'];?></td> 
	      <td  align="center"><a href="detail.php?id=<?php echo $v['job_id'];?>">查看</a></td> 
	    </tr>
	    <?php endforeach;?>
	  </table>
		 
		 </td>
	    </tr>
	    <tr>
	      <td align="center" colspan="2"><?php include_once "./bottom.php";?></td>
	    </tr>
	  </table>
	
	</body>
</html>
