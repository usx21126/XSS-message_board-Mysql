<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>

</head>

<body>
    <h1><a href="./index.php"><?php echo $title; ?></a></h1>

  <p>2022卡塔尔世界杯正式开幕！欢迎各位一起留言!</p></br>
      <img src="667.jpg" width="450" height="200">
<table border="1" cellspacing="0px" cellpadding="0px">
<tr>
    <form action="add.php" method="GET">
        <tr>
        <td>留言人：</td>
       <td><input name="n" type="text" placeholder="这里输入你的名字"></td>
       <tr>
<td>留言信息：</td>
<td><textarea name="t" cols="10" rows="10" placeholder="欢迎留言卡尔塔世界杯论坛！"></textarea></p></td>

 </tr>
    </table>
 <p> 点击此处发布留言：<input type="submit" value="发表我的留言" width="1000" height="200"></p>
<p><a href='./login.php'>退出留言</a></p>
</form>
 
    <hr>

    <h2>已发布的留言</h2>
    <ul>
        <?php
        // 最新留言展示前面
        $sql = "SELECT * FROM `liuyan` ORDER BY `liuyan`.`id` DESC";
        // ORDER BY `liuyan`.`id` DESC 加上这个是降序排列
        $result = $conn->query($sql);

        if($result->num_rows>0){
            //输出数据
            while($row = $result->fetch_assoc()){
                // $result->fetch_assoc()执行一次显示第一条，执行第二次显示第二条
            ?>
            <li>
                <p><?php echo $row["id"];?>楼</p>
                <p>留言内容：<?php echo $row["text"];?></p>
                <p>留言人：<?php echo $row["username"];?></p>
                <p>留言时间：<?php echo $row["time"];?></p>
                <img src="http://q1.qlogo.cn/g?b=qq&nk=<?php echo $row["text"];?>&s=640" alt="">
                <p>
                    <a href="edit.php?id=<?php echo $row['id'];?>">编辑</a>
                    <a href="del.php?id=<?php echo $row['id'];?>">删除</a>
                </p>
            </li>
            <?php
            }
        } else {
            echo"暂无留言";
        }
        ?>        
    </ul>

</body>

</html>