<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>商城首页</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="/Public/css/style.css" type="text/css" />
    <link rel="stylesheet" href="/Public/css/list.css"  type="text/css" />
    <link rel="stylesheet" href="/Public/css/goods.css"  type="text/css" />
    <link rel="stylesheet" href="/Public/css/user.css"  type="text/css" />
</head>
<body>
<div class="header">
    <div class="title">
        <div class="container top" >
            <img src="/Public/img/love.gif"/>
            <a href = "#">收藏本站</a>
            <a style="padding-left:20px">您好，欢迎回来！</a>
            <a href="#">[登陆]<a/>
                <a href="#">[注册]<a/>
                    <a href="#" class="talk">在线咨询</a>
                    <a href="#" class="cash">我的订单</a>
                    <a href="#" class="cash">查看购物车</a>
                    <a href="#" class="cash">选购中心</a>
        </div>
    </div>

    <div class="container logo">
        <img src="/Public/img/logo.gif" style="float:left;">
        <form class="form">
            <input type="text">
            <input type="button" value="搜索">
        </form>
        <div class="clear"></div>
    </div>

    <div class="container nav">
        <ul>
            <li><a href="#">全部商品分类</a></li>
            <li><a href="#">首页</a></li>
            <li><a href="#">台式电脑</a></li>
            <li><a href="#">笔记本电脑</a></li>
            <li><a href="#">平板电脑</a></li>
            <li><a href="#">优惠活动</a></li>
            <li><a href="#">积分商城</a></li>
            <li><a href="#">留言板</a></li>
        </ul>
        <div class="clear"></div>
    </div>
    <div class="link"></div>
</div> <!--头部到此结束 -->

<div class="main">
    <div class="container">
        <div class="user_title">
            <a href="">首页</a>><a href="">用户中心</a>
        </div>
        <div class="user_menu">
            <ul>
                <li><a href="">欢迎页</a></li>
                <li><a href="">账户信息</a></li>
                <li><a href="">我的订单</a></li>
                <li><a href="">收货地址</a></li>
                <li><a href="">资金管理</a></li>
                <li><a href="">我的评论</a></li>
                <li><a href="">我的积分</a></li>
                <li><a href="">购物车</a></li>
            </ul>
        </div>
        <div class="user_main">
            
    <div class="collect">
        <p>我的收藏</p>
        <div class="car_title">
            <ul>
                <li><input  type="checkbox"/>全选</li>
                <li>商品信息</li>
                <li>单价</li>
                <li>数量</li>
                <li>操作</li>
            </ul>
        </div>
        <div class="clear"></div>
        <table class="my_car">
            <tr>
                <td>
                    <input class="check" type="checkbox"/>
                    <img src="/Public/img/user_03.gif" alt=""/>
                </td>
                <td><a href="">戴尔(DELL)Ins 14CR-132888
                    灵越14英寸笔记本(i3-4500U 4G 500G 2G独显 黑)</a></td>
                <td>￥3999.00</td>
                <td>
                    <a class="btn-reduce" href="javascript:;">+</a>
                    <input class="text" id="buy-num" value="1">
                    <a class="btn-add" href="javascript:;">-</a>
                </td>
                <td><a href="">删除</a>|<a href="">加入购物车</a></td>
            </tr>
        </table>

        <table class="my_car">
            <tr>
                <td>
                    <input class="check" type="checkbox"/>
                    <img src="/Public/img/user_03.gif" alt=""/>
                </td>
                <td><a href="">戴尔(DELL)Ins 14CR-132888
                    灵越14英寸笔记本(i3-4500U 4G 500G 2G独显 黑)</a></td>
                <td>￥3999.00</td>
                <td>
                    <a class="btn-reduce" href="javascript:;">+</a>
                    <input class="text" id="buy-num" value="1">
                    <a class="btn-add" href="javascript:;">-</a>
                </td>
                <td><a href="">删除</a>|<a href="">加入购物车</a></td>
            </tr>
        </table>
        <div class="page">分页</div>
    </div>

        </div>
        <div class="clear"></div>
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