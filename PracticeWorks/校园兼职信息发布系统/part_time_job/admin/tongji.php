<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css/style.css" rel="stylesheet">
<?php
include_once "../conn/conn.php";
$enter_id=$_SESSION['admin']['enter_id'];
//$m_id='20200006';


$sql="select edate from job where enter_id='".$enter_id."'  ";
$result=mysqli_query($conn,$sql);


$now_y = date('Y');
$item = array();
if($result){
	while($v=mysqli_fetch_array($result,MYSQL_ASSOC)){
		
		list($y,$m,$d) = explode('-',$v['edate']);
		$m  = ltrim($m, '0');
		
		if($now_y == $y){
			if(isset($item[$m])){
                $item[$m] = $item[$m] +1;
            }else{
                $item[$m] = 1;
            }
		}
	}
}
ksort($item);
//var_dump($item);exit();
?>
<table width="776" height="520px" border="0" cellspacing="0" cellpadding="0" style="background-color: whitesmoke; margin-left: 5px;">
  <tr>
    <td height="32" style="background-color: gainsboro;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;您现在的位置：校园兼职信息发布系统&nbsp;&gt;&nbsp;后台管理系统</td>
  </tr>
  <tr>
    <td height="32" >&nbsp;</td>
  </tr>
  <tr>
    <td height="30" align="center" valign="top" >
	统计报表&nbsp;</td>
  </tr>
  <tr>
    <td style="width: 500px; ">
	<?php include_once 'tu.php';?></td>
  </tr>
  <tr>
    <td height="32" >&nbsp;</td>
  </tr>
</table>
