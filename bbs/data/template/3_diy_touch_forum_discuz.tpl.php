<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('discuz');
0
|| checktplrefresh('./template/zds_touch/touch/forum/discuz.htm', './template/zds_touch/touch/common/header.htm', 1410576817, 'diy', './data/template/3_diy_touch_forum_discuz.tpl.php', './template/zds_touch', 'touch/forum/discuz')
|| checktplrefresh('./template/zds_touch/touch/forum/discuz.htm', './template/zds_touch/touch/common/footer.htm', 1410576817, 'diy', './data/template/3_diy_touch_forum_discuz.tpl.php', './template/zds_touch', 'touch/forum/discuz')
;?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<meta http-equiv="Cache-control" content="<?php if($_G['setting']['mobile']['mobilecachetime'] > 0) { ?><?php echo $_G['setting']['mobile']['mobilecachetime'];?><?php } else { ?>no-cache<?php } ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
<meta name="format-detection" content="telephone=no" />
<meta name="keywords" content="<?php if(!empty($metakeywords)) { echo dhtmlspecialchars($metakeywords); } ?>" />
<meta name="description" content="<?php if(!empty($metadescription)) { echo dhtmlspecialchars($metadescription); ?> <?php } ?>,<?php echo $_G['setting']['bbname'];?>" />
<?php if($_G['basescript'] == 'portal' && CURMODULE=='list') { ?><base href="<?php echo $_G['siteurl'];?>" /><?php } ?>
<title><?php if(!empty($navtitle)) { ?><?php echo $navtitle;?> - <?php } if(empty($nobbname)) { ?> <?php echo $_G['setting']['bbname'];?> - <?php } ?> 手机版 - Powered by Discuz!</title>
<link rel="stylesheet" href="<?php echo STATICURL;?>image/mobile/style.css" type="text/css" media="all">
<script src="<?php echo STATICURL;?>js/mobile/jquery-1.8.3.min.js?<?php echo VERHASH;?>" type="text/javascript"></script>

<script type="text/javascript">var STYLEID = '<?php echo STYLEID;?>', STATICURL = '<?php echo STATICURL;?>', IMGDIR = '<?php echo IMGDIR;?>', VERHASH = '<?php echo VERHASH;?>', charset = '<?php echo CHARSET;?>', discuz_uid = '<?php echo $_G['uid'];?>', cookiepre = '<?php echo $_G['config']['cookie']['cookiepre'];?>', cookiedomain = '<?php echo $_G['config']['cookie']['cookiedomain'];?>', cookiepath = '<?php echo $_G['config']['cookie']['cookiepath'];?>', showusercard = '<?php echo $_G['setting']['showusercard'];?>', attackevasive = '<?php echo $_G['config']['security']['attackevasive'];?>', disallowfloat = '<?php echo $_G['setting']['disallowfloat'];?>', creditnotice = '<?php if($_G['setting']['creditnotice']) { ?><?php echo $_G['setting']['creditnames'];?><?php } ?>', defaultstyle = '<?php echo $_G['style']['defaultextstyle'];?>', REPORTURL = '<?php echo $_G['currenturl_encode'];?>', SITEURL = '<?php echo $_G['siteurl'];?>', JSPATH = '<?php echo $_G['setting']['jspath'];?>';</script>

<script src="<?php echo STATICURL;?>js/mobile/common.js?<?php echo VERHASH;?>" type="text/javascript" charset="<?php echo CHARSET;?>"></script>
<link rel="stylesheet" href="<?php echo $_G['style']['tpldir'];?>/touch/images/style.css" type="text/css">


</head>

<body <?php if($_G['basescript'] == 'home' && $_GET['mod'] == 'space' && $_GET['do'] == 'notice') { ?>id="zds_hnotice"<?php } ?>>

<div id="dsm_wp">





<div id="dsm_content" class="cl dsm_content">
<div id="hd">
<div class="header-logo">
<?php if(CURMODULE=='viewthread' || CURMODULE=='view'  || CURMODULE=='forumdisplay'  || CURMODULE=='post'  || CURMODULE=='misc') { ?>
<a href="javascript:;" onclick="history.go(-1)" style="line-height: 43px;" class="dsm_ttui" />&nbsp;</a>
<?php } else { ?>
<a href="<?php echo $_G['siteurl'];?>"><img src="<?php echo $_G['style']['tpldir'];?>/touch/images/img/logo.png" width="74" height="35" /></a>
<?php } ?>
</div>
<div class="header-title dsmnv_toptit">
<span>

<?php if($_G['basescript'] == 'forum' && $_GET['mod'] == '') { ?>
&#x8BBA;&#x575B;
<?php } elseif($_G['basescript'] == 'forum' && $_GET['mod'] == 'viewthread') { ?>
&#x5E16;&#x5B50;&#x8BE6;&#x60C5;
<?php } elseif($_G['basescript'] == 'forum' && $_GET['mod'] == 'forumdisplay') { ?>
<?php echo $_G['forum']['name'];?>
<?php } elseif($_G['basescript'] == 'forum' && $_GET['mod'] == 'guide') { ?>
&#x5BFC;&#x8BFB;
<?php } else { ?>
<?php echo $navtitle;?>
<?php } ?></span>

</div>
<div style="width: 80px;">
<a href="search.php?mod=forum&amp;mobile=2" class="so">&nbsp;</a>

<div class="y user" id="dsm_side_pr">
<?php if($_G['uid']) { ?><a href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>" id="dsm_side_open" class="pic"><?php if($_G['member']['newpm'] || $_G['member']['newprompt'] || $_G['member']['newprompt_num']['follower'] || $_G['member']['newprompt_num']['follow']  ) { ?><span class="pm"></span><?php } ?><?php echo avatar($_G[uid],small);?></a>
<?php } else { ?>
<a  href="javascript:;" id="dsm_side_open" class="pic_no"><span class="">
&nbsp;</span></a><?php } ?>

</div>

</div>
</div>




<script type="text/javascript">

function mys(id){
return !id ? null : document.getElementById(id);
}

function dbox(id,classname){
if(mys(id+'_menu').style.display =='block'){
mys(id+'_menu').style.display ='none'
mys(id).className = '';
}else{
mys(id+'_menu').style.display ='block'
mys(id).className = classname;
}
}

if(window.onload!=null){   
    window.onload=function(){auto_height();};  
}
</script>

<div class="dsm_tfixheight">&nbsp;</div>

<div id="nv" class="cl">
<a <?php if($_G['basescript'] == 'forum' && $_GET['mod'] == '') { ?>class="a"<?php } ?> href="forum.php">首页</a>


<a <?php if($_GET['mod'] == 'guide') { ?>class="a"<?php } ?> href="forum.php?mod=guide">&#x5BFC;&#x8BFB;</a>
<a <?php if($_G['basescript'] == 'forum' && $_GET['mod'] == 'forum') { ?>class="a"<?php } ?> href="home.php?mod=space&amp;do=favorite&amp;view=me">收藏</a>
<a <?php if($_G['basescript'] == 'search' ) { ?>class="a"<?php } ?> href="home.php?mod=space&amp;do=pm">&#x6D88;&#x606F;</a>

<a <?php if($_G['basescript'] == 'forum' && $_GET['mod'] == '9gonge') { ?>class="a"<?php } ?> href="forum.php?mod=guide&amp;view=my">wo&#x5E16;&#x5B50;</a>

</div>

<div id="hd_bot"></div>

<?php if($_G['setting']['mobile']['mobilehotthread'] && $_GET['forumlist'] != 1) { dheader('Location:forum.php?mod=guide&view=hot');exit;?><?php } if($showvisitclient) { ?>

<div class="visitclienttip vm" style="display:block;">
<a href="javascript:;" id="visitclientid" class="btn_download">立即下载</a>	
<p>
下载新版掌上论坛客户端，尊享多项看帖特权!
</p>
</div>
<script type="text/javascript">
var visitclienthref = getvisitclienthref();
if(visitclienthref) {
$('#visitclientid').attr('href', visitclienthref);
$('.visitclienttip').css('display', 'block');
}
</script>

<?php } ?>



<?php if(!empty($_G['setting']['pluginhooks']['index_top_mobile'])) echo $_G['setting']['pluginhooks']['index_top_mobile'];?>
<!-- main forumlist start -->


<!--//鐗堝潡鍒楄〃//--><?php if(is_array($catlist)) foreach($catlist as $key => $cat) { ?><div class="list-a cl dsm_forlist">
<div class="dsm_forlitit title-t subforumshow" href="#sub_forum_<?php echo $cat['fid'];?>">
<span class="o"><img src="<?php echo $_G['style']['tpldir'];?>/touch/images/img/collapsed_<?php if(!$_G['setting']['mobile']['mobileforumview']) { ?>yes<?php } else { ?>no<?php } ?>.png"></span>
<h3><a href="javascript:;"><?php echo $cat['name'];?></a></h3>
</div>
<div class="content list-c" >
<ul class="dsm_forlistli" id="sub_forum_<?php echo $cat['fid'];?>" class="sub_forum "><?php if(is_array($cat['forums'])) foreach($cat['forums'] as $forumid) { $forum=$forumlist[$forumid];?><li>
            	<figure>

            	<?php if($forum['icon']) { ?>
<?php echo $forum['icon'];?>
 <?php } else { ?>
<img src="<?php echo $_G['style']['tpldir'];?>/touch/images/img/forum<?php if($forum['folder']) { ?>_new<?php } ?>.gif" alt="<?php echo $forum['name'];?>" />
 <?php } ?>
 
<h3 class="tit"><a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $forum['fid'];?>"><?php echo $forum['name'];?></a></h3>
               		<p class="num"><?php echo $forum['todayposts'];?></p>

</figure>
            </li>

 
<?php } ?>
</ul>
</div>
</div>
<?php } ?>

<script type="text/javascript">
(function() {
<?php if(!$_G['setting']['mobile']['mobileforumview']) { ?>
$('.sub_forum').css('display', 'block');
<?php } else { ?>
$('.sub_forum').css('display', 'none');
<?php } ?>
$('.subforumshow').on('click', function() {
var obj = $(this);
var subobj = $(obj.attr('href'));
if(subobj.css('display') == 'none') {
subobj.css('display', 'block');
obj.find('img').attr('src', '<?php echo $_G['style']['tpldir'];?>/touch/images/img/collapsed_yes.png');
} else {
subobj.css('display', 'none');
obj.find('img').attr('src', '<?php echo $_G['style']['tpldir'];?>/touch/images/img/collapsed_no.png');
}
});
 })();
</script>


<!-- main forumlist end -->
<?php if(!empty($_G['setting']['pluginhooks']['index_middle_mobile'])) echo $_G['setting']['pluginhooks']['index_middle_mobile'];?><!-- touch/dsportal/discuz --><?php if(!empty($_G['setting']['pluginhooks']['global_footer_mobile'])) echo $_G['setting']['pluginhooks']['global_footer_mobile'];?><?php $useragent = strtolower($_SERVER['HTTP_USER_AGENT']);$clienturl = ''?><?php if(strpos($useragent, 'iphone') !== false || strpos($useragent, 'ios') !== false) { $clienturl = $_G['cache']['mobileoem_data']['iframeUrl'] ? $_G['cache']['mobileoem_data']['iframeUrl'].'&platform=ios' : 'http://www.discuz.net/mobile.php?platform=ios';?><?php } elseif(strpos($useragent, 'android') !== false) { $clienturl = $_G['cache']['mobileoem_data']['iframeUrl'] ? $_G['cache']['mobileoem_data']['iframeUrl'].'&platform=android' : 'http://www.discuz.net/mobile.php?platform=android';?><?php } elseif(strpos($useragent, 'windows phone') !== false) { $clienturl = $_G['cache']['mobileoem_data']['iframeUrl'] ? $_G['cache']['mobileoem_data']['iframeUrl'].'&platform=windowsphone' : 'http://www.discuz.net/mobile.php?platform=windowsphone';?><?php } ?>

<div id="mask" style="display:none;"></div>
<?php if(!$nofooter) { ?>
<div id="fter">
<div class="ful">
<?php if($_GET['mod'] != 'portal' && $_GET['mod'] != 'forum' && $_GET['mod'] != '' ) { ?>
<a href="javascript:;" onclick="history.go(-1)" class="z" ><img src="<?php echo STATICURL;?>image/mobile/images/icon_back.png" /></a>
<?php } ?>

<a href="javascript:;" style="color:#aaa;">触屏版</a>
<a href="<?php echo $_G['setting']['mobile']['nomobileurl'];?>">电脑版</a> 
        <a onclick="window.scrollTo('0','0')" href="javascript:;">TOP</a>
<p>&copy; <a href="http://www.yizhigame.cn/" style="color:#aaa;">&#x4E00;&#x6307;</a>&#x7248;&#x6743;&#x6240;&#x6709;</p>
</div>
</div>
<?php } ?>
</div>

<div class="pullrefresh" style="display:none;"></div>
</body>
</html><?php updatesession();?><?php if(defined('IN_MOBILE')) { output();?><?php } else { output_preview();?><?php } ?>
