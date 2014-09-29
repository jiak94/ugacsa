<?php
	require_once("../connect.php");



	session_start();
	if($_SESSION['login']==1){
		
	}
	else{
		echo "<script> alert ('您没有访问权限, 请登录'); window.location.href = 'login.php'</script>";
		exit();
	}

	
	$title= $_POST['title'];
	$author=$_POST['author'];
	$description=$_POST['description'];
	$content=$_POST['content'];
	$dateline=time();

	$insertSql = "INSERT INTO Article(title, author, description, content, dateline) VALUES('$title','$author', '$description','$content', $dateline)";
	

	
	//when develop the sql statement, try to print it out to make sure it works properly.
	if(mysql_query($insertSql)){
		echo "<script> alert ('文章发布成功'); window.location.href = 'manage.php'</script>";
	}
	else{
		echo "<script> alert ('文章发布出错, 请稍后再试'); window.location.href='manage.php'</script>";
	}
?>