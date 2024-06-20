<?php
header("content-type:text/html;charset=utf-8"); //设置编码
$username=addslashes($_POST['username']);
$password=addslashes($_POST['password']);

$conn=mysqli_connect('127.0.0.1','root','root','lyb');
$sql="select* from users where name='$username' and password='$password'";
$result=mysqli_query($conn,$sql);
$a=mysqli_fetch_array($result);

if($a['name']==$username && $username!=''){
header('Refresh:3,Url=http://localhost/myx/index.php'); //3s后跳转页面，请稍等...
	echo "登录成功，欢迎留言！（3s后跳转到留言板界面，请稍等...）";
}else{echo "登录失败，请重新登录或注册帐号！";}
?>

