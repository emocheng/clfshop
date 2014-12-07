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
<script src="/Public/JS/jquery-2.1.1.js"></script>
<div class="header">
    <div class="title">
        <div class="container top" >
            <img src="/Public/img/love.gif"/>
            <a href = "#">收藏本站</a>
            <?php if(($user) == ""): ?><a href=<?php echo U("home/index/login");?>>[登陆]<a/>
                <a href=<?php echo U("home/index/register");?>>[注册]<a/>
                <?php else: ?>
                    <a style="padding-left:20px">您好，<a href=<?php echo U("user/index/index");?>>
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
            <input class="home_search" type="button" value="搜索">
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
            </div>
            
	 	<div class="path"><a>首页</a>><a>产品分类</a>>
	 		<a>笔记本</a>><a>ThinkPad E531</a>
	 	</div>
	 	<div class="goods_main">
	 		<div class="goods_main_sale">
	 			<div class="goods_pic">
	 				<div class="goods_pic_big">
	 					<img src="<?php echo ($g["thumb"]); ?>.gif" width="341" height="235">
	 				</div>
	 				<div class="goods_pic_small">
	 					<div class="pic_bt"><img src="/Public/img/bt_l.gif"></div>
	 					<div class="pic_sma"><img src="/Public/img/sm_01.gif"></div>
	 					<div class="pic_sma"><img src="/Public/img/sm_02.gif"></div>
	 					<div class="pic_sma"><img src="/Public/img/sm_03.gif"></div>
	 					<div class="pic_sma"><img src="/Public/img/sm_04.gif"></div>
	 					<div class="pic_sma"><img src="/Public/img/sm_05.gif"></div>
	 					<div class="pic_bt"><img src="/Public/img/bt_r.gif"></div>
	 				</div>
	 				<div class="clear"></div>
	 				<div class="pic_more">
	 					<div class="check_pic">
	 						<img src="/Public/img/fangda_37.gif">
	 						<a href="">查看大图</a>
	 					</div>
	 					<div class="check_pic duibi">
	 						<input type="checkbox">
	 						<a href="">加入对比</a>
	 					</div>
	 					<div class="shar">
	 						分享到:
	 						<img src="/Public/img/weibo_40.gif">
	 						<img src="/Public/img/tenxun_42.gif">
	 						<img src="/Public/img/renren_44.gif">
	 					</div>
	 				</div>
	 				<div class="clear"></div>
	 			</div>
	 		</div>

	 		<div class="goods_right">
	 				<div class="goods_name">
                        <?php echo ($g["name"]); ?>
	 				</div>
	 				<div class="qianggou">
	 					<p>[限时抢购]全新时尚超薄E系列,配8系2G独显,工作娱乐两不误</p>
	 				</div>
	 				<div class="hr"></div>
	 				<div class="goods_info">
	 					<p>商品编码:<span><?php echo ($g["sn"]); ?></span></p>
	 					<p>市场价格:<span>￥<?php echo ($g["price"]); ?>.00</span></p>
	 					<p>长乐价:<span>￥<?php echo ($g["price"]); ?>.00</span></p>
	 					<p>商品评价:<span></span></p>
	 					<div class="hr"></div>
	 					<p>促销信息:<span>已优惠￥200.00元</span></p>
	 					<p>剩余时间:<span>101天10小时32分18秒</span></p>
	 					<div class="hr"></div>
	 				</div>
	 				<div class="sale_info">
	 					<a href="javascript: void 0;" class="add_car">加入购物车</a>
	 					<a href="">加入收藏</a>
	 				</div>

	 		</div>
	 		<div class="clear"></div>
	 	</div>
	 	<div class="goods_content">
	 		<div class="goods_tags">
	 			<div>商品详情</div>
	 			<div>商品参数</div>
	 		</div>
	 		<div class="do"></div>
	 		
	 			<ul class="goods_con_info">
	 				<li>商品名称:<?php echo ($g["name"]); ?></li>
	 				<li>商品编号:<?php echo ($g["sn"]); ?></li>
	 				<li>品牌:<?php echo ($g["logo"]); ?></li>
	 				<li>上架时间:2014年</li>
	 				<li>商品毛重:<?php echo ($g["weight"]); ?></li>
	 				<li>商品产地:<?php echo ($g["place"]); ?></li>
	 				<li>显卡:性能级显卡</li>
	 				<li>触控:<?php echo ($g["touch"]); ?></li>
	 				<li>厚度:<?php echo ($g["t"]); ?></li>
	 				<li>处理器:<?php echo ($g["cpu"]); ?></li>
	 				<li>尺寸:<?php echo ($g["size"]); ?></li>
	 			</ul> 			
	 		<div class="goods_common">
	 			<div class="g_c_t">用户评价</div>
	 			<div class="hr" style="margin:0"></div>
	 			<div class="user_common">
	 				<div class="user_img"><img src="/Public/img/admin_03.gif"></div>
	 				<div class="user_common_i">
	 					<div class="user_star"><img src="/Public/img/star_07.gif"></div>
	 					<div class="user_common_s">质量不错</div>
	 				</div>
	 				<div class="clear"></div>
	 			</div>
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
	 	</div>
	</div>
</div>
    <script>
        $(function(){
            $(".add_car").click(function(){
                $.post("<?php echo U('post_add_car');?>",{
                    gid : <?php echo ($id); ?>
                }, function(data){
                    console.log(data);
                    alert(data.info);
                }, "json")
            })
        })
    </script>

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