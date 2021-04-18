<?php
	include_once "../conn/conn.php";
	$username =$_POST[name];
	$password =$_POST[password];
	$contfit_psd = $_POST[contfit_psd];
	$enterprise = $_POST[enterprise];
	$business_license = $_POST[business_license];
	$mobile =$_POST[mobile];
	$email =$_POST[email];

	//查询语句
	$ret = mysqli_query($conn,"select * from manager where enter_name ='{$username}'");
	$datarow = mysqli_num_rows($ret);
	for ($i=0; $i < $datarow; $i++) { 
		$sginfo[] = mysqli_fetch_array($ret);
	}
	if($sginfo){
		ok_info('./login.php','当前账号已存在，请直接登录');
	}else{
		$password = md5($password);
		$sql = "insert into manager(enter_name,password,enterprise,business_license,mobile,emile)
		VALUE('$username','$password','$enterprise','$business_license','$mobile','$email')";
	
		//插入语句
		$suc = mysqli_query($conn,$sql);
		if($suc){
			ok_info('./login.php','注册成功，去登录');
		}else{
			ok_info('./reg.php','注册失败，请重试');
		}
	}

?>