<?php
require_once("../connect.php");
require_once("../inc/class/Article.php");
require_once("../inc/class/Email.php");


session_start();
if ($_SESSION['login'] == 1) {

} else {
	echo "<script> alert ('您没有访问权限, 请登录'); window.location.href = 'login.php'</script>";
	exit();
}


$title = $_POST['title'];
$author = $_POST['author'];
$authorUsername = $_POST['authorUsername'];
$content = $_POST['content'];
$dateline = time();

$ARTICLE = new Article();
$EMAIL = new Email();

$subject = "新的文章发布,请尽快审阅";
$message = $author . "刚刚发表了" . $title . ". 请各位审稿人尽快审阅";

if ($ARTICLE->addArticle($title, $author, $authorUsername, $content, $dateline)) {
	$EMAIL->sendEmailToReviewer($subject, $message);
	echo "<script> alert ('文章发布成功'); window.location.href = 'manage.php'</script>";
} //when develop the sql statement, try to print it out to make sure it works properly.
else {
	echo "<script> alert ('文章发布出错, 请稍后再试'); window.location.href='manage.php'</script>";
}
?>