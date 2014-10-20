<?php
	require_once("connect.php");
		
	$sql = "select * from Article WHERE isRelease ='1' order by id desc";
	
	$query = mysql_query($sql);
	
	if($query&& mysql_num_rows($query)){
		while ($row = mysql_fetch_assoc($query)){
			$data[] = $row;
			$defaultContent[] = $row;
		}
	}
	$count = 0;
?>
<!DOCTYPE html>
<html>
<head>
	<title>佐治亚大学中国学生学者联合会 | 新闻中心</title>
	<meta http-equiv="Content-Type" content="text/html; charset = UTF-8"/>
    <link rel="stylesheet" type="text/css" href="assets/css/newsStyle.css">
    <link rel="stylesheet" type="text/css" href="app/datatable/media/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="app/datatable/examples/resources/syntax/shCore.css">

	<style type="text/css" class="init">

	</style>
	<script type="text/javascript" language="javascript" src="app/datatable/media/js/jquery.js"></script>
	<script type="text/javascript" language="javascript" src="app/datatable/media/js/jquery.dataTables.js"></script>
	<script type="text/javascript" language="javascript" src="app/datatable/examples/resources/syntax/shCore.js"></script>
	
	<script type="text/javascript" language="javascript" class="init">


        $(document).ready(function() {
	    $('#example').dataTable({
		    ordering: false,
		    "lengthMenu":[16],
		    "lengthChange": false,
            "columns":[
                {"width": "70%", className: "dt-left"},
                {"width": "15%"},
                {"width": "15%"}
            ],
            searching: false,
            "info": false
	    });
        });


	</script>
</head>
<body>
<div class="header">

	<a href="home.php"><img src="assets/img/logoFixed.png" id="logo"/></a>
	
	<h1 id="CHNtitle" style="font-family: chinese">佐治亚大学中国学生学者联谊会</h1>
	<h2 id="ENGtitle">CHINESE STUDENT ASSOCIATION AT THE UNIVERSITY OF GEORGIA</h2>

	<form action="http://www.google.com/search" method="get" target="_blank" id="search">
		<input name="sitesearch" value="ugacsa.com" type="hidden">
		<input name="hl" value="zh-CN" type="hidden">
		<input name="ie" value="UTF-8" type="hidden">
		<input onfocus="if( this.value=='Search CSA') {this.value='' };" size="25" name="q" id="searchBox" value="Search CSA" type="text">
		<input name="Search" value="Search" attr="value" type="hidden">
	</form>
</div>
<div class="menu">
	<div class="menu_nav_resize" align="Center">
	<ul>
		<li><a href="home.php"><span>主页<br/>Home</span></a></li>
		<li class="active"><a href="news.php"><span>新闻<br/>News</span></a></li>
		<li><a href="events.php"><span>活动<br/>Events</span></a></li>
		<li><a href="us.php"><span>我们<br/>Us</span></a></li>
		<li><a href="guide.php"><span>指南<br/>Guide</span></a></li>
		<li><a href="cooperation.php"><span>合作<br/>Cooperation</span></a></li>
		<li><a href="http://bbs.ugacsa.com" target="_blank"><span>论坛<br/>BBS</span></a></li>
	</ul>		
	</div>
</div>

<div class="content">
	
	<div class="content_resize">
	
	<div class="leftPart">
		<div class="newsSubscriber">
			<div class="snsIcon">
				<a href="https://www.facebook.com/csaATUGA" target="_blank"><img src="assets/img/fb.gif" /></a>
				<a href="http://page.renren.com/670000616?checked=true" target="_blank"><img src="assets/img/renren.png" /></a>
				<a href="http://weibo.com/u/3212988263" target="_blank"><img src="assets/img/weibo.png" /></a>
			</div>
		
			<form action="subscribe.php" method="POST">
                <input id="subscriber" name="email" pattern="([a-z0-9]*[-_]?[a-z0-9]+)*@([a-z0-9]*[-_]?[a-z0-9]+)+[\.][a-z]{2,3}" title="请输入电子邮箱"/>
				<input id="submit" type="submit" value="Subscribe!" />
			</form>
			
		</div>
	</div>
	<div class="rightPart">
        <h2 align="center">新闻中心</h2>
        <div class="container">
            <table id="example" class="row-border hover" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <td>标题</td>
                    <td>作者</td>
                    <td>日期</td>
                </tr>
                </thead>
                <tfoot>
                </tfoot>
                <tbody>
                <?php
                if(!empty($data)){
                    foreach($data as $value){
                       ?>
                        <tr>
                            <td><a href="newsDetail.php?id=<?php echo $value['id']; ?>"><?php echo $value['title']; ?></a></td>
                            <td><?php echo $value['author'] ?></td>
                            <td><?php echo date('M-d', $value['dateline']) ?></td>
                        </tr>
                    <?php
                    }
                }
                ?>
                </tbody>
            </table>
        </div>

	</div>
	</div>
</div>

<div class="footer">
	<div class="sns">
		<div class="sns_resize" align="center">
			<strong  id="snsText">Contact us on <a href="https://www.facebook.com/csaATUGA" target="_blank">Facebook</a>, <a href="#" target="_blank">Twitter</a>, and <a href="http://weibo.com/u/3212988263" target="_blank">Weibo</a></strong>
		</div>	
	</div>
	<div class="address">
		<div class="address_resize">
			<div class="address1">
				The University of Georgia<br />
				Athens, GA<br />
				30605<br />
			</div>
			
			<div class="address2">
				The University of Georgia<br />
				Athens, GA<br />
				30605<br />
			</div>
			
			<div class="address3">
				The University of Georgia<br />
				Athens, GA<br />
				30605<br />
			</div>
		</div>	
	</div>
	<div class="copyright">
		<div class="copyright_resize" align="right">
			<strong id="copyrightText">&copyCopyright Reserved by UGACSA. </strong>
		</div>
	</div>
	<div class="foot"></div>
</div>

	
</body>

</html>