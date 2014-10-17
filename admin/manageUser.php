<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 10/16/14
 * Time: 10:49 PM
 */
?>
<html>
<head>
    <title>用户管理</title>
    <meta charset="utf-8">
</head>
<body>
<form id="manageUser" name="managerUser" action="manageUser.handle.php" method="post">
    <input required="true" name="username" placeholder="用户名">
    <input required="true" name="password" type="password" placeholder="临时密码">
    <select name="role">
        <option value="admin">管理员</option>
        <option value="PR">发稿人</option>
        <option value="reviewer">审稿人</option>
    </select>
    <input type="submit" id="button" value="创建">
</form>
</body>
</html>