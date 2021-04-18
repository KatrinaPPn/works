<?php
	$connection = @mysql_connect("localhost","root","") or die("无法连接数据库！");
	@mysql_query("set names 'utf8'");
	@mysql_select_db("Climb") or die("无法选择数据库！");
	$pagemax=2;
?>