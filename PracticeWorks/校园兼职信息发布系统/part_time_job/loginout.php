<?php 
include_once "./conn/conn.php";
$_SESSION = array();
session_destroy();
unset($_SESSION);
echo "<script>location.href='index.php';</script>"; 
?>
