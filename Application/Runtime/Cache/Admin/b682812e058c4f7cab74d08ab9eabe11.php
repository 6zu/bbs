<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>管理员登录</title>
    <link type="text/css" rel="stylesheet" href="/Public/admin/css/bootstrap.min.css"/>
    <link type="text/css" rel="stylesheet" href="/Public/admin/css/login.css"/>
	<script type="text/javascript" src="/Public/admin/js/jq.js"></script>
    </head>
    <body>
        <div id="header">
        <a class="brand" href="#"> bbs后台管理  <span size=4px color="#009966"></span><span class="slogan"></span></a>
        </div>
    <div class="container-fluid">

        <div class="loginContainer" id="login-panel">
            <form method="post" action="./admin_login_pro" id="loginForm" >
                <table>
                    <tr>
                        <th><span class="login-input"><label for="name">用户名：</label></span></th>
                    </tr>
                    <tr>
                        <td><input type="text" class="input-xlarge" tabindex="1" name="admin_name" id="name" onblur="checkname()"/><span id="spname"></span></td>
                    </tr>
                    <tr>
                        <th><span class="login-input"><label for="pwd">密码：</label><a href="http://www.1308a9.com/index.php/admin/mima">忘记密码？</a></span> </th>
                    </tr>
                    <tr>
                        <td><input type="password" class="input-xlarge" tabindex="2" name="admin_pwd" id="pwd" /></td>
                    </tr>
                                        <tr>
                        <th><span class="login-input"><label for="code">验证码：</label></span></th>
                    </tr>
                    <tr>
                        <td class="code">
                            <input type="text" class="input-mini" tabindex="3" name="yzm" id="code"/>				
                         <img src='http://www.olbaidu.cn/travel/admin/index.php/admin/verify_image' onclick="gai()"  width="90" id='yzm'/> 
                        </td>
                    </tr>
                                    </table>
                <div id="login">
                    <button type="submit" tabindex="3" class="btn btn-info" style='float:left'><i class="icon-edit icon-white"></i>&nbsp;&nbsp;登录</button>&nbsp;&nbsp;
                </div>
				
            </form>
        </div>
<script type="text/javascript">
	function gai(){
			//alert(111)
			var yzma=document.getElementById("yzm");

				//jq("#yzm").attr("src","/index.php/index/verify_image");
			yzma.src="http://www.olbaidu.cn/travel/admin/index.php/admin/verify_image?r=" + Math.random();
	}

	</script>
    </div>
    <script type="text/javascript" src="/js/jquery-1.7.2.min.js"></script>
	<script>
	function yzm(){
		var code=document.getElementById('code');
		code.src="./login/"+Math.random();									
	}
	function register(){
		location.href='./admin_register';									
	}
</script>
    <script type="text/javascript">
    $('#loginForm').submit(function(){
        if($('#name').val()==''){
            alert('请输入用户名！');
            return false;
        }
        if($('#pwd').val()==''){
            alert('请输入密码！');
            return false;
        }
        if($('#code').val()==''){
            alert('请输入验证码！');
            return false;
        }
    });
     window.onload=function(){(window.onresize=function(){

            //获取可见高度
            var _h=document.documentElement.clientHeight,
            _n_h=$('#login-panel').height();
            var _login_top=(_h-_n_h-100)/2;
            $('#login-panel').animate({'margin-top':_login_top+'px'},'slow');
        })()};
        $('#name').focus();
    </script>
    </body>
</html>