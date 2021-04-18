<?php
 include_once "./conn/conn.php";
$job_id = $_GET['id'];

if(empty($job)){
	 ok_info('./zhiwei.php','请选择一个职位');
}
$uid = $_SESSION['login_user']['uid'];

$time = date('Y-m-d H:i:s');

$sql = "INSERT INTO `deliver` ( `uid`, `job_id`, `c_date`) 
VALUES ( '{$uid}', '{$job}', '{$time}');";

$txt = '您的简历投递成功';

$suc = mysqli_query($conn,$sql);
if($suc){
    ok_info('./weijianli.php',$txt);
}else{
	ok_info('./weijianli.php','更新失败，请重试');
}
?>