<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
                <link rel="stylesheet" href="/Public/css/public.css" />
        <title></title>
</head>
<body>
        <form action="add_question_pro" method="post">
                <table class="table">
                        <tr >
                                <td class="th" colspan="2">添加问题</td>
                        </tr>
                        <tr>
                                <td>问题标题</td>
                                <td><input type="text" name="question_title"/></td>
                        </tr>
                        <tr>
                                <td>所属分类</td>
                                <td>
                                                                                  <select name="question_type">

                                                                                        <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["question_type_id"]); ?>"><?php echo ($vo["question_type_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                                                                    </select>
                                </td>
                        </tr>
                        <tr>
                                <td>回答问题<td>

                                        <textarea name="question_content" id="description" class="textarea"></textarea>

                        </tr>
                        <tr>
                                <td colspan="2">
                                        <input type="submit" value="添加" class="input_button"/>
                                        <input type="reset" class="input_button"/>
                                </td>
                        </tr>
                </table>
        </form>
</body>
</html>