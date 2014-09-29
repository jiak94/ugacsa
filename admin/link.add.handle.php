<?php
	require_once("../connect.php");
	
	$title = $_POST['title'];
	$link = $_POST['link'];
	$type = $_POST['type'];
	
	$sql = "insert into Links(title, link, type) VALUES ('$title', '$link', '$type')";
	$query = mysql_query($sql);

	if($query){
		echo "<script> alert('添加成功'); window.location.href = 'manage.php'</script>";
	}
	else{
		echo "<script> alert('添加失败,请稍后再试'); window.location.href = 'manage.php'</script>";
	}


?>