<?php
	include_once "./conn/conn.php";
	if(empty($_POST)){
		ok_info('./reg.php','未提交表单，请重新注册');
	}else{
		$check_array=array('username','password','contfit_psd','cardID','realname','email','mobile','intention');
		foreach($check_array as $v){
			if(empty($_POST[$v])){
				$error[]=$v;
			}
	}
	if(!empty($error)){
		$err_info = implode(',',$error);
		$err_info  = $err_info.'未填写';
		ok_info('./reg.php',$err_info);
	}

	$username=$_POST["username"];
	$password=$_POST["password"];
	$contfit_psd=$_POST["contfit_psd"];
	$cardID=$_POST["cardID"];
	$realname=$_POST["realname"];
	$email=$_POST["email"];
	$mobile=$_POST["mobile"];
	$intention= $_POST['intention'];
	$str_intention = implode("|",$intention);
	
	//判断两次密码是否一致
	if($password!=$contfit_psd){
		ok_info('./reg.php','两次输入的密码不一致，请重试');
	}else{
	
	//加密密码
	$password=md5($password);	
	
	//判断用户名是否存在
	$sql="select * from `user` where `username`like '$username'";
	$rst=mysqli_query($conn,$sql);
	if(mysqli_fetch_array($rst)){
		ok_info('./login.php','该用户名已存在，请直接登录');
	}
		
	//判断身份证号是否存在
	$sql="select * from `user` where `cardID`like '$cardID'";
	$rst=mysqli_query($conn,$sql);
	if(mysqli_fetch_array($rst)){
		ok_info('./reg.php','该身份证号已存在，请重试');
	}
		
	//判断邮箱是否存在
	$sql="select * from `user` where `email` like '$email'";
	$rst=mysqli_query($conn,$sql);
	if(mysqli_fetch_array($rst)){
		ok_info('./login.php','该邮箱已存在，请直接登录');
	}	
	
	//将数据插入数据库
	$sql = "insert into user(username,password,cardID,realname,email,mobile,intention)
			VALUE('$username','$password','$cardID','$realname','$email','$mobile','$str_intention')";
	$suc = mysqli_query($conn,$sql);
	if($suc){
//		require'./login.php';
		ok_info('./login.php','注册成功，跳转登录');
	}else{
		ok_info('./reg.php','注册失败，请重试');
	}
	}
	
	
	
}

