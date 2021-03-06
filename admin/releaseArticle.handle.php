<?php
/**
 * 审核完成, 同意发布
 * User: Jiakuan
 * Date: 10/19/14
 * Time: 1:11 AM
 */
require_once("../connect.php");
require_once("../inc/class/User.php");
require_once("../inc/class/Article.php");
require_once("../inc/class/Email.php");

session_start();
$USER = new User($_SESSION['username']);
$ARTICLE = new Article();
$EMAIL = new Email();

$role = $USER->getRole();
$currentUser = $USER->getUsername();
$id = $_GET['id'];

$subject = "文章已通过审核";
$message = "你的文章" . $ARTICLE->getTitle($id) . "已经由" . $USER->getUsername() . "完成审核.\n并已发布在网站上.";

$recipient = $USER->getUserEmail($ARTICLE->getAuthorUsername($id));

if ($_SESSION['login'] == 1 && $role != '审稿人') {
	$EMAIL->sendEmailTo($recipient, $subject, $message);
	echo "<script> alert ('您没有权限进行发布'); window.location.href = '../admin/manage.php'</script>";
	exit();
} else if ($_SESSION['login'] != 1) {
	echo "<script> alert ('您没有访问权限, 请登录'); window.location.href = '../admin/login.php'</script>";
	exit();
}

if ($ARTICLE->releaseArticle($id, $currentUser)) {
	echo "<script> alert('发布成功!'); window.location.href = '../admin/manage.php'</script>";
} else {
	echo "<script> alert('发布失败,请稍后重试'); window.location.href = '../admin/manage.php'</script>";
}
?>