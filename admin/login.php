<!DOCTYPE html>
<html>
<head>
	<title>管理员登陆界面</title>
	<meta charset="utf-8"/>
</head>
<body>
<style>
	.background {
		height: auto;
		width: auto;
		z-index: -1;
	}

	.login {
		width: 500px;
		height: 300px;
		margin: auto;
		margin-top: 200px;
		border-radius: 10px;
		background: #f5f5f5;
		border: solid red;
	}

	.form {
		width: 150px;
		margin: auto;
	}

	#username {
		height: 20px;
		width: 150px;
		border-radius: 5px;
		font-size: medium;
		padding-left: 10px
	}

	#password {
		height: 20px;
		width: 150px;
		margin-top: 10px;
		border-radius: 5px;
		padding-left: 10px;
	}

	#button {
		width: 50px;
		margin-top: 10px;
	}

	.hint {
		width: 190px;
		margin: auto;
		margin-top: 30px;
	}
</style>
<div class="background">
	<div class="login">
		<h1 class="title" align="center">管理员后台登陆</h1>

		<div class="form">
			<form method="post" action="authentication.php">
				<input id="username" name="username" placeholder="Username">
				<br>
				<input id="password" name="password" placeholder="Password" type="password">
				<input type="submit" name="button" id="button" value="登录">
			</form>
		</div>
		<div class="hint">
			<strong>没有管理员账户?</strong>
			<a href="createAdmin.php"><strong>点击创建</strong></a>
			<a href="forgetPassword.php"><strong>忘记密码</strong></a>
		</div>
	</div>
	<img src="../assets/img/loginBackground.jpg"
	     style="position:fixed;top: 0; bottom: 0; left: 0; right: 0; z-index: -1" height="100%" width="100%">
</div>
</body>
</html>