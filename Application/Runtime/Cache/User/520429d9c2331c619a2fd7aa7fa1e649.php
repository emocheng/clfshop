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
<script src="/Public/JS/jquery-2.1.1.js"></script>
<div class="header">
    <div class="title">
        <div class="container top" >
            <img src="/Public/img/love.gif"/>
            <a href = "#">收藏本站</a>
            <?php if(($user) == ""): ?><a href=<?php echo U("home/index/login");?>>[登陆]<a/>
                    <a href=<?php echo U("home/index/register");?>>[注册]<a/>
                        <?php else: ?>
                        <a style="padding-left:20px">您好，<a href=<?php echo U("user/index/index","id=$user[id]");?>>
                            <?php echo ($user["name"]); ?></a>欢迎回来！
                        </a>
                        <a href=<?php echo U("home/index/logout");?>>[安全退出]<a/><?php endif; ?>
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
            <input type="button" value="搜索">
        </form>
        <div class="clear"></div>
    </div>

    <div class="container nav">
        <ul>
            <li><a href="#">全部商品分类</a></li>
            <li><a href=<?php echo U("home/index/index");?>>首页</a></li>
            <?php if(is_array($l_h)): $i = 0; $__LIST__ = $l_h;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li><a href=<?php echo U("home/index/goods_list","id=$v[id]");?>><?php echo ($v["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
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
            <a href="">首页</a>><a href="">用户中心</a>
        </div>
        <div class="user_menu">
            <ul>
                <li><a href=<?php echo U("user/index/index");?>>欢迎页</a></li>
                <li><a href=<?php echo U("user/index/user_info");?>>账户信息</a></li>
                <li><a href=<?php echo U("user/index/user_goods");?>>我的订单</a></li>
                <li><a href=<?php echo U("user/index/address");?>>收货地址</a></li>
                <li><a href=<?php echo U("user/index/money_manage");?>>资金管理</a></li>
                <li><a href=<?php echo U("user/index/my_comm");?>>我的评论</a></li>
                <li><a href=<?php echo U("user/index/point");?>>我的积分</a></li>
                <li><a href=<?php echo U("user/index/car");?>>购物车</a></li>
            </ul>
        </div>
        <div class="user_main">
            
    <div class="user_goods">
        <p>我的订单</p>
        <?php if(is_array($u_g)): $i = 0; $__LIST__ = $u_g;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><table class="my_goods">
                <tr>
                    <td>
                        <img src="<?php echo ($v["gid_name"]); ?>.gif" width="99" height="68"/>
                        <p>订单编号:<span><?php echo ($v["sn"]); ?></span></p>
                    </td>
                    <td>
                        <p><?php echo (date("Y-m-d",$v["time"])); ?></p>
                        <p><?php echo (date("H:i:s",$v["time"])); ?></p>
                    </td>
                    <td>
                        <p><?php echo ($v["stat"]); ?></p>
                        <p class="appraise_ajax"><a href=<?php echo U("user/index/appraise","id=$v[id]");?> data_type="<?php echo ($v["id"]); ?>">确认收货</a></p>
                    </td>
                    <td>
                        <p><?php echo ($v["count"]); ?></p>
                    </td>
                    <td>
                        <p>￥<?php echo ($v["sum_price"]); ?></p>
                        <p>在线支付</p>
                    </td>
                    <td><a href=<?php echo U("home/index/goods","id=$v[oid]");?>>查看</a>|<a href="">删除</a></td>
                </tr>
            </table><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
    <!--<script>-->
        <!--$(function(){-->
            <!--$(".appraise_ajax").click(function(){-->
                <!--var id = $(this).children().attr("data_type");-->
                <!--$.post("<?php echo U(receipt);?>", {-->
                    <!--id : id,-->
                <!--}, function(data){-->
                    <!--console.log(data);-->
                    <!--window.location.href="<?php echo U('user/index/appraise','id=a');?>";-->
                <!--}, "html")-->
            <!--})-->
        <!--})-->
    <!--</script>-->

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