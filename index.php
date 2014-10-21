<!Design by Xian Wu>
<html>
<head>
	<title>佐治亚大学中国学生学者联谊会</title>
	<link rel="stylesheet" type="text/css" href="assets/css/indexStyle.css"/>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-16"/>
</head>
<body>
<script type="text/javascript">
	function clock() {
		var time = new Date();
		var weekday = ["星期日", "星期一", "星期二", "星期三", "星期四", "星期五", "星期六"];
		utc = time.getTime() + (time.getTimezoneOffset() * 60000);
		var CHN = new Date(utc + (3600000 * 8));
		CHNtime = CHN.toLocaleString();
		ESTtime = time.toLocaleString();


		document.getElementById("ESTclock").value = "美国东岸时间: " + ESTtime + " " + weekday[time.getDay()];
		document.getElementById("CHNclock").value = "中国时间: " + CHNtime + " " + weekday[CHN.getDay()];
	}
	setInterval(clock, 1000);
</script>
<div class="login" style="position: fixed; top:0px; right: 0px;">
	<a href="../admin/login.php" style="color:white;">管理员后台登陆</a>
</div>
<div class="dateNtime">

	<div class="ESTtime">
		<form>
			<input type="text" id="ESTclock" size="50" readonly="true"/>
		</form>
	</div>
	<div class="CHNtime">
		<form>
			<input type="text" id="CHNclock" size="200" readonly="true"/>
		</form>
	</div>
</div>
<div class="titleCHN">
	<img src="assets/img/titleCHN.png"/>
</div>

<div class="titleENG">
	<img src="assets/img/titleENG.png"/>
</div>

<div class="indexMenu">
	<div class="homepage">
		<a href="home.php"><img src="assets/img/homepage.png"/></a>
	</div>
	<div class="bbs">
		<a href="http://bbs.ugacsa.com"><img src="assets/img/bbs.png"/></a>
	</div>

</div>
<div class="logo">
</div>


</body>
</html>