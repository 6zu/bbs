<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "/www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="/www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="keywords" content="php培训,php教程,php视频,php下载,php视频教程" />
<meta name="description" content="php培训的龙头老大,口碑最好的php培训机构,进来看看同学们的呐喊，就会知道我们是个怎么样的学校,问天下php培训机构谁与争锋?php培训课程内容包含目前最流行的zendframework、thinkphp框架、ECShop、dedecms等产品的二次开发" />
<title>传智播客PHP学院官网-北京PHP培训_PHP网站开发培训_PHP程序员培训学校</title>
<link href="/Public/style/css.css" type="text/css" rel="stylesheet" />
<link href="/Public/style/nav_main.css" type="text/css" rel="stylesheet" />
<link href="/Public/style/imageswitch.css" type="text/css" rel="stylesheet" />
<link href="/Public/style/webim.css" type="text/css" rel="stylesheet" />
<link href="/Public/style/nav_course.css" type="text/css" rel="stylesheet" />
<link href="/Public/style/nav_job.css" type="text/css" rel="stylesheet" />
<link type="image/x-icon" rel="shortcut icon" href="favicon.ico" /> 
<script type="text/javascript" src="/Public/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="/Public/js/jq.js"></script>
<script type="text/javascript" src="/Public/js/imageschange.js"></script>
<script type="text/javascript" id="bdshare_js" data="type=tools" ></script>
<script type="text/javascript" id="bdshell_js"></script>
</head>

<body>	
<div id="header">
        <!-- 页面顶部-->
<?php
 if($username==""){ ?>
<div class="top1">
        <p class="fl" style="background:url(/Public/images/hot.png) 107px 10px no-repeat; padding-right:35px;"><span class="blue">专业的IT培训机构！</span></p>
        <p class="fr">
 <form method="post" autocomplete="off" id="lsform" action="/index.php/home/public/logo" onsubmit="return lsSubmit();">
<div class="fastlg cl">
<span id="return_ls" style="display:none"></span>
<div class="y pns">
<table cellspacing="0" cellpadding="0">
<tr>
<td>
<label for="ls_password" class="z psw_w">用户名</label>
</td>
<td><input type="text" name="username" id="ls_username" autocomplete="off" class="px vm" tabindex="901" /></td>
<td><label for="ls_password" class="z psw_w">密码</label></td>
<td><input type="password" name="password" id="ls_password" class="px vm" autocomplete="off" tabindex="902" /></td>
<td class="fastlg_l"><button type="submit" class="pn vm" tabindex="904" style="width: 75px;"><em>登录</em></button></td>
<td>&nbsp;<a href="/index.php/home/public/register" class="xi2 xw1">注册</a></td>
</tr>
</table>

</div>

</div>
</form>
      
</div>
<?php
 }else{ ?>
    <div class="top1">
        <p class="fl" style="background:url(/Public/images/hot.png) 107px 10px no-repeat; padding-right:35px;"><span class="blue">专业的IT培训机构！</span></p>
        <p class="fr">
            欢迎<font color="red"><?php echo $username?></font>,  <a href="/index.php/home/public/logoout">退出登录</a>
      
</div>
<?php
 } ?>
 
 

        <div class="clear"></div>
        <div class="top2">
                <h1 class="fl"><a href="http://www.itcast.cn"><img src="/Public/images/logo.gif" alt="传智播客php培训学院" border="0"  class="png"/></a></h1>
                <div class="fl toubu">
                <div class="toubu-font1">PHP学院</div>
                         <!-- 校区 -->
<p><a href="http://www.itcast.cn" target="_blank">北京校区</a></p>
<p><a target="_blank" href="http://sh.itcast.cn">上海校区</a></p>
<p><a href="http://gz.itcast.cn" target="_blank">广州校区</a></p><br />
<p><a target="_blank" href="http://wh.itcast.cn">武汉校区</a></p>
<p><a href="http://cd.itcast.cn" target="_blank">成都校区</a></p>
<p><a href="http://zz.itcast.cn" target="_blank">郑州校区</a></p><br />
<p><a href="http://xa.itcast.cn" target="_blank">西安校区</a></p>
<!-- 校区 --> 
                </div>
                <p class="fr"><img src="/Public/images/topword.gif" alt="改变中国教育，我们正在行动..." class="png"/></p>
        </div>
        <div class="clear"></div>
    <ul id="nav">
      <!--    
        <li><a href="http://php.itcast.cn" id="nav_main">首 页</a></li>
        <li class="widt"><a href="http://php.itcast.cn/php/course.shtml" >PHP培训课程</a> </li> 
        <li class="widt"><a href="http://php.itcast.cn/php/video.shtml" id="nav_videodl">PHP视频下载</a> </li>
        <li id="nav_personnel"><a href="http://www.itcast.cn/channel/personnel.shtml">人才服务</a></li>
        <li id="nav_life"><a href="http://www.itcast.cn/channel/campus.shtml">校园生活</a> </li>
        <li id="nav_teacher"><a href="http://php.itcast.cn/php/teacher.shtml">师资力量</a> </li>
        <li id="nav_job"><a href="http://php.itcast.cn/php/jyjb.shtml">就业信息</a> </li>
        <li id="nav_flow"><a href="http://www.itcast.cn/channel/flow.shtml">报名流程</a> </li>
        <li id="nav_book"><a href="http://www.itcast.cn/channel/book.shtml">原创教材</a> </li>
        <li id="nav_question"><a href="/php/question.shtml">常见问题</a></li>
        <li><a href="http://w"nav_quesww.itcast.cn/channel/contact.shtml">来校路线</a></li>
        <li><a href="http://bbs.itcast.cn" target="_blank">技术论坛 </a></li>
          -->
        
          <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li  id="nav_videodl"><a href="<?php echo ($vo["nav_url"]); ?>" ><?php echo ($vo["nav_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
        </div>

    
<div id="box">
  <div id="left" class="fl"  style="margin-top:3px; overflow:hidden;">
    <div class="clear"></div>
    <div><img src="/Public/video/lefttop.gif"/></div>
    <div class="left_content3">
<a href="http://dvd.itcast.cn/?php" target="_blank"><font color="red"><h4>下载网速不给力，来申请免费PHP学习光盘吧！全新2014版JAVA/.NET/PHP/网页平面UI设计/iOS入门必备教程光盘免费申领中！</h4></font></a>
      <div class="zhanshi">
        <h4 class="videotitle"><span class="fl">PHP视频下载(如果视频无法下载，请联系QQ:2449444817)</span></h4>
		<div class="blueline1">
<div class="blueline1">   <?php if(is_array($arr)): $i = 0; $__LIST__ = $arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><table bgcolor="#e2f1f8" border="0" cellpadding="0" cellspacing="1" class="videodown" width="100%">

  
<tbody>
	<tr>
	<td bgcolor="#ffffff" class="downpic" rowspan="2" width="106"><img alt="" height="71" src="/Public/uploads/<?php echo ($vo["video_img"]); ?>" width="96" /></td>
	<td bgcolor="#ffffff" width="272">
	<div class="jiaochengmz"><a href="http://player.youku.com/player.php/sid/XODQzMjY5OTIw/v.swf" target="_blank"><span style="color:#ff0000;"><?php echo ($vo["video_name"]); ?></span></a></div>
	</td>
	<td align="right" bgcolor="#ffffff" width="215"><a target="_blank"><img border="0" height="26" src="/Public/video/download.jpg" width="56" onclick="play(<?php echo ($vo["video_id"]); ?>)" /></a></td>
	</tr>
	<tr>
	<td bgcolor="#ffffff">
	<div class="jianshi">主讲：<?php echo ($vo["video_author"]); ?> <span class="blue">PHP公开课 </span></div>
	</td>
	<td align="right" bgcolor="#ffffff">
	<div class="bdshare_t bds_tools get-codes-bdshare" id="bdshare"></div>
	</td>
	</tr>
</tbody>
</table><?php endforeach; endif; else: echo "" ;endif; ?>
</div>
<br />
<script type="text/javascript">
<!--
	function play(id){

		if(confirm("播放该视频需花费10积分")){
			location.href="<?php echo U('Video/play')?>?id="+id;
		}
	}
//-->
</script>

        </div>
      </div>
    </div>
    <div><img src="/Public/video/leftbottom.gif"/></div>
    <div></div>
  </div>
  <div id="right" class="fl">
    <h4 class="righttitle1 zhaopin"><span class="blue">常见</span>问题</h4>
    <div class="rightkuang1">
      <ul class="zhaopinlist wenti">
        <!--<ul>
<li><a href="#">正辰科技招聘Java工程师 </a></li>
<li><a href="#">伟鹏科技招聘动画工程师 </a></li>
<li><a href="#">正辰科技招聘网页设计师</a></li>
<li><a href="#">伟鹏科技招聘动画工程师</a></li>
<li><a href="#">正辰科技招聘Java工程师 </a></li>
<li><a href="#">伟鹏科技招聘动画工程师 </a></li>
<li><a href="#">伟鹏科技招聘动画工程师 </a></li>
</ul>-->
<ul class="zhaopinlist wenti">
<li><a href="/news/6c691c56/0dae/41ff/996a/2d110a612490.shtml" target="_blank">你们的PHP培训为什么那么便宜？</a><img height="15" src="/Public/video/new.gif" width="29" /></li>
<li><a href="/news/28bc21c1/10ef/4bcb/ad34/c0b70fc9ab8a.shtml" target="_blank">你们入学需要什么样的基础</a><img height="15" src="/Public/video/new.gif" width="29" /></li>
<li><a href="/news/13099012/ae09/4d3b/ad0e/b945b114ae9c.shtml" target="_blank">你们的师资力量是什么样子的？</a> <img height="15" src="/Public/video/new.gif" width="29" /></li>
<li><a href="/news/5b2001e2/b84e/4b60/b9a2/fb3ca2def9f7.shtml" target="_blank">你们的课程内容质量是怎么样的？</a></li>
<li><a href="/news/28486a2e/2e20/4536/9dee/23b8b0964d3a.shtml" target="_blank">你们PHP的学习模式是什么样的？</a></li>
<li><a href="/news/38f18d98/e496/4c46/9561/5c14558c4394.shtml" target="_blank">你们PHP培训的费用这么低，不怕别人说&quot;便宜没好货&quot;吗？签协议工作有保障吗？</a></li>
<li><a href="/news/ec9cdb54/95e8/4d2a/862b/0e7213e7f254.shtml" target="_blank">你们的PHP培训才开过几期班，质量有保证吗？</a></li>
<li><a href="/news/23700cbd/742d/46ab/b40a/921b780819e0.shtml" target="_blank">你们的课程安排，是怎么样的？</a></li>
<li><a href="/news/bae6d679/af68/4f9b/a015/bb94d3e517b6.shtml" target="_blank">你们有没有阳光扶持政策，可以后交学费?</a></li>
</ul>

      </ul>
      <div class="clear"></div>
      <p class="text-r"><a href="/java/question.shtml"><img src="/Public/video/jiantoumore.gif"/></a></p>
    </div>
    <div class="rightbottom"><img src="/Public/video/bottom1.gif"/></div>
    <h4 class="righttitle1 zhaopin"><span class="blue">工具</span>下载</h4>
         <div class="rightkuang1">
		  	<div style="width:275px; height:100px;">
<p class="download" style="width:85px; height:100px; float:left;"><a href="http://player.qq.com/" target="_blank"><img alt="QQ影音" src="http://www.itcast.cn/files/image/201308/20130801111312850.jpg" style="width: 74px; height: 75px;" /><br />
QQ影音</a></p>
<p class="download" style="width:85px; height:100px; float:left;"><a href="http://www.emule.org.cn/download/" target="_blank"><img alt="电驴" src="/Public/video/dianlv.jpg" /><br />
电驴</a></p>
<p class="download" style="width:85px; height:100px; float:left;"><a href="http://dl.xunlei.com/" target="_blank"><img alt="迅雷" src="/Public/video/tengxun.jpg" /><br />
迅雷</a></p>
</div>

		 </div>
   
    <div class="rightbottom"><img src="/Public/video/rightbottom.jpg"  /></div>
    <h4 class="righttitle1 zhaopin"><span class="blue">最新</span>企业招聘</h4>
    <div class="rightkuang1">
      <p class="cent"> <img src="/Public/video/select.jpg"  width="256" height="66"/></p>
       <table border="0" cellpadding="0" cellspacing="0" class="zhaopinlist" height="124" style="margin-top: 5px" width="98%">
<tbody>
	<tr>
	<td class="td1" width="73%"><a href="http://www.itcast.cn/news/20141208/14061592998.shtml" target="_blank">北京大众在线网络公司招聘</a></td>
	<td width="11%">若干</td>
	<td width="16%">12.05</td>
	</tr>
	<tr>
	<td class="td1" width="73%"><a href="http://www.itcast.cn/news/20141208/14050476464.shtml" target="_blank">广州海闻软件技术公司招聘</a></td>
	<td width="11%">若干</td>
	<td width="16%">12.05</td>
	</tr>
	<tr>
	<td class="td1" width="73%"><a href="http://www.itcast.cn/news/20141208/14035970948.shtml" target="_blank">北京汇智大有科技公司招聘</a></td>
	<td width="11%">若干</td>
	<td width="16%">12.05</td>
	</tr>
	<tr>
	<td class="td1" width="73%"><a href="http://www.itcast.cn/news/20141208/14000714489.shtml" target="_blank">北京极客思维网络公司招聘</a></td>
	<td width="11%">若干</td>
	<td width="16%">12.05</td>
	</tr>
	<tr>
	<td class="td1" width="73%"><a href="http://www.itcast.cn/news/20141208/13575434638.shtml" target="_blank">蓝思科技北京有限公司招聘</a></td>
	<td width="11%">若干</td>
	<td width="16%">12.05</td>
	</tr>
	<tr>
	<td class="td1" width="73%"><a href="http://www.itcast.cn/news/20141208/13562038006.shtml" target="_blank">北京理正软件股份公司招聘</a></td>
	<td width="11%">若干</td>
	<td width="16%">12.05</td>
	</tr>
	<tr>
	<td class="td1" width="73%"><a href="http://www.itcast.cn/news/20141208/1355257534.shtml" target="_blank">北京神威远通科技公司招聘</a></td>
	<td width="11%">若干</td>
	<td width="16%">12.05</td>
	</tr>
	<tr>
	<td class="td1" width="73%"><a href="http://www.itcast.cn/news/20141208/13533327706.shtml" target="_blank">北京易龙天网科技公司招聘</a></td>
	<td width="11%">若干</td>
	<td width="16%">12.05</td>
	</tr>
	<tr>
	<td class="td1" width="73%"><a href="http://www.itcast.cn/news/20141208/13520812818.shtml" target="_blank">易智瑞信息技术公司招聘</a></td>
	<td width="11%">若干</td>
	<td width="16%">12.05</td>
	</tr>
	<tr></tr>
	<tr>
	<td class="td1" width="73%"><a href="http://www.itcast.cn/news/20141208/13503030595.shtml" target="_blank">中公高科养护科技公司招聘</a></td>
	<td width="11%">若干</td>
	<td width="16%">12.05</td>
	</tr>
	<tr>
	<td class="td1" width="73%"><a href="http://www.itcast.cn/news/20141201/16233788127.shtml" target="_blank">上海北岸信息生物谷招聘</a></td>
	<td width="11%">若干</td>
	<td width="16%">11.28</td>
	</tr>
	<tr>
	<td class="td1" width="73%"><a href="http://www.itcast.cn/news/20141201/16302725269.shtml" target="_blank">TCL数码科技有限公司招聘</a></td>
	<td width="11%">若干</td>
	<td width="16%">11.28</td>
	</tr>
	<tr>
	<td class="td1" width="73%"><a href="http://www.itcast.cn/news/list/20c133c0-6635-421c-acae-6125b0702b34/1.shtml" target="_blank"><span style="color:#ff0000;">更多企业招聘信息请点击&hellip;&hellip;</span></a></td>
	<td width="11%"><a href="http://www.itcast.cn/news/list/20c133c0-6635-421c-acae-6125b0702b34/1.shtml" target="_blank"><span style="color:#ff0000;">查看</span></a></td>
	<td width="16%"><a href="http://www.itcast.cn/news/list/20c133c0-6635-421c-acae-6125b0702b34/1.shtml" target="_blank"><span style="color:#ff0000;">更多</span></a></td>
	</tr>
</tbody>
</table>

      <div class="clear"></div>
    </div>
    <div class="rightbottom"><img src="/Public/video/bottom1.gif"/></div>
    <h4 class="righttitle1 lianxi"><span class="fl"><span class="blue">课程</span>咨询</span></h4>
    <div class="rightkuang">
      <dl>
	<dt style="padding-bottom:20px;">
		北京传智播客</dt>
	<dd style="width:120px;height:40px;float:left;">
		<a href="http://cnrdn.com/iP66" target="_blank"><img alt="北京传智播客QQ在线咨询" border="0" height="27" src="http://www.itcast.cn/images/qqmfst.jpg" width="99" /></a></dd>
	<dd style="width:120px;height:40px;float:left;">
		<a href="http://cnrdn.com/iP66" target="_blank"><img alt="北京传智播客QQ在线咨询" border="0" height="27" src="http://www.itcast.cn/images/qqkczx.jpg" width="99" /></a></dd>
</dl>
<dl class="qqtwo">
	<dt style="padding-bottom:20px;">
		广州传智播客</dt>
	<dd style=" width:120px;height:40px;float:left;">
		<a href="http://wpa.b.qq.com/cgi/wpa.php?ln=1&amp;key=XzgwMDA2ODg2OF8yMDczMV84MDAwNjg4NjhfMl8" target="_blank"><img alt="广州传智播客QQ在线咨询" border="0" height="27" src="http://www.itcast.cn/images/qqmfst.jpg" width="99" /></a></dd>
	<dd style=" width:120px;height:40px;float:left;">
		<a href="http://wpa.b.qq.com/cgi/wpa.php?ln=1&amp;key=XzgwMDA2ODg2OF8yMDczMV84MDAwNjg4NjhfMl8" target="_blank"><img alt="广州传智播客QQ在线咨询" border="0" height="27" src="http://www.itcast.cn/images/qqkczx.jpg" width="99" /></a></dd>
</dl>
<dl class="qqthree">
	<dt style="padding-bottom:20px;">
		上海传智播客</dt>
	<dd style="width:120px;height:40px;float:left;">
		<a href="http://cnrdn.com/djUD" target="_blank"><img alt="上海传智播客QQ在线咨询" border="0" height="27" src="http://www.itcast.cn/images/qqmfst.jpg" width="99" /></a></dd>
	<dd style="width:120px;height:40px;float:left;">
		<a href="http://cnrdn.com/djUD" target="_blank"><img alt="上海传智播客QQ在线咨询" border="0" height="27" src="http://www.itcast.cn/images/qqkczx.jpg" width="99" /></a></dd>
</dl>
<dl class="qqfour">
	<dt style="padding-bottom:20px;">
		武汉传智播客</dt>
	<dd style="width:120px;height:40px;float:left;">
		<a href="http://cnrdn.com/P4EE" target="_blank"><img alt="武汉传智播客QQ在线咨询" border="0" height="27" src="http://www.itcast.cn/images/qqmfst.jpg" width="99" /></a></dd>
	<dd style="width:120px;height:40px;float:left;">
		<a href="http://cnrdn.com/P4EE" target="_blank"><img alt="武汉传智播客QQ在线咨询" border="0" height="27" src="http://www.itcast.cn/images/qqkczx.jpg" width="99" /></a></dd>
</dl>
<dl class="qqfive">
	<dt style="padding-bottom:20px;">
		郑州传智播客</dt>
	<dd style="width:120px;height:40px;float:left;">
		<a href="http://cnrdn.com/0LVE" target="_blank"><img alt="武汉传智播客QQ在线咨询" border="0" height="27" src="http://www.itcast.cn/images/qqmfst.jpg" width="99" /></a></dd>
	<dd style="width:120px;height:40px;float:left;">
		<a href="http://cnrdn.com/0LVE" target="_blank"><img alt="武汉传智播客QQ在线咨询" border="0" height="27" src="http://www.itcast.cn/images/qqkczx.jpg" width="99" /></a></dd>
</dl>
<dl class="qqsix">
	<dt style="padding-bottom:20px;">
		西安传智播客</dt>
	<dd style="width:120px;height:40px;float:left;">
		<a href="http://cnrdn.com/iP66" target="_blank"><img alt="西安传智播客QQ在线咨询" border="0" height="27" src="http://www.itcast.cn/images/qqmfst.jpg" width="99" /></a></dd>
	<dd style="width:120px;height:40px;float:left;">
		<a href="http://cnrdn.com/iP66" target="_blank"><img alt="西安传智播客QQ在线咨询" border="0" height="27" src="http://www.itcast.cn/images/qqkczx.jpg" width="99" /></a></dd>
</dl>
<!--<dl class="qqsev">
	<dt style="padding-bottom:20px;">
		西安传智播客</dt>
	<dd style="width:120px;height:40px;float:left;">
		<a href="http://cnrdn.com/iP66" target="_blank"><img alt="西安传智播客QQ在线咨询" border="0" height="27" src="http://www.itcast.cn/images/qqmfst.jpg" width="99" /></a></dd>
	<dd style="width:120px;height:40px;float:left;">
		<a href="http://cnrdn.com/iP66" target="_blank"><img alt="西安传智播客QQ在线咨询" border="0" height="27" src="http://www.itcast.cn/images/qqkczx.jpg" width="99" /></a></dd>
</dl>-->
      <div class="clear"></div>
    </div>
    <div class="rightbottom"><img src="/Public/video/rightbottom.jpg"/></div>
  </div>
</div>
<div class="clear"></div> 
    
    
            <!-- 页面底部 -->
<div id="footer">
  <div class="footer_info">
    <p class="fl mar"><!--<img src="/images/footlogo.jpg" />--></p>
    <p><a href="http://www.itcast.cn/channel/introduction.shtml" target="_blank" style="padding-left:0;">传智简介</a>|<a href="http://weibo.com/itcast" target="_blank">官方微博</a>|<a href="http://bbs.itcast.cn/forum.php?mod=forumdisplay&fid=175&filter=typeid&typeid=180" target="_blank">传智快报</a>|<a href="http://bbs.itcast.cn/forum.php?mod=forumdisplay&fid=184&filter=typeid&typeid=217" target="_blank">校区活动</a>|<a href="http://www.itcast.cn/channel/campus.shtml" target="_blank">校园生活</a>|<a href="http://www.itcast.cn/channel/personnel.shtml" target="_blank">人才服务</a>|<a href="http://www.itcast.cn/channel/flow.shtml" target="_blank">汇款账号</a>|<a href="http://www.itcast.cn/channel/zhaopin.shtml" target="_blank">招贤纳士</a>|<a href="http://www.itcast.cn/channel/contact.shtml" target="_blank">联系我们</a></p>
    <p>传智播客-专业java培训、.net培训、php培训、iOS培训、C++培训、网页设计、平面设计、网络营销培训机构</p>
    <p>版权所有 2006 - 2014 北京传智播客教育科技有限公司</p>
    <p>地址：北京市昌平区建材城西路金燕龙办公楼一层 邮编：100096</p>
    <p>电话：010-82935150/60/70 传真：010-82935100 邮箱: zhanghj+itcast.cn</p>
    <p><a href="http://www.miibeian.gov.cn/" target="_blank">京ICP备08001421号</a><a href="http://www.bjgaj.gov.cn/web/" target="_blank">京公网安备110108007702</a></p>
        <p style="padding-top:10px"><a style="overflow:hidden; margin-right:6px; padding:0;" href="http://webscan.360.cn/index/checkwebsite/url/www.itcast.cn" target="_blank"><img width="124" height="47" src="http://www.itcast.cn/images/360anquan.png"></a><a style="overflow:hidden; margin-right:6px; padding:0;" href="http://t.knet.cn/index_new.jsp" target="_blank"><img width="124" height="47" src="http://www.itcast.cn/images/cx.png"></a><a target="_blank" href="http://www.bj.cyberpolice.cn/index.do" style="padding:0;"><img width="124" height="47" src="http://www.itcast.cn/images/jc.png"></a></p>
  </div>
</div>
<!-- 页面底部 -->

<!-- 营销QQ统计 -->
<!-- WPA Button Begin -->
<script type="text/javascript" src="http://wpa.b.qq.com/cgi/wpa.php?key=XzgwMDA2ODg2OF8xNTA3NV84MDAwNjg4Njhf"></script>
<!-- WPA Button END -->
<!--[if lte IE 6]>
<script src="/kefu/js/DD_belatedPNG_0.0.8a.js" type="text/javascript"></script>
    <script type="text/javascript">
        DD_belatedPNG.fix('titZx');
    </script>
<![endif]-->

<LINK rel=stylesheet type=text/css href="/Public/kefu/css/common.css">
<!--[if lte IE 6]>
<link type="text/css" rel="stylesheet" href="/kefu/css/ie.css" mce_href="/kefu/css/ie.css" />
<![endif]-->
<SCRIPT type=text/javascript src="/Public/kefu/js/jquery.js"></SCRIPT>
<SCRIPT type=text/javascript src="/Public/kefu/js/kefu.js"></SCRIPT>
<SCRIPT type=text/javascript>kfguin="800068868";ws="www.itcast.cn"; companyname=""; welcomeword=""; type="1";</SCRIPT>

<link href="/Public/kefu2/css/init.css" mce_href="/Public/kefu2/css/init.css" rel="stylesheet" type="text/css"   />
<link href="/Public/kefu2/css/kefu.css" mce_href="/Public/kefu2/css/kefu.css" rel="stylesheet" type="text/css" />
<!--[if lte IE 6]>
<link type="text/css" rel="stylesheet" href="/kefu2/ie.css" mce_href="/kefu2/ie.css" />
<![endif]-->
<div class="fixed">
        <div class="f_left"></div>
        <div class="f_right">
                <div class="fr_c1"></div>
                <div class="fr_c2">
                        <ul>
                                <li class="fr_c2_li1">QQ在线客服</li>
                                <li class="fr_c2_li2">
                                        <div><script charset="utf-8" type="text/javascript" src="http://wpa.b.qq.com/cgi/wpa.php?key=XzgwMDA2ODg2OF8yNjY4M184MDAwNjg4Njhf"></script></div>
                                </li>
                                <li class="fr_c2_li3" style="padding:6px 0 0 12px; height:30px; width:90px; border-bottom:none;">
                                        <!-- WPA Button Begin -->
                                        <a href="http://cnrdn.com/iP66" target="_blank"><img src="/Public/kefu2/images/wpa_preview_a02.png"/></a>
                                        <!-- WPA Button End -->
                                </li>
                        </ul>
                </div>
                <div class="fr_c3">
                        <a href="http://cnrdn.com/iP66" target="_blank"><img src="/Public/kefu2/images/right_float_web.png" width="122" height="50" /></a>
                </div>
                <div class="fr_c4">
                        <ul>
                                <li class="fr_c4_li1">电话咨询</li>
                                <li class="fr_c4_li2"><div id="nobold" style="font-family:Arial;">010-82935150</div></li>
                        </ul>
                </div>
                <div class="fr_c6">
                        <ul>
                                <li><a style="display: block; text-indent: 22px; margin: 0px auto; width: 84px; background: url(&quot;http://www.itcast.cn/images/navicon.gif&quot;) no-repeat scroll 0px -20px transparent;" href="http://www.itcast.cn/forms/index.shtml" target="_blank">预约报名<div></div></a></li>
                                <li style="border-bottom:none;"><a style="display: block; text-indent: 22px; margin: 0px auto; width: 84px; background: url(&quot;http://www.itcast.cn/images/navicon.gif&quot;) no-repeat scroll 0px -78px transparent;" href="http://bbs.itcast.cn/" target="_blank">技术交流<div></div></a></li>
                        </ul>
                </div>
                <div class="fr_c7"></div>
        </div>
</div>
<script>
        $(document).ready(function(e) {
                var t=true;
                $('.f_left').click(function(){
                        if(t){
                                $('.fixed').animate({right:'-131px'},300);
                                $(this).css('background-position','-30px -396px');
                                t= !t;
                        } else{
                                $('.fixed').animate({right:'0px'},300);
                                $(this).css('background-position','0px -396px');
                                t= !t;
                        }
                });
        });
</script>



<script type="text/javascript">
  var arr = new Array(); 

       arr[0] = {title:"手把手教你如何打动面试官",link:"http://bbs.itcast.cn/thread-22528-1-1.html?h201",img:"http://bbs.itcast.cn/data/attachment/common/cf/104914z8lary1qv9vvv8fz.jpg"};

  var randIndex = Math.floor(Math.random()*arr.length);
  var obj = arr[randIndex];
  document.getElementById("webim_title").innerHTML = obj.title;
  document.getElementById("webim_link").href = obj.link;
  document.getElementById("webim_img").src = obj.img;
</script>
<script type="text/javascript" src="/Public/js/baidushare.js"></script>
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F616f7dbc9d62017d85a273460d618961' type='text/javascript'%3E%3C/script%3E"));
</script>
</body>
</html>