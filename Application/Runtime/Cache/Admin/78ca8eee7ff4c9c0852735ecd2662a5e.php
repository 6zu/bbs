<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
                <link rel="stylesheet" href="/Public/css/public.css" />
                <script type="text/javascript" src="/Public/admin/js/jq.js"></script>

</head>
<body>
    <form action="update_type_pro" method="post" onsubmit="return check()">
                <table class="table">
                        <tr >
                                <td class="th" colspan="2">修改问题分类</td>
                        </tr>
                        <tr>
                                <td>分类名称</td>
                                <td>
                                    <input type="text" name="question_type_name" value="<?php echo ($data["question_type_name"]); ?>" onblur="checkname()" id="question_type_name"/>
                                    <font color="red"><span id="spname"></span></font>
                                </td>
                        </tr>
                          <tr>
                                <td>分类描述</td>
                                <td>
                                    <input type="text" name="question_type_desc" value="<?php echo ($data["question_type_desc"]); ?>" id="question_type_desc" onblur="checkdesc()"/> <font color="red">
                                    <span id="spdesc"></span></font>

                                </td>

                        </tr>
                        <tr>
                                <td>开启状态</td>
                                <td>
                                     <?php if($data["is_show"] == 1): ?><input type="radio" name="is_show" value="1" checked="checked"/>开启
                                     
                                        <input type="radio" name="is_show" value="0" />关闭
                                      <?php else: ?>
                                      <input type="radio" name="is_show" value="1"/>开启
                                     
                                        <input type="radio" name="is_show" value="0"  checked="checked"/>关闭<?php endif; ?>
                                </td>

                        </tr>
                        


                        <tr>
                                <td colspan="2">
                                        <input type="submit" value="修改" class="input_button"/>
                                        <input type="reset" class="input_button"/>
                                        <input type="hidden" value="<?php echo ($data["question_type_id"]); ?>" name="question_type_id">
                                </td>
                        </tr>
                </table>
        </form>
</body>
</html>
<script>
    function checkname(){
          if($('#question_type_name').val()==''){
                //alert('请输入用户名！');
                $("#spname").html("分类名称不能为空！");
                return false;
           }
        
    }
    
     function checkdesc(){
          if($('#question_type_desc').val()==''){
                //alert('请输入用户名！');
                $("#spurl").html("分类描述不能为空！");
                return false;
           }
        
    }
    function check(){
        if($('#question_type_name').val()==''){
                alert('分类名称不能为空！');
              
                return false;
           }
            if($('#question_type_desc').val()==''){
                alert('分类描述不能为空！');
               
                return false;
           }
        
    }
</script>