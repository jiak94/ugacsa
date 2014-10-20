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

	
	$title= $_POST['title'];
	$author=$_POST['author'];
	$content=$_POST['content'];
	$dateline=time();

	$ARTICLE = new Article();
	

	if($ARTICLE->addArticle($title, $author, $content, $dateline)){
        echo "<script> alert ('文章发布成功'); window.location.href = 'manage.php'</script>";
    }
	//when develop the sql statement, try to print it out to make sure it works properly.
	else{
		echo "<script> alert ('文章发布出错, 请稍后再试'); window.location.href='manage.php'</script>";
	}
?>