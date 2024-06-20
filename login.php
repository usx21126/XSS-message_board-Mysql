<!DOCTYPE html>
<html>
<head>
        
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
<meta http-equiv="Pragma" content="no-cache"> 
<meta http-equiv="Cache-Control" content="no-cache"> 
<meta http-equiv="Expires" content="0"> 
<title>登录</title> 

<link href="css/login.css" type="text/css" rel="stylesheet"> 
</head> 
<body> 

<div class="login">
    <div class="message">卡塔尔论坛留言板用户登录</div>
    <div id="darkbannerwrap"></div>
    
    <form action="./yz.php" method="post" enctype="multipart/form-data">
        <input name="action" value="register" type="hidden">
        <pre>用户名：<input name="username" placeholder="用户名" required="" type="text">
  
  密码：<input name="password" placeholder="密码" required="" type="password"></pre>
        <hr class="hr15">
        <input value="登录" style="width:50%;" type="submit">
        <a href="./register.php" style="width: 50%">->还没有账号?点击此处注册<-</a>
        <hr class="hr20">
        <!-- 帮助 <a onClick="alert('请联系管理员')">忘记密码</a> -->
    </form>

<pre>
 <img src="700.webp" width="980" height="530">
</pre>    
</div>
</body>
</html>
