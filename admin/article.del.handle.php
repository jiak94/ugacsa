<?php
	require_once("../connect.php");
    require_once("../inc/class/Article.php");
    require_once("../inc/class/Email.php");

	session_start();
	if($_SESSION['login']==1){
		
	}
	else{
		echo "<script> alert ('您没有访问权限, 请登录'); window.location.href = 'login.php'</script>";
		exit();
	}

	
	$id = $_GET['id'];

    $ARTICLE = new Article();
    $EMAIL = new Email();

    $message = "文章".$ARTICLE->getTitle($id)."已经被".$_SESSION['username']."删除";
    $subject = "文章被删除";

    if($ARTICLE->deleteArticle($id)){
        $EMAIL->sendEmailToEveryone($subject, $message);
        echo "<script> alert('删除文章成功');window.location.href='manage.php'</script>";
    }
	else{
		echo "<script> alert('删除文章失败');window.location.href='manage.php'</script>";
	}

?>