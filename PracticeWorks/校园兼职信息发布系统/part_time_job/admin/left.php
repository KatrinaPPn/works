<!DOCTYPE hhtml>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link href="../css/style.css" rel="stylesheet">
		<title>左侧栏</title>
		<style type="text/css">
			.box{
				margin: 0;
			}
			.menu{padding-left:25px;padding-top:0px;}
			a{
				text-decoration: none;
				color: black;
				padding: 15px;
			}
			a:hover{
				color: orange;
			}
		</style>
	</head>
<body>
	<table class="box" width="229" height="488" border="0" cellspacing="0" cellpadding="0">
	  <tr>
	    <td width="229" height="488" align="center" valign="top" style="background-color: gainsboro;"><table width="222" border="0" cellspacing="0" cellpadding="0">
	      <tr>
	        <td height="95" valign="top">
	        	<table width="229" border="0" cellspacing="0" cellpadding="0" style="margin: 0;">
		          <tr>
		            <td height="30" align="center" >
						<table width="229" border="0" cellspacing="0" cellpadding="0">
			              	<tr>
				                <td height="55" valign="top" class="menu">
								<a href="job_list.php" target="mainFrame">职位信息列表</td>
						 	</tr>
							 <tr>
				                <td height="55" valign="top"  class="menu">
								<a href="job_add.php" target="mainFrame">发布职位信息</a></td>
							 </tr>
							 <tr>
				                <td height="55" valign="top" class="menu">
								<a href="resume_list.php" target="mainFrame">简历查看</a></td>
				             </tr>
							 <tr>
				                <td height="55" valign="top" class="menu">
								<a href="tongji.php" target="mainFrame">统计报表</a></td>
				             </tr>
							 <tr>
				                <td height="55" valign="top" class="menu">
								<a href="manager_list.php" target="mainFrame">企业信息</a></td>
							</tr>                                                         
							 <tr> 
				                <td height="55" valign="top" class="menu">
								<a href="#" onclick="parent.parent.location.href='./login.php'">安全退出</a></td>
				             </tr>
			            </table>
				    </td>
		      		</tr>
	   			</table>    
	   		</td>
	  	</tr>
	</table>
</body>
</html>
