<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 10/18/14
 * Time: 1:28 AM
 */
require_once("../connect.php");

session_start();
if($_SESSION['login']==1){

}
else{
    echo "<script> alert ('您没有访问权限, 请登录'); window.location.href = '../admin/login.php'</script>";
    exit();
}
?>
<html>
<head>
    <title>强制修改密码</title>
    <meta charset="utf-8">
</head>
<body>
    <form id="forceChangePassword" method="post" action="../admin/forceChangePassword.handle.php">
        <p>新密码:</p>
        <input name="newPassword" type="password" required="true">
        <br>
        <p>再次输入新密码:</p>
        <input name="newPasswordAgain" type="password" required="true">
        <br>
        <p>选择密保问题:</p>
        <select name="secretQuestion" id="secretQuestion">
            <option value="firstCar">What's the brand of your first car?</option>
            <option value="firstPet">What's the name of your first pet?</option>
            <option value="motherLastName">What's your mother's LAST name?</option>
            <option value="fatherFirstName">What's your father's FIRST name?</option>
        </select>
        <br>
        <p>密保答案:</p>
        <input id="answer" name="answer" placeholder="密保答案" required="true">
        <br>
        <p>邮箱地址:</p>
        <input id="email" name="email" pattern="([a-z0-9]*[-_]?[a-z0-9]+)*@([a-z0-9]*[-_]?[a-z0-9]+)+[\.][a-z]{2,3}" required="true">
        <br>
        <input type="submit" id="button" name="button" value="submit">
    </form>
</body>
</html>