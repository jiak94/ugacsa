<?php
	require_once("../connect.php");

	session_start();
	
	if(isset($_SESSION['login'])){
		
		session_destroy();
		echo "<script> alert ('成功退出!返回登录页面.'); window.location.href = 'login.php'</script>";
	}


?>