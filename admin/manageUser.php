<?php
/**
 * Created by PhpStorm.
 * @author: Jiakuan
 * @Date: 10/16/14
 * @Time: 10:49 PM
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
$sql = "SELECT * From Admin";
$query = mysql_query($sql);
if ($query && mysql_num_rows($query)) {
    while ($row = mysql_fetch_assoc($query)) {
        $data[] = $row;
    }
}
$USER = new User($currentUser);
$role = $USER->getRole();
?>
<html>
<head>
    <title>用户管理</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../app/datatable/media/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="../app/datatable/examples/resources/syntax/shCore.css">
    <style type="text/css" class="init">
    </style>
    <script type="text/javascript" src="../assets/js/jquery-2.1.0.min.js"></script>
    <script type="text/javascript" language="javascript" src="../app/datatable/media/js/jquery.js"></script>
    <script type="text/javascript" language="javascript" src="../app/datatable/media/js/jquery.dataTables.js"></script>
    <script type="text/javascript" language="javascript"
            src="../app/datatable/examples/resources/syntax/shCore.js"></script>

    <script type="text/javascript" language="javascript" class="init">
        $(document).ready(function () {
            $('#example').dataTable({
                ordering: false,
                "lengthMenu": [10],
                "lengthChange": false,
                searching: true,
                "info": false
            });

            $(".modifyForm").hide();
            $(".addUser").hide();
        });
        function changePermission(){
            $(".modifyForm").fadeIn();
            $(".delUser").hide();
            $(".modifyPermission").hide();
        }
        function showAddUser(){
            $(".addUser").fadeIn();
            $(".viewUser").hide();
        }
        function showViewUser(){
            $(".addUser").hide();
            $(".viewUser").fadeIn();
        }

    </script>
    <style>
        body {
            margin: 0;
            min-width: 1000px;
        }

        .header {
            margin: 0px;
            width: auto;
            padding: 30px;
            min-width: 1000px;
            height: 60px;
            background-color: #990000;
            text-align: center;
        }

        .controlPanel {
            width: 150px;
            height: auto;
            float: left;
            padding-left: 50px;
            padding-top: 60px;
        }

        .controlButtons {
            float: left;
            margin-right: auto;
            margin-left: auto;
            width: auto;
        }
        #back, #users, #add{
            float: left;
            width: 150px;
            height: 40px;
            margin: 25px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
<div class="header">
    <h1>后台管理系统</h1>
</div>
<div class="controlPanel">
    <strong>你好, <?php echo $currentUser; ?></strong>
    <br>
    <strong>权限: <?php echo $role; ?></strong>
    <br>
    <a href="../admin/modifyPassword.php">修改密码</a>
    <br>
    <a href="../admin/logout.php">退出登录</a>
    <br>
    <?php if ($USER->getRole() == "管理员"): ?>
        <a href="../admin/manageUser.php" id="userControl">用户管理</a>
    <?php endif; ?>
</div>
<div class="controlButtons">
    <button id="back" name="back" onclick="window.location.href='../admin/manage.php'">返回控制面板</button>
    <button id="users" name="users" onclick="showViewUser()">查看当前用户</button>
    <button id="add" name="add" onclick="showAddUser()">增加用户</button>
</div>
<div class="content" style="width: auto; float: left">
    <div style="width: 600px; margin: auto; margin-left: 30px; margin-top: 30px" class="viewUser">
        <table id="example" class="display" cellspacing="0" width="100%">
            <thead>
            <tr>
                <td>用户名</td>
                <td>权限</td>
                <td>邮箱地址</td>
                <td>操作</td>
            </tr>
            </thead>
            <tbody>
            <?php
            if (!empty($data)) {
                $count = 0;
                foreach ($data as $user) {

                    ?>
                    <tr>
                        <td><?php echo $user['Username'] ?></td>
                        <td><?php if ($user['isAdmin'] == 1) {
                                echo("管理员");
                            } else if ($user['isPR'] == 1) {
                                echo("发稿人");
                            } else if ($user['isReviewer'] == 1) {
                                echo("审稿人");
                            } else {
                                echo("普通账户");
                            }
                            ?></td>
                        <td><?php echo $user['Email']; ?></td>
                        <td><a class="delUser" href="userDel.handle.php?id=<?php echo $user['id'] ?>">删除</a> &nbsp;
                            <a class="modifyPermission" href="#" onclick="changePermission();">修改用户权限</a>
                            <form action="modifyUserPermission.php?id=<?php echo$user['id'] ?>" method="post" class="modifyForm">
                                <select name="role">
                                    <option value="admin">管理员</option>
                                    <option value="PR">发稿人</option>
                                    <option value="reviewer">审稿人</option>
                                    <option value="normal">普通用户</option>
                                </select>
                                <input type="submit" id="button" value="保存">
                            </form>
                        </td>
                    </tr>
                <?php
                }
            }
            ?>
            </tbody>
            <tfoot></tfoot>
        </table>
    </div>
    <div class="addUser" style="width: 500px;height: 300px;margin: auto;border-radius: 10px;background: #f5f5f5;border: solid red;">
        <h3 align="center">添加用户</h3>
        <div class="form" style="width: 150px;margin: auto; margin-top: 70px;">
         <form id="manageUser" name="managerUser" action="manageUser.handle.php" method="post">
            <input required="true" name="username" placeholder="用户名" style="height: 20px;width: 150px;border-radius: 5px;font-size: medium;padding-left: 10px">
            <br>
            <input required="true" name="password" type="password" placeholder="临时密码" style="height: 20px;width: 150px;margin-top: 10px;border-radius: 5px;padding-left: 10px;">
            <select name="role" style="width: 100px">
                <option value="admin">管理员</option>
                <option value="PR">发稿人</option>
                <option value="reviewer">审稿人</option>
            </select>
             <br>
            <input type="submit" id="button" value="创建" style="width: 150px;">
        </form>
        </div>
    </div>
</div>
</body>
</html>