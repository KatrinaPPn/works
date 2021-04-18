<?php
	header("content-type:text/html; charset=utf-8");
	@session_start();
	$_SESSION['Username'] = $_SESSION['Password'] = $_SESSION['CardID'] = $_SESSION['Realname'] = null;
//	验证用户名跟密码输入是否符合要求的函数
	function checkname($Username){
		if(!preg_match('/^[\w\x{4e00}-\x{9fa5}]{2,10}$/u',$Username)){
			return '用户名不符合格式要求！';
		}
		return true;
	}

	function checkPassword($Password){
		if(!preg_match('/^\w{6,16}$/',$Password)){
			return '密码不符合格式要求！';
		}
		return true;
	}
	
	//定义数组用于保存错误信息
	$error=array();
		//接收到信息后（empty返回false，取反if结果为true），执行下列程序
	if(!empty($_POST)){
		//接受用户信息
		$Username=isset($_POST['Username'])?$_POST['Username']:'';
		$Password=isset($_POST['Password'])?$_POST['Password']:'';
		//验证密码和用户名
		if(($result=checkname($Username))!==true)
			$error[]=$result;
		if(($result=checkPassword($Password))!==true)
			$error[]=$result;
		//错误信息为空（empty返回true）则执行下列程序
		if(empty($error)){
			//连接数据库
			$con=mysqli_connect('localhost','root','','climb')
				or die ('数据库连接失败');
			//设置字符集
			mysqli_query($con,'set names utf8');
			//转义sql语句中的特殊字符
			$Username=mysqli_real_escape_string($con,$Username);
			//在user表中查询用户信息
			$sql="select `Username`,`Password`,`CardID`,`Realname` from `user` where `Username` like '$Username'";
			//从数据库中提取对应的结果集
			if($rst=mysqli_query($con,$sql)){
				//处理结果集
				$row=mysqli_fetch_assoc($rst);
				//计算用md5加密后的密码
				$Password=md5($Password);
				//判断用户输入的密码跟数据库中对应密码是否一致
				if($Password==$row['Password']){
//					//登陆成功，跳转到商城首页
//					require './main_logined.php';
					$_SESSION['Username'] = $Username;
					$_SESSION['Password'] = $Password;
					$_SESSION['CardID'] = $row['CardID'];
					$_SESSION['Realname'] = $row['Realname'];
					header('Location:./main_logined.php');
					//终止脚本继续执行
					die;

				}
			}
			$error[]='用户名不存在或密码不正确';
		}
	}
	$url = 'login.html';
	include_once './error.php';
?>


