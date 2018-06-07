<?php  
header('content-type:text/html;charset=utf-8');include 'DB.class.php';
$db = mysql_db::getIntance();
$list = $db->getAll("SELECT * FROM message");
?>  

    <h4>留言板</h4>
  <hr>
  <a href="add.php"><input type="submit" value="写留言"></a>
  <hr>
  <table width="100%" style="text-align: center;" border="1">  
    <tr>  
      <th>编号</th>
      <th>标题</th>
      <th>时间</th>
      <th>内容</th>
      <th>操作</th>
    </tr>


    <?php foreach($list as $v){?>  
      <tr>  
        <td><?php echo $v['id'];?></td>  
        <td><?php echo $v['title'];?></td>
        <td>未设置</td>
        <td><?php echo $v['text'];?></td>

        <td><a href="delete.php?id=<?php echo $v['mid'];?>">删除</a>||<a href="update.php?id=<?php echo $v['mid'];?>">修改</a></td>  
      </tr>  
    <?php }?>  
  </table>