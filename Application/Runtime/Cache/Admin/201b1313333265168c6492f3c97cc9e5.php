<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
        <title></title>
        <link rel="stylesheet" href="/Public/css/public.css" />
        <script type="text/javascript" src="/Public/js/jquery-1.7.2.min.js"></script>
        <script type="text/javascript" src="/Public/js/public.js"></script>	
         <script type="text/javascript" src="/Public/admin/js/jq.js"></script>
</head>
<body>
        <table class="table">
                <tr>
                        <td class="th" colspan="10">文章列表</td>
                </tr>
                <tr>

                        <th>文章标题</th>
                   
                        <th>文章内容</th>
                        <th>操作</th>
                </tr>
                <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><tr align='center'>
                        <td><?php echo ($list["college_article_title"]); ?></td> 
                        <td><?php echo ($list["college_article_content"]); ?></td>
                        
                        <td>
                                <a href="/index.php/Admin/College/update_college?id=<?php echo ($list["college_article_id"]); ?>">[编辑]</a>
                                <a href="/index.php/Admin/College/del?id=<?php echo ($list["college_article_id"]); ?>" class="del">[删除]</a>
                        </td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </table>
                <div class="page">
                        <?php echo ($page); ?>
                  
                </div>
</body>
</html>