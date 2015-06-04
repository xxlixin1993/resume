<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Edit Person Info</title>
</head>
<body>
<form method='post' action='/index.php/Admin/Person/editOk'>
<h1>修改首页信息</h1>
<hr/>
个人描述：<input type='text' name='my_desc' value="<?php echo ($row["my_desc"]); ?>"/><hr/>
简要说明：<br/>
<textarea name="my_social" cols='28' rows='20'><?php echo ($row["my_social"]); ?>
</textarea><br/>
内容<br/>
<textarea name="short_info" cols='50' rows='20' >
<?php echo ($row["short_info"]); ?>
</textarea>
<hr/>
<input type='hidden' name='id' value='1' />
<input type='submit' name='submit' value='提交'/>
</form>
</body>
</html>