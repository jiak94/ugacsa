<?php
	require_once("../connect.php");
	
	function generatePassword($length=8)
	{
    	$chars = array_merge(range(0,9),
                     range('a','z'),
                     range('A','Z'),
                     array('!','@','$','%','^','&','*'));
					 shuffle($chars);
					 $password = '';
					 for($i=0; $i<8; $i++) {
						 $password .= $chars[$i];
						 }
				return $password;
	}
	
	$id = $_POST['id'];
	$answer = $_POST['answer'];
	
	
	

	$sql = "SELECT * FROM Admin WHERE id=$id";
	
	
	$query = mysql_query($sql);

	$data = mysql_fetch_assoc($query);
	
	
	$newPassword = generatePassword();
	
	$to = $data['Email'];
	$subject = "Reset Password";
	$message = "Your new password for username: ".$username." has been reset as ".$newPassword;
	
	if($data['Answer'] == $answer){
		
		$hashPassword = hash('md5', $newPassword);
		
		$updateSql = "Update Admin SET Password='$hashPassword' WHERE id=$id";
		
		$query = mysql_query($updateSql);
		
		if($query){
			mail($to, $subject, $message);
			echo "<script> alert('修改成功,请返回重新登录'); window.location.href = '../admin/login.php'</script>";
			exit();
		}
		else{
			echo "<script> alert('服务器繁忙,请稍后再试'); window.location.href = '../admin/forgetPassword.php'</script>";
			exit();
		}
		
	}
	else{
		echo "<script> alert('密保问题错误,请重试'); window.location.href = '../admin/forgetPassword.php'</script>";
	}



?>