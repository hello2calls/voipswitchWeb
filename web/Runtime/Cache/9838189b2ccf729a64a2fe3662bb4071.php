<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>管理界面</title>
<link href="__PUBLIC__/style/style.css" rel="stylesheet" type="text/css" />
</head>
<body id="page">
<h2>系统信息</h2>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th><p>欢迎登陆后台管理系统！</p>
    <p>
      
    </p></th>
  </tr>
  <tr>
  <td>您好，<?php echo ($agentname); ?>，账户余额是:<b><?php echo ($money); ?></b>元.费率:<font color=red><b><b><?php echo ($tariff_name); ?></b></font>
  </td>
  </tr>
   <tr>
  <td><font color=red><b>公告：</b></font>原来使用的代理名称登录无效。
  <br>
  </td>
  </tr>
</table>
<form name="form1" method="post" action="__URL__/agxg">
<TABLE border=1 align="left">
<tr>
<th colspan="2">
  代理密码修改
</th>
</tr>
  <TR>
	<TD width="115">新密码：</TD>
	<TD width="160">
	  <input name="pwd1" type="password" id="pwd1" size="10" maxlength="10"></TD>
	</TR>
<TR>
	<TD>重复密码：</TD>
	<TD><input name="pwd2" type="password" id="pwd2" size="10" maxlength="10"></TD>
	</TR>

<TR>
	<TD>&nbsp;</TD>
	<TD><input type="submit" name="修改" id="修改" value="修改"></TD>
	</TR>
</TABLE>
</form>
</body>
</html>