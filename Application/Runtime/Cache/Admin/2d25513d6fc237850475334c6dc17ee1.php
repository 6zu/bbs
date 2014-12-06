<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
		<link rel="stylesheet" href="/Public/css/public.css" />
	<title>操作<?php echo ($info); ?></title>
</head>
<body>
<h1>操作<?php echo ($info); ?>！</h1>
<a href='/index.php/Admin/Student/<?php echo ($url1); ?>'><?php echo ($href1); ?></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href='/index.php/Admin/Student/<?php echo ($url2); ?>'><?php echo ($href2); ?></a>
</body>
</html>