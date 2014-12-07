<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
                <link rel="stylesheet" href="/Public/css/public.css" />
                <script type="text/javascript" src="/Public/admin/js/jq.js"></script>

</head>
<body>
    <form action="update_nav_pro" method="post" onsubmit="return check()">
                <table class="table">
                        <tr >
                                <td class="th" colspan="2">修改导航</td>
                        </tr>
                        <tr>
                                <td>导航名称</td>
                                <td>
                                    <input type="text" name="nav_name" onblur="checkname()" id="nav_name" value='<?php echo ($data["nav_name"]); ?>'/>
                                    <font color="red"><span id="spname"></span></font>
                                </td>
                        </tr>
                          <tr>
                                <td>导航url</td>
                                <td>
                                   <input type='hidden' name='h_id' value='<?php echo ($data["nav_id"]); ?>'>
                                    <input type="text" name="nav_url" onblur="checkurl()" id="nav_url" value="<?php echo ($data["nav_url"]); ?>"/>
                                    <font color="red"><span id="spurl"></span></font>
                                </td>
                        </tr>
                        <tr>
                                <td>开启状态</td>
                                <td>
                                    
                                        <input type="radio" name="is_show" value="1" checked="checked"/>开启
                                        <input type="radio" name="is_show" value="0" />关闭
                                </td>

                        </tr>
                        <tr>
                                <td>排序</td>
                                <td>
                                <input type="text" name="sort" value="<?php echo ($data["sort"]); ?>"/>

                                </td>

                        </tr>


                        <tr>
                                <td colspan="2">
                                        <input type="submit" value="修改" class="input_button"/>
                                        <input type="reset" class="input_button"/>
                                </td>
                        </tr>
                </table>
        </form>
</body>
</html>
<script>
    function checkname(){
          if($('#nav_name').val()==''){
                //alert('请输入用户名！');
                $("#spname").html("导航名称不能为空！");
                return false;
           }
        
    }
    
     function checkurl(){
          if($('#nav_url').val()==''){
                //alert('请输入用户名！');
                $("#spurl").html("导航链接不能为空！");
                return false;
           }
        
    }
    function check(){
        if($('#nav_name').val()==''){
                alert('导航名称不能为空！');
              
                return false;
           }
            if($('#nav_url').val()==''){
                alert('导航链接不能为空！');
               
                return false;
           }
        
    }
</script>