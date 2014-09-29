<?php
	require_once("../connect.php");


	session_start();
	if($_SESSION['login']==1){
		
	}
	else{
		echo "<script> alert ('您没有访问权限, 请登录'); window.location.href = 'login.php'</script>";
		exit();
	}


	$title = $_POST["title"];
	$holder = $_POST["holder"];
	$place = $_POST["place"];
	$date = $_POST["date"];
	$detail = $_POST["detail"];
	$dateline = time();

		
	
	$sql = "insert into Event(holder, place, date, detail, dateline, title) values ('$holder', '$place', '$date', '$detail', $dateline, '$title')";
	
	
	
	if(mysql_query($sql)){
		echo "<script> alert('活动发布成功'); window.location.href= 'manage.php'</script>";
	}
	else{
		echo "<script> alert('活动发布失败,请稍后再试'); window.location.href= 'manage.php'</script>";
	}
	

?>