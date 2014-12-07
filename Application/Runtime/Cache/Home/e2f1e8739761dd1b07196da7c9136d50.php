<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<meta charset="utf-8" />
    <title>欢迎注册</title>
    <link rel="stylesheet" href="/Public/css/register.css" type="text/css" />
</head>
<body>
<div class="logo">
    <a href=<?php echo U("home/index/index");?>><img src="/Public/img/logo.gif"></a>
</div>
<div class="reg">
    <form action=<?php echo U("home/index/post_register");?> method="post">
        <table>
                <tr>
                    <td>账户名：</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>设置密码：</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td>确认密码：</td>
                    <td><input type="password" name="repassword"></td>
                </tr>
                <tr>
                    <td>验证码：</td>
                    <td><input type="text" name="code"></td>
                    <td><img src=<?php echo U("yzm");?> class="yzm" /></td>
                </tr>

        </table>
        <div class="register">
            <input type="submit" value="立即注册"/>
        </div>
    </form>
	<div class="text">我已经注册，马上<a href=<?php echo U(home/index/login);?>>登陆</a></div>
</div>
</body>
</html>