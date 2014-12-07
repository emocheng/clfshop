<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>商城首页</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="/Public/css/style.css" type="text/css" />
    <link rel="stylesheet" href="/Public/css/list.css"  type="text/css" />
    <link rel="stylesheet" href="/Public/css/goods.css"  type="text/css" />
</head>
<body>
<div class="header">
    <div class="title">
        <div class="container top" >
            <img src="/Public/img/love.gif"/>
            <a href = "#">收藏本站</a>
            <a style="padding-left:20px">您好，欢迎回来！</a>
            <a href=<?php echo U("home/index/login");?>>[登陆]<a/>
            <a href=<?php echo U("home/index/register");?>>[注册]<a/>
            <a href="#" class="talk">在线咨询</a>
            <a href="#" class="cash">我的订单</a>
            <a href="#" class="cash">查看购物车</a>
            <a href="#" class="cash">选购中心</a>
        </div>
    </div>

    <div class="container logo">
        <a href=<?php echo U("home/index/index");?>><img src="/Public/img/logo.gif" style="float:left;"></a>
        <form class="form">
            <input type="text">
            <input class="home_search" type="button" value="搜索">
        </form>
        <div class="clear"></div>
    </div>

    <div class="container nav">
        <ul>
            <li><a href="#">全部商品分类</a></li>
            <li><a href=<?php echo U("home/index/index");?>>首页</a></li>
            <li><a href=<?php echo U("home/index/list");?>>台式电脑</a></li>
            <li><a href=<?php echo U("home/index/list");?>>笔记本电脑</a></li>
            <li><a href=<?php echo U("home/index/list");?>>平板电脑</a></li>
            <li><a href=<?php echo U("home/index/promotion");?>>优惠活动</a></li>
            <li><a href=<?php echo U("home/index/jifen");?>>积分商城</a></li>
            <li><a href=<?php echo U("home/index/liuyan");?>>留言板</a></li>
        </ul>
        <div class="clear"></div>
    </div>
    <div class="link"></div>
</div> <!--头部到此结束 -->

    <div class="main">
        <div class="container">
            <div class="user_title">
                <a href="">首页</a>><a href="">台式电脑</a>
            </div>
            
		<div class="ban">
			<div class="ban_btn">留言板</div>
			<div class="ban_link"></div>
			<div class="ban_tell">
				<div class="admin">
					<img src="/Public/img/admin_03.gif">
					<p>admin</p>
				</div>
				<div class="tell_border">
					<div class="star">
						<img src="/Public/img/star_07.gif">

					</div>
					<div class="tell_textarea"> 

							质量不错

					</div>
				</div>
				<div class="clear"></div>
			</div>
            
			<div class="tell_page">
			<a href="">上一页</a>
			<a href="">1</a>
			<a href="">2</a>
			<a href="">3</a>
			<a href="">4</a>
			<a href="">5</a>
			<a href="">...</a>
			<a href="">46</a>
			<a href="">下一页</a>
		</div>
			<div class="clear"></div>
		</div><!--ban到此结束 -->
		
		<div class="clear"></div>
		<div class="tell">
			<div class="ban_btn">留言板</div>
			<div class="ban_link"></div>
			<div class="my_tell">
				<table>
					<tr>
						<td>用户名：</td>
						<td><input type="text"></td>
					</tr>
					<tr>
						<td>电子邮箱：</td>
						<td><input type="text"></td>
					</tr>
					<tr>
						<td>留言类型：</td>
						<td><input type="radio" name="sex">留言
						<input type="radio" name="sex">投诉
						<input type="radio" name="sex">询问</td>
					</tr>
					<tr>
						<td>标题</td>
						<td><input type="text"></td>
					</tr>
					<tr>
						<td>留言内容</td>
						<td><input type=""> </td>
					</tr>	
				</table>		

			</div>
		</div><!--ban到此结束 -->
				<div class="clear"></div>
	</div>

        </div>	<!--主体到此结束 -->
    </div>

    <div class="footer">
        <div class="footer_up">
            <div class="container">
                <div class="footer_one">
                    <p><a href="">配送方式</a></p>
                    <p><a href="">上门提取</a></p>
                    <p><a href="">配送服务查询</a></p>
                    <p><a href="">配送收费标准</a></p>
                    <p><a href="">海外配送</a></p>
                </div>
                <div class="footer_one">
                    <p><a href="">付款方式</a></p>
                    <p><a href="">货到付款</a></p>
                    <p><a href="">在线支付</a></p>
                    <p><a href="">分期付款</a></p>
                    <p><a href="">公司转账</a></p>
                </div>
                <div class="footer_one">
                    <p><a href="">售后服务</a></p>
                    <p><a href="">售后政策</a></p>
                    <p><a href="">价格保护</a></p>
                    <p><a href="">退款保护</a></p>
                    <p><a href="">取消订单</a></p>
                </div>
                <div class="footer_one">
                    <p><a href="">新手指南</a></p>
                    <p><a href="">购物流程</a></p>
                    <p><a href="">联系客服</a></p>
                    <p><a href="">订购方式</a></p>

                </div>
                <div class="footer_one">
                    <p><a href="">会员中心</a></p>
                    <p><a href="">资金管理</a></p>
                    <p><a href="">我的收藏</a></p>
                    <p><a href="">我的订单</a></p>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="footer_down">

        </div>
    </div>	<!--尾部到此结束 -->
</body>
</html>