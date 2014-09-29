<?php 
	require_once("../connect.php");
	
	$id = $_GET['id'];
	
	$sql = "select * from Links Where id=2";
	

	$query = mysql_query($sql);
	
	$data = mysql_fetch_assoc($query);
	

?>

<!DOCTYPE html>
<html>
<head>
	<title>修改链接</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>修改链接</h1>
	<form id="form" name="form" method="post" action="link.modify.handle.php">
	<input type="hidden" id="id" name="id" value="<?php echo $data['id'] ?>">
	<strong>网站名称:</strong>
	<input id="title" name="title" value="<?php echo $data['title']; ?>" required="true"><br>
	<strong>网站链接:</strong>
	<input id="link" name="link" value="<?php echo $data['link']; ?>" required="true"><br>
	<strong>网站类型:</strong>
	<select id="type" name="type">
		<option value="schoolOfficial" <?php if($data['type']=="schoolOfficial"){ ?> selected = "selected"<?php } ?>>官方类</option>
		<option value="life" <?php if($data['type']=="life"){ ?> selected = "selected"<?php } ?>>生活类</option>
		<option value="study" <?php if($data['type']=="study"){ ?> selected = "selected"<?php } ?>>学习类</option>
		<option value="other" <?php if($data['type']=="other"){ ?> selected = "selected"<?php } ?>>其他</option>
	</select><br>
	<input type="submit" id="button" name="button" value="提交">
	</form>
</body>
</html>