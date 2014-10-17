<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 10/16/14
 * Time: 11:08 PM
 */
require_once("../connect.php");
require_once("../inc/class/user.php");

$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];

$USER = new user($username);

$isAdmin = 0;
$isPR = 0;
$isReviewer = 0;

if($role == 'admin'){
    $isAdmin = 1;
}
else if($role == 'PR'){
    $isPR = 1;
}
else if ($role == 'reviewer')
{
    $isReviewer = 1;
}

if($USER->createNewUser($username, $password, $isAdmin, $isPR, $isReviewer)){
    echo "done";
}
else{
    echo "wrong";
}
?>