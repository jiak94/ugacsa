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
		<li class="active"><a href="us.php"><span>我们<br/>Us</span></a></li>
		<li><a href="#"><span>指南<br/>Guide</span></a></li>
		<li><a href="cooperation.php"><span>合作<br/>Cooperation</span></a></li>
		<li><a href="http://bbs.ugacsa.com" target="_blank"><span>论坛<br/>BBS</span></a></li>
	</ul>		
	</div>
</div>

<div class="content">
	<img src="img/arch.png" id="arch" />
	<div class="content_resize">
	<div class="leftPart">
		<div class="usList">
			<div id="about">
				<a href="#" id="aboutUs" 
				onclick="
				document.getElementById('aboutUs').style.color='white';
				document.getElementById('about').style.backgroundColor='rgb(201,201,201)';
				document.getElementById('contactUs').style.color='black';
				document.getElementById('contact').style.backgroundColor='transparent';
				document.getElementById('joinUs').style.color='black';
				document.getElementById('join').style.backgroundColor='transparent';
				document.getElementById('committeeMembers').style.color='black';
				document.getElementById('committee').style.backgroundColor='transparent';
				aboutUs();
				">About Us</a><br>	
			</div>
			<div id="committee">
				<a href="#" id="committeeMembers" 
				onclick="
				document.getElementById('committeeMembers').style.color='white';
				document.getElementById('committee').style.backgroundColor='rgb(201,201,201)';
				document.getElementById('aboutUs').style.color='black';
				document.getElementById('about').style.backgroundColor='transparent';
				document.getElementById('contactUs').style.color='black';
				document.getElementById('contact').style.backgroundColor='transparent';
				document.getElementById('joinUs').style.color='black';
				document.getElementById('join').style.backgroundColor='transparent';
				committee();
				">Committee</a><br>
				
			</div>
			<div id="contact">	
				<a href="#" id="contactUs"
				onclick="
				document.getElementById('aboutUs').style.color='black';
				document.getElementById('about').style.backgroundColor='transparent';
				document.getElementById('contactUs').style.color='white';
				document.getElementById('contact').style.backgroundColor='rgb(201,201,201)';
				document.getElementById('joinUs').style.color='black';
				document.getElementById('join').style.backgroundColor='transparent';
				document.getElementById('committeeMembers').style.color='black';
				document.getElementById('committee').style.backgroundColor='transparent';
				contactUs();
				">Contact Us</a><br>
			</div>
			<div id="join">	
				<a href="#" id="joinUs"
				onclick="
				document.getElementById('aboutUs').style.color='black';
				document.getElementById('about').style.backgroundColor='transparent';
				document.getElementById('contactUs').style.color='black';
				document.getElementById('contact').style.backgroundColor='transparent';
				document.getElementById('joinUs').style.color='white';
				document.getElementById('join').style.backgroundColor='rgb(201,201,201)';
				document.getElementById('committeeMembers').style.color='black';
				document.getElementById('committee').style.backgroundColor='transparent';
				joinUs();
				">Join Us</a>
			</div>
			<div id="constitution">
				<a href="file/constitution.pdf" target="_blank">Constitution</a>
			</div>
				<script>
					function contactUs(){
						document.getElementById("pic").innerHTML = "";
						document.getElementById("EngUs").innerHTML = "Contact Us";
						document.getElementById("ChnUs").innerHTML = "联系我们";
						document.getElementById("usContent").innerHTML = "<p>Chinese Student Association at UGA</p><p>229E Memorial Hall</p><p>The University of Goergia</p><p>Athens, GA 30602</p><a href='mailto:china@uga.edu' style='color:blue'>china@uga.edu</a>";
					}
					
					function joinUs(){
						document.getElementById("usContent").innerHTML = "<strong>Join Our Listserve:</strong><p>Step 1: 点击网址 <a href = 'https://listserv.uga.edu/cgi-bin/wa?INDEX=&p=8' target='_blank'> https://listserv.uga.edu/cgi-bin/wa?INDEX=&p=8</a>, 找到名为“SUC”的list，list title为China;</p><p>Step 2: 点击SUC，在SUC的Home Page中，右侧“Options”一栏找到”Subscribe or Unsubscribe”并点击;</p><p>Step 3:在新打开的页面中输入您的姓名（in English）及邮箱地址（其余选项保持默认），并点击”Subscribe (SUC)”;</p><p>Step 4:请在您输入的邮箱中，找到UGA LISTSERV Server发来的确认邮件，并点击邮件中的链接确认即可加入。</p>";
						document.getElementById("EngUs").innerHTML = "Join Us";
						document.getElementById("ChnUs").innerHTML = "加入我们";
						document.getElementById("pic").innerHTML = "";
					}
					
					function aboutUs(){
						document.getElementById("usContent").innerHTML = "<strong>Our Mission: </strong><br><p>To promote communication and friendship, social and career development, within the Chinese community;</p><p>To facilitate communication and friendship between the Chinese community and friends in local community;</p><p>To promote Chinese culture and awareness of the modern China;</p><p>To facilitate the adjustment of incoming and current Chinese students to American life and culture;</p>";
						document.getElementById("pic").innerHTML = "<img id='usPic' style='width:530px; height:auto;' src='img/usPic.JPG' />";
						document.getElementById("EngUs").innerHTML = "About Us";
						document.getElementById("ChnUs").innerHTML = "关于我们";
					}
					function committee(){
						document.getElementById("usContent").innerHTML = "<table border='2' style='width:500px;border-collapse:collapse;'><tr><td>主席<br>President</td><td>王金承<br>Jincheng Wang</td><td>Ph.D Student<br>Toxicology</td></tr><tr><td>财务官<br>Treasure</td><td>杨映雪<br>Yingxue Yang</td><td>Master Student<br>Financial</td></tr><tr><td>顾问<br>Senior Advisor</td><td>张司<br>Si Zhang</td><td>Ph.D. Student<br>Plant Science</td></tr><tr><td>副主席<br>Vice President</td><td>李舟洋<br>Anna Li</td><td>Senior<br>Marketing</td></tr><tr><td>副主席<br>Vice President</td><td>罗月婷<br>Yueting Luo</td><td>Junior<br>Financial</td></tr><tr><td>副主席<br>Vice President</td><td>叶书杨<br>Shuyang Ye</td><td>Junior<br>Phycology & Statistics</td></tr><tr><td>Office of Internal Affairs</td><td>李舟洋<br>Anna Li</td><td>Senior<br>Marketing</td></tr><tr><td></td><td>秦腾芳<br>Tengfang Qin</td><td>Junior<br>Accounting</td></tr><tr><td></td><td>张依雪<br>Yixue Zhang</td><td>Sophomore<br>Environmental Health Science</td></tr><tr><td>Office of Public Relations</td><td>罗月婷<br>Yueting Luo</td><td>Junior<br>Financial</td></tr><tr><td></td><td>李秋慧<br>Qiuhui Li</td><td>Junior<br>Advertising</td></tr><tr><td></td><td>张众喆<br>Zhongzhe Zhang</td><td>Sophomore<br>Mathematics</td></tr><tr><td>Office of Strategic Planning and Design</td><td>叶书杨<br>Shuyang Ye</td><td>Junior<br>Phycology & Statistics</td></tr><tr><td></td><td>石耀文 <br>Walden Shi</td><td>Master Student<br>Environmental Design</td></tr><tr><td></td><td>侯思宇<br>Siyu Hou</td><td>Junior<br>Environmental Design</td></tr><tr><td></td><td>赵晏立<br>Yanli Zhao</td><td>Sophomore<br>Environmental Design</td></tr><tr><td></td><td>全乐谊<br>Leyi Quan</td><td>Sophomore<br>Accounting & Mathematics</td></tr><tr><td></td><td>李嘉宽<br>Jiakuan Li</td><td>Junior<br>Computer Science</td></tr><tr><td></td><td>谭戈<br>Michael Tan</td><td>Senior<br>Computer Science</td></tr> </table>";
						document.getElementById("pic").innerHTML = "";
						document.getElementById("EngUs").innerHTML = "Committee";
						document.getElementById("ChnUs").innerHTML = "学生会成员";
					}
				</script>	
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
	<div class="rightPart">
		
		<div class="rightPartDetailContent">
			<div id="pic">
				<img id="usPic" style="width:530px; height:auto;" src="img/usPic.JPG" />
			</div>
				<h2 id="EngUs">About Us<h2>

				<h2 id="ChnUs" style="color: red">关于我们</h2>
				<div class="us" id="usContent">
				<strong>Our Mission: </strong><br>
				<p>To promote communication and friendship, social and career development, within the Chinese community;</p>
				<p>To facilitate communication and friendship between the Chinese community and friends in local community;</p>
				<p>To promote Chinese culture and awareness of the modern China;</p>
				<p>To facilitate the adjustment of incoming and current Chinese students to American life and culture.</p>
				</div>		
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