<!DOCTYPE html>
<html>
	<head>
		<title>管理员登陆界面</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<h1>管理员后台登陆界面</h1>
	<form method="post" action="authentication.php">
		<input id="username" name="username" placeholder="Username">
		<br>
		<input id="password" name="password" placeholder ="password" type="password">
		<input type="submit" name="button" id="button" value="登录">
	</form>

	<strong>没有管理员账户?</strong>
	<a href="createAdmin.php"><strong>点击创建</strong></a>
	<a href="forgetPassword.php"><strong>忘记密码</strong></a>
	</body>
</html>