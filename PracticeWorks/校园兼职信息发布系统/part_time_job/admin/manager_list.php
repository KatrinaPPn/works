<?php
	include_once "../conn/conn.php";
	
	$sql="select * from manager where enter_id='{$_SESSION['admin']['enter_id']}' ";
	$result=mysqli_query($conn,$sql);
	
	$info=mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link href="../css/style.css" rel="stylesheet">
		<title>企业信息</title>
	</head>
	<body>
		<table width="776" border="0" cellspacing="0" cellpadding="0" style="background-color: whitesmoke; margin-left: 5px;">
		  <tr>
		    <td height="32" style="background-color: gainsboro;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;您现在的位置：校园兼职信息发布系统&nbsp;&gt;&nbsp;后台管理系统</td>
		  </tr>
		  <tr>
		    <td height="32" >&nbsp;</td>
		  </tr>
		  <tr>
		    <td height="488" align="center" valign="top" >
		        <table width="708" border="0" cellpadding="0" cellspacing="1" bgcolor="#FFCC33"class="tab01">
		          <tr align="center" bgcolor="#FFCC33">
		            <td width="59">用户名</td>
		            <td width="79">邮箱</td>
		            <td width="79">公司</td>
		            <td width="79">企业资质</td>
		            <td width="79">电话</td>
		          </tr>
			<?php
			if($info){
			?>
		          <tr bgcolor="#FFFFFF">
		            <td>&nbsp;<?php echo $info[enter_name];?></td>
		            <td>&nbsp;<?php echo $info[emile];?></td>
		            <td>&nbsp;<?php echo $info[enterprise];?></td>
		            <td>&nbsp;<?php echo $info[business_license];?></td>
		            <td>&nbsp;<?php echo $info[mobile];?></td>
		          </tr>
			<?php
			}
			?>
		    </table></td>
		  </tr>
		  <tr>
		    <td height="32">&nbsp;</td>
		  </tr>
		</table>
	</body>
</html>



