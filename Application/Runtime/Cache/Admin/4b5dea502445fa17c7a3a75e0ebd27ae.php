<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
		<link rel="stylesheet" href="/Public/css/public.css" />
	<title>就业信息</title>
</head>
<body>

	<form action="/index.php/Admin/Student/<?php echo ($action); ?>" method="post" enctype="multipart/form-data">
		<table class="table">
			<tr>
				<td class="th" colspan="2"><?php echo ($tag); ?>就业信息</td>
			</tr>
			<tr>
				<td width=5%>学员姓名</td>
				<td><input type="text" name="name"  value=""/></td>
			</tr>
			<tr>
				<td>毕业院校</td>
				<td><input type="text" name="school"  value=""/></td>
			</tr>
			<tr>
				<td>学员相片</td>
				<td>
					<input type="file" name="img"/>
				</td>
			</tr>
			<tr>
				<td>就业时间</td>
				<td>
					<input type="text" name="time"  value=""/>
				</td>
			</tr>
			<tr>
				<td>入职公司</td>
				<td>
					<input type="text" name="company" value=""/>
				</td>
			</tr>
			<tr>
				<td>薪资</td>
				<td>
					<input type="text" name="money" value=""/>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="submit" value="添加" class="input_button"/>
					<input type="reset" class="input_button"/>
					<input type="hidden" name="h_id" value="">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>