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
			<td class="th" colspan="10">阶段列表</td>
		</tr>
		<tr>
			<th>CID</th>
			<th>名字</th>
			<th>职业</th>
                        <th>描述</th>
                        <th>照片</th>
			<th>操作</th>
		</tr>
            <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
			<td><?php echo ($vo["teacher_id"]); ?></td>
			<td><?php echo ($vo["teacher_name"]); ?></td>
			<td><?php echo ($vo["teacher_job"]); ?></td>
                        <td><?php echo ($vo["teacher_desc"]); ?></td>
                        <td><img src ="/Public/Uploads/<?php echo ($vo["teacher_img"]); ?>" width="30px" height="30px"></td>
			<td>
				<a href="/admin/School/up_teacher?id=<?php echo ($vo["teacher_id"]); ?>">[编辑]</a>
				<a href="/admin/School/del_teacher?id=<?php echo ($vo["teacher_id"]); ?>" class="del">[删除]</a>
			</td>
		</tr><?php endforeach; endif; else: echo "" ;endif; ?>
	</table>
		<div  style="margin-top:10px" align="center"> <?php echo ($page); ?></div>
</body>
</html>