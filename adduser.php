<?php
header("content-type:text/html;charset=utf-8"); //设置编码
include "./conn.php";


?>

<?php
echo "<hr />";
if(isset($_POST['usersubmit'])){
	$username=htmlspecialchars($_POST['username']);
	$userpass1=htmlspecialchars($_POST['userpass1']);
	$userpass2=htmlspecialchars($_POST['userpass2']);
	if(isset($username)&& isset($userpass1)&&isset($userpass2)&& $userpass1===$userpass2){
		$sql="insert into users(name,password) values('".$username."','".md5($userpass1)."')";
		if(!mysqli_query($conn,$sql)){
			die("sql语句有误");
		}else{
header('Refresh:3,Url=http://localhost/myx/login.php'); //3s后跳转,请稍等...
			echo "注册成功!正在跳转登陆页面,请稍等...";
			setcookie("name",$username);
		}

	}else{
		echo "注册信息有误，<a href='./register.php'>请重新注册 </a>";
	}
   
}else{

	header("location:./register.php");
}



?>

<?php
mysqli_close($conn);
?>
