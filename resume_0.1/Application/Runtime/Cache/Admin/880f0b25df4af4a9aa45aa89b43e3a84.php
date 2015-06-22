<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>添加博文分类</title>
</head>
<body>
<form method='post' action='/index.php/Admin/Classify/add'>
<h1>添加博文分类</h1>
<hr/>
<input type="hidden" name='id' value="null"/>
个人分类：<input type='text' name='value' /><hr/>
<input type='submit' name='submit' value='提交'/>
</form>
</body>
</html>