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
	<title>管理员新闻发布系统</title>
	<meta charset="utf-8" />
    <script type="text/javascript" charset="utf-8" src="/app/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/app/ueditor/ueditor.all.min.js"> </script>
    <style type="text/css">
        div{
            width:100%;
        }
    </style>
</head>
<body>
<h1>文章发布系统</h1>
<form name="addArticleForm" id="newArticle" method="post" action="article.add.handle.php">
	<table>
	<tr>
		<td>作者</td>
		<td><input name="author" id="author" placehoder="作者"></td>
	</tr>
        <tr>
            <td><input name="'authorUsername" id="authorUsername" type="hidden" value="<?php echo $_SESSION['username']; ?>"></td>
        </tr>
	<tr>
		<td>标题</td>
		<td><input name="title" id="title" placehoder="标题"></td>
	</tr>
	<!--
	<tr>
		<td>简介</td>
		<script id="editor1" name="description" type="text/plain" style="width:500px;height:300px;"></script>
	</tr>
	-->
	<tr>
		<td>正文</td>
		<script id="editor" name="content" type="text/plain" style="width:1000px;"></script>
	</tr>
	<tr>
		<td><input type="submit" name="button" id="button" value="提交"></td>
	</tr>
	</table>

</form>

<script type="text/javascript">

    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    //var ue = UE.getEditor('editor1');
    var ue = UE.getEditor('editor');
	

    </script>


</body>
</html>


