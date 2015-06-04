<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Add Photo</title>
</head>
<body>
<form method="POST" action="/index.php/Admin/Photo/upload" enctype="multipart/form-data">
<table class="table" cellspacing="1" cellpadding="2" width="99%" align="center" 
border="0">
  <tbody>
    <tr>
      <th class="bg_tr" align="left" colspan="2" height="25">添加图片信息</th>
    </tr>
     <tr>
      <td class="td_bg" width="17%" height="23" align="right">所属分类</td>
      <td width="83%" class="td_bg">
      <select name='classes'>
			<option value='catWeb'>生活</option>
			<option value='catGraphic'>工作</option>
			<option value='catMotion'>图片</option>
      </select>
      </td>
    </tr>
    <tr>
      <td class="td_bg" width="17%" height="23" align="right">ptitle</td>
      <td width="83%" class="td_bg">
      	<input type="text" name="ptitle"  />
      </td>
    </tr>
    <tr>
      <td class="td_bg" width="17%" height="23" align="right">pname</td>
      <td width="83%" class="td_bg">
      	<input type="file" name="pname"  />
      </td>
    </tr>
    <tr>
      <td class="td_bg" width="17%" height="23" align="right">pinfo</td>
      <td width="83%" class="td_bg">
      	<input type='text' name='pinfo' />
      </td>
    </tr>
    <tr>
      <td class="td_bg" width="17%" height="23"></td>
      <td class="td_bg" width="83%">
      	<input type="submit" name="submit" value="添加" />
      </td>
    </tr>
  </tbody>
</table>
</form>
</body>
</html>