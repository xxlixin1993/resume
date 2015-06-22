<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Manage Photo</title>
</head>
<link href="/Public/Admin/css/css.css" rel="stylesheet"
	type="text/css">
<link rel="stylesheet" type="text/css" href="/Public/Admin/Images/css1/css.css" />
<style>
td,th {
	text-align: center
}
</style>
</head>
<body>
<form method='post' action='/index.php/Admin/Photo/deleteAll'>
		<table class="table" cellspacing="1" cellpadding="2" width="99%"
			align="center" border="0">
			<tbody>
				<tr>
					<th class="bg_tr" align="left" height="25">序号</th>
					<th class="bg_tr" align="left" height="25">pname</th>
					<th class="bg_tr" align="left" height="25">标题[ptitle]</th>
					<th class="bg_tr" align="left" height="25">简单说明[pinfo]</th>
					<th class="bg_tr" align="left" height="25">所属类[classes]</th>
					<th class="bg_tr" align="left" height="25">
						<input type='submit' name='deleteSubmit' value='删除' />
					</th>
				</tr>

				<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
					<td class="td_bg" width="5%" height="23" align="center"><?php echo ($vo["id"]); ?></td>
					<td class="td_bg"><?php echo ($vo["pname"]); ?></td>
					<td class="td_bg"><?php echo ($vo["ptitle"]); ?></td>
					<td class="td_bg"><?php echo ($vo["pinfo"]); ?></td>
					<td class="td_bg"><?php echo ($vo["classes"]); ?></td>

					<td class="td_bg">
						<input type='checkbox' value="<?php echo ($vo["id"]); ?>" name='id[]' />
					</td>
				</tr><?php endforeach; endif; else: echo "" ;endif; ?>
				<tr>
					<td colspan="6"><?php echo ($show); ?></td>
				</tr>
			</tbody>
		</table>
	</form>
</html>