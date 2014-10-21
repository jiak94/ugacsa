<?php
require_once("../connect.php");

$username = $_POST['username'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];
$secretcode = $_POST['secretcode'];
$email = $_POST['email'];
$secretQuestion = $_POST['secretQuestion'];
$answer = $_POST['answer'];

if ($secretcode == "pUfuvaz7") {
	if ($password == $repassword) {
		$hashPassword = hash('md5', $password);
		$sql = "INSERT INTO Admin(Username, Password, Email, SecretQuestion, Answer) VALUES ('$username', '$hashPassword', '$email', '$secretQuestion', '$answer')";
		if (mysql_query($sql)) {
			echo "<script> alert('成功创建管理员, 返回登录'); window.location.href = 'login.php'</script>";
			exit();
		}
	} else {
		echo "<script> alert('两次密码输入不一致,请重试'); window.location.href = 'createAdmin.php'</script>";
	}
} else {
	echo "<script> alert('邀请码不正确, 请重试'); window.location.href = 'createAdmin.php'</script>";
}



?>