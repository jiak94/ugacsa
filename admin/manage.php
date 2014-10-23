<?php
require_once("../connect.php");
require_once("../inc/class/User.php");

session_start();
$USER = new User($_SESSION['username']);
$role = $USER->getRole();
$currentUser = $USER->getUsername();
if ($_SESSION['login'] == 1) {

} else {
	echo "<script> alert ('您没有访问权限, 请登录'); window.location.href = '../admin/login.php'</script>";
	exit();
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>后台管理系统</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../app/datatable/media/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="../app/datatable/examples/resources/syntax/shCore.css">
	<script type="text/javascript" src="../assets/js/jquery-2.1.0.min.js"></script>
	<style type="text/css" class="init">
	</style>
	<script type="text/javascript" language="javascript" src="../app/datatable/media/js/jquery.js"></script>
	<script type="text/javascript" language="javascript" src="../app/datatable/media/js/jquery.dataTables.js"></script>
	<script type="text/javascript" language="javascript"
	        src="../app/datatable/examples/resources/syntax/shCore.js"></script>
	<script type="text/javascript" language="javascript" class="init">
		$(document).ready(function () {
			$('#article').dataTable({
				ordering: false,
				"lengthMenu": [10],
				"lengthChange": false,
				searching: true,
				"info": false
			});

			$('#underReviewArticle').dataTable({
				ordering: false,
				"lengthMenu": [10],
				"lengthChange": false,
				searching: true,
				"info": false
			});

			$('#event').dataTable({
				ordering: false,
				"lengthMenu": [10],
				"lengthChange": false,
				searching: true,
				"info": false
			});

			$('#link').dataTable({
				ordering: false,
				"lengthMenu": [10],
				"lengthChange": false,
				searching: true,
				"info": false
			});

			$('#newsSubscribe').dataTable({
				ordering: false,
				"lengthMenu": [10],
				"lengthChange": false,
				searching: true,
				"info": false
			});
		});

		$(document).ready(function () {
			$("#articleBlock").show();
			$("#eventBlock").hide();
			$("#listBlock").hide();
			$("#linkBlock").hide();

		});

		function articleClick(){
			$("#articleBlock").fadeIn("slow");
			$("#eventBlock").hide();
			$("#listBlock").hide();
			$("#linkBlock").hide();
		}
		function eventClick(){
			$("#articleBlock").hide();
			$("#eventBlock").fadeIn("slow");
			$("#listBlock").hide();
			$("#linkBlock").hide();
		}
		function listClick(){
			$("#articleBlock").hide();
			$("#eventBlock").hide();
			$("#listBlock").fadeIn("slow");
			$("#linkBlock").hide();
		}
		function linkClick(){
			$("#articleBlock").hide();
			$("#eventBlock").hide();
			$("#listBlock").hide();
			$("#linkBlock").fadeIn("slow");
		}
        function hideUserControl(){
            $("#userControl").hide();
        }

	</script>
	<style>
		body {
			margin: 0px;
            min-width: 1100px;
		}

		h1 {
			margin: 0;
		}

		.controlPanel {
            float: left;
			width: 150px;
			height: auto;
            margin-left: 0px;
			padding-left: 30px;
			padding-top: 60px;
            padding-bottom: 60px;
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

		.information {
			float: left;
		}
		.controlButtons{
            width: auto;
            height: 80px;
			margin: auto;
		}
        .controlButtonsResize{
            width: 800px;
            margin: auto;
            height: 80px;
        }
		#articleControl, #eventControl, #linkControl, #listControl{
			float: left;
			width: 150px;
			height: 40px;
			margin: 25px;
			border-radius: 5px;
		}
	</style>
</head>
<body>
<?php
    if($USER->getRole() != "管理员"){
        //echo "<script type='text/javascript'>hideUserControl();</script>";
    }
?>
<div class="header">
	<h1>后台管理系统</h1>
</div>
<div class="controlButtons">
    <div class="controlButtonsResize">
    <button id="articleControl" name="articleControl" onclick="articleClick()" >文章管理</button>
    <button id="eventControl" name="eventControl" onclick="eventClick()">活动管理</button>
    <button id="listControl" name="listControl" onclick="listClick()">邮件列表管理</button>
    <button id="linkControl" name="linkControl" onclick="linkClick()">实用信息管理</button>
        </div>
</div>
<div class="content" style="width: 1035px;margin: auto">
<div class="controlPanel">
	<strong>你好, <?php echo $currentUser; ?></strong>
	<br>
	<strong>权限: <?php echo $role; ?></strong>
	<br>
	<a href="../admin/modifyPassword.php">修改密码</a>
	<br>
	<a href="../admin/logout.php">退出登录</a>
	<br>
    <?php if($USER->getRole()=="管理员"): ?>
	<a href="../admin/manageUser.php" id="userControl">用户管理</a>
    <?php endif; ?>
</div>


<?php


$sql = "select * from Article WHERE isRelease ='1' order by id desc";
$query = mysql_query($sql);
$underReviewArticle = "select * from Article WHERE isRelease ='0' order by id desc";
$underReviewArticleQuery = mysql_query($underReviewArticle);

if ($query && mysql_num_rows($query)) {
	while ($row = mysql_fetch_assoc($query)) {
		$data[] = $row;
	}

} else {
	$data = array();
}

if ($underReviewArticleQuery && mysql_num_rows($underReviewArticleQuery)) {
	while ($underReviewArticleRow = mysql_fetch_assoc($underReviewArticleQuery)) {
		$underReviewArticleData[] = $underReviewArticleRow;
	}
} else {
	$underReviewArticleData = array();
}

?>
<div class="information">
<div style="width: auto; float: left; margin-top: 50px" id="articleBlock">
	<div>
		<a href="../admin/article.add.php">发布新文章</a>
	</div>
	<div style="width: 400px;float: left">
		<h2>已经发布的文章</h2>
		<table id="article" class="display" cellspacing="0" width="100%">
			<thead>
			<tr>
				<td><strong>标题</strong></td>
				<td><strong>作者</strong></td>
				<td><strong>操作</strong></td>
			</tr>
			</thead>
			<tbody>
			<?php
			if (!empty($data)) {

				foreach ($data as $value) {
					?>

					<tr>
						<td><?php echo $value['title']; ?></td>
						<td><?php echo $value['author']; ?></td>
						<td>
                            <?php if($USER->isAdmin()||$USER->isReviewer()):?>
							<a href="../admin/unreleaseArticle.handle.php?id=<?php echo $value['id'] ?>">撤回</a>
                            <?php endif; ?>
						</td>
					</tr>

				<?php
				}
			} else {
				echo("当前数据库内没有文章");
			}
			?>
			</tbody>
			<tfoot></tfoot>
		</table>
	</div>

	<div style="width: 400px; float: left; padding-left: 20px;">
		<h2>等待审核的文章</h2>
		<table id="underReviewArticle" class="display" cellspacing="0" width="100%">
			<thead>
			<tr>
				<td>标题</td>
				<td>作者</td>
				<td>操作</td>
			</tr>
			</thead>
			<tbody>
			<?php
			if (!empty($underReviewArticleData)) {
				foreach ($underReviewArticleData as $underReview) {
					?>
					<tr>
						<td><?php echo $underReview['title']; ?></td>
						<td><?php echo $underReview['author']; ?></td>
						<td>
                            <a href="../newsDetail.php?id=<?php echo$underReview['id']; ?>">预览</a> &nbsp;
                            <?php if($USER->getRole()!='普通用户'): ?>
                            <a href="../admin/releaseArticle.handle.php?id=<?php echo $underReview['id']; ?>">发布</a> &nbsp;
                                <?php if($USER->getRole()=="管理员"): ?>
                            <a href="../admin/article.del.handle.php?id= <?php echo $underReview['id']; ?>">删除</a> &nbsp;
                                <?php endif;?>
                            <a href="../admin/article.modify.php?id=<?php echo $underReview['id']; ?>">修改</a> &nbsp;
                            <?php endif; ?>
                        </td>
					</tr>
				<?php
				}
			}
			?>
			</tbody>
		</table>
	</div>
</div>

<?php

$eventSql = "select * from Event order by id desc";
$eventQuery = mysql_query($eventSql);

if ($eventQuery && mysql_num_rows($eventQuery)) {
	while ($eventRow = mysql_fetch_assoc($eventQuery)) {
		$eventData[] = $eventRow;
	}
} else {
	$eventData = array();
}

?>

<div class="events" style="width: auto;margin-top: 50px" id="eventBlock">
	<div style="width: 820px;">
		<h2>活动列表</h2>
		<a href="../admin/event.add.php">发布新活动</a>

		<table id="event" class="display" cellspacing="0" width="100%">
			<thead>
			<tr>
				<td>标题</td>
				<td>主办方</td>
				<td>地点</td>
				<td>日期&时间</td>
				<td>操作</td>
			</tr>
			</thead>
			<tbody>
			<?php
			if (!empty($eventData)) {

				foreach ($eventData as $eventValue) {
					?>
					<tr>
						<td>&nbsp;<?php echo $eventValue['title']; ?></td>
						<td>&nbsp;<?php echo $eventValue['holder']; ?></td>
						<td>&nbsp;<?php echo $eventValue['place']; ?></td>
						<td>&nbsp;<?php echo $eventValue['date']; ?></td>
						<td>&nbsp;<a href="../admin/event.del.handle.php?id= <?php echo $eventValue['id']; ?>">删除</a>
							&nbsp;
							<a href="../admin/event.modify.php?id=<?php echo $eventValue['id']; ?>">修改</a>
						</td>

					</tr>
				<?php
				}
			} else {
				echo("当前数据库内没有活动信息");
			}
			?>
			</tbody>
			<tfoot></tfoot>
		</table>
	</div>
</div>
<?php
$linkSql = "SELECT * FROM Links order by id desc";
$linkQuery = mysql_query($linkSql);

if ($linkQuery && mysql_num_rows($linkQuery)) {
	while ($linkRow = mysql_fetch_assoc($linkQuery)) {
		$linkData[] = $linkRow;
	}
} else {
	$linkData = array();
}

$subscribe = "SELECT * FROM Subscribe order by id desc";
$subscribeQuery = mysql_query($subscribe);
if ($subscribeQuery && mysql_num_rows($subscribeQuery)) {
	while ($subRow = mysql_fetch_assoc($subscribeQuery)) {
		$subData[] = $subRow;
	}
} else {
	$subData = array();
}
?>
<div class="list" id="listBlock">
	<div style="width: 820px; float: left">
		<h2>邮件列表</h2>
		<table id="newsSubscribe" class="display" cellspacing="0" width="100%">
			<thead>
			<tr>
				<td>电子邮件地址</td>
				<td>是否在邮件列表</td>
				<td>操作</td>
			</tr>
			</thead>
			<tbody>
			<?php
			if (!empty($subData)) {
				foreach ($subData as $subValue) {
					?>
					<tr>
						<td><?php echo $subValue['Email'] ?></td>
						<td><?php if ($subValue['Added'] == 1) {
								echo "是";
							} else {
								echo "否";
							}?></td>
						<td><?php if ($subValue['Added'] == 1) { ?>
								<a href="../admin/delFromList.handle.php?email=<?php echo $subValue['Email'] ?>">从邮件列表删除</a>
							<?php
							} else {
								?>
								<a href="../admin/addToList.handle.php?email=<?php echo $subValue['Email'] ?>">增加到邮件列表</a>
							<?php } ?></td>
					</tr>
				<?php
				}
			}
			?>
			</tbody>
			<tfoot></tfoot>
		</table>
	</div>
</div>
<div class="links" id="linkBlock">
	<div style="width: 820px; float: left">
		<h2>链接列表</h2>
		<a href="../admin/link.add.php">发布新链接</a>

		<table id="link" class="display" cellspacing="0" width="100%">
			<thead>
			<tr>
				<td>网站标题</td>
				<td>网站链接</td>
				<td>网站类型</td>
				<td>操作</td>
			</tr>
			</thead>
			<tbody>
			<?php
			if (!empty($linkData)){
			foreach ($linkData as $linkValue){
			?>
			<tr>
				<td>&nbsp;<?php echo $linkValue['title']; ?></td>
				<td>&nbsp;<?php echo $linkValue['link']; ?></td>
				<td>&nbsp;<?php
					if ($linkValue['type'] == "schoolOfficial") {
						echo "官方类网站";
					} else if ($linkValue['type'] == "life") {
						echo "生活类网站";
					} else if ($linkValue['type'] == "study") {
						echo "学习类网站";
					} else {
						echo "其他";
					}
					?></td>
				<td>&nbsp;<a href="../admin/link.del.handle.php?id=<?php echo $linkValue['id']; ?>">删除</a> &nbsp;
					<a href="../admin/link.modify.php?id=<?php echo $linkValue['id'] ?>">修改</a>
				</td>
			</tr>
			</tbody>
			<tfoot></tfoot>
		</table>
		<?php
		}
		}
		else {
			?>
			<br><?php echo "当前数据库没有链接" ?></tr>

		<?php
		}
		?>
	</div>
</div>
</div>
</div>
</body>
</html>