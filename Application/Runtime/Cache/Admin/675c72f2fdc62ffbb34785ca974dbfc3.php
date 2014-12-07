<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
		<link rel="stylesheet" href="/Public/css/public.css" />
	<title></title>
</head>
<body>
	<form action="/admin/School/up_teacher_pro" method="post">
		<table class="table">
			<tr >
				<td class="th" colspan="2">添加阶段</td>
			</tr>
			<tr>
				<td>阶段名称</td>
				<td><input type="text" name="class_leve_name" value="<?php echo ($list["class_leve_name"]); ?>"/></td>
			</tr>
			<tr>
				<td>所属课程</td>
				<td>
					<select name="class_name">
                                           
                                            <?php if(is_array($brand)): $i = 0; $__LIST__ = $brand;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["class_name"]); ?>" <?php if($vo["class_name"] == $list.class_name): ?>selected<?php endif; ?>  ><?php echo ($vo["class_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
					</select>
				</td>
			</tr>
			<tr>
				<td>描述</td>
				<td>
					<textarea name="class_leve_content" id="description" class="textarea"><?php echo ($list["class_leve_content"]); ?></textarea>
				</td>
			</tr>
			<tr>
				<td colspan="2">
                                        <input type="hidden" value="<?php echo ($list["class_leve_id"]); ?>" name="class_leve_id"/>
					<input type="submit" value="修改" class="input_button"/>
					<input type="reset" class="input_button"/>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>