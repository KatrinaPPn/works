<?php 
//连接数据库
	include_once "./conn/conn.php";
	mysqli_query("set names utf8");
	$zpinfo = mysqli_query($conn,'select * from job order by job_id desc limit 15');
	$datarow = mysqli_num_rows($zpinfo);
	for ($i=0; $i < $datarow; $i++) { 
	  $sginfo[] = mysqli_fetch_array($zpinfo);
	}
?>
  
  <table border="0" align="center" width="100%" class="table01">
    <tr> <td colspan="7" style="" align="center" class="title">热门职位</td></tr>
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