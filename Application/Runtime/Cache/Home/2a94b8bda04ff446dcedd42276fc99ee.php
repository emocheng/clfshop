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
            
	 	<div class="top_a">
	 		<div class="fenlei">
	 			<div class="fenlei_shang">
	 				<div class="fenlei_font"><a href="">产品分类</a></div>
	 					<div class="fenleibiao">
	 						<table>
	 							<tr><td><a href="#">台式机</a></td>
									<td><a href="#">笔记本</a></td>
	 							<tr>
	 							<tr>
	 								<td><a href="#">平板电</a></td>
									<td><a href="#">电脑一体机</a></td>
	 							<tr>
	 							<tr>
	 								<td><a href="#">ipad</a></td>
									<td><a href="#">电脑配件</a></td>
	 							<tr>
	 						</table>
			 			</div>
			 	</div>
			 		<div class="fenlei_xia">	
	 			<div class="fenlei_font"><a href="">热销品牌</a></div>
	 				<div class="fenleibiao">
	 					<table>
	 							<tr><td><a href="#">联想</a></td>
									<td><a href="#">thinpad</a></td>
	 							<tr>
	 							<tr>
	 								<td><a href="#">华硕</a></td>
									<td><a href="#">三星</a></td>
	 							<tr>
	 							<tr>
	 								<td><a href="#">apple</a></td>
									<td><a href="#">宏碁</a></td>
	 							<tr>
	 								<tr>
	 								<td><a href="#">DELL</a></td>
									<td><a href="#">HP</a></td>
	 							<tr>
	 								<tr>
	 								<td><a href="#">Micros</a></td>
									<td><a href="#">清华同方</a></td>
	 							<tr>
	 						</table>
			 		</div>
			 	</div>	
	 		</div> <!--fenlei到此结束 -->
	 		<div class="lungun">
				<img src="/Public/img/datu_03.gif" />
	 		</div> <!--lungun到此结束 664 304-->
	 	</div> <!--top_a到此结束 -->
	 	<div class="top_b">
	 		<div class="top_b_title">
	 			<div class="tejia active">今日特价</div>
	 			<div class="tejia">最近降价</div>
	 			<div class="tejia">人气明星</div>
	 		</div> <!--top_b_title到此结束 -->
	 		<div class="top_b_main">
	 			<div class="b_main">
	 				<div class="main_wenzi">
                        <a href=>仅约426克三防平板
	 					至轻至薄高享受！10.1英寸大屏</a>
	 				</div>
	 				<div class="main_img">
	 					<img src="/Public/img/tu_4.gif">
	 				</div>
	 				<div class="sale">
	 					￥3099.00
	 				</div>
	 			</div>
	 			
	 			<div class="b_main">
					<div class="main_wenzi">
                        <a href="">仅约426克三防平板
	 					至轻至薄高享受！10.1英寸大屏</a>
	 				</div>
	 				<div class="main_img">
	 					<img src="/Public/img/tu_4.gif">
	 				</div>
	 				<div class="sale">
	 					￥3099.00
	 				</div>	
	 			</div>
	 			
	 			<div class="b_main">
					<div class="main_wenzi">
                        <a href="">仅约426克三防平板
	 					至轻至薄高享受！10.1英寸大屏</a>
	 				</div>
	 				<div class="main_img">
	 					<img src="/Public/img/tu_4.gif">
	 				</div>
	 				<div class="sale">
	 					￥3099.00
	 				</div>
	 			</div>
	 			
	 			<div class="b_main">
					<div class="main_wenzi">
                        <a href="">
                            <a href="">仅约426克三防平板
	 					至轻至薄高享受！10.1英寸大屏</a>
	 				</div>
	 				<div class="main_img">
	 					<img src="/Public/img/tu_4.gif">
	 				</div>
	 				<div class="sale">
	 					￥3099.00
	 				</div>
	 			</div>
	 		</div> <!--top_b_main 206px到此结束 -->
	 	</div> <!--top_b到此结束 -->
	 	<div class="top_c">
	 		<div class="c_left">
	 			<div class="left_shang">
	 					<p>笔记本君</p>
	 					<a href="#">more</a>
	 			</div>
	 			<div class="left_zhong">
	 				<a href="">【华硕】</a>
	 				<a href="">【联想】</a>
	 				<a href="">【三星】</a>
	 				<a href="">【戴尔】</a>
	 				<a href="">【ThinkPad】</a>
	 			</div>
	 			<div class="left_xia">
	 				<div class="xia_tu">
	 				<img src="/Public/img/tutu_07.gif"></div>
	 				<div class="jieshao">
                        <a href="">戴尔Inter14MR-1528S灵越14英寸笔记本电脑</a>
	 				</div>
	 				<div class="sale">￥4699.00</div>
	 			</div>
	 		</div><!--left到此结束 -->
	 		<div class="c_right">
                <?php if(is_array($pc_note)): $i = 0; $__LIST__ = $pc_note;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="pc">
                        <div class="pc_img">
                            <img src="<?php echo ($v["thumb"]); ?>.gif" width="152" height="105">
                        </div>
                        <div class="pc_wenzi">
                            <a href=<?php echo U("home/index/goods","id=$v[id]");?>><?php echo ($v["name"]); ?></a>
                        </div>
                        <div class="sale">
                            ￥<?php echo ($v["price"]); ?>.00
                        </div>
                    </div><?php endforeach; endif; else: echo "" ;endif; ?>
	 		</div><!--right到此结束 -->
	 		<div class="clear"></div>
	 	</div>	<!--top_c到此结束 -->
	 	<div class="top_c">
	 		<div class="c_left">
	 			<div class="left_shang">
	 					<p>台式王子</p>
	 					<a href="#">more</a>
	 			</div>
	 			<div class="left_zhong">
	 				<a href="">【华硕】</a>
	 				<a href="">【联想】</a>
	 				<a href="">【三星】</a>
	 				<a href="">【戴尔】</a>
	 				<a href="">【ThinkPad】</a>
	 			</div>
	 			<div class="left_xia">
	 				<div class="xia_tu">
	 				<img src="/Public/img/tutu_07.gif"></div>
	 				<div class="jieshao">
                        <a href="">戴尔Inter14MR-1528S灵越14英寸笔记本电脑</a>
	 				</div>
	 				<div class="sale">￥4699.00</div>
	 			</div>
	 		</div><!--left到此结束 -->
	 		<div class="c_right">
                <?php if(is_array($pc_desktop)): $i = 0; $__LIST__ = $pc_desktop;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="pc">
                        <div class="pc_img">
                            <img src="<?php echo ($v["thumb"]); ?>.gif" width="152" height="105">
                        </div>
                        <div class="pc_wenzi">
                            <a href=<?php echo U("home/index/goods","id=$v[id]");?>><?php echo ($v["name"]); ?></a>
                        </div>
                        <div class="sale">
                            ￥<?php echo ($v["price"]); ?>.00
                        </div>
                    </div><?php endforeach; endif; else: echo "" ;endif; ?>
	 		</div><!--right到此结束 -->
	 		<div class="clear"></div>
	 	</div>	<!--top_c到此结束 -->
	 	<div class="top_c">
	 		<div class="c_left">
	 			<div class="left_shang">
	 					<p>平板超人</p>
	 					<a href="#">more</a>
	 			</div>
	 			<div class="left_zhong">
	 				<a href="">【华硕】</a>
	 				<a href="">【联想】</a>
	 				<a href="">【三星】</a>
	 				<a href="">【戴尔】</a>
	 				<a href="">【ThinkPad】</a>
	 			</div>
	 			<div class="left_xia">
	 				<div class="xia_tu">
	 				<img src="/Public/img/tutu_07.gif"></div>
	 				<div class="jieshao">
                        <a href="">戴尔Inter14MR-1528S灵越14英寸笔记本电脑</a>
	 				</div>
	 				<div class="sale">￥4699.00</div>
	 			</div>
	 		</div><!--left到此结束 -->
	 		<div class="c_right">
                <?php if(is_array($pc_table)): $i = 0; $__LIST__ = $pc_table;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="pc">
                        <div class="pc_img">
                            <img src="<?php echo ($v["thumb"]); ?>.gif">
                        </div>
                        <div class="pc_wenzi">
                            <a href=<?php echo U("home/index/goods","id=$v[id]");?>><?php echo ($v["name"]); ?></a>
                        </div>
                        <div class="sale">
                            ￥<?php echo ($v["price"]); ?>.00
                        </div>
                    </div><?php endforeach; endif; else: echo "" ;endif; ?>
	 		</div><!--right到此结束 -->
	 		<div class="clear"></div>
	 	</div>	<!--top_c到此结束 -->
	 </div>	<!--主体到此结束 -->
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