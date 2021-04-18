<?php 
	error_reporting(0);
	   if(session_id()=='')
	    {
	       session_start();
	    }
	//连接数据库 
	
	$conn=mysqli_connect("localhost","root","","part_time_job"); 
	
	//设置utf8语言
	mysqli_query($conn,"set character_set_client=utf8;");
	mysqli_query($conn,"set character_set_connection=utf8;");
	mysqli_query($conn,"set character_set_results=utf8;");
	mysqli_query($conn,"set names utf-8");
	//函数用来提示
	function ok_info($url,$langinfo){
		if(empty($url)){
			echo("<script type='text/javascript'> alert('$langinfo');history.go(-1);</script>");		
		}else{
			echo("<script type='text/javascript'> alert('$langinfo'); window.location.href='$url'; 
			</script>");  
		}
		exit;
	}
	echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
	
	function zhiwei2(){
		$result = array();
		global $conn;
		$zpinfo = mysqli_query($conn,'select job_id,type from job group by type order by type desc');
		$datarow = mysqli_num_rows($zpinfo);
		for ($i=0; $i < $datarow; $i++) { 
		$row = mysqli_fetch_array($zpinfo);
		  $result[$row['job_id']] = $row['type'];
		}
		return $result;
	}
	$zhiwei_list = zhiwei2();
	//var_dump($zhiwei_list);
?>