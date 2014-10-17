<?php
	require_once("../connect.php");

	session_start();
	$currentUser = $_SESSION['username'];
	if($_SESSION['login']==1){
		
	}
	else{
		echo "<script> alert ('您没有访问权限, 请登录'); window.location.href = 'login.php'</script>";
		exit();
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>文章管理</title>
	<meta charset="utf-8">
</head>
<body>

<div style="float:right">
<strong>当前用户: <?php echo $currentUser; ?></strong>
<br>
<a href="modifyPassword.php">修改密码</a>
<br>
<a href="logout.php">退出登录</a>
</div>


<?php
	

	$sql = "select * from Article order by dateline desc";
	$query = mysql_query($sql);

	if($query && mysql_num_rows($query)){
		while ($row = mysql_fetch_assoc($query)) {
			$data[] = $row;
		}

	}
	else{
		$data = array();
	}
	
?>

<h1>文章管理系统</h1>
<br>
<div style="float:left">
<h2>文章列表</h2>
<a href="article.add.php">发布新文章</a>
<table border="1">
	<tr>
		<td><strong>标题</strong></td>
		<td><strong>作者</strong></td>
		<td><strong>操作</strong></td>
	</tr>
<?php
	if(!empty($data)){

		foreach ($data as $value) {
?>
	
	<tr>
		<td>&nbsp;<?php echo $value['title']; ?></td>
		<td>&nbsp;<?php echo $value['author']; ?></td>
		<td>&nbsp;<a href="article.del.handle.php?id= <?php echo $value['id'];?>">删除</a> &nbsp;
		<a href="article.modify.php?id=<?php echo $value['id'];?>">修改</a>
		</td>
	</tr>
		
<?php
		}
	}
	else{
		echo("当前数据库内没有文章");
	}
?>
</table>
</div>
<?php

	$eventSql = "select * from Event order by dateline desc";
	$eventQuery = mysql_query($eventSql);
	
	if($eventQuery && mysql_num_rows($eventQuery)){
		while ($eventRow = mysql_fetch_assoc($eventQuery)){
			$eventData[]=$eventRow;
		}
	}
	else{
		$eventData = array();
	}

?>
<div style="float:left; margin-left: 50px;">
<h2>活动列表</h2>
<a href="event.add.php">发布新活动</a>

<table border="1">
	<tr>
		<td>标题</td>
		<td>主办方</td>
		<td>地点</td>
		<td>日期&时间</td>
		<td>操作</td>
	</tr>
<?php
	if(!empty($eventData)){

		foreach ($eventData as $eventValue) {
?>
	<tr>
		<td>&nbsp;<?php echo $eventValue['title']; ?></td>
		<td>&nbsp;<?php echo $eventValue['holder']; ?></td>
		<td>&nbsp;<?php echo $eventValue['place']; ?></td>
		<td>&nbsp;<?php echo $eventValue['date']; ?></td>
		<td>&nbsp;<a href="event.del.handle.php?id= <?php echo $eventValue['id'];?>">删除</a> &nbsp;
		<a href="event.modify.php?id=<?php echo $eventValue['id'];?>">修改</a>
		</td>

	</tr>
<?php
		}
	}
	else{
		echo("当前数据库内没有活动信息");
	}
?>
</table>
</div>
<?php 
	$linkSql = "SELECT * FROM Links order by id desc";
	$linkQuery = mysql_query($linkSql);
	
	if($linkQuery && mysql_num_rows($linkQuery)){
		while($linkRow = mysql_fetch_assoc($linkQuery)){
			$linkData[]= $linkRow;
		}
	}
	else{
		$linkData =  array();
	}

?>
<div style="float: left; margin-left: 50px;">
<h2>链接列表</h2>
<a href="link.add.php">发布新链接</a>

<table border="1">
	<tr>
		<td>网站标题</td>
		<td>网站链接</td>
		<td>网站类型</td>
		<td>操作</td>
	</tr>
<?php
	if(!empty($linkData)){
		foreach($linkData as $linkValue){
?>	
	<tr>
		<td>&nbsp;<?php echo $linkValue['title']; ?></td>
		<td>&nbsp;<?php echo $linkValue['link']; ?></td>
		<td>&nbsp;<?php 
			if($linkValue['type']=="schoolOfficial"){
				echo "官方类网站";
			}
			else if($linkValue['type'] == "life"){
				echo "生活类网站";
			} 
			else if($linkValue['type']=="study"){
				echo "学习类网站";
			}
			else{
				echo "其他";
			}
		?></td>
		<td>&nbsp;<a href="link.del.handle.php?id=<?php echo $linkValue['id']; ?>">删除</a> &nbsp;
		<a href="link.modify.php?id=<?php echo $linkValue['id'] ?>">修改</a>
		</td>
	</tr>
</table>
<?php
		}
	}
	else{
?>
	<br><?php echo "当前数据库没有链接" ?></tr>

<?php
	}
?>
</div>
</body>
</html>