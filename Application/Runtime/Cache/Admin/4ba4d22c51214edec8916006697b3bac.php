<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
                <link rel="stylesheet" href="/Public/css/public.css" />
        <title></title>
</head>
<body>
        <form action="update_article_pro" method="post">
                <table class="table">
                        <tr >
                                <td class="th" colspan="2">添加学院消息</td>
                        </tr>
                        <tr>
                                <td>文章标题</td>
                                <td><input type="text" name="college_article_title" value="<?php echo ($data["college_article_title"]); ?>"/></td>
                        </tr>
                        
                        <tr>
                                <td>文章内容<td>

                                        <textarea name="college_article_content" id="description" class="textarea"><?php echo ($data["college_article_content"]); ?></textarea>
                                        <input type='hidden' name="college_article_id" value="<?php echo ($data["college_article_id"]); ?>">
                        </tr>
                        <tr>
                                <td colspan="2">
                                        <input type="submit" value="编辑" class="input_button"/>
                                        <input type="reset" class="input_button"/>
                                </td>
                        </tr>
                </table>
        </form>
</body>
</html>