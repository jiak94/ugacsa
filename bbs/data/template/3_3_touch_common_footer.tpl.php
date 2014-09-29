<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<?php if(!empty($_G['setting']['pluginhooks']['global_footer_mobile'])) echo $_G['setting']['pluginhooks']['global_footer_mobile'];?><?php $useragent = strtolower($_SERVER['HTTP_USER_AGENT']);$clienturl = ''?><?php if(strpos($useragent, 'iphone') !== false || strpos($useragent, 'ios') !== false) { $clienturl = $_G['cache']['mobileoem_data']['iframeUrl'] ? $_G['cache']['mobileoem_data']['iframeUrl'].'&platform=ios' : 'http://www.discuz.net/mobile.php?platform=ios';?><?php } elseif(strpos($useragent, 'android') !== false) { $clienturl = $_G['cache']['mobileoem_data']['iframeUrl'] ? $_G['cache']['mobileoem_data']['iframeUrl'].'&platform=android' : 'http://www.discuz.net/mobile.php?platform=android';?><?php } elseif(strpos($useragent, 'windows phone') !== false) { $clienturl = $_G['cache']['mobileoem_data']['iframeUrl'] ? $_G['cache']['mobileoem_data']['iframeUrl'].'&platform=windowsphone' : 'http://www.discuz.net/mobile.php?platform=windowsphone';?><?php } ?>

<div id="mask" style="display:none;"></div>
<?php if(!$nofooter) { ?>
<div id="fter">
<div class="ful">
<?php if($_GET['mod'] != 'portal' && $_GET['mod'] != 'forum' && $_GET['mod'] != '' ) { ?>
<a href="javascript:;" onclick="history.go(-1)" class="z" ><img src="<?php echo STATICURL;?>image/mobile/images/icon_back.png" /></a>
<?php } ?>

<a href="javascript:;" style="color:#aaa;">´¥ÆÁ°æ</a>
<a href="<?php echo $_G['setting']['mobile']['nomobileurl'];?>">µçÄÔ°æ</a> 
        <a onclick="window.scrollTo('0','0')" href="javascript:;">TOP</a>
<p>&copy; <a href="http://www.yizhigame.cn/" style="color:#aaa;">&#x4E00;&#x6307;</a>&#x7248;&#x6743;&#x6240;&#x6709;</p>
</div>
</div>
<?php } ?>
</div>

<div class="pullrefresh" style="display:none;"></div>
</body>
</html><?php updatesession();?><?php if(defined('IN_MOBILE')) { output();?><?php } else { output_preview();?><?php } ?>
