<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 10/18/14
 * Time: 1:28 AM
 */
require_once("../connect.php");
require_once("../inc/class/User.php");
session_start();

if ($_SESSION['login'] == 1) {

} else {
    echo "<script> alert ('您没有访问权限, 请登录'); window.location.href = '../admin/login.php'</script>";
    exit();
}

$USER = new User($_SESSION['username']);
$id = $USER->getMyId();

?>
<html>
<head>
    <title>强制修改密码</title>
    <meta charset="utf-8">
    <style type="text/css">
        .background {
            height: auto;
            width: auto;
            z-index: -1;
        }

        .forceModify {
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

        #newPassword {
            height: 20px;
            width: 150px;
            border-radius: 5px;
            font-size: medium;
            padding-left: 10px
        }

        #secretQuestion, #newPasswordAgain, #answer, #email {
            height: 20px;
            width: 150px;
            margin-top: 10px;
            border-radius: 5px;
            padding-left: 10px;
        }

        #button, {
            width: 50px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
<div class="background">
    <div class="forceModify">
        <h1 align="center">修改临时密码</h1>

        <div class="form">
            <form id="forceChangePassword" method="post" action="../admin/forceChangePassword.handle.php">
                <input name="newPassword" id="newPassword" type="password" required="true" placeholder="新密码">
                <br>
                <input name="newPasswordAgain" id="newPasswordAgain" type="password" required="true" placeholder="确认密码">
                <br>
                <?php if ($USER->secretQuestionSet($id) == false): ?>
                    <select name="secretQuestion" id="secretQuestion">
                        <option value="firstCar">What's the brand of your first car?</option>
                        <option value="firstPet">What's the name of your first pet?</option>
                        <option value="motherLastName">What's your mother's LAST name?</option>
                        <option value="fatherFirstName">What's your father's FIRST name?</option>
                    </select>
                    <br>
                    <input id="answer" name="answer" placeholder="密保答案" required="true">
                    <br>
                <?php endif; ?>

                <?php if ($USER->getUserEmail($id) == NULL): ?>
                    <input id="email" name="email"
                           pattern="([a-z0-9]*[-_]?[a-z0-9]+)*@([a-z0-9]*[-_]?[a-z0-9]+)+[\.][a-z]{2,3}"
                           required="true" placeholder="Email">
                    <br>
                <?php endif; ?>
                <input type="submit" id="button" name="button" value="确认修改">
            </form>
        </div>
    </div>
    <img src="../assets/img/loginBackground.jpg"
         style="position:fixed;top: 0; bottom: 0; left: 0; right: 0; z-index: -1" height="100%" width="100%">
</div>
</body>
</html>