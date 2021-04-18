<?php
	include_once "../conn/conn.php";
	$job_id = $_GET['id'];
	$sql="DELETE FROM `job` WHERE  job_id='{$job_id}' ";
		
	$result=mysqli_query($conn,$sql);
	if($result){
			echo "<script>alert('信息删除成功！'); parent.mainFrame.location.href='job_list.php';</script>";
		}else{
			echo "<script>alert('信息删除失败！');history.back();</script>";
		}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link href="../css/style.css" rel="stylesheet">
		<title></title>
		<script language="javascript">
		function checkform(form){
			for(i=0;i<form.length;i++){
				if(form.elements[i].value==""){
					alert("请将发布信息填写完整！");
					form.elements[i].focus();
					return false;
				}
			}
		}
		</script>
	</head>
	<body>
	</body>
</html>

