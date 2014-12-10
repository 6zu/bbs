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
<link href="/Public/style/nav_question.css" type="text/css" rel="stylesheet" />
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

            欢迎<font color="red" id="username"><?php echo $username?></font>,  <a href="/index.php/home/public/logoout">退出登录</a>
           <!--  <a href="/index.php/home/public/user_info">用户中心</a>--> 

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

<div id="left" class="fl"  style="margin-top:3px;">

<div><img src="/Public/images/lefttop.gif"  /></div>


<div class="left_content2">
<h4 class="title1"><span style="font-size:14px;float:right;padding-right:20px;">今天我终于来到了心中向往已久的神圣学府--八维学院，开始了改变命运的征途</span>
<span class="STYLE3">我们开学啦</span></h4>
	<div class="ganyan1 huodong1" style="clear: both">
<div class="fl">
<div class="imagecontainer" id="idTransformView2">
<ul class="slider slider2" id="idSlider2">
<li>
<a href="http://php.itcast.cn/subject/phpwzlx/index.shtml" target="_blank">
<img alt="王者来袭--只做中国PHP培训界的领航者!" src="/Public/images/703399.jpg" style="width: 297px; height: 216px;" /></a></li>
<li><a href="http://php.itcast.cn/news/20140904/1456540144.shtml?yuanchao" target="_blank">
<img alt="【精英访谈】PHP袁超：叛逆少年的成长" src="/Public/images/960837.jpg" style="width: 297px; height: 216px;" /></a></li>
<li><a href="http://php.itcast.cn/subject/phpzly/index.html" target="_blank"><img alt="学PHP编程,不做孬种程序员" src="/Public/images/703403.jpg" style="width: 297px; height: 216px;" /></a></li>
</ul>
<ul class="num" id="idNum2">
<li>1</li>
<li>2</li>
<li>3</li>
</ul>
</div>
</div>
<div class="fr shouye">
<ul>
<li><a href="http://php.itcast.cn/news/20131128/10173894392.shtml">
<img alt="传智播客php" src="http://www.itcast.cn/files/image/201311/20131128145416257.jpg" style="width:142px; height: 87px" /></a></li>
<li><a class="style3" href="http://php.itcast.cn/news/20131128/10173894392.shtml">曹伟-玩酷我的程序人生</a></li>
</ul>
<ul>
<li><a href="http://php.itcast.cn/news/20140530/12533844406.shtml">
        <img alt="传智播客php" src="http://www.itcast.cn/files/image/201405/20140530160404923.jpg" style="width: 142px; height: 87px;" /></a></li>
<li><a class="style3" href="http://php.itcast.cn/news/20140530/12533844406.shtml">王东方-辣妈挑战PHP </a></li>
</ul>
<ul>
<li><a href="http://php.itcast.cn/news/20140304/14023889982.shtml">
        <img alt="传智播客php" src="http://www.itcast.cn/files/image/201403/20140305143355584.jpg" style="width: 142px; height: 87px" /></a></li>
<li><a class="style3" href="http://php.itcast.cn/news/20140304/14023889982.shtml">康红红专题-因为爱情</a></li>
</ul>
<ul>
<li><a href="http://php.itcast.cn/news/20130924/17493348861.shtml">
        <img alt="传智播客php" src="http://php.itcast.cn/files/image/201309/20130925173127783.jpg" style="width: 142px; height: 87px" /></a></li>
<li><a class="style3" href="http://php.itcast.cn/news/20130924/17493348861.shtml">陈建利专题-我有我原则 </a></li>
</ul>
</div>
<div></div>
</div>

	<div class="clear"></div>
<p class="kxsy-font1"><img src="http://www.itcast.cn/images/kxsy-tu6.jpg" /></p>
<!--  校园消息  -->
<ul class="huodong11">
    <?php if(is_array($data3)): $i = 0; $__LIST__ = $data3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><img src="/Public/images/sanjiao-1.jpg" />
        <a href="/index.php/Home/Index/article_detail?id=<?php echo ($vo["college_article_id"]); ?>" target="_blank">
            <span><?php echo ($vo["college_article_title"]); ?></span>
        </a>
    </li><?php endforeach; endif; else: echo "" ;endif; ?>
</ul>

<!--  校园消息  -->
<div class="clear"></div>
<p class="text-r"><a href="http://php.itcast.cn/news/list/48b817de-285d-4981-a85a-ccdb3f42b15b/1.shtml
" ><img src="/Public/images/jiantoumore.gif"/></a></p>
</div>
<div><img src="/Public/images/leftbottom.gif"  /></div>
<div class="clear"></div>
<div><img src="/Public/images/lefttop.gif"  /></div>
<div class="left_content2">
<h4 class="title1"><span class="STYLE3">校园</span>动态</h4>
	<dl class="ganyan1 huodong1">
<dt class="fl">
<a href="http://php.itcast.cn/news/20131117/14525122556.shtml" target="_blank"><img src="http://www.itcast.cn/files/image/201311/20131117151902186.jpg" style="width: 286px; height: 215px;" /><br />
开拓视野，展现自我，&ldquo;非你莫属&rdquo;我们来啦！</a></dt>
<dd class="huodongfr">
<h3 class="STYLE7">班级活动</h3>
<ul class="bjhd">
<li><img src="http://php.itcast.cn/images/great.jpg" /><a href="http://php.itcast.cn/news/20140328/17081824603.shtml" target="_blank">PHP学院26期就业班开班，我们为何选择传智！</a></li>
<li><font color="red"><img src="http://php.itcast.cn/images/great.jpg" /><a href="http://php.itcast.cn/news/20140103/12110447816.shtml" target="_blank">PHP学院班级联袂金滏山自助烧烤 </a></font></li>
<li><font color="red"><img src="http://php.itcast.cn/images/great.jpg" /></font><a href="http://php.itcast.cn/news/20130807/15041093039.shtml" target="_blank"><span style="color:#ff0000;">PHP学院IT专场招聘会成功举办！</span></a></li>
<li><font color="red"><img src="http://php.itcast.cn/images/great.jpg" /><a href="http://php.itcast.cn/news/20131117/14525122556.shtml" target="_blank">PHP学院学员参与录制，&ldquo;非你莫属&rdquo;我们来啦！</a></font></li>
<li><font color="red"><img src="http://php.itcast.cn/images/great.jpg" /><a href="http://php.itcast.cn/news/20130422/17470617702.shtml" target="_blank">PHP学院2.28班海奥森&ldquo;HAPPY&rdquo;徒步之旅</a></font></li>
<li><font color="red"><img src="http://php.itcast.cn/images/great.jpg" /><a href="http://php.itcast.cn/news/20130422/10133870070.shtml" target="_blank">PHP学院3.30班学员香山一日游</a></font></li>
<li><font color="red"><img src="http://php.itcast.cn/images/great.jpg" /><a href="http://php.itcast.cn/news/20121231/17261928971.shtml" target="_blank">PHP学院12.29元旦晚会&mdash;不做孬种程序员</a></font></li>
</ul>
</dd>
</dl>

	<div class="clear"></div>
<p class="text-r"><img src="/Public/images/jiantoumore.gif"/></p>
</div>
<div class="clear"></div><div><img src="/Public/images/leftbottom.gif"/></div>
<div><img src="/Public/images/lefttop.gif"  /></div>
<div class="left_content2">
<h4 class="ganyan"><span class="STYLE3">论坛</span>热贴<span class="fr">
	  
<a href="http://bbs.itcast.cn">+MORE</a></span></h4>	
<div class="tie">		  

</div>
<div class="clear"></div>
</div>
<div><img src="/Public/images/leftbottom.gif"  /></div>

<div><img src="/Public/images/lefttop.gif"  /></div>
<div class="left_content2">
<h4 class="ganyan"><span class="fl"><span class="STYLE3">PHP培训</span>学员呐喊</span><span class="fr"><a href="http://php.itcast.cn/php/jyjb.shtml">+MORE</a></span></h4>
<dl class="ganyan1 huodong1">
<dt class="fl">
<a href="http://php.itcast.cn/news/20130705/14332258802.shtml" target="_blank"><img src="http://www.itcast.cn/files/image/201307/20130705170611718.jpg" style="width: 287px; height: 189px; " /></a><br />
<a href="http://php.itcast.cn/news/20130705/14332258802.shtml" target="_blank">传智播客PHP学院就业明星-张巍</a></dt>
<dd class="huodongfr">
<h3 class="STYLE7">就业信息</h3>
<ul class="bjhd">
<!--
<li><img src="http://www.itcast.cn/images/great.jpg" /><a href="http://php.itcast.cn/php/jyjb.shtml">张＊ 2014.10.22 &nbsp;北京树蛙＊＊ &nbsp;6000</a></li>
<li><img src="http://www.itcast.cn/images/great.jpg" /><a href="http://php.itcast.cn/php/jyjb.shtml">粟＊＊ 2014.10.21 &nbsp;智恒＊＊ &nbsp;5000</a></li>
<li><img src="http://www.itcast.cn/images/great.jpg" /><a href="http://php.itcast.cn/php/jyjb.shtml">王＊＊ 2014.10.20&nbsp; 淘伟＊＊公司 &nbsp;&nbsp;6000</a></li>
<li><img src="http://www.itcast.cn/images/great.jpg" /><a href="http://php.itcast.cn/php/jyjb.shtml">李＊ 2014.10.17 &nbsp; 北京通达＊＊公司 &nbsp; 6000</a></li>
<li><img src="http://www.itcast.cn/images/great.jpg" /><a href="http://php.itcast.cn/php/jyjb.shtml">张＊＊ 2014.10.16 &nbsp; 北京通达＊＊公司 &nbsp; 6000</a></li>
<li><img src="http://www.itcast.cn/images/great.jpg" /><a href="http://php.itcast.cn/php/jyjb.shtml">刘＊＊ 2014.10.15 &nbsp; 北京通达＊＊公司 &nbsp; &nbsp;5000</a></li>
<li><img src="http://www.itcast.cn/images/great.jpg" /><a href="http://php.itcast.cn/php/jyjb.shtml">曹＊ 2014.10.14 &nbsp;国度＊＊公司 &nbsp;7000</a></li>
<li><img src="http://www.itcast.cn/images/great.jpg" /><a href="http://php.itcast.cn/php/jyjb.shtml">陈＊＊ 2014.10.13 &nbsp;北京弗兰＊＊公司 &nbsp;5500</a></li>
<li><img src="http://www.itcast.cn/images/great.jpg" /><a href="http://php.itcast.cn/php/jyjb.shtml"><font style="color: red"><b>&gt;&gt;查看更多就业信息</b></font></a></li>
-->
<?php if(is_array($data2)): $i = 0; $__LIST__ = $data2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><img src="http://www.itcast.cn/images/great.jpg" /><a href="/index.php/home/student/index"><?php echo ($vo["student_name"]); ?> <?php echo ($vo["job_time"]); ?> &nbsp;<?php echo ($vo["job_company"]); ?> &nbsp;<?php echo ($vo["job_money"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
</dd>
</dl>

<div class="clear"></div>
</div>
<div class="clear"></div>
<div><img src="/Public/images/leftbottom.gif"  /></div>

<div><img src="/Public/images/lefttop.gif"  /></div>
<div class="left_content2">
<h4 class="ganyan"><span class="fl"><span class="STYLE3">学员</span>感言</span><span class="fr"><a href="http://php.itcast.cn/news/list/0b8acc29-7202-4e1d-a6db-f6dfd3a639bb/1.shtml
">+MORE</a></span></h4>
<div class="xygy">
<div class="ganyanleft fl">
<dl class="ganyan1">
<dt class="fl">
<a href="http://php.itcast.cn/news/6c558812/4811/4576/b342/2307b12ae09a.shtml"><img alt="" src="http://php.itcast.cn/images/sypic/xygn03.jpg" style="width: 108px; height: 71px" /></a></dt>
<dd class="fr">
<span class="STYLE6"><a href="http://php.itcast.cn/news/6c558812/4811/4576/b342/2307b12ae09a.shtml">[php学员]</a></span><a href="http://php.itcast.cn/news/6c558812/4811/4576/b342/2307b12ae09a.shtml">钟玲玉：传智，我人生中重要的一站</a></dd>
</dl>
<div class="clear"></div>
<ul>
<li><span class="STYLE6">[php学员]</span><a href="http://php.itcast.cn/news/fb4ddfd4/3e47/496a/8c63/7fbe5463bfd3.shtml">李久扬：90后,月薪10k,一封迟..</a></li>
<li><span class="STYLE6">[php学员]</span><a href="http://php.itcast.cn/news/5dc90d47/e9e4/4ff5/b156/77539ce525ca.shtml">杜宏海：同学到其它机构学完..</a></li>
<li><span class="STYLE6">[php学员]</span><a href="http://php.itcast.cn/news/fbe7a9c2/7cb8/40a0/93c7/3cddcecb76ba.shtml">杨*斌： 一个小学生的奋斗史..</a></li>
<li><span class="STYLE6">[php学员]</span><a href="http://php.itcast.cn/news/a59c6523/b6ed/4304/a02f/cf7edb613bca.shtml">黄*：传智播客,让我月薪增长到..</a></li>
<li><span class="STYLE6">[php学员]</span><a href="http://php.itcast.cn/news/7e39b618/ad36/48f4/b944/f0c088dc025d.shtml">刘传华：传智，我人生中的转折点..</a></li>
</ul>
</div>
<div class="ganyanleft fr3">
<dl class="ganyan1">
<dt class="fl">
<a href="http://php.itcast.cn/news/20120913/11580550824.shtml"><img alt="" src="http://www.itcast.cn/files/image/201308/20130812133704044.jpg" style="width: 108px; height: 71px;" /></a></dt>
<dd class="fr">
<span class="STYLE6"><a href="http://php.itcast.cn/news/20120913/11580550824.shtml">[php学员]</a></span><a href="http://php.itcast.cn/news/20120913/11580550824.shtml">王艳：美女网编,毕业薪水6500</a></dd>
</dl>
<div class="clear"></div>
<ul>
<li><span class="STYLE6">[php学员]</span><a href="http://php.itcast.cn/news/20130902/14205610545.shtml">吴思阳：传智之旅-真正的升华..</a></li>
<li><span class="STYLE6">[php学员]</span><a href="http://php.itcast.cn/news/20130902/14273649772.shtml">郝建设：短暂时光的改变..</a></li>
<li><span class="STYLE6">[php学员]</span><a href="http://php.itcast.cn/news/273e1200/65bb/4bf7/ad99/80f664bb5583.shtml">宋娇：幸好，我选择了传智..</a></li>
<li><span class="STYLE6">[php学员]</span><a href="http://php.itcast.cn/news/83bef091/4cfc/44a5/b0d4/18a862cd5fd3.shtml">李玉宝：零基础学员,刚毕业就拿..</a></li>
<li><a href="http://php.itcast.cn/news/list/0b8acc29-7202-4e1d-a6db-f6dfd3a639bb/1.shtml"><font style="color: red"><b>&gt;&gt;查看更多学员感言</b></font></a></li>
</ul>
</div>
</div>
<br />

<div class="clear"></div>
</div>
<div><img src="/Public/images/leftbottom.gif"  /></div>
<div><img src="/Public/images/lefttop.gif"  /></div>
<div class="left_content2">
<h4 class="ganyan"><span class="fl"><span class="STYLE3">PHP培训</span>名师答疑</span><span class="fr"><a href="http://php.itcast.cn/news/list/cba8c58c-b2d4-4f48-bf64-a10b59fb2666/1.shtml
">+MORE</a></span></h4>
<div class="msdy">
<div class="msdy-left"><img src="/Public/images/wenhao-1.jpg" /></div>
	<div class="msdy-right">
<ul>
<li><a href="http://www.itcast.cn/news/20121005/12001594210.shtml"><span style="color:#ff0000;">PHP应该学什么,如何学好PHP(三) </span></a></li>
<li><a href="http://www.itcast.cn/news/20120927/16401417864.shtml"><span style="color:#ff0000;">PHP应该学什么,如何学好PHP(二)</span></a></li>
<li><a href="http://php.itcast.cn/news/799c995f/0d03/4854/bfe7/408946a307cf.shtml">一个渴求学习但不知如何下手学生咨询</a></li>
<li><a href="http://php.itcast.cn/news/df1cdbcc/0d4d/443a/862d/74256c3d9d55.shtml">印度哥们咨询tomcat配置问题</a></li>
<li><a href="http://php.itcast.cn/news/1addc276/f963/4971/8a33/d2f64249e2b5.shtml">请教先学习PHP还是JAVA的问题</a></li>
<li><a href="http://php.itcast.cn/news/413aa0a7/f5d3/4509/bee2/c25751eb134f.shtml">怎么设置自己做好的自定义404错误页面</a></li>
</ul>
<ul>
<li><a href="http://php.itcast.cn/news/20130523/16573389409.shtml">传智播客PHP视频教程手册大全</a>
<img height="5" src="/Public/images/news.jpg" width="24" /></li>
<li><a href="http://php.itcast.cn/news/20130703/11524035296.shtml">韩老师回答大一学生如何选择专业问题</a></li>
<li><a href="http://php.itcast.cn/news/0fbf01be/6e31/41df/ad94/8431fca1170b.shtml">传智PHP视频的几点问题，请韩老师回复</a></li>
<li><a href="http://php.itcast.cn/news/851472a5/95af/4b0e/8842/f61ab76eb6d7.shtml">韩老师，能把PHP课程笔记发给我吗？</a></li>
<li><a href="http://php.itcast.cn/news/84feccef/913f/443d/8bef/487d30b73cf5.shtml">一位农民工流动人员给韩老师一封信</a></li>
<li><a href="http://php.itcast.cn/news/list/cba8c58c-b2d4-4f48-bf64-a10b59fb2666/1.shtml"><font style="color: red"><b>&gt;&gt;查看更多答疑信息</b></font></a></li>
</ul>
</div>
<br />

</div>

<div class="clear"></div>
</div>
<div><img src="/Public/images/leftbottom.gif"/></div>
	<div></div>
</div>		
<div id="right" class="fl">	
<h4 class="righttitle1" style="margin-top:10px;"><span class="fl">PHP培训开班信息</span></h4>
<div class="jyjb-left" >
      <?php if(is_array($data1)): $i = 0; $__LIST__ = $data1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><ul>
    <!--
<li style="border-bottom: medium none; float: left; color: #515151">

<a href="http://php.itcast.cn/php/course/base.shtml"><b><font style="color: #515151">PHP基础班</font></b></a></li>
<br />
    -->
  
        <li style="border-bottom: medium none; float: left; color: #515151">

        <a href="/index.php/home/school/stage"><b><font style="color: #515151"><?php echo ($vo["class_name"]); ?></font></b></a></li></br>
    
</ul>
          <ul style="clear: both">
<li><a  target="_blank"><span class="time jyjb-font2"><b>预约报名</b></span>北京--第34期(2015年01月10号)</a></li>
<li><a  target="_blank"><span class="time jyjb-font1"><b>爆满已开班</b></span>北京--第33期(2014年11月27号)</a></li>
<li><a  target="_blank"><span class="time jyjb-font2"><b>预约报名</b></span>广州--第08期(2014年12月25号)</a></li>
</ul><?php endforeach; endif; else: echo "" ;endif; ?>



</div>
<div class="rightbottom"><img src="/Public/images/rightbottom.jpg"  /></div>		
<h4 class="righttitle1 zhaopin"><span class="blue">最新</span>企业招聘</h4>
<div class="rightkuang1">
<p class="cent"> <img src="/Public/images/select.jpg"  width="256" height="66" /></p>
<table border="0" cellpadding="0" cellspacing="0" class="zhaopinlist" height="124" style="margin-top: 5px" width="98%">
<tbody>
<tr>
<td class="td1" width="73%"><a href="http://www.itcast.cn/news/20141201/16233788127.shtml" target="_blank">上海北岸信息生物谷招聘</a></td>
<td width="11%">若干</td>
<td width="16%">11.28</td>
</tr>
<tr>
<td class="td1" width="73%"><a href="http://www.itcast.cn/news/20141201/16165624603.shtml" target="_blank">北京韩购街贸易有限公司招聘</a></td>
<td width="11%">若干</td>
<td width="16%">11.21</td>
</tr>
<tr>
<td class="td1" width="73%"><a href="http://www.itcast.cn/news/20141201/16155357521.shtml" target="_blank">北京花生米数字科技公司招聘</a></td>
<td width="11%">若干</td>
<td width="16%">11.21</td>
</tr>
<tr>
<td class="td1" width="73%"><a href="http://www.itcast.cn/news/20141201/16145632220.shtml" target="_blank">集慧智佳知识产权管理招聘</a></td>
<td width="11%">若干</td>
<td width="16%">11.21</td>
</tr>
<tr>
<td class="td1" width="73%"><a href="http://www.itcast.cn/news/20141201/16135856735.shtml" target="_blank">北京金万维科技有限公司招聘</a></td>
<td width="11%">若干</td>
<td width="16%">11.21</td>
</tr>
<tr>
<td class="td1" width="73%"><a href="http://www.itcast.cn/news/list/20c133c0-6635-421c-acae-6125b0702b34/1.shtml" target="_blank"><span style="color:#ff0000;">更多企业招聘信息请点击&hellip;&hellip;</span></a></td>
<td width="11%"><a href="http://www.itcast.cn/news/list/20c133c0-6635-421c-acae-6125b0702b34/1.shtml" target="_blank"><span style="color:#ff0000;">查看</span></a></td>
<td width="16%"><a href="http://www.itcast.cn/news/list/20c133c0-6635-421c-acae-6125b0702b34/1.shtml" target="_blank"><span style="color:#ff0000;">更多</span></a></td>
</tr>
<tr></tr>
</tbody>
</table>

<div class="clear"></div>

</div>
<div class="rightbottom"><img src="/Public/images/bottom1.gif"  /></div>
<h4 class="righttitle1 zhaopin" style="margin-top:3px;"><span class="blue">常见</span>问题</h4>
<div class="rightkuang1" style="padding-top:18px;">
<ul class="zhaopinlist wenti">
<ul class="zhaopinlist wenti">
    <?php if(is_array($data4)): $i = 0; $__LIST__ = $data4;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="/inedx.php/home/question/question_detail?id=<?php echo ($vo["question_id"]); ?>" target="_blank"><?php echo ($vo["question_title"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
        <!--
<li><a href="http://php.itcast.cn/news/20130723/11245447222.shtml" target="_blank">贵校php教学与**学校相比有哪些特色</a>
<img height="15" src="/Public/images/new.gif" width="29" /></li>
<li><a href="/news/6c691c56/0dae/41ff/996a/2d110a612490.shtml" target="_blank">你们的PHP培训为什么那么便宜？</a>
<img height="15" src="/Public/images/new.gif" width="29" /></li>
<li><a href="/news/28bc21c1/10ef/4bcb/ad34/c0b70fc9ab8a.shtml" target="_blank">你们入学需要什么样的基础</a>
<img height="15" src="/Public/images/new.gif" width="29" /></li>
<li><a href="/news/13099012/ae09/4d3b/ad0e/b945b114ae9c.shtml" target="_blank">你们的师资力量是什么样子的？</a>
<img height="15" src="/Public/images/new.gif" width="29" /></li>
<li><a href="/news/5b2001e2/b84e/4b60/b9a2/fb3ca2def9f7.shtml" target="_blank">你们的课程内容质量是怎么样的？</a></li>
<li><a href="/news/28486a2e/2e20/4536/9dee/23b8b0964d3a.shtml" target="_blank">你们PHP的学习模式是什么样的？</a></li>
<li><a href="/news/38f18d98/e496/4c46/9561/5c14558c4394.shtml" target="_blank">你们PHP培训的费用这么低，不怕别人说&quot;便宜没好货&quot;吗？签协议工作有保障吗？</a></li>
<li><a href="/news/ec9cdb54/95e8/4d2a/862b/0e7213e7f254.shtml" target="_blank">你们的PHP培训质量有保证吗？</a></li>
<li><a href="/news/23700cbd/742d/46ab/b40a/921b780819e0.shtml" target="_blank">你们的课程安排，是怎么样的？</a></li>
-->
    </ul> 
<div class="clear"></div>
	 <p class="text-r"><a href="/php/question.shtml">
	<img src="/Public/images/jiantoumore.gif"  border="0" /></a></p>
</div>
<div class="rightbottom"><img src="/Public/images/bottom1.gif"  /></div>

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
<div class="rightbottom"><img src="/Public/images/rightbottom.jpg"  /></div>
</div>
</div>		
<div class="clear"></div>

<!-- 友情链接 -->
<div class="content">
<div class="friendlink_con">
<div class="friendlink">
<div class="friendlink_style01"><img width="37" height="87" src="/Public/images/youqin.jpg"></div>
<div class="friendlink_style03">
<ul>
<li><a href="http://www.sietoo.com" target="_blank">深圳网站建设</a></li>
<li><a href="http://www.ibeifeng.com" target="_blank">北风网</a></li>
<li><a href="http://www.wangxiaowang.com/" target="_blank">网络教育</a></li>
<li><a href="http://bbs.17liuxue.com" target="_blank">澳洲留学DIY</a></li>
<li><a href="http://qd.jiajiao400.com" target="_blank">青岛家教网</a></li>
<li><a href="http://www.028jq.com" target="_blank">英国留学</a></li>
<li><a href="http://www.shisu-edu.com/" target="_blank">上外留学预科</a></li>
<li><a href="http://lyg.ygjj.com/" target="_blank">连云港家教</a></li>
<li><a href="http://www.wen5u.com" target="_blank">论文格式</a></li>
<li><a href="http://edu.tianhenet.com.cn" target="_blank">CFO培训</a></li>
<li><a href="http://baike.zidiantong.com" target="_blank">百科知识</a></li>
<li><a href="http://www.xjc100.com" target="_blank">宁波电脑培训</a></li>
<li><a href="http://jl.htexam.com" target="_blank">吉林省公务员考试网</a></li>
<li><a href="http://bbs.xunkoo.com" target="_blank">大学生网</a></li>
<li><a href="http://www.0755zixuekaoshi.com" target="_blank">深圳自学考试网</a></li>
<li><a href="http://www.youzhikew.com" target="_blank">优质课网</a></li>
<li><a href="http://www.youkao.com" target="_blank">优考网</a></li>
<li><a href="http://www.fshuayue.com/" target="_blank">成人高考网</a></li>
<li><a href="http://sz.gaofen.com" target="_blank">深圳教育网</a></li>
<li><a href="http://cjcx.xygmed.com" target="_blank">执业医师成绩查询</a></li>
<li><a href="http://zs.k8008.com" target="_blank">科技招商</a></li>
<li><a href="http://www.jsnxs.com" target="_blank">江苏信用社招聘考试</a></li>
<li><a href="http://www.peixunhu.com" target="_blank">武汉培训网</a></li>
<li><a href="http://net.thea.cn" target="_blank">在线课程</a></li>
<li><a href="http://zz.jiajiao400.com/" target="_blank">郑州家教</a></li>
<li><a href="http://keji.3158.cn " target="_blank">网络教育</a></li>
<li><a href="http://aia.lixinedu.com.cn" target="_blank">AIA培训</a></li>
</ul>

</div>
</div>
</div>
</div>
<!-- 友情链接 --> 
    
    
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

<script>
    function lsSubmit(){
      if($("#ls_username") .val()==""){
          alert("请完善信息，再登录");
          return false;
      }
      
      if($("#ls_password") .val()==""){
          alert("请完善信息，再登录");
           return false;
      }
    }
</script>
</body>
</html>