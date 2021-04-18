<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>兼职搜索</title>
		<style type="text/css">
		</style>
	</head>
	<body>
	      <table width="999">
	         <tr>
	            <td style=" width: 90%;text-align: left; background:#f1f1f1;border-radius:3px;border:1px solid #f1f1f1;">
	               <form action="zhiwei.php" method="post">
								   <span style="display:block;float:left;width:850px;font-size:18px;color:#138535;padding-left: 5px;padding-top: 10px;"> 
										职位搜索区&nbsp;&nbsp;</span><br>
								   <?php if(!empty($zhiwei_list)){
											foreach($zhiwei_list as $k=>$v){
												$c = '';
												if(isset($_POST['search_aihao'])){
													
													if(in_array($v,$_POST['search_aihao'])){
														$c = 'checked';
													}
												}
												?>
												<span style="display:block;float:left;width:140px;font-size:14px;padding-left: 10px;padding-top: 5px;"> 
												<input type="checkbox" name="search_aihao[]" value="<?php echo $v;?>" <?php echo $c;?>>
												<?php echo $v;?>&nbsp;&nbsp;</span>
											<?php }
											
									}?>
	               <input style="margin: 10px 0;" type="text" name="search_key" value="<?php if(isset($_POST['search_key'])){ echo $_POST['search_key'];}?>" maxlength="50" autocomplete="off" placeholder="请输入关键字">
	               <button class="btn btn-search" ka="search_box_index">搜索</button>
	               </form>
	            </td>
	         </tr>
	      </table>
	</body>
</html>
      
                       
                               