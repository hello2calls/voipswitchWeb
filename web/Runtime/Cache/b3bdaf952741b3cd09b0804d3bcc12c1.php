<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<TITLE> voippub web </TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<META NAME="Generator" CONTENT="EditPlus">
<META NAME="Author" CONTENT="">
<META NAME="Keywords" CONTENT="">
<META NAME="Description" CONTENT="">
<link href="__PUBLIC__/style/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="__PUBLIC__/style/js2.js"></script>
</head>
<script>

</script>
<body id="page">

<strong>我的代理：</strong>
<TABLE border=1 width="840">
  <TR>
	<td>
	分页:<?php echo ($pagenum); ?>
	</td>
	</TR>

</TABLE>

<TABLE border=1 onMouseOver="changeto()"  onmouseout="changeback()">
  <TR>
	<th width="110" >代理手机</th>
	<th width="100">代理名称</th>
    <th width="100" >代理密码</th>
	<th width="80">代理金额</th>
    <th width="300">操作</th>
	</TR>
<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><tr>
<td><?php echo ($vo["PhoneNum"]); ?> </td>
<td><?php echo ($vo["UserName"]); ?> </td>
<td><?php echo ($vo["pass"]); ?> </td>
<td><?php echo ($vo["Money"]); ?> </td>
<td><a href="__URL__/agentxg?phone=<?php echo ($vo["PhoneNum"]); ?>">修改</a>&nbsp;
<a href="__URL__/agentcz?phone=<?php echo ($vo["PhoneNum"]); ?>">充值</a></td>
</tr><?php endforeach; endif; else: echo "" ;endif; ?>
</TABLE>


</BODY>
</HTML>