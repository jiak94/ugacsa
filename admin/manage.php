<?php
	require_once("../connect.php");
    require_once("../inc/class/User.php");

	session_start();
    $USER = new User($_SESSION['username']);
    $role = $USER->getRole();
	$currentUser = $USER->getUsername();
	if($_SESSION['login']==1){
		
	}
	else{
		echo "<script> alert ('您没有访问权限, 请登录'); window.location.href = '../admin/login.php'</script>";
		exit();
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>后台管理</title>
	<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../app/datatable/media/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="../app/datatable/examples/resources/syntax/shCore.css">
    <style type="text/css" class="init">
    </style>
    <script type="text/javascript" language="javascript" src="../app/datatable/media/js/jquery.js"></script>
    <script type="text/javascript" language="javascript" src="../app/datatable/media/js/jquery.dataTables.js"></script>
    <script type="text/javascript" language="javascript" src="../app/datatable/examples/resources/syntax/shCore.js"></script>
    <script type="text/javascript" language="javascript" class="init">
        $(document).ready(function() {
            $('#article').dataTable({
                ordering: false,
                "lengthMenu":[10],
                "lengthChange": false,
                searching: true,
                "info": false
            });
        } );

        $(document).ready(function(){
            $('#underReviewArticle').dataTable({
                ordering: false,
                "lengthMenu": [10],
                "lengthChange": false,
                searching: true,
                "info": false
            })
        });

        $(document).ready(function(){
            $('#event').dataTable({
                ordering: false,
                "lengthMenu": [10],
                "lengthChange": false,
                searching: true,
                "info": false
            })
        });

        $(document).ready(function(){
            $('#link').dataTable({
                ordering:false,
                "lengthMenu": [10],
                "lengthChange": false,
                searching: true,
                "info": false
            })
        });

        $(document).ready(function(){
            $('#newsSubscribe').dataTable({
                ordering: false,
                "lengthMenu": [10],
                "lengthChange": false,
                searching: true,
                "info": false
            })
        });

    </script>
</head>
<body>

<div style="float:right">
<strong>当前用户: <?php echo $currentUser; ?></strong>
    <strong>权限: <?php echo $role; ?></strong>
<br>
<a href="../admin/modifyPassword.php">修改密码</a>
<br>
<a href="../admin/logout.php">退出登录</a>
    <br>
    <a href="../admin/manageUser.php">用户管理</a>
</div>


<?php
	

	$sql = "select * from Article WHERE isRelease ='1' order by id desc";
	$query = mysql_query($sql);
    $underReviewArticle = "select * from Article WHERE isRelease ='0' order by id desc";
    $underReviewArticleQuery = mysql_query($underReviewArticle);

	if($query && mysql_num_rows($query)){
		while ($row = mysql_fetch_assoc($query)) {
			$data[] = $row;
		}

	}
	else{
		$data = array();
	}

    if($underReviewArticleQuery && mysql_num_rows($underReviewArticleQuery)){
        while ($underReviewArticleRow = mysql_fetch_assoc($underReviewArticleQuery)){
            $underReviewArticleData[] = $underReviewArticleRow;
        }
    }
    else{
        $underReviewArticleData = array();
    }
	
?>

<h1>文章管理系统</h1>
<br>
<div style="width: 800px; margin: auto">
<h2>已经发布的文章</h2>
<a href="../admin/article.add.php">发布新文章</a>
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
	if(!empty($data)){

		foreach ($data as $value) {
?>
	
	<tr>
		<td><?php echo $value['title']; ?></td>
		<td><?php echo $value['author']; ?></td>
		<td>
            <a href="../admin/article.del.handle.php?id= <?php echo $value['id'];?>">删除</a> &nbsp;
            <a href="../admin/article.modify.php?id=<?php echo $value['id'];?>">修改</a> &nbsp;
            <a href="../admin/unreleaseArticle.handle.php?id=<?php echo $value['id']?>">撤回</a>
		</td>
	</tr>
		
<?php
		}
	}
	else{
		echo("当前数据库内没有文章");
	}
?>
    </tbody>
    <tfoot></tfoot>
</table>
</div>
<div style="width: 800px; margin: auto">
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
            if(!empty($underReviewArticleData)) {
                foreach ($underReviewArticleData as $underReview) {
                    ?>
                    <tr>
                        <td><?php echo $underReview['title']; ?></td>
                        <td><?php echo $underReview['author']; ?></td>
                        <td><a href="../admin/releaseArticle.handle.php?id=<?php echo $underReview['id']; ?>">发布</a>
                        </td>
                    </tr>
                <?php
                }
            }
        ?>
        </tbody>
    </table>
</div>
<?php

	$eventSql = "select * from Event order by id desc";
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
<div style="width: 800px; margin: auto">
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
	if(!empty($eventData)){

		foreach ($eventData as $eventValue) {
?>
	<tr>
		<td>&nbsp;<?php echo $eventValue['title']; ?></td>
		<td>&nbsp;<?php echo $eventValue['holder']; ?></td>
		<td>&nbsp;<?php echo $eventValue['place']; ?></td>
		<td>&nbsp;<?php echo $eventValue['date']; ?></td>
		<td>&nbsp;<a href="../admin/event.del.handle.php?id= <?php echo $eventValue['id'];?>">删除</a> &nbsp;
		<a href="../admin/event.modify.php?id=<?php echo $eventValue['id'];?>">修改</a>
		</td>

	</tr>
<?php
		}
	}
	else{
		echo("当前数据库内没有活动信息");
	}
?>
    </tbody>
    <tfoot></tfoot>
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

    $subscribe = "SELECT * FROM Subscribe order by id desc";
    $subscribeQuery = mysql_query($subscribe);
    if($subscribeQuery &&mysql_num_rows($subscribeQuery)) {
        while ($subRow = mysql_fetch_assoc($subscribeQuery)) {
            $subData[] = $subRow;
        }
    }
    else{
        $subData = array();
    }
?>
<div style="width: 800px; margin: auto">
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
            if(!empty($subData)){
                foreach($subData as $subValue) {
        ?>
        <tr>
            <td><?php echo $subValue['Email'] ?></td>
            <td><?php if($subValue['Added'] ==1){
                    echo "是";
                }
                else{
                    echo "否";
                }?></td>
            <td><?php if($subValue['Added'] ==1){?>
                    <a href="../admin/delFromList.handle.php?email=<?php echo $subValue['Email'] ?>">从邮件列表删除</a>
                <?php
                }
                else{ ?>
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
<div style="width: 800px; margin: auto">
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
	else{
?>
	<br><?php echo "当前数据库没有链接" ?></tr>

<?php
	}
?>
</div>
</body>
</html>