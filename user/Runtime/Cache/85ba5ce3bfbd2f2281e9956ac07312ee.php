<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>用户中心</title>
<link href="__PUBLIC__/css/voippub.css" rel="stylesheet" type="text/css"/></head>
<body>
<div class="main"><div class="msgDiv">
<h3>voippubWeb </h3>
<form class="form" name="PreIndex" method="get" action="__URL__/checkLogin/">欢迎使用VOIP回拨系统。
<p><a href="__URL__/getCent/?id_client=<?php echo ($id_client); ?>">查询余额</a>&nbsp;|<a href="__URL__/book/">电话本</a>&nbsp;|
<a href="__URL__/callAB/?id_client=<?php echo ($id_client); ?>">发起呼叫</a>&nbsp;|<a href="__URL__/bindPhone/">绑定号码</a> <br />
<a href="__URL__/active/">账户充值</a>&nbsp;|<a href="__URL__/activelog/">充值记录</a>&nbsp;|
<a href="__URL__/checkCard/">校验新卡</a>&nbsp;|<a href="__URL__/lastCalllog/">最近通话</a> <br />
<a href="__URL__/showCaller/">主叫变号</a>&nbsp;|<a href="__URL__/userInfo/">账户信息</a>&nbsp;
<a href="__URL__/chPwd/">修改密码</a>&nbsp;|<a href="__URL__/logout/">退出登录</a></p>
</form>
</div>
</div>
</body>
</html>