<?php if (!defined('THINK_PATH')) exit();?><html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>网站内容管理系统</title>
<link href="/Public/Admin/css/top_css.css" rel="stylesheet" type="text/css">
</head>
<body bgcolor="#03A8F6">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="194" height="60" align="center" background="/Public/Admin/Images/top_logo.jpg"></td>
    <td align="center" style="background:url(/Public/Admin/Images/top_bg.jpg) no-repeat"><table cellspacing="0" cellpadding="0" border="0" width="100%" height="33">
      <tbody>
        <tr>
          <td width="30" align="left"><img onClick="switchBar(this)" height="15" alt="关闭左边管理菜单" src="/Public/Admin/Images/on-of.gif" width="15" border="0" /></td>
          <td width="320" align="left"><a class="top_link" 
            href="#"><?php echo (cookie('username')); ?></a><span class="top_link"> </td>
          <td width="80" align="right" nowrap="nowrap" class="topbar"></td>
          <td class="topbar"><a href="" 
            target="_blank"><img title="返回首页" height="23" 
            src="/Public/Admin/Images/home.gif" width="33" 
        border="0" /></a>&nbsp;</td>
        </tr>
      </tbody>
    </table>
   </td>
  </tr>
  <tr height="6">
    <td bgcolor="#1F3A65" background="/Public/Admin/Images/top_bg.jpg"></td>
  </tr>
</table>
<script language="javascript">
<!--
var displayBar=true;
function switchBar(obj){
	if (displayBar)
	{
		parent.frame.cols="0,*";
		displayBar=false;
		obj.title="打开左边管理菜单";
	}
	else{
		parent.frame.cols="195,*";
		displayBar=true;
		obj.title="关闭左边管理菜单";
	}
}
//-->
</script></body>
</html>