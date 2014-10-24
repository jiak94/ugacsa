<?php
require_once("../connect.php");
session_start();
if ($_SESSION['login'] == 1) {

} else {
    echo "<script> alert ('您没有访问权限, 请登录'); window.location.href = '../admin/login.php'</script>";
    exit();
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>修改密码</title>
    <meta charset="utf-8">
    <style type="text/css">
        .background {
            height: auto;
            width: auto;
            z-index: -1;
        }
        .modifyPassword {
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
        #oldPassword, #newPassword, #renewPassword {
            height: 20px;
            width: 150px;
            margin-top: 10px;
            border-radius: 5px;
            padding-left: 10px;
        }
    </style>
</head>
<body>
<div class="background">
    <div class="modifyPassword">
        <h1 align="center">修改密码</h1>

        <div class="form">
            <form id="form" name="form" method="post" action="../admin/modifyPassword.handle.php">

                <input id="username" name="username" required="true" placeholder="用户名">
                <br>
                <input id="oldPassword" name="oldPassword" required="true" type="password" placeholder="旧密码">
                <br>
                <input id="newPassword" name="newPassword" required="true" type="password" placeholder="新密码">
                <br>
                <input id="renewPassword" name="renewPassword" required="true" type="password" placeholder="确认新密码">
                <br>
                <input type="submit" id="button" name="buttion">
            </form>
        </div>
    </div>
    <img src="../assets/img/loginBackground.jpg"
         style="position:fixed;top: 0; bottom: 0; left: 0; right: 0; z-index: -1" height="100%" width="100%">
</div>
</body>
</html>