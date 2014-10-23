<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 10/23/14
 * Time: 4:41 PM
 */
require_once("../connect.php");
require_once("../inc/class/User.php");
session_start();
$currentUser = $_SESSION['username'];
if ($_SESSION['login'] == 1) {

} else {
    echo "<script> alert ('您没有访问权限, 请登录'); window.location.href = 'login.php'</script>";
    exit();
}

$USER = new User($currentUser);
$id = $_GET['id'];

if($USER->delUser($id)){
    echo "<script>window.location.href='../admin/manageUser.php';</script>";
}
else{
    echo "<script>alert('删除失败');window.location.href='../admin/manageUser.php'</script>";
}