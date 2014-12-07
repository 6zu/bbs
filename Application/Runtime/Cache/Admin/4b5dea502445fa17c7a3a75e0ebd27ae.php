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
				<td>
				<input type="text" name="name"  value="<?php if(isset($info)){ echo $info['student_name'];}?>"/>
				</td>
			</tr>
			<tr>
				<td>毕业院校</td>
				<td>
				<input type="text" name="school"  value="<?php if(isset($info)){ echo $info['student_school'];}?>"/>
				</td>
			</tr>
			<tr>
				<td>学员相片</td>
				<td>
					<input type="file" name="img"/>
					<?php if(!empty($info['student_img'])){ echo '已上传';}?>
				</td>
			</tr>
			<tr>
				<td>就业时间</td>
				<td>
					<input type="text" name="time"  value="<?php if(isset($info)){ echo $info['job_time'];}?>"/>
				</td>
			</tr>
			<tr>
				<td>入职公司</td>
				<td>
					<input type="text" name="company" value="<?php if(isset($info)){ echo $info['job_company'];}?>"/>
				</td>
			</tr>
			<tr>
				<td>薪资</td>
				<td>
					<input type="text" name="money" value="<?php if(isset($info)){ echo $info['job_money'];}?>"/>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="submit" value="<?php echo ($tag); ?>" class="input_button"/>
					<input type="reset" class="input_button"/>
					<input type="hidden" name="h_id" value="<?php echo ($h_id); ?>">
					<input type="hidden" name="old_img" value="<?php if(isset($info)){ echo $info['student_img'];}?>">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>