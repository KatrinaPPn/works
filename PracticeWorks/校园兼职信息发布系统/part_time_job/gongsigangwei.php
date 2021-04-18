<?php
 include_once "./conn/conn.php";
$postdate = $_POST['search'];
$sql = mysqli_query($conn,"select * from job where title like '%$postdate%' or company like '%$postdate%'");
$row = mysqli_fetch_object($sql);
?><table border="0" align="center" width="100%" class="table01">
 <tr> <td colspan="7" style="font-size:20px;text-align:center;" align="center" class="title">招聘单位</td></tr>
<?php if($row){?>
<?php echo ' ';
echo "<td>公司名称</td>";
echo "<td>公司地址</td>";	  
echo "<td>联系人</td>";
echo "<td>联系电话</td>";
echo "</tr>";
?>

<?php
do{
    ?>
    <tr>
    <td><?php echo $row->company;?></td>
    <td><?php echo $row->site;?></td>
    <td><?php echo $row->contacts;?></td>
    <td><?php echo $row->tel;?></td>
    </tr>
<?php
    }while($row=mysql_fetch_object($sql));
    mysql_free_result($sql);
    mysql_close($conn);
?>
<?php echo "</table>";?>

<?php }?>