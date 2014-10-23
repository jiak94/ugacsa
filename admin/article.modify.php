<?php

require_once("../connect.php");
require_once("../inc/class/Article.php");

session_start();
if ($_SESSION['login'] == 1) {

} else {
    echo "<script> alert ('您没有访问权限, 请登录'); window.location.href = 'login.php'</script>";
    exit();
}


$id = $_GET['id'];
//$query = mysql_query("select * from Article where id=$id");
//$data = mysql_fetch_assoc($query);

$ARTICLE = new Article();

?>


<html>
<head>
    <title>管理员新闻发布系统</title>
    <meta charset="utf-8"/>
    <script type="text/javascript" charset="utf-8" src="/app/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/app/ueditor/ueditor.all.min.js"></script>
    <style type="text/css">
        div {
            width: 100%;
        }
        body{
            margin: 0;
            min-width: 1100px;
        }
        .header{
            background-color:#990000;
            padding-top: 20px;
            width: auto;
            height: 80px;
        }
        form{
            width: 1000px;
            margin: auto;
            padding-bottom: 100px;
            padding-top: 30px;
        }
        #author{
            width: 150px;
            height: 30px;
            font-size: medium;
            border-radius: 5px;
            margin: 10px;
        }
        #title{
            width: 300px;
            height: 30px;
            font-size: medium;
            border-radius: 5px;
            margin: 10px;
        }
        #button{
            margin-top: 10px;
            width: 150px;
            height: 30px;
        }
    </style>

</head>
<body>
<div class="header">
    <h1 align="center">文章发布系统</h1>
</div>
<div class="content">
    <form name="modifyArticleForm" id="modifyArticle" method="post" action="article.modify.handle.php">

        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input name="title" id="title" value="<?php echo $ARTICLE->getTitle($id); ?>">
        <input name="author" id="author" value="<?php echo $ARTICLE->getAuthor($id); ?>">
        <script id="editor" name="content" type="text/plain" style="width:1000px;height:500px;">
		<?php echo $ARTICLE->getContent($id); ?>

        </script>
        <input type="submit" name="button" id="button" value="提交">

    </form>

    <script type="text/javascript">

        //实例化编辑器
        //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
        var ue = UE.getEditor('editor');

    </script>

</div>
</body>
</html>