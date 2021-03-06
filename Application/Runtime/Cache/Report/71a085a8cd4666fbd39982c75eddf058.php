<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
    <title>后台首页</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="/Public/css/bootstrap.min.css">
    <script src="/Public/js/jquery-2.1.1.js"></script>
    <script src="/Public/js/bootstrap.min.js"></script>
    <style>
        body{
            background-color:#F2F2F2;
        }
    </style>
</head>
<body>
<nav class="navbar-inverse" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-9">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">网站后台</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-9">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div class="row" style="margin-top: 20px">
    <div class="col-md-2">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            文章管理
                        </a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="list-group">
                        <a href=<?php echo U("article/index/index");?> class="list-group-item list-group-item-success">文章分类</a>
                        <a href=<?php echo U("article/index/articlelist");?> class="list-group-item list-group-item-info">文章列表</a>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                    <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            会员管理
                        </a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="list-group">
                        <a href=<?php echo U("vip/index/index");?> class="list-group-item list-group-item-success">会员列表</a>
                        <a href=<?php echo U("vip/index/addVip");?> class="list-group-item list-group-item-info">添加会员</a>
                        <a href=<?php echo U("vip/index/level");?> class="list-group-item list-group-item-warning">会员等级</a>
                        <a href=<?php echo U("vip/index/massage");?> class="list-group-item list-group-item-warning">会员留言</a>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                    <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            商品管理
                        </a>
                    </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                    <div class="list-group">
                        <a href=<?php echo U("goods/index/index");?> class="list-group-item list-group-item-success">商品分类</a>
                        <a href=<?php echo U("goods/index/editGoods");?> class="list-group-item list-group-item-info">商品修改</a>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingFour">
                    <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            订单管理
                        </a>
                    </h4>
                </div>
                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                    <div class="list-group">
                        <a href=<?php echo U("ordermanage/index/index");?> class="list-group-item list-group-item-success">订单列表</a>
                        <a href=<?php echo U("ordermanage/index/check");?> class="list-group-item list-group-item-info">订单查询</a>
                        <a href="#" class="list-group-item list-group-item-warning">订单打印</a>
                        <a href=<?php echo U("ordermanage/index/out");?> class="list-group-item list-group-item-warning">发货单列表</a>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingFive">
                    <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            统计管理
                        </a>
                    </h4>
                </div>
                <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                    <div class="list-group">
                        <a href=<?php echo U("report/index/index");?> class="list-group-item list-group-item-info">客户统计</a>
                        <a href=<?php echo U("report/index/index");?> class="list-group-item list-group-item-warning">订单统计</a>
                        <a href=<?php echo U("report/index/sale_top");?> class="list-group-item list-group-item-warning">销售排行</a>
                        <a href=<?php echo U("report/index/sale");?> class="list-group-item list-group-item-warning">销售明细</a>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingSix">
                    <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            返修/退换货
                        </a>
                    </h4>
                </div>
                <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                    <div class="list-group">
                        <a href=<?php echo U("repairmanage/index/index");?> class="list-group-item list-group-item-info">退货管理</a>
                        <a href=<?php echo U("repairmanage/index/repair");?> class="list-group-item list-group-item-warning">返修管理</a>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingSeven">
                    <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            系统设置
                        </a>
                    </h4>
                </div>
                <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
                    <div class="list-group">
                        <a href=<?php echo U("system/index/index");?> class="list-group-item list-group-item-info">商店设置</a>
                        <a href=<?php echo U("system/index/express");?> class="list-group-item list-group-item-warning">配送方式</a>
                        <a href=<?php echo U("system/index/area");?> class="list-group-item list-group-item-warning">地区列表</a>
                        <a href=<?php echo U("system/index/link");?> class="list-group-item list-group-item-warning">友情链接</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-10">
        
    <div class="page-header">
        <h4>客户统计</h4>
    </div>
    <div class="panel panel-default" style="margin-top: 20px;">
        <div class="panel-heading">会员购买率</div>
        <div class="panel-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>会员总数</th>
                    <th>有订单会员数</th>
                    <th>会员订单总数</th>
                    <th>会员购买率</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>4</td>
                    <td>1</td>
                    <td>3</td>
                    <td>25%</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="panel panel-default" style="margin-top: 20px;">
        <div class="panel-heading">
            每会员平均订单数及购物额
            (每会员订单数=会员订单总数/会员总数)
            (每会员购物额=会员购物总额/会员总数)
        </div>
        <div class="panel-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>会员购物总额</th>
                    <th>每会员订单数</th>
                    <th>每会员购物额</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>42321</td>
                    <td>0.75</td>
                    <td>5008.21</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    </div>
</div>

</body>
</html>