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
  <div class="position"><a name="pagetop"/>您现在的位置：<span class="STYLE5"><a href="/index.php">PHP学院</a> &gt;&gt; PHP学院新闻 &gt;&gt; 正文</span></div>
  <div id="left" class="fl" style="margin-top:8px;">
    <div class="infotop"><img src="/Public/images/infotop.gif"/></div>
    <div class="left_content1">
      <div id="printarea">
        <h1 class="infotitle"><?php echo ($article["college_article_title"]); ?></h1>
          <?php
 if($article['update_time']==""){ ?>
         <div class="editer">更新时间:<?php echo ($article["add_time"]); ?> 来源:传智播客PHP学院</div>
        <?php
 }else{ ?>
        <div class="editer">更新时间:<?php echo ($article["update_time"]); ?> 来源:传智播客PHP学院</div>
        <?php
 } ?>
        <div class="infor">
            <p><?php echo ($article["college_article_content"]); ?></p>
        </div>
      </div>

      <div class="clear"></div>

      <div class="ad">
      <!-- 广告区 -->
      <!--<a href="http://icd.itcast.cn"><img border="0" src="http://www.itcast.cn/images/ad/icdad.gif" width="620" /></a>--> 
      <!-- 广告区 -->
      </div>
    </div>
    <div><img src="/Public/images/leftbottom.gif"/></div>
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