<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="/Public/Admin/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="/Public/Admin/ckeditor/adapters/jquery.js"></script>
<script type="text/javascript" src="/Public/Admin/ckfinder/ckfinder.js"></script>
<title>添加博文</title>
</head>
<body>
<form method='post' action='/index.php/Admin/Blog/add'>
<h1>发表博文</h1>
<hr/>
标题：<input type='text' name='title' /><hr/>
简要说明：<br/>
<textarea name="short_info" cols='28' rows='20'>
</textarea><br/>
内容：<br/>
<textarea name="content" cols='50' rows='20'>
</textarea>
<hr/>
个人分类：<select name='classifyid'>
<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["value"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
</select>
<input type='submit' name='submit' value='提交'/>
</form>
</body>
</html>
<script type="text/javascript">
	CKEDITOR.replace('content',{
		width : 500,
		filebrowserBrowseUrl :	'/Public/Admin/ckfinder/ckfinder.html',	
	filebrowserImageBrowseUrl : '/Public/Admin/ckfinder/ckfinder.html?Type=Images',	
	filebrowserFlashBrowseUrl : '/Public/Admin/ckfinder/ckfinder.html?Type=Flash',	
	filebrowserUploadUrl : '/Public/Admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
	filebrowserImageUploadUrl : '/Public/Admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',	
	filebrowserFlashUploadUrl : '/Public/Admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
	});
</script>