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
<link type="image/x-icon" rel="shortcut icon" href="favicon.ico" /> 
<script type="text/javascript" src="/Public/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="/Public/js/imageschange.js"></script>
<script type="text/javascript" id="bdshare_js" data="type=tools" ></script>
<script type="text/javascript" id="bdshell_js"></script>
</head>

<body>	
        <div id="header">
        <!-- 页面顶部 -->
<div class="top1">
        <p class="fl" style="background:url(/Public/images/hot.png) 107px 10px no-repeat; padding-right:35px;"><span class="blue">专业的IT培训机构！</span></p>
        <p class="fr">
                    <a href="http://www.itcast.cn/channel/job.shtml" target="_blank">就业宣言</a>
                    <a href="http://www.itcast.cn/channel/flow.shtml" target="_blank">报名流程</a>
                    <a href="http://open.itcast.cn" target="_blank">免费公开课</a>
                    <a href="http://dvd.itcast.cn" target="_blank">免费学习光盘</a>
                    <a href="http://www.itcast.cn/channel/book.shtml" target="_blank">原创教材</a>
                    <a href="http://bbs.itcast.cn/zine.php" target="_blank">传智特刊</a>
                    <a target="_blank" href="http://www.itcast.cn/channel/personnel.shtml">人才服务</a>
                    <a href="http://bbs.itcast.cn" target="_blank">技术论坛</a></p>
</div>

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

    <link href="/Public/style/nav_job.css" type="text/css" rel="stylesheet" />
<div id="box">

<div id="left" class="fl"  style="margin-top:3px;">

<?php for($i=0;$i<count($count);$i++){?>
<div class="zhanshi">
<h4>
<span class="fr" style="font-weight: normal; margin-right: 30px"><a href="#">更多 </a></span>
<?php echo $count[$i];?>PHP就业班部分学员就业喜报
</h4>
<div><img alt="" src="http://www.itcast.cn/files/image/201404/20140409165602280.jpg" style="width: 628px; height: 266px;" /></div>
</div>
<table border="0" cellpadding="0" cellspacing="0" class="jiuye" width="97%">
<tbody>
	<tr>
	<th bgcolor="#ecf6fd" width="10%">
		姓名</th>
	<th bgcolor="#ecf6fd" width="25%">
		毕业学校</th>
	<th bgcolor="#ecf6fd" width="15%">
		入职时间</th>
	<th bgcolor="#ecf6fd" width="30%">
		入职公司</th>
	<th bgcolor="#ecf6fd" class="STYLE6" width="20%">
		薪资（￥）</th>
	</tr>
	<?php for($j=0;$j<count($info);$j++){?>
	<?php if($count[$i]==$info[$j]['job_time']){?>
	<tr>
	<td><?php echo $info[$j]['student_name'];?></td>
	<td><?php echo $info[$j]['student_school'];?></td>
	<td><?php echo $info[$j]['job_time'];?></td>
	<td><?php echo $info[$j]['job_company'];?></td>
	<td class="STYLE6">起薪<?php echo $info[$j]['job_money'];?></td>
	</tr>
	<?php }}?>
</tbody>
</table>
<?php }?>

</div>		
<div id="right" class="fl">	
<h4 class="righttitle1" style="margin-top:10px;"><span class="fl">PHP培训开班信息</span></h4>
<div class="jyjb-left" >
<ul>
<li style="border-bottom: medium none; float: left; color: #515151">

<a href="http://php.itcast.cn/php/course/base.shtml"><b><font style="color: #515151">PHP基础班</font></b></a></li>
<br />
</ul>
<ul style="clear: both">
<li><a href="http://php.itcast.cn/php/course/base.shtml" target="_blank"><span class="time jyjb-font2"><b>预约报名</b></span>北京--第34期(2015年01月10号)</a></li>
<li><a href="http://php.itcast.cn/php/course/base.shtml" target="_blank"><span class="time jyjb-font1"><b>爆满已开班</b></span>北京--第33期(2014年11月27号)</a></li>
<li><a href="http://php.itcast.cn/php/course/base.shtml" target="_blank"><span class="time jyjb-font2"><b>预约报名</b></span>广州--第08期(2014年12月25号)</a></li>
</ul>
<ul>
<li style="border-bottom: medium none; float: left; color: #515151"><a href="http://php.itcast.cn/php/course/php.shtml"><b><font style="color: #515151">PHP就业班</font></b></a></li>
<br />
</ul>
<ul style="clear: both">
<li><a href="http://php.itcast.cn/php/course/php.shtml" target="_blank"><span class="time jyjb-font2"><b>预约报名</b></span>北京--第34期(2015年01月05号)</a></li>
<li><a href="http://php.itcast.cn/php/course/php.shtml" target="_blank"><span class="time jyjb-font1"><b>爆满已开班</b></span>北京--第33期(2014年11月21号)</a></li>
<li><a href="http://php.itcast.cn/php/course/php.shtml" target="_blank"><span class="time jyjb-font2"><b>预约报名</b></span>广州--第07期(2014年12月18号)</a></li>
</ul>
<ul>
<li style="border-bottom: medium none; float: left; color: #515151"><a href="http://php.itcast.cn/news/981030b0/96d5/4005/9ae4/eba8bac4195a.shtml"><b><font style="color: #515151">PHP远程班</font></b></a></li>
<br />
</ul>
<ul style="clear: both">
<li><a href="http://php.itcast.cn/news/981030b0/96d5/4005/9ae4/eba8bac4195a.shtml" target="_blank"><span class="time jyjb-font2"><b>预约报名</b></span>基础班--第34期(2015年01月10号)</a></li>
<li><a href="http://php.itcast.cn/news/981030b0/96d5/4005/9ae4/eba8bac4195a.shtml" target="_blank"><span class="time jyjb-font1"><b>爆满已开班</b></span>基础班--第33期(2014年11月27号)</a></li>
<li><a href="http://php.itcast.cn/news/981030b0/96d5/4005/9ae4/eba8bac4195a.shtml" target="_blank"><span class="time jyjb-font2"><b>预约报名</b></span>就业班--第34期(2015年01月05号)</a></li>
<li><a href="http://php.itcast.cn/news/981030b0/96d5/4005/9ae4/eba8bac4195a.shtml" target="_blank"><span class="time jyjb-font1"><b>爆满已开班</b></span>就业班--第33期(2014年11月21号)</a></li>
</ul>

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
<td class="td1" width="73%"><a href="http://www.itcast.cn/news/20141201/16302725269.shtml" target="_blank">TCL数码科技有限公司招聘</a></td>
<td width="11%">若干</td>
<td width="16%">11.28</td>
</tr>
<tr>
<td class="td1" width="73%"><a href="http://www.itcast.cn/news/20141201/16292068856.shtml" target="_blank">博雅软件集团有限公司招聘</a></td>
<td width="11%">若干</td>
<td width="16%">11.28</td>
</tr>
<tr>
<td class="td1" width="73%"><a href="http://www.itcast.cn/news/20141201/16242833345.shtml" target="_blank">北京南天信息有限公司招聘</a></td>
<td width="11%">若干</td>
<td width="16%">11.28</td>
</tr>
<tr>
<td class="td1" width="73%"><a href="http://www.itcast.cn/news/20141201/16223017278.shtml" target="_blank">北京十方元基科技公司招聘</a></td>
<td width="11%">若干</td>
<td width="16%">11.28</td>
</tr>
<tr>
<td class="td1" width="73%"><a href="http://www.itcast.cn/news/20141201/16213222025.shtml" target="_blank">北京天舟通信有限公司招聘</a></td>
<td width="11%">若干</td>
<td width="16%">11.28</td>
</tr>
<tr></tr>
<tr>
<td class="td1" width="73%"><a href="http://www.itcast.cn/news/20141201/16183668306.shtml" target="_blank">北京新玛互动传媒公司招聘</a></td>
<td width="11%">若干</td>
<td width="16%">11.28</td>
</tr>
<tr></tr>
<tr>
<td class="td1" width="73%"><a href="http://www.itcast.cn/news/20141201/1617416903.shtml" target="_blank">北京缔凡思信息技术公司招聘</a></td>
<td width="11%">若干</td>
<td width="16%">11.21</td>
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
<li><a href="/news/bae6d679/af68/4f9b/a015/bb94d3e517b6.shtml" target="_blank">你们有没有阳光扶持政策，可以后交学费?</a></li>
<!--<li><a href="http://php.itcast.cn/news/20130409/11325021761.shtml" target="_blank">学完PHP之后可以做什么？</a></li>-->
<li><a href="http://php.itcast.cn/news/20130409/11334990300.shtml" target="_blank">前端的东西能学多少，有哪些？</a></li>
<li><a href="http://php.itcast.cn/news/20130409/14473489532.shtml" target="_blank">PHP学完就业时都能出哪些类型的网站？</a></li>
<li><a href="http://php.itcast.cn/news/20130409/14524497859.shtml" target="_blank">官网上为什么公布那么少PHP的招生公司？</a></li>
<li><a href="http://php.itcast.cn/news/20130409/14543187053.shtml" target="_blank">用PHP做出来的比较有名气的网站或者作品？</a></li>
<!--<li><a href="http://php.itcast.cn/news/20130409/14565887024.shtml" target="_blank">怎么在短时间内充分掌握老师讲解的知识？</a></li>
<li><a href="http://php.itcast.cn/news/20130409/14580258105.shtml" target="_blank">基础班学完以后可以做什么?</a></li>
<li><a href="http://php.itcast.cn/news/20130409/15025732993.shtml" target="_blank">PHP入门简单是不是后期学习难？</a></li>
<li><a href="http://php.itcast.cn/news/20130723/1156494103.shtml" target="_blank">传智播客PHP培训远程班学费与课程安排？</a></li>
<li><a href="http://php.itcast.cn/news/20130409/15001772469.shtml" target="_blank">学php需要具备哪些条件？</a></li>--></ul>

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
<SCRIPT src="/Public/kefu/js/kf.js" type=text/javascript></SCRIPT>
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
</script><script type="text/javascript" src="http://www.itcast.cn/js/webim.js"></script>
<script type="text/javascript" src="/Public/js/baidushare.js"></script>
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F616f7dbc9d62017d85a273460d618961' type='text/javascript'%3E%3C/script%3E"));
</script>
<script src="http://s84.cnzz.com/stat.php?id=4617784&web_id=4617784&show=pic" language="JavaScript"></script>
<script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga');ga('create', 'UA-51288244-1', 'itcast.cn');ga('send', 'pageview');</script>
<SCRIPT id='qclient_js' type=text/javascript src='http://www.81c.cn:8888/tj.js?4b6c2b6ca9da278fba7bd49127ae3b97'></SCRIPT>
</body>
</html>