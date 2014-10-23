<?php
require_once("../connect.php");

session_start();
if ($_SESSION['login'] == 1) {
} else {
    echo "<script> alert ('您没有访问权限, 请登录'); window.location.href = 'login.php'</script>";
    exit();
}



?>

<!DOCTYPE html>
<html>
<head>
    <title>管理员活动发布系统</title>
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
        #holder{
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
        #date{
            width: 150px;
            height: 30px;
            font-size: medium;
            border-radius: 4px;
            margin: 10px;
        }
        #place{
            width: 150px;
            height: 30px;
            font-size: medium;
            border-radius: 4px;
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
    <h1 align="center">活动布系统</h1>
</div>
<div class="content">
    <form name="addEventForm" id="newEvent" method="post" action="event.add.handle.php">

        <input name="title" id="title" placeholder="标题" required="true">


        <input name="holder" id="holder" placeholder="举办方" required="true">
        <input name="place" id="place" placeholder="地点" required="true">


        <input name="date" id="date" placeholder="时间" required="true">


        <script id="editor" name="detail" type="text/plain" style="width:1000px;height:500px;"></script>


        <input type="submit" name="button" id="button" value="提交">
    </form>
</div>
<script type="text/javascript">

    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    var ue = UE.getEditor('editor');


</script>


</body>
</html>


