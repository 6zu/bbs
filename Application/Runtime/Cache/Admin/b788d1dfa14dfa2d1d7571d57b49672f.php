<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
	<link type="text/css" rel="stylesheet" href="/Public/admin/backend/css/bootstrap.css"/>
	<link type="text/css" rel="stylesheet" href="/Public/admin/backend/css/home.css"/>
	<link type="text/css" rel="stylesheet" href="/Public/admin/backend/css/public.css"/>

  </head>
  <body style="padding:20px;">
    
    <div id="panel-left">
      <div >
        <div class="box">
            <div class="title">
                <h4>
                    <span class="icon-user"></span>
                    <span>个人信息</span>
                </h4>
                <a href="#" class="minimize hide"></a>
            </div>
            <div class="content" style="display: block;">
                    <p>你好，111</p>
                    <p>所属角色：超级管理员</p>
                    <p>上次登录时间：2014-10-24</p>
                    <p>上次登录IP：192.168.1.222</p>
                </table>
            </div>
        </div>
      </div>
       <div >
          <div class="box">
              <div class="title">
                  <h4>
                      <span class="icon-exclamation-sign"></span>
                      <span>安全提示</span>
                  </h4>
                  <a href="#" class="minimize hide"></a>
              </div>
              <div class="content sys" style="display: block;">
                <p>建议将&nbsp;htdocs&nbsp;目录权限修改为644</p>
                <p>建议将&nbsp;web&nbsp;目录权限修改为644</p>
                <p>系统安装完成后将&nbsp;install&nbsp;目录删除</p>
              </div>
          </div>
        </div>
        <div >
          <div class="box">
              <div class="title">
                  <h4>
                      <span class="icon-flag"></span>
                      <span>系统信息</span>
                  </h4>
                  <a href="#" class="minimize hide"></a>
              </div>
              <div class="content" style="display: block;">
                <p>bbs后台管理 <span id="version"></span><span id="new-version"><a class="success" href="http://www.php100.com/">有新版本发布了，马上更新？</a></span></p>
                <p class="hide" id="show-new-version"></p>
                <p>操作系统：<?php echo PHP_OS;?></p>
                <p>PHP：<?php echo PHP_VERSION;?></p>
                <p>服务器环境：<?php echo $_SERVER['SERVER_SOFTWARE'];?></p>
                <p>MySQL版本：<?php ?></p>
              </div>
          </div>
        </div>
        </div>
        <div id="panel-right">
        <div >
        <div >
         
        </div>
        <div >
          <div class="box">
              <div class="title">
                  <h4>
                      <span class="icon-question-sign"></span>
                      <span>帮助中心</span>
                  </h4>
                  <a href="#" class="minimize hide"></a>
              </div>
              <div class="content fast-opt help-opt" style="display: block;">
                <a href="http://www.bawei.com/" target="_blank">传智播客</a>
                <a href="http://www.bwbbs.com/" target="_blank">后盾网</a>
                <a href="http://www.bwphp.com/" target="_blank">八维PHP</a>
                 <div style="clear:both"></div>
              </div>
          </div>
        </div>
        <div >
          <div class="box">
              <div class="title">
                  <h4>
                      <span class="icon-home"></span>
                      <span>作者</span>
                  </h4>
                  <a href="#" class="minimize hide"></a>
              </div>
              <div class="content" style="display: block;">
                <p>核心开发：<a href="mailto:zhangbo1248@gmail.com">工作室</a></p>
                <p>技术支持：<a href="mailto:houdunwangxj@gmail.com">工作室</a></p>
                <p>通过&nbsp;<a href='#' target="_blank">Thinkphp3.2框架</a>&nbsp;构建</p>
              </div>
          </div>
        </div>
         <div >
          <div class="box">
              <div class="title">
                  <h4>
                      <span class="icon-fire"></span>
                      <span>官方动态</span>
                  </h4>
                  <a href="#" class="minimize hide"></a>
              </div>
              <div class="content" id="news" style="display: block;">
               <p>八维&nbsp;<a href="#" target="_blank">学员作品</a>&nbsp;展示</p>
               <p>基于&nbsp;<a href='#' target="_blank">Thinkphp3.2框架</a>&nbsp;开发的bbs网站</a></p>
               <p>最新&nbsp;<a href="#" target="_blank">PHP课程</a>&nbsp;介绍</p>
              </div>
          </div>
        </div>
</div>
        <style type="text/css">
        #panel-left{
          width: 45%;
          float: left;
          margin-right: 20px;
        }
        #panel-right{
          width: 45%;
          float: left;
        }
        .fast-opt a{
          padding:5px 20px;
        }
        .help-opt{
          padding:5px 10px;
        }
        #new-version{
          display: none;
          padding-left: 10px;
        }
        </style>
<script type="text/javascript" src="http://www.houdunwang.com/hdjob/product/index.php/product/index/index/version/<?php echo ($hd["config"]["version"]); ?>/product/hdjob"></script>
<script type="text/javascript">
  $('.title').hover(function(){
    $(this).children('.minimize').removeClass('hide');
  },function(){
    $(this).children('.minimize').addClass('hide');
  });
  $('.minimize').toggle(function(){
    $(this).parent().next().slideUp();
  },function(){
    $(this).parent().next().slideDown();
  });
</script>
  </body>
</html>