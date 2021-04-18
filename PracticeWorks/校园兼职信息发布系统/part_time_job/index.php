<?php 
	@session_start();
	include_once "./conn/conn.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/base.css">
<title>校园兼职信息发布系统</title>
<style type="text/css">
</style>
</head>

<body>

  <table width="1000" border="0" align="center">
	<tr >
	  <td colspan="2"><img src="images/logo.jpg" width="200" height="60" />
	  </td>
	</tr>
	<tr >
	  <td colspan="2"><img src="images/top1.jpg" width="1000" height="200" /></td>
	</tr>
	 <tr >
	  <td  colspan="2"><?php include_once "./top.php";?></td>
	</tr>
    <tr >
      <td width="1000" align="center" colspan="2"><?php include_once "./release.php";?></td>
    </tr>
    <tr>
      <td align="left"><?php include_once "./left.php";?></td>
	  <td align="right"><?php include_once "./lunbo.php";;?></td>
    </tr>
    <tr>
     <td colspan="2"><?php include_once "./job.php";?></td>
    </tr>
    <tr>
      <td align="center" colspan="2"><?php include_once "./bottom.php";?></td>
    </tr>
  </table>

</body>
</html>
