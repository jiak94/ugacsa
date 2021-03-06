<?php
require_once("connect.php");
$sql = "SELECT * from Article WHERE isRelease = '1' order by dateline desc";
$query = mysql_query($sql);
$count = 0;
if ($query && mysql_num_rows($query)) {
	while ($row = mysql_fetch_assoc($query)) {
		$data[] = $row;
	}
}

$linkSql = "SELECT * FROM Links";
$linkQuery = mysql_query($linkSql);
$linkCount = 0;
if ($linkQuery && mysql_num_rows($linkQuery)) {
	while ($linkRow = mysql_fetch_assoc($linkQuery)) {
		$linkData[] = $linkRow;
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>佐治亚大学中国学生学者联谊会 | 主页</title>
	<meta http-equiv="Content-Type" content="text/html; charset = UTF-8"/>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<body>
<div class="header">

	<a href="home.php"><img src="assets/img/logoFixed.png" id="logo"/></a>

	<h1 id="CHNtitle" style="font-family: chinese;">佐治亚大学中国学生学者联谊会</h1>

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
			<li><a href="news.php"><span>新闻<br/>News</span></a></li>
			<li><a href="events.php"><span>活动<br/>Events</span></a></li>
			<li><a href="us.php"><span>我们<br/>Us</span></a></li>
			<li><a href="guide.php"><span>指南<br/>Guide</span></a></li>
			<li><a href="cooperation.php"><span>合作<br/>Cooperation</span></a></li>
			<li><a href="http://bbs.ugacsa.com" target="_blank"><span>论坛<br/>BBS</span></a></li>
		</ul>
	</div>
</div>
<style>
	.captionOrange, .captionBlack {
		color: #fff;
		font-size: 20px;
		line-height: 30px;
		text-align: center;
		border-radius: 4px;
	}

	.captionOrange {
		background-color: gray;
		filter: alpha(Opacity=30);
		-moz-opacity: 0.7;
		opacity: 0.7;
	}

	.captionBlack {
		font-size: 16px;
		background: #000;
		background-color: rgba(0, 0, 0, 0.4);
	}

	a.captionOrange, A.captionOrange:active, A.captionOrange:visited {
		color: #ffffff;
		text-decoration: none;
	}

	a.captionOrange:hover {
		color: #eb5100;
		text-decoration: underline;
		background-color: #eeeeee;
		background-color: rgba(238, 238, 238, 0.7);
	}
</style>
<!-- use jssor.slider.min.js instead for release -->
<!-- jssor.slider.min.js = (jssor.core.js + jssor.utils.js + jssor.slider.js) -->
<script type="text/javascript" src="assets/js/jssor.core.js"></script>
<script type="text/javascript" src="assets/js/jssor.utils.js"></script>
<script type="text/javascript" src="assets/js/jssor.slider.js"></script>
<script>
	jssor_slider1_starter = function (containerId) {
		//Reference http://www.jssor.com/development/slider-with-slideshow-no-jquery.html
		//Reference http://www.jssor.com/development/tool-slideshow-transition-viewer.html


		var _SlideshowTransitions = [
			//["Rotate Overlap"]
			{
				$Duration: 1200,
				$Zoom: 11,
				$Rotate: -1,
				$Easing: {
					$Zoom: $JssorEasing$.$EaseInQuad,
					$Opacity: $JssorEasing$.$EaseLinear,
					$Rotate: $JssorEasing$.$EaseInQuad
				},
				$Opacity: 2,
				$Round: {$Rotate: 0.5},
				$Brother: {
					$Duration: 1200,
					$Zoom: 1,
					$Rotate: 1,
					$Easing: $JssorEasing$.$EaseSwing,
					$Opacity: 2,
					$Round: {$Rotate: 0.5},
					$Shift: 90
				}
			}
			//["Switch"]
			, {
				$Duration: 1400,
				$Zoom: 1.5,
				$FlyDirection: 1,
				$Easing: {$Left: $JssorEasing$.$EaseInWave, $Zoom: $JssorEasing$.$EaseInSine},
				$ScaleHorizontal: 0.25,
				$Opacity: 2,
				$ZIndex: -10,
				$Brother: {
					$Duration: 1400,
					$Zoom: 1.5,
					$FlyDirection: 2,
					$Easing: {$Left: $JssorEasing$.$EaseInWave, $Zoom: $JssorEasing$.$EaseInSine},
					$ScaleHorizontal: 0.25,
					$Opacity: 2,
					$ZIndex: -10
				}
			}
			//["Rotate Relay"]
			, {
				$Duration: 1200,
				$Zoom: 11,
				$Rotate: 1,
				$Easing: {$Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad},
				$Opacity: 2,
				$Round: {$Rotate: 1},
				$ZIndex: -10,
				$Brother: {
					$Duration: 1200,
					$Zoom: 11,
					$Rotate: -1,
					$Easing: {$Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad},
					$Opacity: 2,
					$Round: {$Rotate: 1},
					$ZIndex: -10,
					$Shift: 600
				}
			}
			//["Doors"]
			, {
				$Duration: 1500,
				$Cols: 2,
				$FlyDirection: 1,
				$ChessMode: {$Column: 3},
				$Easing: {$Left: $JssorEasing$.$EaseInOutCubic},
				$ScaleHorizontal: 0.5,
				$Opacity: 2,
				$Brother: {$Duration: 1500, $Opacity: 2}
			}
			//["Rotate in+ out-"]
			, {
				$Duration: 1500,
				$Zoom: 1,
				$Rotate: 0.1,
				$During: {$Left: [0.6, 0.4], $Top: [0.6, 0.4], $Rotate: [0.6, 0.4], $Zoom: [0.6, 0.4]},
				$FlyDirection: 6,
				$Easing: {
					$Left: $JssorEasing$.$EaseInQuad,
					$Top: $JssorEasing$.$EaseInQuad,
					$Opacity: $JssorEasing$.$EaseLinear,
					$Rotate: $JssorEasing$.$EaseInQuad
				},
				$ScaleHorizontal: 0.3,
				$ScaleVertical: 0.5,
				$Opacity: 2,
				$Brother: {
					$Duration: 1000,
					$Zoom: 11,
					$Rotate: -0.5,
					$Easing: {$Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad},
					$Opacity: 2,
					$Shift: 200
				}
			}
			//["Fly Twins"]
			, {
				$Duration: 1500,
				$During: {$Left: [0.6, 0.4]},
				$FlyDirection: 1,
				$Easing: {$Left: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseLinear},
				$ScaleHorizontal: 0.3,
				$Opacity: 2,
				$Outside: true,
				$Brother: {
					$Duration: 1000,
					$FlyDirection: 2,
					$Easing: {$Left: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseLinear},
					$ScaleHorizontal: 0.3,
					$Opacity: 2
				}
			}
			//["Rotate in- out+"]
			, {
				$Duration: 1500,
				$Zoom: 11,
				$Rotate: 0.5,
				$During: {$Left: [0.4, 0.6], $Top: [0.4, 0.6], $Rotate: [0.4, 0.6], $Zoom: [0.4, 0.6]},
				$Easing: {$Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad},
				$ScaleHorizontal: 0.3,
				$ScaleVertical: 0.5,
				$Opacity: 2,
				$Brother: {
					$Duration: 1000,
					$Zoom: 1,
					$Rotate: -0.5,
					$Easing: {$Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad},
					$Opacity: 2,
					$Shift: 200
				}
			}
			//["Rotate Axis up overlap"]
			, {
				$Duration: 1200,
				$Rotate: -0.1,
				$FlyDirection: 5,
				$Easing: {
					$Left: $JssorEasing$.$EaseInQuad,
					$Top: $JssorEasing$.$EaseInQuad,
					$Opacity: $JssorEasing$.$EaseLinear,
					$Rotate: $JssorEasing$.$EaseInQuad
				},
				$ScaleHorizontal: 0.25,
				$ScaleVertical: 0.5,
				$Opacity: 2,
				$Brother: {
					$Duration: 1200,
					$Rotate: 0.1,
					$FlyDirection: 10,
					$Easing: {
						$Left: $JssorEasing$.$EaseInQuad,
						$Top: $JssorEasing$.$EaseInQuad,
						$Opacity: $JssorEasing$.$EaseLinear,
						$Rotate: $JssorEasing$.$EaseInQuad
					},
					$ScaleHorizontal: 0.1,
					$ScaleVertical: 0.7,
					$Opacity: 2
				}
			}
			//["Chess Replace TB"]
			, {
				$Duration: 1600,
				$Rows: 2,
				$FlyDirection: 1,
				$ChessMode: {$Row: 3},
				$Easing: {$Left: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear},
				$Opacity: 2,
				$Brother: {
					$Duration: 1600,
					$Rows: 2,
					$FlyDirection: 2,
					$ChessMode: {$Row: 3},
					$Easing: {$Left: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear},
					$Opacity: 2
				}
			}
			//["Chess Replace LR"]
			, {
				$Duration: 1600,
				$Cols: 2,
				$FlyDirection: 8,
				$ChessMode: {$Column: 12},
				$Easing: {$Top: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear},
				$Opacity: 2,
				$Brother: {
					$Duration: 1600,
					$Cols: 2,
					$FlyDirection: 4,
					$ChessMode: {$Column: 12},
					$Easing: {$Top: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear},
					$Opacity: 2
				}
			}
			//["Shift TB"]
			, {
				$Duration: 1200,
				$FlyDirection: 4,
				$Easing: {$Top: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear},
				$Opacity: 2,
				$Brother: {
					$Duration: 1200,
					$FlyDirection: 8,
					$Easing: {$Top: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear},
					$Opacity: 2
				}
			}
			//["Shift LR"]
			, {
				$Duration: 1200,
				$FlyDirection: 1,
				$Easing: {$Left: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear},
				$Opacity: 2,
				$Brother: {
					$Duration: 1200,
					$FlyDirection: 2,
					$Easing: {$Left: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear},
					$Opacity: 2
				}
			}
			//["Return TB"]
			, {
				$Duration: 1200,
				$FlyDirection: 8,
				$Easing: {$Top: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear},
				$Opacity: 2,
				$ZIndex: -10,
				$Brother: {
					$Duration: 1200,
					$FlyDirection: 8,
					$Easing: {$Top: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear},
					$Opacity: 2,
					$ZIndex: -10,
					$Shift: -100
				}
			}
			//["Return LR"]
			, {
				$Duration: 1200,
				$Delay: 40,
				$Cols: 6,
				$FlyDirection: 1,
				$Formation: $JssorSlideshowFormations$.$FormationStraight,
				$Easing: {$Left: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear},
				$Opacity: 2,
				$ZIndex: -10,
				$Brother: {
					$Duration: 1200,
					$Delay: 40,
					$Cols: 6,
					$FlyDirection: 1,
					$Formation: $JssorSlideshowFormations$.$FormationStraight,
					$Easing: {$Top: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear},
					$Opacity: 2,
					$ZIndex: -10,
					$Shift: -100
				}
			}
			//["Rotate Axis down"]
			, {
				$Duration: 1500,
				$Rotate: 0.1,
				$During: {$Left: [0.6, 0.4], $Top: [0.6, 0.4], $Rotate: [0.6, 0.4]},
				$FlyDirection: 10,
				$Easing: {
					$Left: $JssorEasing$.$EaseInQuad,
					$Top: $JssorEasing$.$EaseInQuad,
					$Opacity: $JssorEasing$.$EaseLinear,
					$Rotate: $JssorEasing$.$EaseInQuad
				},
				$ScaleHorizontal: 0.1,
				$ScaleVertical: 0.7,
				$Opacity: 2,
				$Brother: {
					$Duration: 1000,
					$Rotate: -0.1,
					$FlyDirection: 5,
					$Easing: {
						$Left: $JssorEasing$.$EaseInQuad,
						$Top: $JssorEasing$.$EaseInQuad,
						$Opacity: $JssorEasing$.$EaseLinear,
						$Rotate: $JssorEasing$.$EaseInQuad
					},
					$ScaleHorizontal: 0.2,
					$ScaleVertical: 0.5,
					$Opacity: 2
				}
			}
			//["Extrude Replace"]
			, {
				$Duration: 1600,
				$Delay: 40,
				$Cols: 12,
				$During: {$Left: [0.4, 0.6]},
				$SlideOut: true,
				$FlyDirection: 2,
				$Formation: $JssorSlideshowFormations$.$FormationStraight,
				$Assembly: 260,
				$Easing: {$Left: $JssorEasing$.$EaseInOutExpo, $Opacity: $JssorEasing$.$EaseInOutQuad},
				$ScaleHorizontal: 0.2,
				$Opacity: 2,
				$Outside: true,
				$Round: {$Top: 0.5},
				$Brother: {
					$Duration: 1000,
					$Delay: 40,
					$Cols: 12,
					$FlyDirection: 1,
					$Formation: $JssorSlideshowFormations$.$FormationStraight,
					$Assembly: 1028,
					$Easing: {$Left: $JssorEasing$.$EaseInOutExpo, $Opacity: $JssorEasing$.$EaseInOutQuad},
					$ScaleHorizontal: 0.2,
					$Opacity: 2,
					$Round: {$Top: 0.5}
				}
			}
		];

		var _CaptionTransitions = [
			//CLIP|LR
			{$Duration: 900, $Clip: 3, $Easing: $JssorEasing$.$EaseInOutCubic},
			//CLIP|TB
			{$Duration: 900, $Clip: 12, $Easing: $JssorEasing$.$EaseInOutCubic},

			//DDGDANCE|LB
			{
				$Duration: 1800,
				$Zoom: 1,
				$FlyDirection: 9,
				$Easing: {
					$Left: $JssorEasing$.$EaseInJump,
					$Top: $JssorEasing$.$EaseInJump,
					$Zoom: $JssorEasing$.$EaseOutQuad
				},
				$ScaleHorizontal: 0.3,
				$ScaleVertical: 0.3,
				$Opacity: 2,
				$During: {$Left: [0, 0.8], $Top: [0, 0.8]},
				$Round: {$Left: 0.8, $Top: 2.5}
			},
			//DDGDANCE|RB
			{
				$Duration: 1800,
				$Zoom: 1,
				$FlyDirection: 10,
				$Easing: {
					$Left: $JssorEasing$.$EaseInJump,
					$Top: $JssorEasing$.$EaseInJump,
					$Zoom: $JssorEasing$.$EaseOutQuad
				},
				$ScaleHorizontal: 0.3,
				$ScaleVertical: 0.3,
				$Opacity: 2,
				$During: {$Left: [0, 0.8], $Top: [0, 0.8]},
				$Round: {$Left: 0.8, $Top: 2.5}
			},

			//TORTUOUS|HL
			{
				$Duration: 1500,
				$Zoom: 1,
				$FlyDirection: 1,
				$Easing: {$Left: $JssorEasing$.$EaseOutWave, $Zoom: $JssorEasing$.$EaseOutCubic},
				$ScaleHorizontal: 0.2,
				$Opacity: 2,
				$During: {$Left: [0, 0.7]},
				$Round: {$Left: 1.3}
			},
			//TORTUOUS|VB
			{
				$Duration: 1500,
				$Zoom: 1,
				$FlyDirection: 8,
				$Easing: {$Top: $JssorEasing$.$EaseOutWave, $Zoom: $JssorEasing$.$EaseOutCubic},
				$ScaleVertical: 0.2,
				$Opacity: 2,
				$During: {$Top: [0, 0.7]},
				$Round: {$Top: 1.3}
			},

			//ZMF|10
			{
				$Duration: 600,
				$Zoom: 11,
				$Easing: {$Zoom: $JssorEasing$.$EaseInExpo, $Opacity: $JssorEasing$.$EaseLinear},
				$Opacity: 2
			},

			//ZML|R
			{
				$Duration: 600,
				$Zoom: 11,
				$FlyDirection: 2,
				$Easing: {$Left: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic},
				$ScaleHorizontal: 0.6,
				$Opacity: 2
			},
			//ZML|B
			{
				$Duration: 600,
				$Zoom: 11,
				$FlyDirection: 8,
				$Easing: {$Top: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic},
				$ScaleVertical: 0.6,
				$Opacity: 2
			},

			//ZMS|B
			{
				$Duration: 700,
				$Zoom: 1,
				$FlyDirection: 8,
				$Easing: {$Top: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic},
				$ScaleVertical: 0.6,
				$Opacity: 2
			},

			//ZM*JDN|LB
			{
				$Duration: 1200,
				$Zoom: 11,
				$FlyDirection: 9,
				$Easing: {
					$Left: $JssorEasing$.$EaseLinear,
					$Top: $JssorEasing$.$EaseOutCubic,
					$Zoom: $JssorEasing$.$EaseInCubic
				},
				$ScaleHorizontal: 0.8,
				$ScaleVertical: 0.5,
				$Opacity: 2,
				$During: {$Top: [0, 0.5]}
			},
			//ZM*JUP|LB
			{
				$Duration: 1200,
				$Zoom: 11,
				$FlyDirection: 9,
				$Easing: {
					$Left: $JssorEasing$.$EaseLinear,
					$Top: $JssorEasing$.$EaseInCubic,
					$Zoom: $JssorEasing$.$EaseInCubic
				},
				$ScaleHorizontal: 0.8,
				$ScaleVertical: 0.5,
				$Opacity: 2,
				$During: {$Top: [0, 0.5]}
			},
			//ZM*JUP|RB
			{
				$Duration: 1200,
				$Zoom: 11,
				$FlyDirection: 10,
				$Easing: {
					$Left: $JssorEasing$.$EaseLinear,
					$Top: $JssorEasing$.$EaseInCubic,
					$Zoom: $JssorEasing$.$EaseInCubic
				},
				$ScaleHorizontal: 0.8,
				$ScaleVertical: 0.5,
				$Opacity: 2,
				$During: {$Top: [0, 0.5]}
			},

			//ZM*WVR|LT
			{
				$Duration: 1200,
				$Zoom: 11,
				$FlyDirection: 5,
				$Easing: {$Left: $JssorEasing$.$EaseLinear, $Top: $JssorEasing$.$EaseInWave},
				$ScaleHorizontal: 0.5,
				$ScaleVertical: 0.3,
				$Opacity: 2,
				$Round: {$Rotate: 0.8}
			},
			//ZM*WVR|RT
			{
				$Duration: 1200,
				$Zoom: 11,
				$FlyDirection: 6,
				$Easing: {$Left: $JssorEasing$.$EaseLinear, $Top: $JssorEasing$.$EaseInWave},
				$ScaleHorizontal: 0.5,
				$ScaleVertical: 0.3,
				$Opacity: 2,
				$Round: {$Rotate: 0.8}
			},
			//ZM*WVR|TL
			{
				$Duration: 1200,
				$Zoom: 11,
				$FlyDirection: 5,
				$Easing: {$Left: $JssorEasing$.$EaseInWave, $Top: $JssorEasing$.$EaseLinear},
				$ScaleHorizontal: 0.3,
				$ScaleVertical: 0.5,
				$Opacity: 2,
				$Round: {$Rotate: 0.8}
			},
			//ZM*WVR|BL
			{
				$Duration: 1200,
				$Zoom: 11,
				$FlyDirection: 9,
				$Easing: {$Left: $JssorEasing$.$EaseInWave, $Top: $JssorEasing$.$EaseLinear},
				$ScaleHorizontal: 0.3,
				$ScaleVertical: 0.5,
				$Opacity: 2,
				$Round: {$Rotate: 0.8}
			},

			//RTT|10
			{
				$Duration: 700,
				$Zoom: 11,
				$Rotate: 1,
				$Easing: {
					$Zoom: $JssorEasing$.$EaseInExpo,
					$Opacity: $JssorEasing$.$EaseLinear,
					$Rotate: $JssorEasing$.$EaseInExpo
				},
				$Opacity: 2,
				$Round: {$Rotate: 0.8}
			},

			//RTTL|R
			{
				$Duration: 700,
				$Zoom: 11,
				$Rotate: 1,
				$FlyDirection: 2,
				$Easing: {
					$Left: $JssorEasing$.$EaseInCubic,
					$Zoom: $JssorEasing$.$EaseInCubic,
					$Opacity: $JssorEasing$.$EaseLinear,
					$Rotate: $JssorEasing$.$EaseInCubic
				},
				$ScaleHorizontal: 0.6,
				$Opacity: 2,
				$Round: {$Rotate: 0.8}
			},
			//RTTL|B
			{
				$Duration: 700,
				$Zoom: 11,
				$Rotate: 1,
				$FlyDirection: 8,
				$Easing: {
					$Top: $JssorEasing$.$EaseInCubic,
					$Zoom: $JssorEasing$.$EaseInCubic,
					$Opacity: $JssorEasing$.$EaseLinear,
					$Rotate: $JssorEasing$.$EaseInCubic
				},
				$ScaleVertical: 0.6,
				$Opacity: 2,
				$Round: {$Rotate: 0.8}
			},

			//RTTS|R
			{
				$Duration: 700,
				$Zoom: 1,
				$Rotate: 1,
				$FlyDirection: 2,
				$Easing: {
					$Left: $JssorEasing$.$EaseInQuad,
					$Zoom: $JssorEasing$.$EaseInQuad,
					$Rotate: $JssorEasing$.$EaseInQuad,
					$Opacity: $JssorEasing$.$EaseOutQuad
				},
				$ScaleHorizontal: 0.6,
				$Opacity: 2,
				$Round: {$Rotate: 1.2}
			},
			//RTTS|B
			{
				$Duration: 700,
				$Zoom: 1,
				$Rotate: 1,
				$FlyDirection: 8,
				$Easing: {
					$Top: $JssorEasing$.$EaseInQuad,
					$Zoom: $JssorEasing$.$EaseInQuad,
					$Rotate: $JssorEasing$.$EaseInQuad,
					$Opacity: $JssorEasing$.$EaseOutQuad
				},
				$ScaleVertical: 0.6,
				$Opacity: 2,
				$Round: {$Rotate: 1.2}
			},

			//RTT*JDN|RT
			{
				$Duration: 1000,
				$Zoom: 11,
				$Rotate: .2,
				$FlyDirection: 6,
				$Easing: {
					$Left: $JssorEasing$.$EaseLinear,
					$Top: $JssorEasing$.$EaseOutCubic,
					$Zoom: $JssorEasing$.$EaseInCubic
				},
				$ScaleHorizontal: 0.8,
				$ScaleVertical: 0.5,
				$Opacity: 2,
				$During: {$Top: [0, 0.5]}
			},
			//RTT*JDN|LB
			{
				$Duration: 1000,
				$Zoom: 11,
				$Rotate: .2,
				$FlyDirection: 9,
				$Easing: {
					$Left: $JssorEasing$.$EaseLinear,
					$Top: $JssorEasing$.$EaseOutCubic,
					$Zoom: $JssorEasing$.$EaseInCubic
				},
				$ScaleHorizontal: 0.8,
				$ScaleVertical: 0.5,
				$Opacity: 2,
				$During: {$Top: [0, 0.5]}
			},
			//RTT*JUP|RB
			{
				$Duration: 1000,
				$Zoom: 11,
				$Rotate: .2,
				$FlyDirection: 10,
				$Easing: {
					$Left: $JssorEasing$.$EaseLinear,
					$Top: $JssorEasing$.$EaseInCubic,
					$Zoom: $JssorEasing$.$EaseInCubic
				},
				$ScaleHorizontal: 0.8,
				$ScaleVertical: 0.5,
				$Opacity: 2,
				$During: {$Top: [0, 0.5]}
			},
			{
				$Duration: 1200,
				$Zoom: 11,
				$Rotate: true,
				$FlyDirection: 6,
				$Easing: {
					$Left: $JssorEasing$.$EaseInCubic,
					$Top: $JssorEasing$.$EaseLinear,
					$Zoom: $JssorEasing$.$EaseInCubic
				},
				$ScaleHorizontal: 0.5,
				$ScaleVertical: 0.8,
				$Opacity: 2,
				$During: {$Left: [0, 0.5]},
				$Round: {$Rotate: 0.5}
			},
			//RTT*JUP|BR
			{
				$Duration: 1000,
				$Zoom: 11,
				$Rotate: .2,
				$FlyDirection: 10,
				$Easing: {
					$Left: $JssorEasing$.$EaseInCubic,
					$Top: $JssorEasing$.$EaseLinear,
					$Zoom: $JssorEasing$.$EaseInCubic
				},
				$ScaleHorizontal: 0.5,
				$ScaleVertical: 0.8,
				$Opacity: 2,
				$During: {$Left: [0, 0.5]}
			},

			//R|IB
			{
				$Duration: 900,
				$FlyDirection: 2,
				$Easing: {$Left: $JssorEasing$.$EaseInOutBack},
				$ScaleHorizontal: 0.6,
				$Opacity: 2
			},
			//B|IB
			{
				$Duration: 900,
				$FlyDirection: 8,
				$Easing: {$Top: $JssorEasing$.$EaseInOutBack},
				$ScaleVertical: 0.6,
				$Opacity: 2
			},

		];

		var options = {
			$AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
			$AutoPlaySteps: 1,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
			$AutoPlayInterval: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
			$PauseOnHover: 1,                               //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, default value is 1

			$ArrowKeyNavigation: true,                          //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
			$SlideDuration: 500,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
			$MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
			//$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
			//$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
			$SlideSpacing: 0,                                   //[Optional] Space between each slide in pixels, default value is 0
			$DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
			$ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
			$UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
			$PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
			$DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

			$SlideshowOptions: {                                //[Optional] Options to specify and enable slideshow or not
				$Class: $JssorSlideshowRunner$,                 //[Required] Class to create instance of slideshow
				$Transitions: _SlideshowTransitions,            //[Required] An array of slideshow transitions to play slideshow
				$TransitionsOrder: 1,                           //[Optional] The way to choose transition to play slide, 1 Sequence, 0 Random
				$ShowLink: true                                    //[Optional] Whether to bring slide link on top of the slider when slideshow is running, default value is false
			},

			$CaptionSliderOptions: {                            //[Optional] Options which specifies how to animate caption
				$Class: $JssorCaptionSlider$,                   //[Required] Class to create instance to animate caption
				$CaptionTransitions: _CaptionTransitions,       //[Required] An array of caption transitions to play caption, see caption transition section at jssor slideshow transition builder
				$PlayInMode: 1,                                 //[Optional] 0 None (no play), 1 Chain (goes after main slide), 3 Chain Flatten (goes after main slide and flatten all caption animations), default value is 1
				$PlayOutMode: 3                                 //[Optional] 0 None (no play), 1 Chain (goes before main slide), 3 Chain Flatten (goes before main slide and flatten all caption animations), default value is 1
			},

			$BulletNavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
				$Class: $JssorBulletNavigator$,                       //[Required] Class to create navigator instance
				$ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
				$AutoCenter: 1,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
				$Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
				$Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
				$SpacingX: 10,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
				$SpacingY: 10,                                   //[Optional] Vertical space between each item in pixel, default value is 0
				$Orientation: 1                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
			},

			$ArrowNavigatorOptions: {
				$Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
				$ChanceToShow: 1                                //[Required] 0 Never, 1 Mouse Over, 2 Always
			}
		};

		var jssor_slider1 = new $JssorSlider$(containerId, options);
		//responsive code begin
		//you can remove responsive code if you don't want the slider scales while window resizes

		//if (navigator.userAgent.match(/(iPhone|iPod|iPad)/)) {
		//    $JssorUtils$.$AddEvent(window, "orientationchange", ScaleSlider);
		//}
		//responsive code end
	};
</script>
<!-- Jssor Slider Begin -->
<!-- You can move inline styles to css file or css block. -->
<div class="slides" style="width:auto; height: 350px;background-color: rgb(9,9,10); min-width: 1000px;">

<div id="slider1_container"
     style="position: relative; width: 1000px; height: 350px; overflow: hidden;margin-left: auto; margin-right: auto">

	<!-- Loading Screen -->
	<div u="loading" style="position: absolute; top: 0px; left: 0px;">
		<div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
		</div>
		<div style="position: absolute; display: block; background: url(/assets/img/logo.png) no-repeat center center;
                top: 0px; left: 0px;width: 100%;height:100%;">
		</div>
	</div>

	<!-- Slides Container -->
	<div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px;; height: 350px;
            overflow: hidden;">
		<div>
			<a u=image href="#"><img src="assets/img/landscape/01.jpg"/></a>

			<div u=caption t="*" class="captionOrange"
			     style="position:absolute; left:630px; top: 0px; width:371px; height:350px;">
				<h1 style="font-size: 30px;">University of Georgia</h1>

				<p>University of Georgia was founded in 1785, a very long history in Georgia. Georgia as an indicator of
					the quality of an outstanding teacher of higher learning have.....</p>
			</div>
		</div>
		<div>
			<a u=image href="#"><img src="assets/img/landscape/02.jpg"/></a>

			<div u=caption t="*" class="captionOrange"
			     style="position:absolute; left:630px; top: 0px; width:371px; height:350px;">
				<h1 style="font-size: 30px;">University of Georgia</h1>

				<p>University of Georgia was founded in 1785, a very long history in Georgia. Georgia as an indicator of
					the quality of an outstanding teacher of higher learning have.....</p>
			</div>
		</div>
		<div>
			<a u=image href="#"><img src="assets/img/landscape/03.jpg"/></a>

			<div u=caption t="*" class="captionOrange"
			     style="position:absolute; left:630px; top: 0px; width:371px; height:350px;">
				<h1 style="font-size: 30px;">University of Georgia</h1>

				<p>University of Georgia was founded in 1785, a very long history in Georgia. Georgia as an indicator of
					the quality of an outstanding teacher of higher learning have.....</p>
			</div>
		</div>
		<div>
			<a u=image href="#"><img src="assets/img/landscape/04.jpg"/></a>

			<div u=caption t="*" class="captionOrange"
			     style="position:absolute; left:630px; top: 0px; width:371px; height:350px;">
				<h1 style="font-size: 30px;">University of Georgia</h1>

				<p>University of Georgia was founded in 1785, a very long history in Georgia. Georgia as an indicator of
					the quality of an outstanding teacher of higher learning have.....</p>
			</div>
		</div>
	</div>

	<!-- Bullet Navigator Skin Begin -->
	<!-- jssor slider bullet navigator skin 01 -->
	<style>
		/*
		.jssorb01 div           (normal)
		.jssorb01 div:hover     (normal mouseover)
		.jssorb01 .av           (active)
		.jssorb01 .av:hover     (active mouseover)
		.jssorb01 .dn           (mousedown)
		*/
		.jssorb01 div, .jssorb01 div:hover, .jssorb01 .av {
			filter: alpha(opacity=70);
			opacity: .7;
			overflow: hidden;
			cursor: pointer;
			border: #000 1px solid;
		}

		.jssorb01 div {
			background-color: gray;
		}

		.jssorb01 div:hover, .jssorb01 .av:hover {
			background-color: #d3d3d3;
		}

		.jssorb01 .av {
			background-color: #fff;
		}

		.jssorb01 .dn, .jssorb01 .dn:hover {
			background-color: #555555;
		}
	</style>
	<!-- bullet navigator container -->
	<div u="navigator" class="jssorb01" style="position: absolute; bottom: 16px; right: 10px;">
		<!-- bullet navigator item prototype -->
		<div u="prototype" style="POSITION: absolute; WIDTH: 12px; HEIGHT: 12px;"></div>
	</div>
	<!-- Bullet Navigator Skin End -->

	<!-- Arrow Navigator Skin Begin -->
	<style>
		/* jssor slider arrow navigator skin 05 css */
		/*
		.jssora05l              (normal)
		.jssora05r              (normal)
		.jssora05l:hover        (normal mouseover)
		.jssora05r:hover        (normal mouseover)
		.jssora05ldn            (mousedown)
		.jssora05rdn            (mousedown)
		*/
		.jssora05l, .jssora05r, .jssora05ldn, .jssora05rdn {
			position: absolute;
			cursor: pointer;
			display: block;
			background: url(/assets/img/a11.png) no-repeat;
			overflow: hidden;
		}

		.jssora05l {
			background-position: -10px -40px;
		}

		.jssora05r {
			background-position: -70px -40px;
		}

		.jssora05l:hover {
			background-position: -130px -40px;
		}

		.jssora05r:hover {
			background-position: -190px -40px;
		}

		.jssora05ldn {
			background-position: -250px -40px;
		}

		.jssora05rdn {
			background-position: -310px -40px;
		}
	</style>
	<!-- Arrow Left -->
        <span u="arrowleft" class="jssora05l" style="width: 40px; height: 40px; top: 123px; left: 8px;">
        </span>
	<!-- Arrow Right -->
        <span u="arrowright" class="jssora05r" style="width: 40px; height: 40px; top: 123px; right: 8px">
        </span>
	<!-- Arrow Navigator Skin End -->
	<a style="display: none" href="http://www.jssor.com">slideshow</a>
	<!-- Trigger -->
	<script>
		jssor_slider1_starter('slider1_container');
	</script>
</div>
<!-- Jssor Slider End -->
<div class="content">
	<div class="arch">
		<img src="assets/img/arch.png"/>
	</div>
	<div class="contentContainer" style="width: 975px; height:345px; margin-left: auto; margin-right:auto;">
		<div class="news">
			<div class="banner"></div>
			<div class="newsTitle">
				<strong>News</strong>
				<a href="news.php">More</a>
			</div>
			<?php
			if (empty($data)) {
				echo("当前没有文章");
			} else {
				foreach ($data as $value) {
					$count++;
					if ($count == 6) {
						?>
						<div class="newsContent" id="newsLast">
							<br>
							<a href="newsDetail.php?id=<?php echo $value['id']; ?>"
							   style="margin-left:50px;"><? echo($value["title"]); ?></a>
						</div>
						<?
						break;
					}
					?>
					<div class="newsContent">
						<br>
						<a href="newsDetail.php?id=<?php echo $value['id']; ?>"
						   style="margin-left:50px;"><?php echo($value["title"]); ?></a>
					</div>
				<?php
				}
			}
			?>

			<div class="newsContent" id="newsLast">

			</div>
		</div>


		<div class="bbs">
			<div class="banner"></div>
			<div class="bbsTitle">
				<strong>BBS</strong>
				<a href="http://bbs.ugacsa.com" target="_blank">More</a>
			</div>
			<div class="bbsContent">
				<script type="text/javascript" src="http://bbs.ugacsa.com/api.php?mod=js&bid=3"></script>
			</div>
			<div class="bbsContent">

			</div>
			<div class="bbsContent">

			</div>
			<div class="bbsContent">

			</div>
			<div class="bbsContent">

			</div>
			<div class="bbsContent" id="bbsLast">

			</div>

		</div>


		<div class="link">
			<div class="banner"></div>
			<div class="linkTitle">
				<strong>Resources</strong>
				<a href="guide.php">More</a>
			</div>
			<?php
			if (empty($linkData)) {
				echo("当前没有信息");
			} else {
				foreach ($linkData as $linkValue) {
					$linkCount++;
					if ($linkCount == 6) {
						?>
						<div class="linkContent" id="linkLast">
							<br>
							<a href="<?php echo $linkValue['link']; ?>" target="_blank"
							   style="margin-left:50px;"><? echo($linkValue["title"]); ?></a>
						</div>
						<?
						break;
					}
					?>
					<div class="linkContent">
						<br>
						<a href="<?php echo $linkValue['link']; ?>" target="_blank"
						   style="margin-left:50px;"><?php echo($linkValue["title"]); ?></a>
					</div>
				<?php
				}
			}
			?>

			<div class="newsContent" id="newsLast">

			</div>
		</div>
	</div>

	<div class="snsICON" style="margin-top:5px;">
		<div class="weibo">
			<a href="http://weibo.com/u/3212988263" target="_blank"><img src="assets/img/weibo.png"/></a>
		</div>
		<div class="facebook">
			<a href="https://www.facebook.com/csaATUGA" target="_blank"><img src="assets/img/fb.gif"/></a>
		</div>
		<div class="renren">
			<a href="http://page.renren.com/670000616?checked=true" target="_blank"><img
					src="assets/img/renren.png"/></a>
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