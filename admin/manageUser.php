<?php
/**
 * Created by PhpStorm.
 * @author: Jiakuan
 * @Date: 10/16/14
 * @Time: 10:49 PM
 */
require_once("../connect.php");
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
?>
<html>
<head>
	<title>用户管理</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../app/datatable/media/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="../app/datatable/examples/resources/syntax/shCore.css">
	<style type="text/css" class="init">
	</style>
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
		});


	</script>
</head>
<body>
<div style="width: 500px; margin: auto;">
	<table id="example" class="display" cellspacing="0" width="100%">
		<thead>
		<tr>
			<td>用户名</td>
			<td>权限</td>
            <td>邮箱地址</td>
		</tr>
		</thead>
		<tbody>
		<?php
		if (!empty($data)) {
			foreach ($data as $user) {
				?>
				<tr>
					<td><?php echo $user['Username'] ?></td>
					<td><?php if ($user['isAdmin'] == 1) {
							echo("管理员");
						} else if ($user['isPR'] == 1) {
							echo("PR 部门");
						} else if ($user['isReviewer'] == 1) {
							echo("审稿人");
						} else {
							echo("普通账户");
						}
						?></td>
                    <td><?php echo $user['Email']; ?></td>
				</tr>
			<?php
			}
		}
		?>
		</tbody>
		<tfoot></tfoot>
	</table>
</div>
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