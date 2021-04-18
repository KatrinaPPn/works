<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>个性化推荐</title>
		<style>

		</style>
	</head>
	<body>
		<div class="job-menu">
			<dl>
			<dd style="margin:15px;">
			<b style="color:#FF6500;font-size:16px;" >个性化职位推荐</b> 
			</dd>
			<?php 
			//连接数据库
			include_once "./conn/conn.php";
			$type_arr = array();
			$intention_str = '';
			if(isset($_SESSION['login_user'])&&!empty($_SESSION['login_user'])){
				if(!empty($_SESSION['login_user']['intention'])){
					$intention_arr = explode("|",$_SESSION['login_user']['intention']);
					$intention_str = implode("','",$intention_arr);
					$w = "type in ('".$intention_str."')";
				}
				$sql = 'select type from job where '.$w.' group by type';
				//echo $sql;
				$job_type = mysqli_query($conn,$sql);
				$job_type_len = mysqli_num_rows($job_type);
				for ($i=0; $i < $job_type_len; $i++) { 
					$job_type_row = mysqli_fetch_array($job_type);
					$type_arr[] = $job_type_row['type'];
				}
			}
			
			
			$w = "type not in ('".$intention_str."')";
			$sql = 'select type from job where '.$w.' group by type';
			
			$job_type = mysqli_query($conn,$sql);
			$job_type_len = mysqli_num_rows($job_type);
			for ($i=0; $i < $job_type_len; $i++) { 
			    $job_type_row = mysqli_fetch_array($job_type);
			    $type_arr[] = $job_type_row['type'];
			}
			//var_dump($type_arr);
			   foreach($type_arr as $k=>$type){
			   if($k<10){
				?>
				<dd>
			    <b><?php echo $type;?></b>
			    	<?php 
					$s = "select job_id,title from job where type='".$type."' group by title limit 10";
					
					$job_detail = mysqli_query($conn,$s);
					$job_detail_len = mysqli_num_rows($job_detail);
	//				$j<$job_detail_len
					for ($j=0;$j<2;$j++) { 
						$job_detail_row = mysqli_fetch_array($job_detail);
						$type_detail = $job_detail_row['title'];
						$job_id = $job_detail_row['job_id'];
						?><a href="detail.php?id=<?php echo $job_id;?>"><?php echo $type_detail;?></a>
						<?php 
					 }
					?>
					</dd>
					<?php 
					}
				}
				//if($job_type_len<10){
				//	$len = 10-$job_type_len;
				//	
				//}
				?>
			</dl>
		</div>
	</body>
</html>