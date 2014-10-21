<?php
require_once("../connect.php");
require_once("../inc/class/Email.php");
$EMAIL = new Email();

function generatePassword($length = 8)
{
	$chars = array_merge(range(0, 9),
		range('a', 'z'),
		range('A', 'Z'),
		array('!', '@', '$', '%', '^', '&', '*'));
	shuffle($chars);
	$password = '';
	for ($i = 0; $i < 8; $i++) {
		$password .= $chars[$i];
	}
	return $password;
}

$id = $_POST['id'];
$answer = $_POST['answer'];


$sql = "SELECT * FROM Admin WHERE id=$id";


$query = mysql_query($sql);

$data = mysql_fetch_assoc($query);
$username = $data['Username'];

$newPassword = generatePassword();

$to = $data['Email'];
$subject = "密码重置";
$message = "你的账号: " . $username . " 密码已经被重置为 " . $newPassword . "\n请登录修改您的密码";

if ($data['Answer'] == $answer) {

	$hashPassword = hash('md5', $newPassword);

	$updateSql = "Update Admin SET tempPassword='$hashPassword' WHERE id=$id";

	$query = mysql_query($updateSql);

	if ($query) {
		$EMAIL->sendEmailTo($to, $subject, $message);
		echo "<script> alert('修改成功,请返回重新登录'); window.location.href = '../admin/login.php'</script>";
		exit();
	} else {
		echo "<script> alert('服务器繁忙,请稍后再试'); window.location.href = '../admin/forgetPassword.php'</script>";
		exit();
	}

} else {
	echo "<script> alert('密保问题错误,请重试'); window.location.href = '../admin/forgetPassword.php'</script>";
}



?>