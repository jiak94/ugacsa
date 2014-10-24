<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 10/24/14
 * Time: 1:13 AM
 */
require_once("../inc/class/User.php");
require_once("../connect.php");
require_once("../inc/class/Request.php");
session_start();
$USER = new User($_SESSION['username']);
$role = $USER->getRole();
$currentUser = $USER->getUsername();
if ($_SESSION['login'] == 1) {

} else {
    echo "<script> alert ('您没有访问权限, 请登录'); window.location.href = '../admin/login.php'</script>";
    exit();
}


$id = $_GET['id'];

$userName = $_POST['account'];
$password = $_POST['password'];

$REQUEST = new Request();

if($REQUEST->confirmRequest($id, $userName, $password)){
    echo "<script>window.location.href='../admin/manage.php'</script>";
}
else{
    echo "<script>alert('确认失败');window.location.href='../admin/manage.php'</script>";
}