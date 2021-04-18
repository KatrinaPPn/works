<?php
	header("content-type:text/html;charset=utf-8");
	$url = null;
	if(empty($_POST)){
			die('没有表单提交，程序退出');
	}else{
		//判断表单中的各个控件不能为空
		$check_array=array('Username','Password','Contfit_psd','CardID','Realname','Address','Postcode','Tel','Email');
		foreach($check_array as $v){
			if(empty($_POST[$v])){
				$error[]='错误！'.$v.'字段不能为空';
				$url = 'register_html.php';
				include_once 'error.php';
				die();
//				die('错误！'.$v.'字段不能为空');
			}
		}
		//接收表单提交数据
		$Name=$_POST["Username"];
		$Password=$_POST["Password"];
		$Contfit_psd=$_POST["Contfit_psd"];
		$CardID=$_POST["CardID"];
		$Realname=$_POST["Realname"];
		$Address=$_POST["Address"];
		$Postcode=$_POST["Postcode"];
		$Tel=$_POST["Tel"];
		$Email=$_POST["Email"];
		
		//判断两次密码是否一致
		if($Password!=$Contfit_psd)
			die('确认密码不一致，请确认后再注册');

		//连接数据库
		$link=mysqli_connect("localhost","root","","climb") or die("数据库连接失败！");
		mysqli_query($link,"set names utf8");

		//防止SQL注入攻击
		$username=mysqli_real_escape_string($link,$Name);
		$password=mysqli_real_escape_string($link,$Password);
		//加密密码
		$Password=md5($Password);

		//判断用户名是否存在
		$sql="select * from `user` where `Username`like '$Name'";
		$rst=mysqli_query($link,$sql);
		if(mysqli_fetch_array($rst)){
			$error[]='该用户名已存在';
			$url = 'register_html.php';
			include_once 'error.php';
			die();
		}
		
		//判断身份证号是否存在
		$sql="select * from `user` where `CardID`like '$CardID'";
		$rst=mysqli_query($link,$sql);
		if(mysqli_fetch_array($rst)){
			$error[]='该身份证已绑定';
			$url = 'register_html.php';
			include_once 'error.php';
			die();
		}
		
		//判断邮箱是否存在
		$sql="select * from `user` where `Email` like '$Email'";
		$rst=mysqli_query($link,$sql);
		if(mysqli_fetch_array($rst)){
			$error[]='该邮箱已存在';
			$url = 'register_html.php';
			include_once 'error.php';
			die();
		}
		
		
		//数据库插入信息
		$sql="insert into `user` (`Username`,`Password`,`CardID`,`Realname`,`Address`,`Postcode`,`Tel`,`Email`) values 
		('$Name','$Password','$CardID','$Realname','$Address','$Postcode','$Tel','$Email')";
		$rst=mysqli_query($link,$sql);

		//输出结果信息
		if($rst){
			require 'login.html';	
		}else{
			$error[]='注册失败';
			$url = 'register_html.php';
			include_once 'error.php';
			die();
		}
	
	}
?>