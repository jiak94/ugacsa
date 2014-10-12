<?php

	require_once("../connect.php");

	session_start();
	if($_SESSION['login']==1){
		
	}
	else{
		echo "<script> alert ('您没有访问权限, 请登录'); window.location.href = 'login.php'</script>";
		exit();
	}


	$id = $_GET['id'];
	$query = mysql_query("select * from Event where id=$id");
	$data = mysql_fetch_assoc($query);

?>


<html>
<head>
	<title>管理员新闻发布系统</title>
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
<h1>修改活动</h1>
<form name="modifyArticleForm" id="modifyArticle" method="post" action="event.modify.handle.php">
	<table>
	<input type="hidden" name="id" value="<?php  echo $data['id']; ?>" >
	<tr>
		<td>标题</td>
		<td><input id="title" name="title" value="<?php echo($data['title']); ?>" required="true"></td>
	</tr>
	<tr>
		<td>作者</td>
		<td><input name="holder" id="holder" value="<?php echo($data['holder']); ?>" required="true"></td>
	</tr>
	<tr>
		<td>地点</td>
		<td><input name="place" id="place" value="<?php echo $data['place']; ?>" required="true" style="width: 200px" ></td>
	</tr>
	<tr>
		<td>时间</td>
		<td><input name="date" id="date" value="<?php echo $data['date']; ?>" required="true"></td>
	</tr>
	<tr>
		<td>正文</td>
		<script id="editor" name="detail" type="text/plain" style="width:535px;height:500px;">
			<?php echo $data['detail'] ?>
		
		</script>
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