<?php
	require_once("../connect.php");
	session_start();
	if($_SESSION['login']==1){
		
	}
	else{
		echo "<script> alert ('您没有访问权限, 请登录'); window.location.href = 'login.php'</script>";
		exit();
	}
	
	$username = $_POST['username'];
	$oldPassword = $_POST['oldPassword'];
	$newPassword = $_POST['newPassword'];
	$renewPassword = $_POST['renewPassword'];


	$sql = "SELECT * FROM Admin WHERE Username='$username'";
	

	$query = mysql_query($sql);
	
	$data = mysql_fetch_assoc($query);
	
	
	$to = $data["Email"];
	$subject = "Update Password";
	
	
	
	$hashOld = hash('md5', $oldPassword);
	
	if($hashOld != $data['Password']){
		
		echo "<script> alert('旧密码错误, 请重试'); window.location.href = 'modifyPassword.php'</script>";
		exit();
	}
	
		
	
	if($newPassword == $renewPassword){
		
		
		$message = "You just update your password for Username: ".$username." to ".$newPassword;
		$hashNew = hash('md5', $newPassword);
		echo("done");
		
		$sqlUpdate = "UPDATE Admin SET Password='$hashNew' WHERE Username='$username'";
		
		
		$queryUpdate = mysql_query($queryUpdate);
		
		mail($to, $subject, $message);
			
			echo "<script> alert('密码更新成功'); window.location.href ='manage.php'</script>";
		
		
	}
	else{
		
		echo "<script> alert('新密码不一致,请重试');window.location.href = 'modifyPassword.php'</script>";
	}



?>