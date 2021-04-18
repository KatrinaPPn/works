<?php
	include_once "./conn/conn.php";
	$username = $_SESSION['login_user']['username'];
	 //$_POST这值是 form提交过来的 数组
	$user = $_POST;
	$mobile= $user['mobile'];
	$email= $user['email'];
	$address = $user['address'];
	$intention= $user['intention'];
	$str_intention = implode("|",$intention);
	
	$sql = "UPDATE `user` 
			SET `mobile` = '{$mobile}'
			, `email` = '{$email}'
			, `address` = '{$address}'
			, `intention` = '{$str_intention}' 
			WHERE `username` = '{$username}';";
	
	//插入语句
	$suc = mysqli_query($conn,$sql);
	if($suc){
		ok_info('./index.php','修改成功，返回首页');
	}else{
		ok_info('./user_edit.php','修改失败');
	}
?>
