<?php
	require_once("connect.php");
	
	$id = $_GET['id'];
	$sql = "SELECT * FROM Event order by id desc";
	$query = mysql_query($sql);
	
	$sqlDetail = "SELECT * FROM Event WHERE id=$id";
	$queryDetail = mysql_query($sqlDetail);
	
	$detailData = mysql_fetch_assoc($queryDetail);
	
	if ($query&&mysql_num_rows($query)){
		while($row = mysql_fetch_assoc($query)){
			$data[]=$row;
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>活动中心 | 详情 | <?php echo $detailData['title']; ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset = UTF-8"/>
    <link rel="stylesheet" type="text/css" href="css/eventsStyle.css">
<link rel="stylesheet" type="text/css" href="datatable/media/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="datatable/examples/resources/syntax/shCore.css">

	<style type="text/css" class="init">

	</style>
	<script type="text/javascript" language="javascript" src="datatable/media/js/jquery.js"></script>
	<script type="text/javascript" language="javascript" src="datatable/media/js/jquery.dataTables.js"></script>
	<script type="text/javascript" language="javascript" src="datatable/examples/resources/syntax/shCore.js"></script>
	<script type="text/javascript" language="javascript" src="datatable/examples/resources/demo.js"></script>
	<script type="text/javascript" language="javascript" class="init">


$(document).ready(function() {
	$('#example').dataTable({
		searching: false,
		ordering: false,
		"lengthMenu":[16],
		"lengthChange": false
	});
} );


	</script></head>
<body>
<div class="header">

	<a href="home.php"><img src="img/logoFixed.png" id="logo"/></a>
	
	<h1 id="CHNtitle" style="font-family: chinese">佐治亚大学中国学生学者联谊会</h1>
	<h2 id="ENGtitle">CHINESE STUDENT ASSOCIATION AT THE UNIVERSITY OF GEORGIA</h2>

	<form action="http://www.google.com/search" method="get" target="_blank">
		<input name="sitesearch" value="ugacsa.com/*" type="hidden">
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
		<li><a href="news.php"><span>新闻<br/>News</span></a></li>
		<li class="active"><a href="events.php"><span>活动<br/>Events</span></a></li>
		<li><a href="us.php"><span>我们<br/>Us</span></a></li>
		<li><a href="guide.php"><span>指南<br/>Guide</span></a></li>
		<li><a href="cooperation.php"><span>合作<br/>Cooperation</span></a></li>
		<li><a href="http://bbs.ugacsa.com" target="_blank"><span>论坛<br/>BBS</span></a></li>
	</ul>		
	</div>
</div>

<div class="content">
	<div class="content_resize">
	<div class="eventsList">
		<div class="container">

			
			
			<table id="example" class="display" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th>活动</th>
					</tr>
				</thead>

				<tfoot>
					
				</tfoot>

				<tbody>
					<?php 
				if(!empty($data)){
					foreach($data as $value){
			?>
			<tr><td><a href="eventDetail.php?id=<?php echo $value['id']; ?>"><?php echo $value['title']; ?></a></td></tr>
			<?php
					}
				}
			?>



				</tbody>
			</table>
	</div>
		<div class="newsSubscriber">
			<div class="snsIcon">
				<a href="https://www.facebook.com/csaATUGA" target="_blank"><img src="img/fb.gif" /></a>
				<a href="http://page.renren.com/670000616?checked=true" target="_blank"><img src="img/renren.png" /></a>
				<a href="http://weibo.com/u/3212988263" target="_blank"><img src="img/weibo.png" /></a>
			</div>
		
			<form action="subscribe.php" method="POST">
				<input id="subscriber" />
				<input id="submit" type="submit" value="SUBMIT" />
			</form>
			
		</div>
	</div>
	<div class="eventsDetail">
		
		<div class="eventsDetailContent">
				
				<strong><?php echo $detailData['title']; ?></strong>
				<br/>
				<strong>日期: <?php echo $detailData['date']; ?></strong>
				<br />
				<strong>主办者: <?php echo $detailData['holder']; ?>
				<br />
				<strong>地点: <?php echo $detailData['place']; ?></strong>
				<p style="font-size:14px; line-height:21px;"><?php echo $detailData['detail']; ?></p> 
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