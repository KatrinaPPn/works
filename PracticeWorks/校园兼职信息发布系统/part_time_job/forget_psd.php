<?php
	//连接数据库
	include_once "./conn/conn.php";
	header("content-type:text/html; charset=utf-8");
	@session_start();
	$_SESSION['cardID'] = $_SESSION['realname'] = null;
	function checkname($realname){
		if(!preg_match('/^[\w\x{4e00}-\x{9fa5}]{2,10}$/u',$realname)){
			return '真实姓名';
		}
		return true;
	}

	function checkcardID($cardID){
		if(!preg_match('/^\d{18}|(^\d{18}(\d|X|x))$/',$cardID)){
			return '身份证号';
		}
		return true;
	}
	//定义数组用于保存错误信息
	$error=array();
		//接收到信息后（empty返回false，取反if结果为true），执行下列程序
	if(!empty($_POST)){
		//接受用户信息
		$realname=isset($_POST['realname'])?$_POST['realname']:'';
		$cardID=isset($_POST['cardID'])?$_POST['cardID']:'';
		//验证真实姓名和身份证
		if(($result=checkname($realname))!==true)
			$error[]=$result;
		if(($result=checkcardID($cardID))!==true)
			$error[]=$result;
		//错误信息为空（empty返回true）则执行下列程序
		if(empty($error)){
			//转义sql语句中的特殊字符
			$realname=mysqli_real_escape_string($conn,$realname);
			//在user表中查询用户信息
			$sql="select `realname`,`cardID` from `user` where `cardID` like '$cardID'";
			//从数据库中提取对应的结果集
			if($rst=mysqli_query($conn,$sql)){
				//处理结果集
				$row=mysqli_fetch_assoc($rst);
				if($cardID==$row['cardID'] && $realname==$row['realname']){
					$_SESSION['cardID'] = $cardID;
					$_SESSION['realname'] = $realname;
//					header('Location:./modify_psd.php');
					ok_info('./set_new_psd.php','认证成功，跳转修改密码');
					//终止脚本继续执行
					die;
				}
				else{
					ok_info('./forget_psd.html','真实姓名不正确或身份证号不存在,请重试');
//					die;
				}
			}	
		}else{
//			格式错误反馈
			$err_msg = implode('，', $error);
			$err_msg = $err_msg.'格式有误';
			ok_info('./forget_psd.html',$err_msg);
		}
	}
?>

