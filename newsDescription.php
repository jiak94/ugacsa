<?php
require_once("connect.php");

$id = $_GET['id'];

$description = "select * from Article WHERE id=$id";

$queryDescription = mysql_query($description);

$dataDescription = mysql_fetch_assoc($queryDescription);

$sql = "select * from Article order by id desc";

$query = mysql_query($sql);

if ($query && mysql_num_rows($query)) {
	while ($row = mysql_fetch_assoc($query)) {
		$data[] = $row;
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>新闻中心 | 详情 |<?php echo $dataDescription['title']; ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset = UTF-8"/>
	<link rel="stylesheet" type="text/css" href="assets/css/usStyle.css">
	<link rel="stylesheet" type="text/css" href="app/datatable/media/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="app/datatable/examples/resources/syntax/shCore.css">

	<style type="text/css" class="init">

	</style>
	<script type="text/javascript" language="javascript" src="app/datatable/media/js/jquery.js"></script>
	<script type="text/javascript" language="javascript" src="app/datatable/media/js/jquery.dataTables.js"></script>
	<script type="text/javascript" language="javascript"
	        src="app/datatable/examples/resources/syntax/shCore.js"></script>
	<script type="text/javascript" language="javascript" src="app/datatable/examples/resources/demo.js"></script>
	<script type="text/javascript" language="javascript" class="init">


		$(document).ready(function () {
			$('#example').dataTable({
				searching: false,
				ordering: false,
				"lengthMenu": [16],
				"lengthChange": false
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
		<input onfocus="if( this.value=='Search CSA') {this.value='' };" size="25" name="q" id="searchBox"
		       value="Search CSA" type="text">
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
			<div class="container">


				<table id="example" class="display" cellspacing="0" width="100%">
					<thead>
					<tr>
						<th>新闻</th>
					</tr>
					</thead>

					<tfoot>

					</tfoot>

					<tbody>
					<?php
					if (!empty($data)) {
						foreach ($data as $value) {
							?>
							<tr>
								<td><a id="title"
								       href="newsDescription.php?id=<?php echo $value['id']; ?>"><?php echo $value['title']; ?></a>
								</td>
							</tr>
						<?php
						}
					}
					?>


					</tbody>
				</table>
			</div>
			<div class="newsSubscriber">
				<div class="snsIcon">
					<a href="https://www.facebook.com/csaATUGA" target="_blank"><img src="assets/img/fb.gif"/></a>
					<a href="http://page.renren.com/670000616?checked=true" target="_blank"><img
							src="assets/img/renren.png"/></a>
					<a href="http://weibo.com/u/3212988263" target="_blank"><img src="assets/img/weibo.png"/></a>
				</div>

				<form action="subscribe.php" method="POST">
					<input id="subscriber"/>
					<input id="submit" type="submit" value="SUBMIT"/>
				</form>

			</div>
		</div>
		<div class="rightPart">
			<!--div class="rightPartDetailContent"-->
			<div style="width:535px; height: auto;">
				<h1 align="center"><?PHP echo $dataDescription['title']; ?></h1>
				<strong style="font-size: 14px;"><?php echo $dataDescription['author']; ?></strong>
				<strong style="font-size: 14px;"><?php echo date("Y-m-d", $dataDescription['dateline']); ?></strong>
				<?php echo $dataDescription['content']; ?>
				<!--/div-->
			</div>
		</div>
	</div>
</div>

<div class="footer">
	<div class="sns">
		<div class="sns_resize" align="center">
			<strong id="snsText">Contact us on <a href="https://www.facebook.com/csaATUGA" target="_blank">Facebook</a>,
				<a href="#" target="_blank">Twitter</a>, and <a href="http://weibo.com/u/3212988263" target="_blank">Weibo</a></strong>
		</div>
	</div>
	<div class="address">
		<div class="address_resize">
			<div class="address1">
				The University of Georgia<br/>
				Athens, GA<br/>
				30605<br/>
			</div>

			<div class="address2">
				The University of Georgia<br/>
				Athens, GA<br/>
				30605<br/>
			</div>

			<div class="address3">
				The University of Georgia<br/>
				Athens, GA<br/>
				30605<br/>
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