<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="/Public/css/login.css" type="text/css" />
</head>
<body>
	<div class="logo">
        <a href=<?php echo U("home/index/index");?>><img src="/Public/img/logo.gif"></a>
	</div>
	<div class="login" >
		<p>会员登录</p>
		<form action=<?php echo U("home/index/post_login");?> method="post">
			<input type="text" name="name" placeholder="请输入用户名"></br></br>
			<input type="password" name="password" placeholder="请输入密码">
            <input type="submit" value="登陆"/>
        </form>
		<div class="help">

			<a href=<?php echo U("home/index/register");?>>免费注册</a>
			<a href="">忘记密码</a>
		</div>
	</div>
</body>
</html>