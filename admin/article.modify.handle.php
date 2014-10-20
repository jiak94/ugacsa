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



	$id = $_POST['id'];
	$title= $_POST['title'];
	$author=$_POST['author'];
	//$description=$_POST['description'];
	$content=$_POST['content'];
	$dateline=time();

    $ARTICLE = new Article();


	//when develop the sql statement, try to print it out to make sure it works properly.
    if($ARTICLE->updateArticle($title, $author, $content, $dateline, $id)){
        echo "<script> alert ('文章修改成功'); window.location.href = 'manage.php'</script>";
    }
	else{
		echo "<script> alert ('文章修改出错, 请稍后再试'); window.location.href='manage.php'</script>";
	}


?>