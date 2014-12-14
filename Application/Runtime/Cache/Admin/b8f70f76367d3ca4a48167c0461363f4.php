<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
		<link rel="stylesheet" href="/Public/css/public.css" />
	<title></title>
</head>
<body>
	<form action="/index.php/Admin/Video/video_add_pro"  enctype="multipart/form-data" method="post">
		<table class="table">
			<tr >
				<td class="th" colspan="2">添加视频</td>
				<td>
				</td>
			</tr>
                    <tr>
				<td>视频名称</td>
				<td><input type="text" name="name"/></td>
				
			</tr>
			<tr>
				<td>视频路径</td>
				<td><input type="text" name="video"/></td>
			</tr>
                        <tr>
				<td>封面</td>
				<td><input type="file" name="fenmian"/></td>
			</tr>
			<tr>
				<td>作者</td>
				
				<td><input type="text" name="author"/></td>
				
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