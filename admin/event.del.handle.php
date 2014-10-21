<?php
require_once("../connect.php");


session_start();
if ($_SESSION['login'] == 1) {

} else {
	echo "<script> alert ('您没有访问权限, 请登录'); window.location.href = 'login.php'</script>";
	exit();
}


$id = $_GET['id'];
$deleteSql = "DELETE FROM Event WHERE id=$id";

if (mysql_query($deleteSql)) {
	echo "<script> alert('删除活动成功');window.location.href='manage.php'</script>";
} else {
	echo "<script> alert('删除活动失败');window.location.href='manage.php'</script>";
}

?>