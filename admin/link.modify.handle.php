<?php
require_once("../connect.php");

$id = $_POST['id'];
$title = $_POST['title'];
$link = $_POST['link'];
$type = $_POST['type'];

$sql = "UPDATE Links SET title='$title', link='$link', type='$type' WHERE id=$id";

$query = mysql_query($sql);

if ($query) {
	echo "<script> alert('修改成功'); window.location.href = 'manage.php'</script>";
} else {
	echo "<script> alert('修改失败, 请重试'); window.location.href = 'manage.php'</script>";
}


?>