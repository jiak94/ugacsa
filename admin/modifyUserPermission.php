<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 10/23/14
 * Time: 12:07 PM
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
$role = $_POST['role'];

if($role =="admin"){
    if($USER->setUserAsAdmin($id)){
        echo "<script>window.location.href='manageUser.php'</script>";
    }
    else{
        echo "<script>alert('修改失败,请重试');window.location.href='managUser.php'</script>";
    }
}
else if ($role == "PR"){
    if($USER->setUserAsPR($id)){
        echo "<script>window.location.href='manageUser.php'</script>";
    }
    else{
        echo "<script>alert('修改失败,请重试');window.location.href='managUser.php'</script>";
    }
}
else if($role == "reviewer"){
    if($USER->setUserAsReviewer($id)){
        echo "<script>window.location.href='manageUser.php'</script>";
    }
    else{
        echo "<script>alert('修改失败,请重试');window.location.href='managUser.php'</script>";
    }
}
else{
    if($USER->setUserAsNormal($id)){
        echo "<script>window.location.href='manageUser.php'</script>";
    }
    else{
        echo "<script>alert('修改失败,请重试');window.location.href='managUser.php'</script>";
    }
}