<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title></title>
	<link rel="stylesheet" href="/Public/css/public.css" />
	<script type="text/javascript" src="/Public/js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="/Public/js/public.js"></script>
           <script type="text/javascript" src="/Public/js/jquery.js"></script>
</head>
<body>
	<table class="table">
		<tr>
			<td class="th" colspan="10">视频列表</td>
		</tr>
		<tr>
			<th>CID</th>
                        <th>名称</th>
			<th>封面</th>
                        <th>链接地址</th>
			<th>作者</th>
			<th>操作</th>
		</tr>
            <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr id="<?php echo ($vo["video_id"]); ?>">
			<td><?php echo ($vo["video_id"]); ?></td>
                        <td><?php echo ($vo["video_name"]); ?></td>
                        <td><img width='50' src="/Public/uploads/<?php echo ($vo["video_img"]); ?>"></td>
                        <td><?php echo htmlspecialchars($vo['video_path']) ?></td>
                        <td><?php echo ($vo["video_author"]); ?></td>
                        <td><input type="button" value="删除" onclick="del(<?php echo ($vo["video_id"]); ?>)">
                            <input type="button" value="修改" onclick="update(<?php echo ($vo["video_id"]); ?>)">
                        </td>
		</tr><?php endforeach; endif; else: echo "" ;endif; ?>
	</table>
		<div class="page">
			<?php echo ($page); ?>
		</div>
</body>
</html>
<script type="text/javascript">
<!--
//删除
    function  del(id){
      $.ajax({
   type: "POST",
   url: "<?php echo U('video/del')?>",
   data: "id="+id,
   success: function(msg){
    if(msg==1){
         $('#'+id).remove(); 
    }
   }
});   
    }
//修改
function update(id){
location.href="<?php echo U('video/update'); ?>?id="+id;

}
//-->
</script>