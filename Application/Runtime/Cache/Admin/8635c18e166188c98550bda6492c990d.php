<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
		<link rel="stylesheet" href="/Public/css/public.css" />
	<title></title>
</head>
<body>
	<form action="/admin/School/up_teacher_pro" method="post" enctype="multipart/form-data">
		<table class="table">
			<tr >
				<td class="th" colspan="2">教师阶段</td>
			</tr>
			<tr>
				<td>教师名称</td>
				<td><input type="text" name="teacher_name" value='<?php echo ($list["teacher_name"]); ?>'/></td>
			</tr>
			<tr>
				<td>所属职位</td>
				<td><input type="text" name="teacher_job" value='<?php echo ($list["teacher_job"]); ?>' /></td>

			</tr>
			<tr>
				<td>上传头像</td>
				<td><input type="file" name="teacher_img"/>   原图：<img src ="/Public/Uploads/<?php echo ($list["teacher_img"]); ?>" width="30px" height="30px"></td>
			</tr>
			<tr>
				<td>描述</td>
				<td>
					<textarea name="teacher_desc" id="description" class="textarea"><?php echo ($list["teacher_desc"]); ?></textarea>
				</td>
			</tr>
			<tr>
				<td colspan="2">
                                        <input type="hidden" value="<?php echo ($list["teacher_id"]); ?>" name="teacher_id"/>
                                        <input type="hidden" value="<?php echo ($list["teacher_img"]); ?>" name="teacher_imgs"/>
					<input type="submit" value="修改" class="input_button"/>
					<input type="reset" class="input_button"/>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>