<?php
/**
 * 处理邮件订阅.
 * @User: Jiakuan
 * @Date: 10/17/14
 * Time: 5:21 PM
 */

require_once("../connect.php");
require_once("../inc/class/Subscribe.php");

$url = $_SERVER['HTTP_REFERER'];
//echo $url;
$email = $_POST['email'];

$subscriber = new Subscribe($email);
$result = $subscriber->duplicate($email);
echo $result;
if (!$subscriber->duplicate($email)) {
	if ($subscriber->addToDB()) {
		echo "<script>alert('成功订阅'); window.location.href = '$url'</script>";
	} else {
		echo "<script> alert('订阅失败, 请重试'); window.location.href = '$url'</script>";
	}
} else {
	echo "<script> alert('您已经订阅过了, 不能重复订阅'); window.location.href = '$url'</script>";
}
?>