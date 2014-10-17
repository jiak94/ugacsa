<?php
require_once("connect.php");

$id = $_GET['id'];

$sql = "select * from Event WHERE id=$id";

$query = mysql_query($sql);

$data = mysql_fetch_assoc($query);
?>
<!DOCTYPE html>
<html>
<head>
    <title>近期活动 | 详情 |<?php echo $data['title']; ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset = UTF-8"/>
    <link rel="stylesheet" type="text/css" href="assets/css/usStyle.css">
    <script type="text/javascript" src="assets/js/jquery-2.1.0.min.js"></script>
    <style type="text/css">
         #backToTop{
            display: none;
            width:50px;
            height:50px;
            position:fixed;
            right:50px;
            bottom:150px;
            background: url('/assets/img/backtotop.png') no-repeat;
         }
    </style>
    <script type="text/javascript">
         function backToTop()
         {
              $(window).scroll(function(e) {
              //若滚动条离顶部大于100元素
              if($(window).scrollTop()>100)
                   $("#backToTop").fadeIn(1000);//以1秒的间隔渐显id=gotop的元素
              else
                   $("#backToTop").fadeOut(1000);//以1秒的间隔渐隐id=gotop的元素
              });
         };
         $(function(){
         //点击回到顶部的元素
              $("#backToTop").click(function(e) {
              //以1秒的间隔返回顶部
              $('body,html').animate({scrollTop:0},1000);
              });
              $("#backToTop").mouseover(function(e) {
                  $(this).css("background","url('/assets/img/backtotop.png') no-repeat");
              });
              $("#backToTop").mouseout(function(e) {
                  $(this).css("background","url('/assets/img/backtotop.png') no-repeat");
              });
             backToTop();//实现回到顶部元素的渐显与渐隐
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
            <li><a href="news.php"><span>新闻<br/>News</span></a></li>
            <li class="active"><a href="events.php"><span>活动<br/>Events</span></a></li>
            <li><a href="us.php"><span>我们<br/>Us</span></a></li>
            <li><a href="guide.php"><span>指南<br/>Guide</span></a></li>
            <li><a href="cooperation.php"><span>合作<br/>Cooperation</span></a></li>
            <li><a href="http://bbs.ugacsa.com"><span>论坛<br/>BBS</span></a></li>
        </ul>
    </div>
</div>

<div class="content">
    <a href="events.php" style="position: relative; left: 150px;text-decoration: underline;">&lt;返回</a>
    <div id="backToTop">

    </div>
    
    <div class="content_resize">
        <h1 align="center"><?php echo $data['title']; ?></h1>
        <div class="authorDate" align="center">
            <strong style="font-size: 20px;">举办方: <?php echo $data['holder']; ?></strong>
            <br>
            <strong style="font-size: 20px;">地点: <?php echo $data['place']; ?></strong>
            <br>
            <strong style="font-size: 20px;">时间: <?php echo $data['date'] ?></strong>
        </div>

        <?php echo $data['detail']; ?>

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