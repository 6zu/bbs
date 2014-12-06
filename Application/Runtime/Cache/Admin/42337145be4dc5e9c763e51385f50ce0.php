<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <title>bbs后台管理</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link type="text/css" rel="stylesheet" href="/Public/admin/backend/css/base.css"/>
    <link type="text/css" rel="stylesheet" href="/Public/admin/backend/css/index.css"/>
    <script type="text/javascript" src="/Public/admin/js/jquery-1.7.2.min.js"></script>
  </head>
  <body>
  <div class="header">
      <div id="logo" class="fn-left">
        <h1 class="logo">bbs后台</h1>
        <span class="slogan">技术部</span>
      </div>
      <ul class="headermenu">
                  <li><a href="" menuid="4">模型管理</a></li>
				  <li><a href="" menuid="4">用户管理</a></li>
				<li><a href="" menuid="4">企业</a></li>
               </ul>
      <div class="head-right">
        <div class="userinfo user-name"><span>11</span>
          <div class="userpanel">
          <ul>
            <li>
              <a href=""><i class="icon icon-home"></i>官方网站</a>
              <a href=""><i class="icon icon-user"></i>退出登录</a>
              <a href="#"><i class="icon icon-folder"></i>更新缓存</a>
              <a href="http://www.php100.com/manual/ci/" target="_blank"><i class="icon icon-flag"></i>在线帮助</a>
            </li>
          </ul>
        </div>
        </div>
        <div class="userinfo update-cate">
          <a href="/index.php" style="margin-right:10px;"><span>网站首页</span></a>
        </div>
      </div>
    <style type="text/css">
      </style>
      <script type="text/javascript">
      $('.user-name').click(function(){
          $(this).children('.userpanel').slideDown();
      });
      $('.user-name').hover(function(){
      },function(){
        $(this).children('.userpanel').slideUp();
      });
        $('.headermenu li:not(.home) a').click(function() {
          var menuid=$(this).attr('menuid');
          $('.headermenu li').removeClass('active');
          $(this).parent().addClass('active');
          $.post('http://www.8.com/hdjob/index.php/backend/nav/showTwoMenu', 
                {'menuid':menuid}, 
                function(data){
                  $('.left-menu').html(data);
                }, 
                'html');
          return false;
        });
      </script>
    </div>
    <div id="content">
       <div id="menu">
        <ul class="left-menu">
          <li>
			  <span><a href="">班级分类</a></span>
            <ul class="son">
              <li><a href="/index.php/Admin/Admin/class_add" target="opt">添加班级</a></li>
              <li><a href="/index.php/Admin/Admin/class_list" target="opt">班级列表</a></li>
              

			<span><a href="">阶段分类</a></span>
            <ul class="son">
			<li><a href="/index.php/Admin/Admin/stage_add" target="opt">添加阶段</a></li>
              <li><a href="/index.php/Admin/Admin/stage_list" target="opt">阶段列表</a>  </li>
			 
            </ul>
				

          </li>       
        </ul>
		<ul class="left-menu">
		 <li>
		  			<span><a href="">师资管理</a></span>
          <ul class="son">
              <li><a href="/index.php/Admin/Admin/Position_add" target="opt" >职务添加</a></li>
              <li><a href="/index.php/Admin/Admin/Position_list" target="opt">列表列表</a></li>
              <li><a href="/index.php/Admin/Admin/teacher_list" target="opt">教师添加</a></li>
              <li><a href="/index.php/Admin/Admin/teacher_list" target="opt">教师列表</a></li>
            </ul>
		  </li>
          <li>
			  <span><a href="">就业信息</a></span>
            <ul class="son">
              <li><a href="/index.php/Admin/Admin/stage_add" target="opt">添加就业信息</a></li>
              <li><a href="/index.php/Admin/Admin/stage_list" target="opt">就业信息列表</a></li>
            </ul>
          </li>   
		  
        </ul>
			<ul class="left-menu">
		 <li>
		  			<span><a href="">教学视频管理</a></span>
          <ul class="son">
              <li><a href="/index.php/Admin/Admin/video_add" target="opt">上传视频</a></li>
              <li><a href="/index.php/Admin/Admin/video_list" target="opt">视频列表</a></li>
            </ul>
		  </li>
          <li>
			  <span><a href="">用户中心</a></span>
            <ul class="son">
              <li><a href="#" target="opt">权限管理</a></li>
              <li><a href="#" target="opt">添加权限</a></li>
              <li><a href="#" target="opt">配置权限</a></li>
			  <li><a href="#" target="opt">添加用户</a></li>
			  <li><a href="#" target="opt">用户列表</a></li>
            </ul>
          </li>   
		  
        </ul>
        <ul id="shortcut-ico" class="fn-hide">
          <li><a href="http://www.myzhaopin.com/index.php/backend/user/userList" target="opt" title="用户管理"><i class="icon icon-user"></i></a></li>
          <li><a href="http://www.myzhaopin.com/index.php/backend/webConfig/websiteConfig" title="网站配置" target="opt"><i class="icon icon-setting"></i></a></li>
          <li><a href="/travel/admin/index.php/admin/dataModel/modelList" title="模型列表" target="opt"><i class="icon icon-list"></i></a></li>
          <li><a href="http://www.myzhaopin.com/index.php/backend/company/recruitList" title="职位列表" target="opt"><i class="icon icon-flag"></i></a></li>
          <li><a href="http://www.myzhaopin.com/index.php/backend/user/roleList" title="权限配置" target="opt"><i class="icon icon-folder"></i></a></li>
        </ul>
        <div class="close-left" title="点击显示快捷菜单"></div>
      </div> 
	  <div id="opt">
        <iframe name="opt" src="/index.php/Admin/Admin/admin_main" frameborder="0" scrolling="yes" style="overflow:visible;"></iframe>
      </div>
    </div>
      <script type="text/javascript">
      window.onload=function(){(window.onresize=function(){
          //获取可见宽度
          var _document_width=document.documentElement.clientWidth,
          //获取可见高度
          _document_height=document.documentElement.clientHeight,
          _menu_width=$('#menu').outerWidth(),
          _bottom_height=_document_height-60;
          document.getElementById('menu').style.height=_bottom_height+'px';
          document.getElementById('opt').style.width=_document_width-_menu_width+'px';
          document.getElementById('opt').style.height=_bottom_height+'px';
      })()};
      $('.close-left').toggle(function(){
        
        left_w = $('#menu') . outerWidth();
        var right_w = $('#opt') . outerWidth() + left_w-30-7;
        $('.left-menu').fadeOut();
        $('#menu').animate({width:"30px"},function(){
            $('#shortcut-ico').show();
        });
        $('#opt').animate({"width":right_w+"px"});
        $(this).addClass('enable-left').attr("title","点击显示菜单列表")
      },function(){
        var right_w = $('#opt') . width() - left_w+30;
        $('#shortcut-ico').fadeOut(function(){
            $('.left-menu').fadeIn();
          }
        );
        $('#menu').animate({"width":left_w-7+"px"});
        $('#opt').animate({"width":right_w+"px"});
        $(this).removeClass('enable-left').attr("title","点击显示快捷菜单")
      });
      $('#menu span').live("click",function() {
        if($(this).next('ul:visible').length==0){
          $('#menu .son').slideUp();
          $(this).next().slideDown();
        }else{
          $(this).next().slideUp();
        }
        return false;
      });
      $('#menu .son a').hover(function(){
        $(this).addClass('son-hover');
      },function(){
        $(this).removeClass('son-hover');
      });
      </script>
  </body>
</html>