<!DOCTYPE html>
<html>
<head>
	<title>创建管理员用户</title>
	<meta charset="utf-8">
</head>
<body>
<h1>注册新管理员</h1>
<form id="newAdmin" name="newAdmin" method="post" action="createAdmin.handle.php">
	<h2>用户名:</h2>
	<input id="username" name="username" placeholder="用户名" required="true">
	<br>
	<h2>密码:</h2>
	<input id="password" name="password" type="password" placeholder="密码" required="true">
	<br>
	<h2>再次输入密码:</h2>
	<input id="repassword" name="repassword" type="password" placeholder="再次输入密码" required="true">
	<br>
	<h2>邮箱地址:</h2>
	<input id="email" name="email" type="email" pattern="([a-z0-9]*[-_]?[a-z0-9]+)*@([a-z0-9]*[-_]?[a-z0-9]+)+[\.][a-z]{2,3}" required="true">
	<br>
	<h2>密保问题:</h2>
	<select name="secretQuestion" id="secretQuestion">
		<option value="firstCar">What's the brand of your first car?</option>
		<option value="firstPet">What's the name of your first pet?</option>
		<option value="motherLastName">What's your mother's LAST name?</option>
		<option value="fatherFirstName">What's your father's FIRST name?</option>
	</select>
	<br>
	<h2>密保答案:</h2>
	<input id="answer" name="answer" placeholder="密保答案" required="true">
	<h2>邀请码:</h2>
	<input id="secretcode" name="secretcode" type="password" placeholder="邀请码" required="true">
	<br>
	<input type="submit" id="button" name="button" value="创建">
</form>
</form>
</body>
</html>