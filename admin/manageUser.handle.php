<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 10/16/14
 * Time: 11:08 PM
 */
require_once("../connect.php");
require_once("../inc/class/User.php");
session_start();
$currentUser = $_SESSION['username'];
if ($_SESSION['login'] == 1) {

} else {
	echo "<script> alert ('您没有访问权限, 请登录'); window.location.href = 'login.php'</script>";
	exit();
}

$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];

$USER = new User($username);

$isAdmin = 0;
$isPR = 0;
$isReviewer = 0;

if ($role == 'admin') {
	$isAdmin = 1;
} else if ($role == 'PR') {
	$isPR = 1;
} else if ($role == 'reviewer') {
	$isReviewer = 1;
}

if (!$USER->checkDuplicate($username)) {
	if ($USER->createNewUser($username, $password, $isAdmin, $isPR, $isReviewer)) {
		echo "<script> alert('成功创建用户');window.location.href = '../admin/manageUser.php'</script>";
	} else {
		echo "wrong";
	}
} else {
	echo "<script> alert('用户已存在, 请重新输入用户名');window.location.href = '../admin/manageUser.php'</script>";
}
?>