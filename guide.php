<?php
	require_once("connect.php");
	
	$linkSql = "SELECT * FROM Links order by id desc";
	$linkQuery = mysql_query($linkSql);
	$linkCount = 0;
	if ($linkQuery && mysql_num_rows($linkQuery)){
		while($linkRow = mysql_fetch_assoc($linkQuery)){
			$linkData[]= $linkRow;
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>乔治亚大学中国学生学者联合会 | 主页</title>
	<meta http-equiv="Content-Type" content="text/html; charset = UTF-8"/>
    <link rel="stylesheet" type="text/css" href="css/usStyle.css">
</head>
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
		<li><a href="events.php"><span>活动<br/>Events</span></a></li>
		<li><a href="us.php"><span>我们<br/>Us</span></a></li>
		<li class="active"><a href="guide.php"><span>指南<br/>Guide</span></a></li>
		<li><a href="cooperation.php"><span>合作<br/>Cooperation</span></a></li>
		<li><a href="http://bbs.ugacsa.com" target="_blank"><span>论坛<br/>BBS</span></a></li>
	</ul>		
	</div>
</div>

<div class="content">
	
	<h2 align="center">指南文件:</h2>
	<ul type="disc" style="margin-right:auto; margin-left:auto;width:150px;">
		<li><a href="file/immu.pdf" target="_blank">疫苗&体检</a></li>
		<li><a href="file/fees.pdf" target="_blank">缴费和汇款</a></li>
		<li><a href="file/CHIairport.pdf" target="_blank">芝加哥机场攻略</a></li>
		<li><a href="file/beforeyougo.pdf" target="_blank">行前清单</a></li>
		<li><a href="file/preparation.pdf" target="_blank">飞跃及相关准备</a></li>
	</ul>
	<h2 align="center">常用网站:</h2>
	
	<?php
		if(empty($linkData)){
				echo("未找到链接");
		}
		else{
			foreach($linkData as $linkValue){
		
	?>
	<ul type="disc" style="margin-right:auto; margin-left:auto;width:150px;">
		<li><a href="<?php echo $linkValue['link'] ?>" target="_blank"><?php echo $linkValue["title"]?></a></li>
	</ul>
	<?php
			}
		}
	?>
	
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