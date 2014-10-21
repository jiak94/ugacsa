<?php
/**
 * 强制更改密码处理程序
 * User: Daniel
 * Date: 10/18/14
 * Time: 9:45 PM
 */
session_start();
if ($_SESSION['login'] == 1) {

} else {
	echo "<script> alert ('您没有访问权限, 请登录'); window.location.href = '../admin/login.php'</script>";
	exit();
}

require_once("../connect.php");
require_once("../inc/class/User.php");

$username = $_SESSION['username'];
$newPassword = $_POST['newPassword'];
$newPasswordAgain = $_POST['newPasswordAgain'];
$secretQuestion = $_POST['secretQuestion'];
$answer = $_POST['answer'];
$email = $_POST['email'];

$USER = new User($username);

if ($newPassword == $newPasswordAgain) {
	$hashPassword = hash('md5', $newPassword);
} else {
	echo "<script> alert('两次输入新密码不正确'); window.location.href = '../admin/forceChangePassword.php'</script>";
	exit();
}

if ($USER->forceModifyPassword($newPassword, $email, $secretQuestion, $answer)) {
	echo "<script>alert('修改完成'); window.location.href = '../admin/manage.php'</script>";
} else {
	echo "<script>alert('Something wrong'); window.location.href = '../admin/forceChangePassword.php'</script>";
}