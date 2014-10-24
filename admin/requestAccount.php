<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 10/23/14
 * Time: 9:11 PM
 */
require_once("../connect.php");
require_once("../inc/class/Request.php");

$name = $_POST['realName'];
$department = $_POST['department'];
$email = $_POST['email'];

$REQUEST = new Request();

if($REQUEST->addToRequest($name, $department, $email)){
    echo "<script>alert('申请已经发送');window.location.href='../index.php'</script>";
}
else{
    echo "<script>alert('申请失败,请稍后再试');window.location.href='../index.php'</script>";
}
?>