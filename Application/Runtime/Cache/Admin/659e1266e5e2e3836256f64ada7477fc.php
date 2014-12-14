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
			<td class="th" colspan="10">班级列表</td>
		</tr>
		<tr>
			<th>CID</th>
			<th>班级名称</th>
                        <th>关键字</th>
			<th>描述</th>
                        <th>图片</th>
                        <th>状态</th>
			<th>操作</th>
		</tr>
            <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
			<td><?php echo ($vo["class_id"]); ?></td>
                        <td><?php echo ($vo["class_name"]); ?></td>
			<td><?php echo ($vo["class_key"]); ?></td>
                        <td><?php echo ($vo["class_desc"]); ?></td>
                        <td><img src ="/Public/Uploads/<?php echo ($vo["class_img"]); ?>" width="30px" height="30px"></td>
			<?php if($vo["class_stu"] == 0): ?><td>关闭</td>
                            <?php else: ?>
                            <td>开启</td><?php endif; ?>
			<td>
                               <?php if($vo["class_stu"] == 1): ?><a href="/admin/School/up_class_stu?id=<?php echo ($vo["class_id"]); ?>&stu=0">[关闭]</a>
                                <?php else: ?>
                                <a href="/admin/School/up_class_stu?id=<?php echo ($vo["class_id"]); ?>&stu=1">[开启]</a><?php endif; ?>
				
				<a href="/admin/School/up_class?id=<?php echo ($vo["class_id"]); ?>">[编辑]</a>
				<a href="/admin/School/del_class?id=<?php echo ($vo["class_id"]); ?>" class="del">[删除]</a>
			</td>
		</tr><?php endforeach; endif; else: echo "" ;endif; ?>
		</table>
    <div  style="margin-top:10px" align="center"> <?php echo ($page); ?></div>
		
</body>
</html>