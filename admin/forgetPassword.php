<!DOCTYPE html>
<html>
<head>
    <title>忘记密码</title>
    <meta charset="utf-8">
    <style type="text/css">
        body {
            margin: 0px;
            min-width: 1100px;
        }

        .background {
            height: auto;
            width: auto;
            z-index: -1;
        }

        .content {
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
        .hint {
            width: 190px;
            margin: auto;
            margin-top: 30px;
        }
        #username {
            height: 20px;
            width: 150px;
            border-radius: 5px;
            font-size: medium;
            padding-left: 10px
        }
        #button {
            width: 50px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
<div class="background">
    <div class="content">
        <h1 align="center">忘记密码</h1>

        <div class="form">
            <form id="forgetPassword" name="forgetPassword" method="post" action="forgetPassword.handle.php">
                <input id="username" name="username" placeholder="用户名" required="true">
                <input type="submit" name="button" id="button" value="下一步">
            </form>
        </div>
        <div class="hint">
            <strong>想起来了?</strong>
            <a href="../admin/login.php"><strong>点击登录</strong></a>
        </div>
    </div>
    <img src="../assets/img/loginBackground.jpg"
         style="position:fixed;top: 0; bottom: 0; left: 0; right: 0; z-index: -1" height="100%" width="100%">
</div>
</body>
</html>