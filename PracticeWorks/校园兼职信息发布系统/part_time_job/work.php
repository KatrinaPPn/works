<?php 
 include_once("./conn/conn.php");
 //检索
 //提交条件检索
$w = 'where 1=1';
//按选择意向进行检索
if(isset($_POST['search_aihao'])&&!empty($_POST['search_aihao'])){
	$aihao_str = implode("','",$_POST['search_aihao']);
	$w.= " and type in ('".$aihao_str."')";
	
}
//按搜索关键词进行检索
if(isset($_POST['search_key'])&&!empty($_POST['search_key'])){
	$w.= " and ( title like '%{$_POST['search_key']}%' or content like '%{$_POST['search_key']}%' or company like '%{$_POST['search_key']}%') ";
}
$sql = 'select * from job '.$w;
//连接数据库查询，并把查询结果保存在$sginfo
$zpinfo = mysqli_query($conn,$sql);
$datarow = mysqli_num_rows($zpinfo);
for ($i=0; $i < $datarow; $i++) { 
  $sginfo[] = mysqli_fetch_array($zpinfo);
}
?>
  
   <table border="0" align="center" width="100%" class="table01">
    <tr> <td colspan="7" style="font-size:20px;text-align:center;" align="center" class="title">全部职位</td></tr>
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