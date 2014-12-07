<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title></title>
	<link rel="stylesheet" href="/Public/css/public.css" />
	<script type="text/javascript" src="/Public/js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="/Public/js/public.js"></script>	
</head>
<body>
	<table class="table">
		<tr>
			<td class="th" colspan="10">就业信息列表</td>
		</tr>
		<tr>
			<th>学员</th>
			<th>毕业学校</th>
			<th>工作时间</th>
			<th>入职公司</th>
			<th>薪资</th>
			<th>操作</th>
		</tr>
		<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr align='center'>
			<td><?php echo ($vo["student_name"]); ?></td>
			<td><?php echo ($vo["student_school"]); ?></td>
			<td><?php echo ($vo["job_time"]); ?></td>
			<td><?php echo ($vo["job_company"]); ?></td>
			<td><?php echo ($vo["job_money"]); ?></td>
			<td>
				<a href="/index.php/Admin/Student/stu_info?id=<?php echo ($vo["student_id"]); ?>">[编辑]</a>
				<a href="/index.php/Admin/Student/stu_delete?id=<?php echo ($vo["student_id"]); ?>" class="del">[删除]</a>
			</td>
		</tr><?php endforeach; endif; else: echo "" ;endif; ?>
	</table>
		<div class="page">
			<?php echo ($page); ?>
		</div>
</body>
</html>