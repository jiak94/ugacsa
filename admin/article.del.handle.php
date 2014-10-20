<?php
	require_once("../connect.php");
    require_once("../inc/class/Article.php");

	

	session_start();
	if($_SESSION['login']==1){
		
	}
	else{
		echo "<script> alert ('您没有访问权限, 请登录'); window.location.href = 'login.php'</script>";
		exit();
	}

	
	$id = $_GET['id'];

    $ARTICLE = new Article();

    if($ARTICLE->deleteArticle($id)){
        echo "<script> alert('删除文章成功');window.location.href='manage.php'</script>";
    }
	else{
		echo "<script> alert('删除文章失败');window.location.href='manage.php'</script>";
	}

?>