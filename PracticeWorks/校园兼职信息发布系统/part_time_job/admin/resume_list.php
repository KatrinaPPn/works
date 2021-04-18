<?php
	include_once "../conn/conn.php";
	$uid = array();
	$enter_id=$_SESSION['admin']['enter_id'];
	$sql = "select deliver.* from deliver 
		left join job
		on job.job_id=deliver.job_id
		where job.enter_id='{$enter_id}'";
	$ret = mysqli_query($conn,$sql);
	$total= mysqli_num_rows($ret);
	$pagesize=10;
	if($total<=$pagesize){
	    $pagecount=1;
	} 
	if(($total%$pagesize)!=0){
	    $pagecount=intval($total/$pagesize)+1;
	}else{
	    $pagecount=$total/$pagesize;
	}
	if(($_GET[page])==""){
	    $page=1;
	}else{
	 	$page=intval($_GET[page]);
	}
	$sql = "select deliver.* from deliver 
		left join job
		on job.job_id=deliver.job_id
		where job.enter_id='{$enter_id}'";	
	$sql=$sql."  order by deliver.del_id limit ".($page-1)*$pagesize.",$pagesize";
	$result=mysqli_query($conn,$sql);
	
	$datarow=mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=uft-8">
		<link href="../css/style.css" rel="stylesheet">
		<title>投递简历列表</title>
	</head>
	<body>
		<table width="776" border="0" cellspacing="0" cellpadding="0" style="background-color: whitesmoke; margin-left: 5px;">
		  <tr>
		    <td height="32" style="background-color: gainsboro;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;您现在的位置：校园兼职信息发布系统&nbsp;&gt;&nbsp;后台管理系统</td>
		  </tr>
		  <tr>
		    <td height="32" >&nbsp;</td>
		  </tr>
		  <tr>
		    <td height="488" align="center" valign="top" >
		        <table width="708" border="0" cellpadding="0" cellspacing="1" bgcolor="#FFCC33"class="tab01">
		          <tr align="center" bgcolor="#FFCC33">
		            <td width="10">序号</td>
		            <td width="100">投递职位</td>
		            <td width="100">姓名</td>
		            <td width="79">性别</td>
		            <td width="79">出生日期</td>
		            <td width="79">电话</td>
		            <td width="58">操作</td>
		          </tr>
			<?php
			if($datarow){
			while($info=mysqli_fetch_array($result)){
				
				$job = zhiwei($info['job_id']);
				
				$resume = resume($info['uid']);
				$resume['sex'] = ($resume['sex']==0)?'男':'女';
			?>
		          <tr bgcolor="#FFFFFF">
		            <td>&nbsp;<?php echo $job[job_id];?></td>
		            <td>&nbsp;<?php echo $job[title];?></td>
		            <td>&nbsp;<?php echo $resume[name];?></td>
		            <td>&nbsp;<?php echo $resume['sex'];?></td>
		            <td>&nbsp;<?php echo $resume['date'];?></td>
		            <td>&nbsp;<?php echo $resume['tel'];?></td>
		            <td align="center" bgcolor="#FFFFFF">
					<a href="resume_edit.php?id=<?php echo $resume[res_id];?>">查看</a></td>
		          </tr>
			<?php
			}
			?>
		  <tr bgcolor="#FFFFDD">
		    <td height="22" colspan="7" align="right"> &nbsp; 共有&nbsp;
		        <?php
				   echo $total;
				?>
		&nbsp;条&nbsp;每页显示&nbsp;<?php echo $pagesize;?>&nbsp;条&nbsp;第&nbsp;<?php echo $page;?>&nbsp;页/共&nbsp;<?php echo $pagecount; ?>&nbsp;页
		      <?php
				  if($page>=2){
			  ?>
		      <a href="resume_list.php?type=<?php echo $type;?>&state=<?php echo $state;?>&page=1" title="首页"></a>
			  <a href="resume_list.php?type=<?php echo $type;?>&state=<?php echo $state;?>&page=<?php echo $page-1;?>" title="上一页"></a>
		      <?php
				  }
			  if($pagecount<=4){
				 for($i=1;$i<=$pagecount;$i++){
			  ?>
		      <a href="resume_list.php?type=<?php echo $type;?>&state=<?php echo $state;?>&page=<?php echo $i;?>"><?php echo $i;?></a>
		      <?php
				 }
		      }else{
			  for($i=1;$i<=4;$i++){	 
			  ?>
		      <a href="resume_list.php?type=<?php echo $type;?>&state=<?php echo $state;?>&page=<?php echo $i;?>"><?php echo $i;?></a>
		      <?php }?>
		      <a href="resume_list.php?type=<?php echo $type;?>&state=<?php echo $state;?>&page=<?php echo $page-1;?>" title="下一页"></a>
			  <a href="resume_list.php?type=<?php echo $type;?>&state=<?php echo $state;?>&page=<?php echo $pagecount;?>" title="尾页"></a>
		      <?php }?>
		      &nbsp;</td>
		  </tr>
		<?php
			}else{
		?>
				<tr align="center" bgcolor="#FFFFFF"><td colspan="7">对不起，您检索的信息不存在！</td>
				</tr>
		<?php
		}
		
		function resume($uid){
			$sginfo = array();
			$sql = "select * from  resume where uid ='{$uid}' ";
			 global  $conn;
		
			 $ret = mysqli_query($conn,$sql);
			 
			 while($v=mysqli_fetch_array($ret,MYSQL_ASSOC)){
				$sginfo[] =$v;
			 }
			
			return $sginfo[0];
		}
		function zhiwei($job_id){
			$sginfo = array();
			 global  $conn;
			$sql = "select * from  job where job_id ='{$job_id}' ";
		
			 $ret = mysqli_query($conn,$sql);
			 $datarow = mysqli_num_rows($ret);
			for ($i=0; $i < $datarow; $i++) { 
			  $sginfo[] = mysqli_fetch_array($ret);
			}
			return $sginfo[0];
		}
		?>
		    </table></td>
		  </tr>
		  <tr>
		    <td height="32" >&nbsp;</td>
		  </tr>
		</table>
	</body>
</html>


