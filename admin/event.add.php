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
	<title>管理员活动发布系统</title>
	<meta charset="utf-8" />
	<script type="text/javascript" charset="utf-8" src="../ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="../ueditor.all.min.js"> </script>
    <style type="text/css">
        div{
            width:100%;
        }
    </style>

</head>
<body>
<h1>发布活动</h1>
<form name="addEventForm" id="newEvent" method="post" action="event.add.handle.php">
	<table>
	<tr>
		<td>标题</td>
		<td><input name="title" id="title" placeholder="标题"></td>
	</tr>
	<tr>
		<td>举办方</td>
		<td><input name="holder" id="holder" placehoder="举办方"></td>
	</tr>
	<tr>
		<td>地点</td>
		<td><input name="place" id="place" placehoder="地点"></td>
	</tr>
	<tr>
		<td>时间</td>
		<td><input name="date" id="date" placehoder="时间"></td>
	</tr>
	<tr>
		<td>内容</td>
		<script id="editor" name="detail" type="text/plain" style="width:535px;height:500px;"></script>
	</tr>
	<tr>
		<td><input type="submit" name="button" id="button" value="提交"></td>
	</tr>
	</table>

</form>
<script type="text/javascript">

    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    var ue = UE.getEditor('editor');


</script>



</body>
</html>


