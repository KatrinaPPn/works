<?php
	include_once "./conn/conn.php";
	$resume = $_POST;
	$uid = $_SESSION['login_user']['id'];
	
	
	$name = $resume['name'];
	$sex = $resume['sex'];
	$date = $resume['date'];
	$tel= $resume['tel'];
	$email= $resume['email'];
	$city= $resume['city'];
	$license= $resume['license'];
	$education= $resume['education'];
	$outschool= $resume['outschool'];
	$inschool= $resume['inschool'];
	$myself= $resume['myself'];
	
	$sql = "select * from  resume where uid ='{$uid}' ";
	
	$ret = mysqli_query($conn,$sql);
	$sginfo = array();
	$datarow = mysqli_num_rows($ret);
	for ($i=0; $i < $datarow; $i++) { 
	  $sginfo[] = mysqli_fetch_array($ret);
	}
	
	if(!$sginfo){
		$sql = "insert into resume(uid,name,sex,date,tel,email,city,license,education,outschool,inschool,myself)VALUE
	('$uid','$name','$sex','$date','$tel','$email','$city','$license','$education','$outschool','$inschool','$myself')";
		$txt = '您的简历录入成功';
		
	}else{
		$sql = "UPDATE `resume` SET 
			`name` = '$name' 
		,	`sex` = '$sex' 
		,	`date` = '$date' 
		,	`tel` = '$tel' 
		,	`email` = '$email' 
		,	`city` = '$city' 
		,	`license` = '$license' 
		,	`education` = '$education' 
		,	`outschool` = '$outschool' 
		,	`inschool` = '$inschool' 
		,	`myself` = '$myself' 
		WHERE `resume`.`uid` = '{$uid}';";
		$txt = '您的简历更新成功';
	}
	
	
	$suc = mysqli_query($conn,$sql);
	if($suc){
	    ok_info('./weijianli.php',$txt);
	}else{
		ok_info('./weijianli.php','更新失败，请重试');
	}
?>