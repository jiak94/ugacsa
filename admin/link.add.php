<!DOCTYPE html>
<html>
<head>
	<title>添加链接</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>添加新链接</h1>
	<form id="form" name="form" method="post" action="link.add.handle.php">
	<strong>网站名称:</strong>
	<input id="title" name="title" placeholder="名称" required="true"><br>
	<strong>网站链接:</strong>
	<input id="link" name="link" placeholder="链接" value="http://" required="true"><br>
	<strong>网站类型:</strong>
	<select id="type" name="type">
		<option value="schoolOfficial">官方类</option>
		<option value="life">生活类</option>
		<option value="study">学习类</option>
		<option value="other">其他</option>
	</select><br>
	<input type="submit" id="button" name="button">
	</form>
</body>
</html>