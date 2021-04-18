<?php
	header("content-type:text/html; charset=utf-8");
	@session_start();
	$_SESSION['CardID'] = $_SESSION['Realname'] = null;
	function checkname($Realname){
		if(!preg_match('/^[\w\x{4e00}-\x{9fa5}]{2,10}$/u',$Realname)){
			return '真实姓名不符合格式要求！';
		}
		return true;
	}

	function checkCardID($CardID){
		if(!preg_match('/^\d{18}|(^\d{18}(\d|X|x))$/',$CardID)){
			return '身份证号不符合格式要求！';
		}
		return true;
	}
	//定义数组用于保存错误信息
	$error=array();
		//接收到信息后（empty返回false，取反if结果为true），执行下列程序
	if(!empty($_POST)){
		//接受用户信息
		$Realname=isset($_POST['Realname'])?$_POST['Realname']:'';
		$CardID=isset($_POST['CardID'])?$_POST['CardID']:'';
		//验证真实姓名和身份证
		if(($result=checkname($Realname))!==true)
			$error[]=$result;
		if(($result=checkCardID($CardID))!==true)
			$error[]=$result;
		//错误信息为空（empty返回true）则执行下列程序
		if(empty($error)){
			//连接数据库
			$con=mysqli_connect('localhost','root','','Climb')
				or die ('数据库连接失败');
			//设置字符集
			mysqli_query($con,'set names utf8');
			//转义sql语句中的特殊字符
			$Realname=mysqli_real_escape_string($con,$Realname);
			//在user表中查询用户信息
			$sql="select `Realname`,`CardID` from `user` where `CardID` like '$CardID'";
			//从数据库中提取对应的结果集
			if($rst=mysqli_query($con,$sql)){
				//处理结果集
				$row=mysqli_fetch_assoc($rst);
				if($CardID==$row['CardID'] && $Realname==$row['Realname']){
					$_SESSION['CardID'] = $CardID;
					$_SESSION['Realname'] = $Realname;
					header('Location:./edit_password.php');
					//终止脚本继续执行
					die;
				}
			}
			$error[]='真实姓名不正确或身份证号不存在';
		}
	}
	$url = 'forget.html';
	include_once './error.php';
?>

