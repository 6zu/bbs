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
        <li><a href="http://www.itcast.cn/channel/contact.shtml">来校路线</a></li>
        <li><a href="http://bbs.itcast.cn" target="_blank">技术论坛 </a></li>
          -->
        
          <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="http://php.itcast.cn" id="nav_course"><?php echo ($vo["nav_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
        </div>