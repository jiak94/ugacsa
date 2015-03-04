<!DOCTYPE html>
<html>
<head>
	<title>管理员登陆界面</title>
	<meta charset="utf-8"/>
    <script type="text/javascript" src="../assets/js/jquery-2.1.0.min.js"></script>
    <script>
      $(document).ready(function(){
         $("#login").show();
          $("#request").hide();
      });
        function showRequestBox(){
            $("#login").hide();
            $("#request").fadeIn();
        }
        function showLogIn() {
            $("#login").fadeIn();
            $("request").hide();
        }
    </script>
</head>
<body>
<style>
	.background {
		height: auto;
		width: auto;
		z-index: -1;
	}

	.login, .request {
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

	#username, #password, #realName, #department, #email {
		height: 20px;
		width: 150px;
		border-radius: 5px;
		font-size: medium;
		padding-left: 10px;
        margin-top: 10px;
	}


	#button, {
		width: 50px;
		margin-top: 10px;
	}
    #requestButton{
        width: 80px;
        margin-top: 10px;
    }

	.hint {
		width: 190px;
		margin: auto;
		margin-top: 30px;
	}
</style>
<div class="background">
	<div class="login" id="login">
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
			<a href="#" onclick="showRequestBox()"><strong>点击申请</strong></a>
			<a href="forgetPassword.php"><strong>忘记密码</strong></a>
		</div>
	</div>
    <div class="request" id="request">
        <h1 align="center">申请账号</h1>
        <div class="form">
            <form method="post" action="requestAccount.php">
                <input id="realName" name="realName" placeholder="名字" required="true">
                <br>
                <input id="department" name="department" placeholder="部门" required="true">
                <br>
                <input id="email" name="email" placeholder="Email" required="true">
                <input type="submit" name="requestButton" id="requestButton" value="提交申请">
                <a href="#" onclick="showLogIn()"><strong>已有账号</strong></a>
            </form>
        </div>
    </div>
	<img src="../assets/img/loginBackground.jpg"
	     style="position:fixed;top: 0; bottom: 0; left: 0; right: 0; z-index: -1" height="100%" width="100%">
</div>
</body>
</html>