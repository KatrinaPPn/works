<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css/style.css" rel="stylesheet">
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
<?php
include_once "../conn/conn.php";
$res_id = $_GET['id'];
$sql="select * from resume where res_id='{$res_id}' ";

$result=mysqli_query($conn,$sql);

$info=mysqli_fetch_array($result);
?>
<table width="776" border="0" cellspacing="0" cellpadding="0" style="background-color: whitesmoke;">
  <tr>
    <td height="32" style="background-color: gainsboro;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;您现在的位置：校园兼职信息发布系统&nbsp;&gt;&nbsp;后台管理系统</td>
  </tr>
  <tr>
    <td height="32" >&nbsp;</td>
  </tr>
  <tr>
    <td height="588" align="center" valign="top" >
        <table width="563" height="588" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="563" height="588" valign="top" >
              <form name="form1" method="post" action="?act=ok">
                <table width="563" border="0" cellspacing="0" cellpadding="0">
                
                  <tr>
                    <td width="130" height="30" align="right">姓名：</td>
                    <td width="433" height="30">
					<input name="type" type="text" id="title" size="50" value="<?php echo $info['name'];?>">
					<input name="id" type="hidden" id="id" size="50" value="<?php echo $info['uid'];?>">
             </td>
                  </tr>
                  <tr>
                    <td height="30" align="right">性别：</td>
                    <td height="30"><input name="sex" type="text" id="title" size="50" value="<?php 
					$info['sex'] = ($info['sex']==0)?'男':'女';
					echo $info['sex'];?>"></td>
                  </tr>
                  <tr>
                    <td height="30" align="right">出生日期：</td>
                    <td height="30"><input name="date" type="text" id="title" size="50" value="<?php echo $info['date'];?>"></td>
                  </tr>
                  <tr>
                    <td height="30" align="right">电话：</td>
                    <td height="30"><input name="tel" type="text" id="title" size="50" value="<?php echo $info['tel'];?>"></td>
                  </tr>
                  <tr>
                    <td height="30" align="right">城市：</td>
                    <td height="30"><input name="city" type="text" id="linkman" size="30" value="<?php echo $info['city'];?>"></td>
                  </tr>
                  <tr>
                    <td height="30" align="right">教育经历：</td>
                    <td height="30"><input name="education" type="text" id="site" size="30" value="<?php echo $info['education'];?>"></td>
                  </tr>
                  <tr>
                    <td height="30" align="right">校外实践：</td>
                    <td height="30"><input name="outschool" type="text" id="company" size="30" value="<?php echo $info['outschool'];?>"></td>
                  </tr>
                  <tr>
                    <td height="30" align="right">校内实践：</td>
                    <td height="30"><input name="inschool" type="text" id="tel" size="30" value="<?php echo $info['inschool'];?>"></td>
                  </tr>
				  
                  <tr>
                    <td height="30" align="right">自我介绍：</td>
                    <td height="30">
                      <textarea name="myself" cols="55" rows="3" id="textarea"><?php echo $info['myself'];?></textarea>
                    </td>
                  </tr>
                </table>
            </form></td>
          </tr>
        </table>
        <br>
    <p>&nbsp;</p></td>
  </tr>
  <tr>
    <td height="32" >&nbsp;</td>
  </tr>
</table>
