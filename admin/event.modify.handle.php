<?php
require_once("../connect.php");


session_start();
if ($_SESSION['login'] == 1) {
} else {
	echo "<script> alert ('您没有访问权限, 请登录'); window.location.href = 'login.php'</script>";
	exit();
}


$id = $_POST['id'];
$title = $_POST['title'];
$holder = $_POST['holder'];
$place = $_POST['place'];
$date = $_POST['date'];
$detail = $_POST['detail'];
$dateline = time();

$updateSql = "UPDATE Event SET title='$title', holder='$holder', place='$place', date='$date', detail='$detail', dateline=$dateline WHERE id=$id";


//when develop the sql statement, try to print it out to make sure it works properly.
if (mysql_query($updateSql)) {

	echo "<script> alert ('文章修改成功'); window.location.href = 'manage.php'</script>";
} else {
	echo "<script> alert ('文章修改出错, 请稍后再试'); window.location.href='manage.php'</script>";
}

?>