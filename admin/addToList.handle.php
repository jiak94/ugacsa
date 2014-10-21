<?php
/**
 * 把邮箱地址添加到"已经订阅"列表当中
 * User: Jiakuan
 * Date: 10/18/14
 * Time: 10:46 PM
 */
require_once("../connect.php");
require_once("../inc/class/Subscribe.php");

$email = $_GET['email'];

$SUBSCRIBER = new Subscribe($email);

if ($SUBSCRIBER->addToList()) {
	echo "<script> alert('成功添加'); window.location.href = '../admin/manage.php'</script>";
} else {
	echo "<script> alert('错误,请重试'); window.location.href = '../admin/manage.php'</script>";
}
?>