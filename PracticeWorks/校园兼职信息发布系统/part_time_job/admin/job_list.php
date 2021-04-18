<?php
	include_once "../conn/conn.php";
	$enter_id=$_SESSION['admin']['enter_id'];
	$where = "enter_id='{$enter_id}'";
	$sql1=mysqli_query($conn,"select count(*) as total from job where ".$where ." order by edate");
	mysqli_query("set character_set_clien=utf-8");
	mysqli_query("set character_set_connection utf-8");
	mysqli_query("set character_set_results utf-8");
	mysqli_query("set names utf-8");
	
	$minfo=mysqli_fetch_array($sql1);
	$total=$minfo[total];
	$pagesize=6;
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
	$sql="select * from job where ".$where ."  order by edate desc limit ".($page-1)*$pagesize.",$pagesize";
	$result=mysqli_query($conn,$sql);
	mysqli_query("set names utf8");
	$info=mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>中间栏</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link href="../css/style.css" rel="stylesheet">
	</head>
	<body>
	<table width="776" border="0" cellspacing="0" cellpadding="0" style="background-color: ghostwhite; margin-left:5px ;" >
	  <tr>
	    <td height="32" style="background-color: gainsboro;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;您现在的位置：校园兼职信息发布系统&nbsp;&gt;&nbsp;后台管理系统</td>
	  </tr>
	  <tr>
	    <td height="32" >&nbsp;</td>
	  </tr>
	  <tr>
	    <td height="488" align="center" valign="top" style="padding: 10px 10px;">
		职位信息列表
	        <table width="708" border="0" cellpadding="0" cellspacing="1" bgcolor="#FFCC33" class="tab01">
	          <tr align="center" bgcolor="#FFCC33">
	            <td width="10">序号</td>
	            <td width="111">职位类型</td>
	            <td width="203">题目</td>
	            <td width="79">薪资</td>
	            <td width="61">联系人</td>
	            <td width="61">发布时间</td>
	            <td width="100">操作</td>
	          </tr>
		<?php
		if($info){
		while($v=mysqli_fetch_array($result,MYSQL_ASSOC)){
			
		?>
	          <tr bgcolor="#FFFFFF">
	            <td>&nbsp;<?php echo $v[job_id];?></td>
	            <td>&nbsp;<?php echo $v[type];?></td>
	            <td>&nbsp;<?php echo $v[title];?></td>
	            <td>&nbsp;<?php echo $v[salary];?></td>
	            <td>&nbsp;<?php echo $v[contacts];?></td>
	            <td>&nbsp;<?php echo $v[edate];?></td>
	            <td align="center" bgcolor="#FFFFFF">
				<a href="job_edit.php?id=<?php echo $v[job_id];?>">查看编辑</a>
				<a href="job_del.php?id=<?php echo $v[job_id];?>">删除</a></td>
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
	      <a href="job_list.php?type=<?php echo $type;?>&state=<?php echo $state;?>&page=1" title="首页"></a>
		  <a href="job_list.php?type=<?php echo $type;?>&state=<?php echo $state;?>&page=<?php echo $page-1;?>" title="上一页"></a>
	      <?php
			  }
		  if($pagecount<=4){
			 for($i=1;$i<=$pagecount;$i++){
		  ?>
	      <a href="job_list.php?type=<?php echo $type;?>&state=<?php echo $state;?>&page=<?php echo $i;?>"><?php echo $i;?></a>
	      <?php
			 }
	      }else{
		  for($i=1;$i<=4;$i++){	 
		  ?>
	      <a href="job_list.php?type=<?php echo $type;?>&state=<?php echo $state;?>&page=<?php echo $i;?>"><?php echo $i;?></a>
	      <?php }?>
	      <a href="job_list.php?type=<?php echo $type;?>&state=<?php echo $state;?>&page=<?php echo $page-1;?>" title="下一页"></a>
		  <a href="job_list.php?type=<?php echo $type;?>&state=<?php echo $state;?>&page=<?php echo $pagecount;?>" title="尾页"></a>
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
		?>
	    </table></td>
	  </tr>
	  <!--<tr>
	    <td height="32" >&nbsp;</td>
	  </tr>-->
	</table>
	</body>
</html>