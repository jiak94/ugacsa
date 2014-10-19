<?php
/**
 * 把邮箱地址从"已经订阅"列表中取出
 * User: Jiakuan
 * Date: 10/18/14
 * Time: 10:46 PM
 */
require_once("../connect.php");
require_once("../inc/class/Subscribe.php");

$email = $_GET['email'];

$SUBSCRIBER = new Subscribe($email);

if($SUBSCRIBER->removeFromList()){
    echo "<script> alert('成功移除'); window.location.href = '../admin/manage.php'</script>";
}
else{
    echo "<script> alert('错误,请重试'); window.location.href = '../admin/manage.php'</script>";
}
?>