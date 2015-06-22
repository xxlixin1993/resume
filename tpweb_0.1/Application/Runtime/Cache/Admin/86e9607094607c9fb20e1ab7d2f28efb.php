<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>修改博文</title>
</head>
<body>
<form method='post' action='/index.php/Admin/Blog/editOk'>
<h1>修改博文</h1>
<hr/>
标题：<input type='text' name='title' value="<?php echo ($row['title']); ?>"/><hr/>
简要说明：<br/>
<textarea name="short_info" cols='28' rows='20'><?php echo ($row['short_info']); ?>
</textarea><br/>
内容<br/>
<textarea name="content" cols='50' rows='20' >
<?php echo ($row['content']); ?>
</textarea>
<hr/>
个人分类：<select name='classifyid'>
<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["value"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
</select>
<input type='hidden' name='id' value='<?php echo ($row["id"]); ?>' />
<input type='submit' name='submit' value='提交'/>
</form>
</body>
</html>