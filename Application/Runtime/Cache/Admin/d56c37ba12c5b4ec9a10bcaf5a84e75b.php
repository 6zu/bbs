<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
		<link rel="stylesheet" href="/Public/css/public.css" />
	<title></title>
</head>
<body>
	<form action="" method="post">
		<table class="table">
			<tr >
				<td class="th" colspan="2">添加视频</td>
				<td>
				
				</td>
			</tr>
			<tr>
				<td>上传视频</td>
				<td><input type="file" name=""/></td>
			</tr>
		
			<tr>
				<td>简介</td>
				<td>
					<textarea name="" id="description" class="textarea"></textarea>
				</td>
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