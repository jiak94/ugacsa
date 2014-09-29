<?php
	require_once("../connect.php");
	
	$id = $_GET['id'];
	
	$sql = "DELETE From Links WHERE id=$id";
	
	$query = mysql_query($sql);
	
	if($query){
		echo "<script> alerts('删除成功'); window.location.href = 'manage.php'</script>";
	}
	else{
		echo "<script> alerts('删除失败,请稍后再试'); window.location.href = 'manage.php'</script>";
	}


?>