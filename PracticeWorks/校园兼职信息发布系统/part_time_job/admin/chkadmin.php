<?php
	include_once "../conn/conn.php" ;
	$name =$_POST[name];
	$password =$_POST[pwd];
	$password = md5($password);
	$sql = "select * from manager where enter_name='".$name."'";
	$sql=mysqli_query($conn,$sql);
	$info=mysqli_fetch_array($sql,MYSQLI_ASSOC);

    if($info==false)
    {
		ok_info('./login.php','该公司未注册，请进行注册再登录！');    
        exit;
    }
    else{
    	if($info[enter_name]==$name && $info[password]==$password){
			$_SESSION['login'] = 1;
			$_SESSION['admin'] =$info;
            ok_info('./index.php','登录成功，跳转管理页面'); 
        }else{
			ok_info('./login.php','密码输入错误！');
			exit;
        }
    } 
?>