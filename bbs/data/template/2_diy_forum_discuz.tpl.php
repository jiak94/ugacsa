<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('discuz');
0
|| checktplrefresh('./template/singcere_watch/forum/discuz.htm', './template/singcere_watch/common/header.htm', 1409772315, 'diy', './data/template/2_diy_forum_discuz.tpl.php', './template/singcere_watch', 'forum/discuz')
|| checktplrefresh('./template/singcere_watch/forum/discuz.htm', './template/singcere_watch/common/footer.htm', 1409772315, 'diy', './data/template/2_diy_forum_discuz.tpl.php', './template/singcere_watch', 'forum/discuz')
|| checktplrefresh('./template/singcere_watch/forum/discuz.htm', './template/default/common/header_common.htm', 1409772315, 'diy', './data/template/2_diy_forum_discuz.tpl.php', './template/singcere_watch', 'forum/discuz')
|| checktplrefresh('./template/singcere_watch/forum/discuz.htm', './template/singcere_watch/common/pubsearchform.htm', 1409772315, 'diy', './data/template/2_diy_forum_discuz.tpl.php', './template/singcere_watch', 'forum/discuz')
;
block_get('235');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo CHARSET;?>" />
<?php if($_G['config']['output']['iecompatible']) { ?><meta http-equiv="X-UA-Compatible" content="IE=EmulateIE<?php echo $_G['config']['output']['iecompatible'];?>" /><?php } ?>
<title><?php if(!empty($navtitle)) { ?><?php echo $navtitle;?> - <?php } if(empty($nobbname)) { ?> <?php echo $_G['setting']['bbname'];?> - <?php } ?> Powered by Discuz!</title>
<?php echo $_G['setting']['seohead'];?>

<meta name="keywords" content="<?php if(!empty($metakeywords)) { echo dhtmlspecialchars($metakeywords); } ?>" />
<meta name="description" content="<?php if(!empty($metadescription)) { echo dhtmlspecialchars($metadescription); ?> <?php } if(empty($nobbname)) { ?>,<?php echo $_G['setting']['bbname'];?><?php } ?>" />
<meta name="generator" content="Discuz! <?php echo $_G['setting']['version'];?>" />
<meta name="author" content="Discuz! Team and Comsenz UI Team" />
<meta name="copyright" content="2001-2013 Comsenz Inc." />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<base href="<?php echo $_G['siteurl'];?>" /><link rel="stylesheet" type="text/css" href="data/cache/style_2_common.css?<?php echo VERHASH;?>" /><link rel="stylesheet" type="text/css" href="data/cache/style_2_forum_index.css?<?php echo VERHASH;?>" /><?php if($_G['uid'] && isset($_G['cookie']['extstyle']) && strpos($_G['cookie']['extstyle'], TPLDIR) !== false) { ?><link rel="stylesheet" id="css_extstyle" type="text/css" href="<?php echo $_G['cookie']['extstyle'];?>/style.css" /><?php } elseif($_G['style']['defaultextstyle']) { ?><link rel="stylesheet" id="css_extstyle" type="text/css" href="<?php echo $_G['style']['defaultextstyle'];?>/style.css" /><?php } ?><script type="text/javascript">var STYLEID = '<?php echo STYLEID;?>', STATICURL = '<?php echo STATICURL;?>', IMGDIR = '<?php echo IMGDIR;?>', VERHASH = '<?php echo VERHASH;?>', charset = '<?php echo CHARSET;?>', discuz_uid = '<?php echo $_G['uid'];?>', cookiepre = '<?php echo $_G['config']['cookie']['cookiepre'];?>', cookiedomain = '<?php echo $_G['config']['cookie']['cookiedomain'];?>', cookiepath = '<?php echo $_G['config']['cookie']['cookiepath'];?>', showusercard = '<?php echo $_G['setting']['showusercard'];?>', attackevasive = '<?php echo $_G['config']['security']['attackevasive'];?>', disallowfloat = '<?php echo $_G['setting']['disallowfloat'];?>', creditnotice = '<?php if($_G['setting']['creditnotice']) { ?><?php echo $_G['setting']['creditnames'];?><?php } ?>', defaultstyle = '<?php echo $_G['style']['defaultextstyle'];?>', REPORTURL = '<?php echo $_G['currenturl_encode'];?>', SITEURL = '<?php echo $_G['siteurl'];?>', JSPATH = '<?php echo $_G['setting']['jspath'];?>', CSSPATH = '<?php echo $_G['setting']['csspath'];?>', DYNAMICURL = '<?php echo $_G['dynamicurl'];?>';</script>
<script src="<?php echo $_G['setting']['jspath'];?>common.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php if(empty($_GET['diy'])) { $_GET['diy'] = '';?><?php } if(!isset($topic)) { $topic = array();?><?php } ?>
<meta name="application-name" content="<?php echo $_G['setting']['bbname'];?>" />
<meta name="msapplication-tooltip" content="<?php echo $_G['setting']['bbname'];?>" />
<?php if($_G['setting']['portalstatus']) { ?><meta name="msapplication-task" content="name=<?php echo $_G['setting']['navs']['1']['navname'];?>;action-uri=<?php echo !empty($_G['setting']['domain']['app']['portal']) ? 'http://'.$_G['setting']['domain']['app']['portal'] : $_G['siteurl'].'portal.php'; ?>;icon-uri=<?php echo $_G['siteurl'];?><?php echo IMGDIR;?>/portal.ico" /><?php } ?>
<meta name="msapplication-task" content="name=<?php echo $_G['setting']['navs']['2']['navname'];?>;action-uri=<?php echo !empty($_G['setting']['domain']['app']['forum']) ? 'http://'.$_G['setting']['domain']['app']['forum'] : $_G['siteurl'].'forum.php'; ?>;icon-uri=<?php echo $_G['siteurl'];?><?php echo IMGDIR;?>/bbs.ico" />
<?php if($_G['setting']['groupstatus']) { ?><meta name="msapplication-task" content="name=<?php echo $_G['setting']['navs']['3']['navname'];?>;action-uri=<?php echo !empty($_G['setting']['domain']['app']['group']) ? 'http://'.$_G['setting']['domain']['app']['group'] : $_G['siteurl'].'group.php'; ?>;icon-uri=<?php echo $_G['siteurl'];?><?php echo IMGDIR;?>/group.ico" /><?php } if(helper_access::check_module('feed')) { ?><meta name="msapplication-task" content="name=<?php echo $_G['setting']['navs']['4']['navname'];?>;action-uri=<?php echo !empty($_G['setting']['domain']['app']['home']) ? 'http://'.$_G['setting']['domain']['app']['home'] : $_G['siteurl'].'home.php'; ?>;icon-uri=<?php echo $_G['siteurl'];?><?php echo IMGDIR;?>/home.ico" /><?php } if($_G['basescript'] == 'forum' && $_G['setting']['archiver']) { ?>
<link rel="archives" title="<?php echo $_G['setting']['bbname'];?>" href="<?php echo $_G['siteurl'];?>archiver/" />
<?php } if(!empty($rsshead)) { ?><?php echo $rsshead;?><?php } if(widthauto()) { ?>
<link rel="stylesheet" id="css_widthauto" type="text/css" href="data/cache/style_<?php echo STYLEID;?>_widthauto.css?<?php echo VERHASH;?>" />
<script type="text/javascript">HTMLNODE.className += ' widthauto'</script>
<?php } if($_G['basescript'] == 'forum' || $_G['basescript'] == 'group') { ?>
<script src="<?php echo $_G['setting']['jspath'];?>forum.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } elseif($_G['basescript'] == 'home' || $_G['basescript'] == 'userapp') { ?>
<script src="<?php echo $_G['setting']['jspath'];?>home.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } elseif($_G['basescript'] == 'portal') { ?>
<script src="<?php echo $_G['setting']['jspath'];?>portal.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } if($_G['basescript'] != 'portal' && $_GET['diy'] == 'yes' && check_diy_perm($topic)) { ?>
<script src="<?php echo $_G['setting']['jspath'];?>portal.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } if($_GET['diy'] == 'yes' && check_diy_perm($topic)) { ?>
<link rel="stylesheet" type="text/css" id="diy_common" href="data/cache/style_<?php echo STYLEID;?>_css_diy.css?<?php echo VERHASH;?>" />
<?php } ?>
</head>

<body id="nv_<?php echo $_G['basescript'];?>" class="pg_<?php echo CURMODULE;?><?php if($_G['basescript'] === 'portal' && CURMODULE === 'list' && !empty($cat)) { ?> <?php echo $cat['bodycss'];?><?php } ?>" onkeydown="if(event.keyCode==27) return false;">
<div id="append_parent"></div><div id="ajaxwaitid"></div>
<?php if($_GET['diy'] == 'yes' && check_diy_perm($topic)) { include template('common/header_diy'); } if(check_diy_perm($topic)) { ?><?php
$__STATICURL = STATICURL;$diynav = <<<EOF

<a id="diy-tg" href="javascript:openDiy();" title="�� DIY ���" class="xi1 xw1" onMouseMove="showMenu(this.id)"><img src="{$__STATICURL}image/diy/panel-toggle.png" alt="DIY" /></a>
<div id="diy-tg_menu" style="display: none;">
<ul>
<li><a href="javascript:saveUserdata('diy_advance_mode', '');openDiy();" class="xi2">���ģʽ</a></li>
<li><a href="javascript:saveUserdata('diy_advance_mode', '1');openDiy();" class="xi2">�߼�ģʽ</a></li>
</ul>
</div>

EOF;
?>
<?php } if(CURMODULE == 'topic' && $topic && empty($topic['useheader']) && check_diy_perm($topic)) { ?>
<?php echo $diynav;?>
<?php } if(empty($topic) || $topic['useheader']) { if($_G['setting']['mobile']['allowmobile'] && (!$_G['setting']['cacheindexlife'] && !$_G['setting']['cachethreadon'] || $_G['uid']) && ($_GET['diy'] != 'yes' || !$_GET['inajax']) && ($_G['mobile'] != '' && $_G['cookie']['mobile'] == '' && $_GET['mobile'] != 'no')) { ?>
<div class="xi1 bm bm_c">
    ��ѡ�� <a href="<?php echo $_G['siteurl'];?>forum.php?mobile=yes">�����ֻ���</a> <span class="xg1">|</span> <a href="<?php echo $_G['setting']['mobile']['nomobileurl'];?>">�������ʵ��԰�</a>
</div>
<?php } ?>




<div id="page"> 
  
  <!-- Header -->
  <div id="header">

      <!-- Block permanent links module HEADER -->
<div id="toptb" class="cl">
<?php if(!empty($_G['setting']['pluginhooks']['global_cpnav_top'])) echo $_G['setting']['pluginhooks']['global_cpnav_top'];?>
<div class="wp">
<div class="z"><?php if(is_array($_G['setting']['topnavs']['0'])) foreach($_G['setting']['topnavs']['0'] as $nav) { if($nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))) { ?><?php echo $nav['code'];?><?php } } ?>
<?php if(!empty($_G['setting']['pluginhooks']['global_cpnav_extra1'])) echo $_G['setting']['pluginhooks']['global_cpnav_extra1'];?>
</div>
<div class="y">
<?php if(!empty($_G['setting']['pluginhooks']['global_cpnav_extra2'])) echo $_G['setting']['pluginhooks']['global_cpnav_extra2'];?><?php if(is_array($_G['setting']['topnavs']['1'])) foreach($_G['setting']['topnavs']['1'] as $nav) { if($nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))) { ?><?php echo $nav['code'];?><?php } } if(empty($_G['disabledwidthauto']) && $_G['setting']['switchwidthauto']) { ?>
<a href="javascript:;" onClick="widthauto(this)"><?php if(widthauto()) { ?>�л���խ��<?php } else { ?>�л�������<?php } ?></a>
<?php } if($_G['uid'] && !empty($_G['style']['extstyle'])) { ?><a id="sslct" href="javascript:;" onMouseOver="delayShow(this, function() {showMenu({'ctrlid':'sslct','pos':'34!'})});">�л����</a><?php } if(check_diy_perm($topic)) { ?>
<?php echo $diynav;?>
<?php } ?>
</div>
</div>
</div>
      <!-- /Block permanent links module HEADER --> 

  <?php echo adshow("headerbanner/wp a_h");?>  <?php $mnid = getcurrentnav();?>  <div id="header_logo"><?php if(!isset($_G['setting']['navlogos'][$mnid])) { ?><a href="./" title="<?php echo $_G['setting']['bbname'];?>"><?php echo $_G['style']['boardlogo'];?></a><?php } else { ?><?php echo $_G['setting']['navlogos'][$mnid];?><?php } ?></div>
    <div id="header_right"> 
     
     
     
     
      <!-- Block user information module HEADER -->
<?php if($_G['uid']) { ?>
      <div id="header_user">
        <ul id="header_nav">
          <li id="shopping_cart">
           <a href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>" target="_blank" title="�����ҵĿռ�" id="umnav" class="username" onMouseOver="showMenu({'ctrlid':this.id,'ctrlclass':'a'})"><?php echo $_G['member']['username'];?></a>
            <span><a href="home.php?mod=space&amp;do=pm" id="pm_ntc"<?php if($_G['member']['newpm']) { ?> class="new"<?php } ?>>��Ϣ</a></span>
            <span><a href="home.php?mod=space&amp;do=notice" id="myprompt"<?php if($_G['member']['newprompt']) { ?> class="new"<?php } ?>>����<?php if($_G['member']['newprompt']) { ?>(<?php echo $_G['member']['newprompt'];?>)<?php } ?></a></span>
            <?php if($_G['setting']['taskon'] && !empty($_G['cookie']['taskdoing_'.$_G['uid']])) { ?>
<span><a href="home.php?mod=task&amp;item=doing" id="task_ntc" class="new">�����е�����</a></span>
            <?php } ?>
            <span>
            <?php $upgradecredit = $_G['uid'] && $_G['group']['grouptype'] == 'member' && $_G['group']['groupcreditslower'] != 999999999 ? $_G['group']['groupcreditslower'] - $_G['member']['credits'] : false;?>            <a href="home.php?mod=spacecp&amp;ac=credit&amp;showcredit=1" id="extcreditmenu">����: <?php echo $_G['member']['credits'];?></a>
            </span>                
          
          <?php if(!empty($_G['setting']['pluginhooks']['global_usernav_extra1'])) echo $_G['setting']['pluginhooks']['global_usernav_extra1'];?>
          <?php if(!empty($_G['setting']['pluginhooks']['global_usernav_extra2'])) echo $_G['setting']['pluginhooks']['global_usernav_extra2'];?>
          <?php if(!empty($_G['setting']['pluginhooks']['global_usernav_extra3'])) echo $_G['setting']['pluginhooks']['global_usernav_extra3'];?>
          </li>
        </ul>
      </div>
<?php } elseif(!empty($_G['cookie']['loginuser'])) { ?>
      <div id="header_user">
        <ul id="header_nav">
          <li id="shopping_cart">
           <a id="loginuser" class="username"><?php echo dhtmlspecialchars($_G['cookie']['loginuser']); ?></a></a>
            <span><a href="member.php?mod=logging&amp;action=login" onClick="showWindow('login', this.href)">����</a></span> 
            <span><a href="member.php?mod=logging&amp;action=logout&amp;formhash=<?php echo FORMHASH;?>">�˳�</a></span>
          </li>
        </ul>
      </div> 
<?php } elseif(!$_G['connectguest']) { ?>
      <div id="header_user">
        <ul id="header_nav">
          <li id="shopping_cart">
           <a href="javascript:;" onClick="javascript:lsSubmit();" class="nousername">��¼</a>
            <span><a href="member.php?mod=register" class="btn-register">ע��</a></span>
            <!--����ɾ�� global_login_extra ������-->
          </li>
        </ul>
      </div> 
<div style="display:none"><?php include template('member/login_simple'); ?></div>
<?php } else { ?>
      <div id="header_user">
        <ul id="header_nav">
          <li id="shopping_cart">
           <a href="javascript:;" class="nousername"><?php echo $_G['member']['username'];?></a>
           <span><?php if(!empty($_G['setting']['pluginhooks']['global_usernav_extra1'])) echo $_G['setting']['pluginhooks']['global_usernav_extra1'];?></span>
           <span><a href="member.php?mod=logging&amp;action=logout&amp;formhash=<?php echo FORMHASH;?>">�˳�</a></span>
           <span><a href="home.php?mod=spacecp&amp;ac=credit&amp;showcredit=1">����: 0</a></span>
           <span>�û���: <?php echo $_G['group']['grouptitle'];?></span>
          </li>
        </ul>
      </div> 

<?php } ?>
      <!-- /Block user information module HEADER --> 


      <!-- Block search module TOP -->
      <?php if($_G['setting']['search']) { $slist = array();?><?php if($_G['fid'] && $_G['forum']['status'] != 3 && $mod != 'group') { ?><?php
$slist[forumfid] = <<<EOF
<li><a href="javascript:;" rel="curforum" fid="{$_G['fid']}" >����</a></li>
EOF;
?><?php } if($_G['setting']['portalstatus'] && $_G['setting']['search']['portal']['status'] && ($_G['group']['allowsearch'] & 1 || $_G['adminid'] == 1)) { ?><?php
$slist[portal] = <<<EOF
<li><a href="javascript:;" rel="article">����</a></li>
EOF;
?><?php } if($_G['setting']['search']['forum']['status'] && ($_G['group']['allowsearch'] & 2 || $_G['adminid'] == 1)) { ?><?php
$slist[forum] = <<<EOF
<li><a href="javascript:;" rel="forum" class="curtype">����</a></li>
EOF;
?><?php } if(helper_access::check_module('blog') && $_G['setting']['search']['blog']['status'] && ($_G['group']['allowsearch'] & 4 || $_G['adminid'] == 1)) { ?><?php
$slist[blog] = <<<EOF
<li><a href="javascript:;" rel="blog">��־</a></li>
EOF;
?><?php } if(helper_access::check_module('album') && $_G['setting']['search']['album']['status'] && ($_G['group']['allowsearch'] & 8 || $_G['adminid'] == 1)) { ?><?php
$slist[album] = <<<EOF
<li><a href="javascript:;" rel="album">���</a></li>
EOF;
?><?php } if($_G['setting']['groupstatus'] && $_G['setting']['search']['group']['status'] && ($_G['group']['allowsearch'] & 16 || $_G['adminid'] == 1)) { ?><?php
$slist[group] = <<<EOF
<li><a href="javascript:;" rel="group">{$_G['setting']['navs']['3']['navname']}</a></li>
EOF;
?><?php } ?><?php
$slist[user] = <<<EOF
<li><a href="javascript:;" rel="user">�û�</a></li>
EOF;
?>
<?php } if($_G['setting']['search'] && $slist) { ?>

<div id="scbar" class="<?php if($_G['setting']['srchhotkeywords'] && count($_G['setting']['srchhotkeywords']) > 5) { ?>scbar_narrow <?php } ?>">
<form id="scbar_form" method="<?php if($_G['fid'] && !empty($searchparams['url'])) { ?>get<?php } else { ?>post<?php } ?>" autocomplete="off" onsubmit="searchFocus($('scbar_txt'))" action="<?php if($_G['fid'] && !empty($searchparams['url'])) { ?><?php echo $searchparams['url'];?><?php } else { ?>search.php?searchsubmit=yes<?php } ?>" target="_blank">
<input type="hidden" name="mod" id="scbar_mod" value="search" />
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<input type="hidden" name="srchtype" value="title" />
<input type="hidden" name="srhfid" value="<?php echo $_G['fid'];?>" />
<input type="hidden" name="srhlocality" value="<?php echo $_G['basescript'];?>::<?php echo CURMODULE;?>" />
<?php if(!empty($searchparams['params'])) { if(is_array($searchparams['params'])) foreach($searchparams['params'] as $key => $value) { $srchotquery .= '&' . $key . '=' . rawurlencode($value);?><input type="hidden" name="<?php echo $key;?>" value="<?php echo $value;?>" />
<?php } ?>
<input type="hidden" name="source" value="discuz" />
<input type="hidden" name="fId" id="srchFId" value="<?php echo $_G['fid'];?>" />
<input type="hidden" name="q" id="cloudsearchquery" value="" />

<style>
#scbar { overflow: visible; position: relative; }
#sg{ background: #FFF; width:456px; border: 1px solid #B2C7DA; }
.scbar_narrow #sg { width: 316px; }
#sg li { padding:0 8px; line-height:30px; font-size:14px; }
#sg li span { color:#999; }
.sml { background:#FFF; cursor:default; }
.smo { background:#E5EDF2; cursor:default; }
            </style>
            <div style="display: none; position: absolute; top:37px; left:44px;" id="sg">
                <div id="st_box" cellpadding="2" cellspacing="0"></div>
            </div>
<?php } ?>

<div style="position:relative; width:200px; height:25px;">
            <input class="search_query ac_input" type="text" name="srchtxt" id="scbar_txt" value="��������������" autocomplete="off" />
            <a href="javascript:;" id="scbar_type" class="showmenu xg1" onclick="showMenu(this.id)" hidefocus="true"></a>
            <input type="submit" name="searchsubmit" id="scbar_btn" sc="1"  value="true" class="button">
</div>

</form>
</div>
<?php } ?>      <!-- /Block search module TOP -->



      <!-- Block top categories module -->
      <div id="categories_block_top" class="block">
        <div class="block_content">
          <ul>
            <?php if(is_array($_G['setting']['navs'])) foreach($_G['setting']['navs'] as $nav) { if($nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))) { ?>
                <li class="<?php if($mnid == $nav['navid']) { ?>selected<?php } ?>"<?php echo $nav['nav'];?>></li>
                <?php } } ?>
          </ul>
          <?php if(!empty($_G['setting']['pluginhooks']['global_nav_extra'])) echo $_G['setting']['pluginhooks']['global_nav_extra'];?>
        </div>
      </div>
      <!-- /Block top categories module --> 




    </div>
  </div>






<!--�û��˵�Ϊ�˶��position�����������������-->
<ul id="umnav_menu" class="p_pop nav_pop" style="display: none;"><?php if(is_array($_G['setting']['mynavs'])) foreach($_G['setting']['mynavs'] as $nav) { if($nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))) { $nav[code] = str_replace('style="', '_style="', $nav[code]);?><li><?php echo $nav['code'];?></li>
<?php } } ?>
<?php if(!empty($_G['setting']['pluginhooks']['global_usernav_extra3'])) echo $_G['setting']['pluginhooks']['global_usernav_extra3'];?>
<li><a href="home.php?mod=spacecp">����</a></li>
<?php if(($_G['group']['allowmanagearticle'] || $_G['group']['allowpostarticle'] || $_G['group']['allowdiy'] || getstatus($_G['member']['allowadmincp'], 4) || getstatus($_G['member']['allowadmincp'], 6) || getstatus($_G['member']['allowadmincp'], 2) || getstatus($_G['member']['allowadmincp'], 3))) { ?>
<li><a href="portal.php?mod=portalcp"><?php if($_G['setting']['portalstatus'] ) { ?>�Ż�����<?php } else { ?>ģ�����<?php } ?></a></li>
<?php } if($_G['uid'] && $_G['group']['radminid'] > 1) { ?>
<li><a href="forum.php?mod=modcp&amp;fid=<?php echo $_G['fid'];?>" target="_blank"><?php echo $_G['setting']['navs']['2']['navname'];?>����</a></li>
<?php } if($_G['uid'] && $_G['adminid'] == 1 && $_G['setting']['cloud_status']) { ?>
<li><a href="admin.php?frames=yes&amp;action=cloud&amp;operation=applist" target="_blank">��ƽ̨</a></li>
<?php } if($_G['uid'] && getstatus($_G['member']['allowadmincp'], 1)) { ?>
<li><a href="admin.php" target="_blank">��������</a></li>
<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['global_usernav_extra4'])) echo $_G['setting']['pluginhooks']['global_usernav_extra4'];?>
<li><a href="member.php?mod=logging&amp;action=logout&amp;formhash=<?php echo FORMHASH;?>">�˳�</a></li>
</ul>
                            <!--����Ϊ�˶��position���������������������Ӧ����pubsearchform.htm�ĵײ���-->
                            <ul id="scbar_type_menu" class="p_pop" style="display: none;"><?php echo implode('', $slist);; ?></ul>
                            <script type="text/javascript">
                            	initSearchmenu('scbar', '<?php echo $searchparams['url'];?>');
                            </script>







<?php if(!IS_ROBOT) { if($_G['uid'] && !empty($_G['style']['extstyle'])) { ?>
<div id="sslct_menu" class="cl p_pop" style="display: none;">
<?php if(!$_G['style']['defaultextstyle']) { ?><span class="sslct_btn" onClick="extstyle('')" title="Ĭ��"><i></i></span><?php } if(is_array($_G['style']['extstyle'])) foreach($_G['style']['extstyle'] as $extstyle) { ?><span class="sslct_btn" onClick="extstyle('<?php echo $extstyle['0'];?>')" title="<?php echo $extstyle['1'];?>"><i style='background:<?php echo $extstyle['2'];?>'></i></span>
<?php } ?>
</div>
<?php } ?>

<div id="qmenu_menu" class="p_pop <?php if(!$_G['uid']) { ?>blk<?php } ?>" style="display: none;">
<?php if($_G['uid']) { ?>
<ul><?php if(is_array($_G['setting']['mynavs'])) foreach($_G['setting']['mynavs'] as $nav) { if($nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))) { ?>
<li><?php echo $nav['code'];?></li>
<?php } } ?>
</ul>
<?php } elseif($_G['connectguest']) { ?>
<div class="ptm pbw hm">
����<br /><a class="xi2" href="member.php?mod=connect"><strong>�����ʺ���Ϣ</strong></a> �� <a href="member.php?mod=connect&amp;ac=bind" class="xi2 xw1"><strong>�������ʺ�</strong></a><br />��ʹ�ÿ�ݵ���
</div>
<?php } else { ?>
<div class="ptm pbw hm">
�� <a href="javascript:;" class="xi2" onclick="lsSubmit()"><strong>��¼</strong></a> ��ʹ�ÿ�ݵ���<br />û���ʺţ�<a href="member.php?mod=<?php echo $_G['setting']['regname'];?>" class="xi2 xw1"><?php echo $_G['setting']['reglinkname'];?></a>
</div>
<?php } ?>
</div>
<?php } ?><?php echo adshow("headerbanner/wp a_h");?><?php if(!empty($_G['setting']['plugins']['jsmenu'])) { ?>
<ul class="p_pop h_pop" id="plugin_menu" style="display: none"><?php if(is_array($_G['setting']['plugins']['jsmenu'])) foreach($_G['setting']['plugins']['jsmenu'] as $module) { ?> <?php if(!$module['adminid'] || ($module['adminid'] && $_G['adminid'] > 0 && $module['adminid'] >= $_G['adminid'])) { ?>
 <li><?php echo $module['url'];?></li>
 <?php } } ?>
</ul>
<?php } ?>
<?php echo $_G['setting']['menunavs'];?>
<?php if($_G['setting']['subnavs']) { ?>
<div id="mu" class="cl"><?php if(is_array($_G['setting']['subnavs'])) foreach($_G['setting']['subnavs'] as $navid => $subnav) { if($_G['setting']['navsubhover'] || $mnid == $navid) { ?>
<ul class="cl <?php if($mnid == $navid) { ?>current<?php } ?>" id="snav_<?php echo $navid;?>" style="display:<?php if($mnid != $navid) { ?>none<?php } ?>">
<?php echo $subnav;?>
</ul>
<?php } } ?>
</div>
<?php } ?><?php echo adshow("subnavbanner/a_mu");?><?php if(!empty($_G['setting']['pluginhooks']['global_header'])) echo $_G['setting']['pluginhooks']['global_header'];?>
<?php } ?>



<div id="wp" class="wp"><div id="pt" class="bm cl">
<?php if(empty($gid) && $announcements) { ?>
<div class="y">
<div id="an">
<dl class="cl">
<dt class="z xw1">����:&nbsp;</dt>
<dd>
<div id="anc"><ul id="ancl"><?php echo $announcements;?></ul></div>
</dd>
</dl>
</div>
<script type="text/javascript">announcement();</script>
</div>
<?php } ?>
<div class="z">
<a href="./" class="nvhm" title="��ҳ"><?php echo $_G['setting']['bbname'];?></a><em>&raquo;</em><a href="forum.php"<?php if($_G['setting']['forumjump']) { ?> id="fjump" onmouseover="delayShow(this, 'showForummenu(<?php echo $_G['fid'];?>)');" class="showmenu"<?php } ?>><?php echo $_G['setting']['navs']['2']['navname'];?></a><?php echo $navigation;?>
</div>
<div class="z"><?php if(!empty($_G['setting']['pluginhooks']['index_status_extra'])) echo $_G['setting']['pluginhooks']['index_status_extra'];?></div>
</div>


<?php if(empty($gid)) { ?><?php echo adshow("text/wp a_t");?><?php } ?>

<style id="diy_style" type="text/css"></style>

<?php if(empty($gid)) { ?>
<div class="wp">
<!--[diy=diy1]--><div id="diy1" class="area"></div><!--[/diy]-->
</div>
<?php } ?>

<div id="ct" class="wp cl<?php if($_G['setting']['forumallowside']) { ?> ct2<?php } ?>">

<div class="mn">

<!--move, Singcere!-->
<?php if(empty($gid)) { ?>
<div id="chart" class="bm bw0 cl">
<p class="chart z">����: <em><?php echo $todayposts;?></em><span class="pipe">|</span>����: <em><?php echo $postdata['0'];?></em><span class="pipe">|</span>����: <em><?php echo $posts;?></em><span class="pipe">|</span>��Ա: <em><?php echo $_G['cache']['userstats']['totalmembers'];?></em><?php if($_G['cache']['userstats']['newsetuser']) { ?><span class="pipe">|</span>��ӭ�»�Ա: <em><a href="home.php?mod=space&amp;username=<?php echo rawurlencode($_G['cache']['userstats']['newsetuser']); ?>" target="_blank" class="xi2"><?php echo $_G['cache']['userstats']['newsetuser'];?></a></em><?php } ?></p>
<div class="y">
<?php if(!empty($_G['setting']['pluginhooks']['index_nav_extra'])) echo $_G['setting']['pluginhooks']['index_nav_extra'];?>
<?php if($_G['uid']) { ?><a href="forum.php?mod=guide&amp;view=my" title="�ҵ�����" class="xi2">�ҵ�����</a><?php } if(!empty($_G['setting']['search']['forum']['status'])) { if($_G['uid']) { ?><span class="pipe">|</span><?php } ?><a href="forum.php?mod=guide&amp;view=new" title="���»ظ�" class="xi2">���»ظ�</a><?php } ?>
</div>
</div>
<?php } ?>

<?php if(!empty($_G['setting']['pluginhooks']['index_top'])) echo $_G['setting']['pluginhooks']['index_top'];?>

<?php if(!empty($_G['cache']['heats']['message'])) { ?>
<div class="bm">
<div class="bm_h cl">
<h2><?php echo $_G['setting']['navs']['2']['navname'];?>�ȵ�</h2>
</div>
<div class="bm_c cl">
<div class="heat z"><?php if(is_array($_G['cache']['heats']['message'])) foreach($_G['cache']['heats']['message'] as $data) { ?><dl class="xld">
<dt><?php if($_G['adminid'] == 1) { ?><a class="d" href="forum.php?mod=misc&amp;action=removeindexheats&amp;tid=<?php echo $data['tid'];?>" onclick="return removeindexheats()">delete</a><?php } ?>
<a href="forum.php?mod=viewthread&amp;tid=<?php echo $data['tid'];?>" target="_blank" class="xi2"><?php echo $data['subject'];?></a></dt>
<dd><?php echo $data['message'];?></dd>
</dl>
<?php } ?>
</div>
<ul class="xl xl1 heatl"><?php if(is_array($_G['cache']['heats']['subject'])) foreach($_G['cache']['heats']['subject'] as $data) { ?><li><?php if($_G['adminid'] == 1) { ?><a class="d" href="forum.php?mod=misc&amp;action=removeindexheats&amp;tid=<?php echo $data['tid'];?>" onclick="return removeindexheats()">delete</a><?php } ?>&middot; <a href="forum.php?mod=viewthread&amp;tid=<?php echo $data['tid'];?>" target="_blank" class="xi2"><?php echo $data['subject'];?></a></li>
<?php } ?>
</ul>
</div>
</div>
<?php } ?>

<?php if(!empty($_G['setting']['pluginhooks']['index_catlist_top'])) echo $_G['setting']['pluginhooks']['index_catlist_top'];?>
<div class="fl bm">
<?php if(empty($gid) && !empty($forum_favlist)) { $forumscount = count($forum_favlist);?><?php $forumcolumns = $forumscount > 3 ? ($forumscount == 4 ? 4 : 5) : 1;?><?php $forumcolwidth = (floor(100 / $forumcolumns) - 0.1).'%';?><div class="bm bmw <?php if($forumcolumns) { ?> flg<?php } ?> cl">
<div class="bm_h cl">
<span class="o">
<img id="category_0_img" src="<?php echo IMGDIR;?>/<?php echo $collapse['collapseimg_0'];?>" title="����/չ��" alt="����/չ��" onclick="toggle_collapse('category_0');" />
</span>
<h2><a href="home.php?mod=space&amp;do=favorite&amp;type=forum">���ղصİ��</a></h2>
</div>
<div id="category_0" class="bm_c" style="<?php echo $collapse['category_0']; ?>">
<table cellspacing="0" cellpadding="0" class="fl_tb">
<tr><?php $favorderid = 0;?><?php if(is_array($forum_favlist)) foreach($forum_favlist as $key => $favorite) { if($favforumlist[$favorite['id']]) { $forum=$favforumlist[$favorite[id]];?><?php $forumurl = !empty($forum['domain']) && !empty($_G['setting']['domain']['root']['forum']) ? 'http://'.$forum['domain'].'.'.$_G['setting']['domain']['root']['forum'] : 'forum.php?mod=forumdisplay&fid='.$forum['fid'];?><?php if($forumcolumns>1) { if($favorderid && ($favorderid % $forumcolumns == 0)) { ?>
</tr>
<?php if($favorderid < $forumscount) { ?>
<tr class="fl_row">
<?php } } ?>
<td class="fl_g"<?php if($forumcolwidth) { ?> width="<?php echo $forumcolwidth;?>"<?php } ?>>
<div class="fl_icn_g"<?php if(!empty($forum['extra']['iconwidth']) && !empty($forum['icon'])) { ?> style="width: <?php echo $forum['extra']['iconwidth'];?>px;"<?php } ?>>
<?php if($forum['icon']) { ?>
<?php echo $forum['icon'];?>
<?php } else { ?>
<a href="<?php echo $forumurl;?>"<?php if($forum['redirect']) { ?> target="_blank"<?php } ?>><img src="<?php echo IMGDIR;?>/forum<?php if($forum['folder']) { ?>_new<?php } ?>.gif" alt="<?php echo $forum['name'];?>" /></a>
<?php } ?>
</div>
<dl<?php if(!empty($forum['extra']['iconwidth']) && !empty($forum['icon'])) { ?> style="margin-left: <?php echo $forum['extra']['iconwidth'];?>px;"<?php } ?>>
<dt><a href="<?php echo $forumurl;?>"<?php if($forum['redirect']) { ?> target="_blank"<?php } if($forum['extra']['namecolor']) { ?> style="color: <?php echo $forum['extra']['namecolor'];?>;"<?php } ?>><?php echo $forum['name'];?></a><?php if($forum['todayposts'] && !$forum['redirect']) { ?><em class="xw0 xi1" title="����"> (<?php echo $forum['todayposts'];?>)</em><?php } ?></dt>
<?php if(empty($forum['redirect'])) { ?><dd><em>����: <?php echo dnumber($forum['threads']); ?></em>, <em>����: <?php echo dnumber($forum['posts']); ?></em></dd><?php } ?>
<dd>
<?php if($forum['permission'] == 1) { ?>
˽�ܰ��
<?php } else { if($forum['redirect']) { ?>
<a href="<?php echo $forumurl;?>" class="xi2">���ӵ��ⲿ��ַ</a>
<?php } elseif(is_array($forum['lastpost'])) { if($forumcolumns < 3) { ?>
<a href="forum.php?mod=redirect&amp;tid=<?php echo $forum['lastpost']['tid'];?>&amp;goto=lastpost#lastpost" class="xi2"><?php echo cutstr($forum['lastpost']['subject'], 30); ?></a> <cite><?php echo $forum['lastpost']['dateline'];?> <?php if($forum['lastpost']['author']) { ?><?php echo $forum['lastpost']['author'];?><?php } else { ?><?php echo $_G['setting']['anonymoustext'];?><?php } ?></cite>
<?php } else { ?>
<a href="forum.php?mod=redirect&amp;tid=<?php echo $forum['lastpost']['tid'];?>&amp;goto=lastpost#lastpost">��󷢱�: <?php echo $forum['lastpost']['dateline'];?></a>
<?php } } else { ?>
��δ
<?php } } ?>
</dd>
<?php if(!empty($_G['setting']['pluginhooks']['index_favforum_extra'][$forum[fid]])) echo $_G['setting']['pluginhooks']['index_favforum_extra'][$forum[fid]];?>
</dl>
</td><?php $favorderid++;?><?php } else { ?>
<td class="fl_icn" <?php if(!empty($forum['extra']['iconwidth']) && !empty($forum['icon'])) { ?> style="width: <?php echo $forum['extra']['iconwidth'];?>px;"<?php } ?>>
<?php if($forum['icon']) { ?>
<?php echo $forum['icon'];?>
<?php } else { ?>
<a href="<?php echo $forumurl;?>"<?php if($forum['redirect']) { ?> target="_blank"<?php } ?>><img src="<?php echo IMGDIR;?>/forum<?php if($forum['folder']) { ?>_new<?php } ?>.gif" alt="<?php echo $forum['name'];?>" /></a>
<?php } ?>
</td>
<td>
<h2><a href="<?php echo $forumurl;?>"<?php if($forum['redirect']) { ?> target="_blank"<?php } if($forum['extra']['namecolor']) { ?> style="color: <?php echo $forum['extra']['namecolor'];?>;"<?php } ?>><?php echo $forum['name'];?></a><?php if($forum['todayposts'] && !$forum['redirect']) { ?><em class="xw0 xi1" title="����"> (<?php echo $forum['todayposts'];?>)</em><?php } ?></h2>
<?php if($forum['description']) { ?><p class="xg2"><?php echo $forum['description'];?></p><?php } if($forum['subforums']) { ?><p>�Ӱ��: <?php echo $forum['subforums'];?></p><?php } if($forum['moderators']) { ?><p>����: <span class="xi2"><?php echo $forum['moderators'];?></span></p><?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['index_favforum_extra'][$forum[fid]])) echo $_G['setting']['pluginhooks']['index_favforum_extra'][$forum[fid]];?>
</td>
<td class="fl_i">
<?php if(empty($forum['redirect'])) { ?><span class="xi2"><?php echo dnumber($forum['threads']); ?></span><span class="xg1"> / <?php echo dnumber($forum['posts']); ?></span><?php } ?>
</td>
<td class="fl_by">
<div>
<?php if($forum['permission'] == 1) { ?>
˽�ܰ��
<?php } else { if($forum['redirect']) { ?>
<a href="<?php echo $forumurl;?>" class="xi2">���ӵ��ⲿ��ַ</a>
<?php } elseif(is_array($forum['lastpost'])) { ?>
<a href="forum.php?mod=redirect&amp;tid=<?php echo $forum['lastpost']['tid'];?>&amp;goto=lastpost#lastpost" class="xi2"><?php echo cutstr($forum['lastpost']['subject'], 30); ?></a> <cite><?php echo $forum['lastpost']['dateline'];?> <?php if($forum['lastpost']['author']) { ?><?php echo $forum['lastpost']['author'];?><?php } else { ?><?php echo $_G['setting']['anonymoustext'];?><?php } ?></cite>
<?php } else { ?>
��δ
<?php } } ?>
</div>
</td>
</tr>
<tr class="fl_row">

<?php } } } if(($columnspad = $favorderid % $forumcolumns) > 0) { echo str_repeat('<td class="fl_g"'.($forumcolwidth ? " width=\"$forumcolwidth\"" : '').'></td>', $forumcolumns - $columnspad);; } ?>
</tr>
</table>

</div>
</div><?php echo adshow("intercat/bm a_c/-1");?><?php } if(is_array($catlist)) foreach($catlist as $key => $cat) { ?><?php if(!empty($_G['setting']['pluginhooks']['index_catlist'][$cat[fid]])) echo $_G['setting']['pluginhooks']['index_catlist'][$cat[fid]];?>
<div class="bm bmw <?php if($cat['forumcolumns']) { ?> flg<?php } ?> cl">
<div class="bm_h cl">
<span class="o">
<img id="category_<?php echo $cat['fid'];?>_img" src="<?php echo IMGDIR;?>/<?php echo $cat['collapseimg'];?>" title="����/չ��" alt="����/չ��" onclick="toggle_collapse('category_<?php echo $cat['fid'];?>');" />
</span>
<?php if($cat['moderators']) { ?><span class="y">��������: <?php echo $cat['moderators'];?></span><?php } $caturl = !empty($cat['domain']) && !empty($_G['setting']['domain']['root']['forum']) ? 'http://'.$cat['domain'].'.'.$_G['setting']['domain']['root']['forum'] : '';?><h2><a href="<?php if(!empty($caturl)) { ?><?php echo $caturl;?><?php } else { ?>forum.php?gid=<?php echo $cat['fid'];?><?php } ?>" style="<?php if($cat['extra']['namecolor']) { ?>color: <?php echo $cat['extra']['namecolor'];?>;<?php } ?>"><?php echo $cat['name'];?></a></h2>
</div>
<div id="category_<?php echo $cat['fid'];?>" class="bm_c" style="<?php echo $collapse['category_'.$cat['fid']]; ?>">
<table cellspacing="0" cellpadding="0" class="fl_tb">
<tr><?php if(is_array($cat['forums'])) foreach($cat['forums'] as $forumid) { $forum=$forumlist[$forumid];?><?php $forumurl = !empty($forum['domain']) && !empty($_G['setting']['domain']['root']['forum']) ? 'http://'.$forum['domain'].'.'.$_G['setting']['domain']['root']['forum'] : 'forum.php?mod=forumdisplay&fid='.$forum['fid'];?><?php if($cat['forumcolumns']) { if($forum['orderid'] && ($forum['orderid'] % $cat['forumcolumns'] == 0)) { ?>
</tr>
<?php if($forum['orderid'] < $cat['forumscount']) { ?>
<tr class="fl_row">
<?php } } ?>
<td class="fl_g" width="<?php echo $cat['forumcolwidth'];?>">
<div class="fl_icn_g"<?php if(!empty($forum['extra']['iconwidth']) && !empty($forum['icon'])) { ?> style="width: <?php echo $forum['extra']['iconwidth'];?>px;"<?php } ?>>
<?php if($forum['icon']) { ?>
<?php echo $forum['icon'];?>
<?php } else { ?>
<a href="<?php echo $forumurl;?>"<?php if($forum['redirect']) { ?> target="_blank"<?php } ?>><img src="<?php echo IMGDIR;?>/forum<?php if($forum['folder']) { ?>_new<?php } ?>.gif" alt="<?php echo $forum['name'];?>" /></a>
<?php } ?>
</div>
<dl<?php if(!empty($forum['extra']['iconwidth']) && !empty($forum['icon'])) { ?> style="margin-left: <?php echo $forum['extra']['iconwidth'];?>px;"<?php } ?>>
<dt><a href="<?php echo $forumurl;?>"<?php if($forum['redirect']) { ?> target="_blank"<?php } if($forum['extra']['namecolor']) { ?> style="color: <?php echo $forum['extra']['namecolor'];?>;"<?php } ?>><?php echo $forum['name'];?></a><?php if($forum['todayposts'] && !$forum['redirect']) { ?><em class="xw0 xi1" title="����"> (<?php echo $forum['todayposts'];?>)</em><?php } ?></dt>
<?php if(empty($forum['redirect'])) { ?><dd><em>����: <?php echo dnumber($forum['threads']); ?></em>, <em>����: <?php echo dnumber($forum['posts']); ?></em></dd><?php } ?>
<dd>
<?php if($forum['permission'] == 1) { ?>
˽�ܰ��
<?php } else { if($forum['redirect']) { ?>
<a href="<?php echo $forumurl;?>" class="xi2">���ӵ��ⲿ��ַ</a>
<?php } elseif(is_array($forum['lastpost'])) { if($cat['forumcolumns'] < 3) { ?>
<a href="forum.php?mod=redirect&amp;tid=<?php echo $forum['lastpost']['tid'];?>&amp;goto=lastpost#lastpost" class="xi2"><?php echo cutstr($forum['lastpost']['subject'], 30); ?></a> <cite><?php echo $forum['lastpost']['dateline'];?> <?php if($forum['lastpost']['author']) { ?><?php echo $forum['lastpost']['author'];?><?php } else { ?><?php echo $_G['setting']['anonymoustext'];?><?php } ?></cite>
<?php } else { ?>
<a href="forum.php?mod=redirect&amp;tid=<?php echo $forum['lastpost']['tid'];?>&amp;goto=lastpost#lastpost">��󷢱�: <?php echo $forum['lastpost']['dateline'];?></a>
<?php } } else { ?>
��δ
<?php } } ?>
</dd>
<?php if(!empty($_G['setting']['pluginhooks']['index_forum_extra'][$forum[fid]])) echo $_G['setting']['pluginhooks']['index_forum_extra'][$forum[fid]];?>
</dl>
</td>
<?php } else { ?>
<td class="fl_icn" <?php if(!empty($forum['extra']['iconwidth']) && !empty($forum['icon'])) { ?> style="width: <?php echo $forum['extra']['iconwidth'];?>px;"<?php } ?>>
<?php if($forum['icon']) { ?>
<?php echo $forum['icon'];?>
<?php } else { ?>
<a href="<?php echo $forumurl;?>"<?php if($forum['redirect']) { ?> target="_blank"<?php } ?>><img src="<?php echo IMGDIR;?>/forum<?php if($forum['folder']) { ?>_new<?php } ?>.gif" alt="<?php echo $forum['name'];?>" /></a>
<?php } ?>
</td>
<td>
<h2><a href="<?php echo $forumurl;?>"<?php if($forum['redirect']) { ?> target="_blank"<?php } if($forum['extra']['namecolor']) { ?> style="color: <?php echo $forum['extra']['namecolor'];?>;"<?php } ?>><?php echo $forum['name'];?></a><?php if($forum['todayposts'] && !$forum['redirect']) { ?><em class="xw0 xi1" title="����"> (<?php echo $forum['todayposts'];?>)</em><?php } ?></h2>
<?php if($forum['description']) { ?><p class="xg2"><?php echo $forum['description'];?></p><?php } if($forum['subforums']) { ?><p>�Ӱ��: <?php echo $forum['subforums'];?></p><?php } if($forum['moderators']) { ?><p>����: <span class="xi2"><?php echo $forum['moderators'];?></span></p><?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['index_forum_extra'][$forum[fid]])) echo $_G['setting']['pluginhooks']['index_forum_extra'][$forum[fid]];?>
</td>
<td class="fl_i">
<?php if(empty($forum['redirect'])) { ?><span class="xi2"><?php echo dnumber($forum['threads']); ?></span><span class="xg1"> / <?php echo dnumber($forum['posts']); ?></span><?php } ?>
</td>
<td class="fl_by">
<div>
<?php if($forum['permission'] == 1) { ?>
˽�ܰ��
<?php } else { if($forum['redirect']) { ?>
<a href="<?php echo $forumurl;?>" class="xi2">���ӵ��ⲿ��ַ</a>
<?php } elseif(is_array($forum['lastpost'])) { ?>
<a href="forum.php?mod=redirect&amp;tid=<?php echo $forum['lastpost']['tid'];?>&amp;goto=lastpost#lastpost" class="xi2"><?php echo cutstr($forum['lastpost']['subject'], 30); ?></a> <cite><?php echo $forum['lastpost']['dateline'];?> <?php if($forum['lastpost']['author']) { ?><?php echo $forum['lastpost']['author'];?><?php } else { ?><?php echo $_G['setting']['anonymoustext'];?><?php } ?></cite>
<?php } else { ?>
��δ
<?php } } ?>
</div>
</td>
</tr>
<tr class="fl_row">
<?php } } ?>
<?php echo $cat['endrows'];?>
</tr>
</table>
</div>
</div><?php echo adshow("intercat/bm a_c/$cat[fid]");?><?php } ?>
</div>

<?php if(!empty($_G['setting']['pluginhooks']['index_middle'])) echo $_G['setting']['pluginhooks']['index_middle'];?>
<div class="wp mtn">
<!--[diy=diy3]--><div id="diy3" class="area"></div><!--[/diy]-->
</div>

<?php if(empty($gid) && $_G['setting']['whosonlinestatus']) { ?>
<div id="online" class="bm oll">
<div class="bm_h">
<?php if($detailstatus) { ?>
<span class="o"><a href="forum.php?showoldetails=no#online" title="����/չ��"><img src="<?php echo IMGDIR;?>/collapsed_no.gif" alt="����/չ��" /></a></span>
<h3>
<strong><a href="home.php?mod=space&amp;do=friend&amp;view=online&amp;type=member">���߻�Ա</a></strong>
<span class="xs1">- <strong><?php echo $onlinenum;?></strong> ������
- <strong><?php echo $membercount;?></strong> ��Ա(<strong><?php echo $invisiblecount;?></strong> ����),
<strong><?php echo $guestcount;?></strong> λ�ο�
- ��߼�¼�� <strong><?php echo $onlineinfo['0'];?></strong> �� <strong><?php echo $onlineinfo['1'];?></strong>.</span>
</h3>
<?php } else { if(empty($_G['setting']['sessionclose'])) { ?>
<span class="o"><a href="forum.php?showoldetails=yes#online" title="����/չ��"><img src="<?php echo IMGDIR;?>/collapsed_yes.gif" alt="����/չ��" /></a></span>
<?php } ?>
<h3>
<strong>
<?php if(!empty($_G['setting']['whosonlinestatus'])) { ?>
���߻�Ա
<?php } else { ?>
<a href="home.php?mod=space&amp;do=friend&amp;view=online&amp;type=member">���߻�Ա</a>
<?php } ?>
</strong>
<span class="xs1">- �ܼ� <strong><?php echo $onlinenum;?></strong> ������
<?php if($membercount) { ?>- <strong><?php echo $membercount;?></strong> ��Ա,<strong><?php echo $guestcount;?></strong> λ�ο�<?php } ?>
- ��߼�¼�� <strong><?php echo $onlineinfo['0'];?></strong> �� <strong><?php echo $onlineinfo['1'];?></strong>.</span>
</h3>
<?php } ?>
</div>
<?php if($_G['setting']['whosonlinestatus'] && $detailstatus) { ?>
<dl id="onlinelist" class="bm_c">
<dt class="ptm pbm bbda"><?php echo $_G['cache']['onlinelist']['legend'];?></dt>
<?php if($detailstatus) { ?>
<dd class="ptm pbm">
<ul class="cl">
<?php if($whosonline) { if(is_array($whosonline)) foreach($whosonline as $key => $online) { ?><li title="ʱ��: <?php echo $online['lastactivity'];?>">
<img src="<?php echo STATICURL;?>image/common/<?php echo $online['icon'];?>" alt="icon" />
<?php if($online['uid']) { ?>
<a href="home.php?mod=space&amp;uid=<?php echo $online['uid'];?>"><?php echo $online['username'];?></a>
<?php } else { ?>
<?php echo $online['username'];?>
<?php } ?>
</li>
<?php } } else { ?>
<li style="width: auto">��ǰֻ���οͻ�������Ա����</li>
<?php } ?>
</ul>
</dd>
<?php } ?>
</dl>
<?php } ?>
</div>
<?php } if(empty($gid) && ($_G['cache']['forumlinks']['0'] || $_G['cache']['forumlinks']['1'] || $_G['cache']['forumlinks']['2'])) { ?>
<div class="bm lk">
<div id="category_lk" class="bm_c ptm">
<?php if($_G['cache']['forumlinks']['0']) { ?>
<ul class="m mbn cl"><?php echo $_G['cache']['forumlinks']['0'];?></ul>
<?php } if($_G['cache']['forumlinks']['1']) { ?>
<div class="mbn cl">
<?php echo $_G['cache']['forumlinks']['1'];?>
</div>
<?php } if($_G['cache']['forumlinks']['2']) { ?>
<ul class="x mbm cl">
<?php echo $_G['cache']['forumlinks']['2'];?>
</ul>
<?php } ?>
</div>
</div>
<?php } ?>

<?php if(!empty($_G['setting']['pluginhooks']['index_bottom'])) echo $_G['setting']['pluginhooks']['index_bottom'];?>
</div>

<?php if($_G['setting']['forumallowside']) { ?>
<div id="sd" class="sd">
<?php if(!empty($_G['setting']['pluginhooks']['index_side_top'])) echo $_G['setting']['pluginhooks']['index_side_top'];?>
            
            
      <!--Append Right, Singcere! -->
      <div id="right_column" class="column"> 
        
        <!-- MODULE Block specials -->
        <div id="special_block_right" class="block products_block exclusive blockspecials">
          <h4><a href="home.php?mod=spacecp">�ҵ�����</a></h4>
          <div class="block_content">
            <ul class="products">
              <li class="ajax_block_product"> <a class="product_image" href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>"><?php echo avatar($_G[uid],big);?></a>
                <div> <a class="exclusive ajax_add_to_cart_button" href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>&amp;do=thread&amp;view=me&amp;from=space"><span class="addtocard">�ҷ���������</span></a> </div></li>
            </ul>
          </div>
        </div>
        <!-- /MODULE Block specials --> 

<div class="drag">
<!--[diy=diyright]--><div id="diyright" class="area"></div><!--[/diy]-->
</div>
        
      </div>
            
            
<div class="drag">
<!--[diy=diy2]--><div id="diy2" class="area"></div><!--[/diy]-->
</div>
<?php if(!empty($_G['setting']['pluginhooks']['index_side_bottom'])) echo $_G['setting']['pluginhooks']['index_side_bottom'];?>
</div>
<?php } ?>
</div>
<?php if($_G['group']['radminid'] == 1) { helper_manyou::checkupdate();?><?php } ?>

      <!-- Module Elastic Image Slideshow -->
      <?php if($_G['basescript'] == 'forum') { ?>
      <div class="jcarousel-skin-tango">
        <div id="pic_list">
        <div class="turn_l"><a class="prevView" href="javascript:void(0);"></a></div>
        <div id="pic-list-show" class="pic_listcon">
        <?php block_display('235');?>        </div>
        <div class="turn_r"><a class=" nextView " href="javascript:void(0);" title=""></a></div>
      </div>
      </div>
      <?php } ?>
      <!-- /Module Elastic Image Slideshow -->

</div>
</div>
<!--end page, Singcere!-->

<?php if(empty($topic) || ($topic['usefooter'])) { $focusid = getfocus_rand($_G[basescript]);?><?php if($focusid !== null) { $focus = $_G['cache']['focus']['data'][$focusid];?><?php $focusnum = count($_G['setting']['focus'][$_G[basescript]]);?><div class="focus" id="sitefocus">
<div class="bm">
<div class="bm_h cl">
<a href="javascript:;" onclick="setcookie('nofocus_<?php echo $_G['basescript'];?>', 1, <?php echo $_G['cache']['focus']['cookie'];?>*3600);$('sitefocus').style.display='none'" class="y" title="�ر�">�ر�</a>
<h2>
<?php if($_G['cache']['focus']['title']) { ?><?php echo $_G['cache']['focus']['title'];?><?php } else { ?>վ���Ƽ�<?php } ?>
<span id="focus_ctrl" class="fctrl"><img src="<?php echo IMGDIR;?>/pic_nv_prev.gif" alt="��һ��" title="��һ��" id="focusprev" class="cur1" onclick="showfocus('prev');" /> <em><span id="focuscur"></span>/<?php echo $focusnum;?></em> <img src="<?php echo IMGDIR;?>/pic_nv_next.gif" alt="��һ��" title="��һ��" id="focusnext" class="cur1" onclick="showfocus('next')" /></span>
</h2>
</div>
<div class="bm_c" id="focus_con">
</div>
</div>
</div><?php $focusi = 0;?><?php if(is_array($_G['setting']['focus'][$_G['basescript']])) foreach($_G['setting']['focus'][$_G['basescript']] as $id) { ?><div class="bm_c" style="display: none" id="focus_<?php echo $focusi;?>">
<dl class="xld cl bbda">
<dt><a href="<?php echo $_G['cache']['focus']['data'][$id]['url'];?>" class="xi2" target="_blank"><?php echo $_G['cache']['focus']['data'][$id]['subject'];?></a></dt>
<?php if($_G['cache']['focus']['data'][$id]['image']) { ?>
<dd class="m"><a href="<?php echo $_G['cache']['focus']['data'][$id]['url'];?>" target="_blank"><img src="<?php echo $_G['cache']['focus']['data'][$id]['image'];?>" alt="<?php echo $_G['cache']['focus']['data'][$id]['subject'];?>" /></a></dd>
<?php } ?>
<dd><?php echo $_G['cache']['focus']['data'][$id]['summary'];?></dd>
</dl>
<p class="ptn cl"><a href="<?php echo $_G['cache']['focus']['data'][$id]['url'];?>" class="xi2 y" target="_blank">�鿴 &raquo;</a></p>
</div><?php $focusi ++;?><?php } ?>
<script type="text/javascript">
var focusnum = <?php echo $focusnum;?>;
if(focusnum < 2) {
$('focus_ctrl').style.display = 'none';
}
if(!$('focuscur').innerHTML) {
var randomnum = parseInt(Math.round(Math.random() * focusnum));
$('focuscur').innerHTML = Math.max(1, randomnum);
}
showfocus();
var focusautoshow = window.setInterval('showfocus(\'next\', 1);', 5000);
</script>
<?php } if($_G['uid'] && $_G['member']['allowadmincp'] == 1 && $_G['setting']['showpatchnotice'] == 1) { ?>
<style type="text/css">
.patch { width: 300px; }
.patch .bm { border-color: #F26C4F; background: #FFF; }
.patch .allfixed { border-color: #6C3; }
.patch .bm_h { border: solid #FFF; border-width: 1px 1px 0; background: #F26C4F; }
.patch .allfixed .bm_h { background: #6C3; }
.patch h2, .patch .bm_h .y { color: #FFF; }
.patch table { table-layout: fixed; }
.patch th, .patch td { padding: 2px; border-bottom: 1px dotted #CDCDCD; }
.patchdate { width: 70px; }
.patchstat { width: 55px; }
.unfixed { color: #F26C4F; }
</style>
<div class="focus patch" id="patch_notice"></div>
<?php } ?><?php echo adshow("footerbanner/wp a_f/1");?><?php echo adshow("footerbanner/wp a_f/2");?><?php echo adshow("footerbanner/wp a_f/3");?><?php echo adshow("float/a_fl/1");?><?php echo adshow("float/a_fr/2");?><?php echo adshow("couplebanner/a_fl a_cb/1");?><?php echo adshow("couplebanner/a_fr a_cb/2");?><?php echo adshow("cornerbanner/a_cn");?><?php if(!empty($_G['setting']['pluginhooks']['global_footer'])) echo $_G['setting']['pluginhooks']['global_footer'];?>
<div id="ft" class="wp cl">
<div id="flk" class="y">
<p><?php if(is_array($_G['setting']['footernavs'])) foreach($_G['setting']['footernavs'] as $nav) { if($nav['available'] && ($nav['type'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1)) ||
!$nav['type'] && ($nav['id'] == 'stat' && $_G['group']['allowstatdata'] || $nav['id'] == 'report' && $_G['uid'] || $nav['id'] == 'archiver' || $nav['id'] == 'mobile'))) { ?><?php echo $nav['code'];?><span class="pipe">|</span><?php } } ?>
<strong><a href="<?php echo $_G['setting']['siteurl'];?>" target="_blank"><?php echo $_G['setting']['sitename'];?></a></strong>
<?php if($_G['setting']['icp']) { ?>( <a href="http://www.miitbeian.gov.cn/" target="_blank"><?php echo $_G['setting']['icp'];?></a> )<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['global_footerlink'])) echo $_G['setting']['pluginhooks']['global_footerlink'];?>
<?php if($_G['setting']['statcode']) { ?><?php echo $_G['setting']['statcode'];?><?php } ?>
</p>
<p class="xs0">
GMT<?php echo $_G['timenow']['offset'];?>, <?php echo $_G['timenow']['time'];?>
<span id="debuginfo">
<?php if(debuginfo()) { ?>, Processed in <?php echo $_G['debuginfo']['time'];?> second(s), <?php echo $_G['debuginfo']['queries'];?> queries
<?php if($_G['gzipcompress']) { ?>, Gzip On<?php } if(C::memory()->type) { ?>, <?php echo ucwords(C::memory()->type); ?> On<?php } ?>.
<?php } ?>
</span>
</p>
</div>
<div id="frt">


</div><?php updatesession();?><?php if($_G['uid'] && $_G['group']['allowinvisible']) { ?>
<script type="text/javascript">
var invisiblestatus = '<?php if($_G['session']['invisible']) { ?>����<?php } else { ?>����<?php } ?>';
var loginstatusobj = $('loginstatusid');
if(loginstatusobj != undefined && loginstatusobj != null) loginstatusobj.innerHTML = invisiblestatus;
</script>
<?php } ?>
</div>

<?php if($upgradecredit !== false) { ?>
<div id="g_upmine_menu" class="tip tip_3" style="display:none;">
<div class="tip_c">
���� <?php echo $_G['member']['credits'];?>, ������һ������ <?php echo $upgradecredit;?> ����
</div>
<div class="tip_horn"></div>
</div>
<?php } } if(!$_G['setting']['bbclosed']) { if($_G['uid'] && !isset($_G['cookie']['checkpm'])) { ?>
<script src="home.php?mod=spacecp&ac=pm&op=checknewpm&rand=<?php echo $_G['timestamp'];?>" type="text/javascript"></script>
<?php } if($_G['uid'] && helper_access::check_module('follow') && !isset($_G['cookie']['checkfollow'])) { ?>
<script src="home.php?mod=spacecp&ac=follow&op=checkfeed&rand=<?php echo $_G['timestamp'];?>" type="text/javascript"></script>
<?php } if(!isset($_G['cookie']['sendmail'])) { ?>
<script src="home.php?mod=misc&ac=sendmail&rand=<?php echo $_G['timestamp'];?>" type="text/javascript"></script>
<?php } if($_G['uid'] && $_G['member']['allowadmincp'] == 1 && !isset($_G['cookie']['checkpatch'])) { ?>
<script src="misc.php?mod=patch&action=checkpatch&rand=<?php echo $_G['timestamp'];?>" type="text/javascript"></script>
<?php } } if($_GET['diy'] == 'yes') { if(check_diy_perm($topic) && (empty($do) || $do != 'index')) { ?>
<script src="<?php echo $_G['setting']['jspath'];?>common_diy.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script src="<?php echo $_G['setting']['jspath'];?>portal_diy<?php if(!check_diy_perm($topic, 'layout')) { ?>_data<?php } ?>.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } if($space['self'] && CURMODULE == 'space' && $do == 'index') { ?>
<script src="<?php echo $_G['setting']['jspath'];?>common_diy.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script src="<?php echo $_G['setting']['jspath'];?>space_diy.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } } if($_G['uid'] && $_G['member']['allowadmincp'] == 1 && $_G['setting']['showpatchnotice'] == 1) { ?>
<script type="text/javascript">patchNotice();</script>
<?php } if($_G['member']['newprompt'] && (empty($_G['cookie']['promptstate_'.$_G['uid']]) || $_G['cookie']['promptstate_'.$_G['uid']] != $_G['member']['newprompt']) && $_GET['do'] != 'notice') { ?>
<script type="text/javascript">noticeTitle();</script>
<?php } userappprompt();?><?php if($_G['basescript'] != 'userapp') { ?>
<span id="scrolltop" onclick="window.scrollTo('0','0')">���ض���</span>
<script type="text/javascript">_attachEvent(window, 'scroll', function(){showTopLink();});</script>
<?php } output();?><!--append js, Singcere!-->
<script src="template/singcere_watch/src/js/jquery-1.4.4.min.js?<?php echo VERHASH;?>" type="text/javascript" type="text/javascript"></script>
<script type="text/javascript"> jQuery.noConflict(); </script>
<script src="template/singcere_watch/src/js/showimg_scroll.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script type="text/javascript"> MoveControl.iniUnit("#pic_list", "#pic-list-show", 6, 6); </script>
<!--append js, Singcere!-->



</body>
</html>