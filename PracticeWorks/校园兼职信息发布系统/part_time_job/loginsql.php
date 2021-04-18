<?php
	include_once "./conn/conn.php";
	@session_start();
	$_SESSION['login_user'] = null;
	$username = $_POST['username'];
	$password = $_POST['password'];
//判断不能为空
	if(empty($username)){
		ok_info('./login.php','用户名不能为空哦');
	}
	if(empty($password)){
		ok_info('./login.php','密码不能为空哦');
	}

//	验证用户名跟密码输入是否符合要求的函数
	function checkname($username){
		if(!preg_match('/^[\w\x{4e00}-\x{9fa5}]{2,10}$/u',$username)){
			return '用户名';
		}
		return true;
	}

	function checkPassword($password){
		if(!preg_match('/^\w{6,16}$/',$password)){
			return '密码';
		}
		return true;
	}
	$error = array();
	if(!empty($_POST)){
		//接收用户输入的信息
		$username = isset($_POST['username'])?$_POST['username']:'';
		$password = isset($_POST['password'])?$_POST['password']:'';
		if(($result=checkname($username))!==true)
			$error[]=$result;
		else if(($result=checkPassword($password))!==true)
			$error[]=$result;
		if(empty($error)){
			include_once "./conn/conn.php";
			//转义sql语句中的特殊字符
			$username=mysqli_real_escape_string($conn,$username);
			//查询语句
			$sql = "select * from user where `username` like '$username'";
			//从数据库重提取对应的结果集
			if($ret = mysqli_query($conn, $sql)){
				$row = mysqli_fetch_assoc($ret);
				$password = md5($password);
				if($password == $row['password']){
					$_SESSION['login_user']['username'] = $row['username'];
					$_SESSION['login_user']['uid'] = $row['uid'];
					$_SESSION['login_user']['intention'] = $row['intention'];
					ok_info('./index.php','登陆成功，去首页');
					die;
				}
				else{
					ok_info('./login.php','密码错误，请重试');
				}
			}	
		}
		else{
			$err_info = implode(',  ',$error);
			$err_info  = $err_info.'未填写或格式错误';
			ok_info('./login.php',$err_info);
		}
	}
?>
