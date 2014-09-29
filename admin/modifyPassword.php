<?php
	require_once("../connect.php");
	session_start();
	if($_SESSION['login']==1){
		
	}
	else{
		echo "<script> alert ('您没有访问权限, 请登录'); window.location.href = 'login.php'</script>";
		exit();
	}
	
	
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>修改密码</title>
	<meta charset="utf-8">
</head>
<body>
<h1>修改密码</h1>
<form id="form" name="form" method="post" action="modifyPassword.handle.php">
	<h3>用户名</h3>
	<input id="username" name="username" required="true" placeholder="用户名">
	<br>
	<h3>旧密码</h3>
	<input id="oldPassword" name="oldPassword" required="true" type="password">
	<br>
	<h3>新密码</h3>
	<input id="newPassword" name="newPassword" required="true" type="password">
	<br>
	<h3>再次输入新密码</h3>
	<input id="renewPassword" name="renewPassword" required="true" type="password">
	<br>
	<input type="submit" id="button" name="buttion">
</form>
</body>
</html>