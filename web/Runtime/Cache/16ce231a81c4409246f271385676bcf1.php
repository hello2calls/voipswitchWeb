<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<TITLE>voippub web </TITLE>
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

<strong>我的充值记录：</strong>
<br>
<font color="red">只列出平台充值记录,前缀带DL代表给代理的充值</font><br>
<TABLE border=1 width="840">
  <TR>
	<td>
	总金额:<font color=red><b><?php echo ($asum); ?></b></font>元,分页:<?php echo ($pagenum); ?>
	</td>
	</TR>

</TABLE>
<TABLE width="800" border=1 onMouseOver="changeto()"  onmouseout="changeback()">
  <TR>
	<th width="159" >充值时间</th>
	<th width="150">用户号码</th>
    <th width="150" >代理号码</th>
	<th width="100">充值金额</th>

	</TR>
<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><tr>
<td><?php echo ($vo["ddate"]); ?> </td>
<td><?php echo ($vo["phone"]); ?> </td>
<td><?php echo ($vo["AgentPhoneNum"]); ?> </td>
<td><?php echo ($vo["money"]); ?> </td>

</tr><?php endforeach; endif; else: echo "" ;endif; ?>
</TABLE>


</BODY>
</HTML>