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
                        <a href="goodsmanage/index" class="list-group-item list-group-item-success">文章分类</a>
                        <a href="goodsmanage/index/articlelist" class="list-group-item list-group-item-info">文章列表</a>
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
                        <a href="#" class="list-group-item list-group-item-success">会员列表</a>
                        <a href="#" class="list-group-item list-group-item-info">添加会员</a>
                        <a href="#" class="list-group-item list-group-item-warning">会员等级</a>
                        <a href="#" class="list-group-item list-group-item-warning">会员留言</a>
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
                        <a href="#" class="list-group-item list-group-item-success">商品分类</a>
                        <a href="#" class="list-group-item list-group-item-info">商品修改</a>
                        <a href="#" class="list-group-item list-group-item-warning">商品上下架</a>
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
                        <a href="#" class="list-group-item list-group-item-success">订单列表</a>
                        <a href="#" class="list-group-item list-group-item-info">订单查询</a>
                        <a href="#" class="list-group-item list-group-item-warning">订单打印</a>
                        <a href="#" class="list-group-item list-group-item-warning">发货单列表</a>
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
                        <a href="#" class="list-group-item list-group-item-info">客户统计</a>
                        <a href="#" class="list-group-item list-group-item-warning">订单统计</a>
                        <a href="#" class="list-group-item list-group-item-warning">销售排行</a>
                        <a href="#" class="list-group-item list-group-item-warning">销售明细</a>
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
                        <a href="#" class="list-group-item list-group-item-info">退货管理</a>
                        <a href="#" class="list-group-item list-group-item-warning">返修管理</a>
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
                        <a href="#" class="list-group-item list-group-item-info">商店设置</a>
                        <a href="#" class="list-group-item list-group-item-warning">配送方式</a>
                        <a href="#" class="list-group-item list-group-item-warning">地区列表</a>
                        <a href="#" class="list-group-item list-group-item-warning">友情链接</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-10">
        
    <div class="panel panel-default" style="margin-top: 20px;">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#home" role="tab" data-toggle="tab">添加栏目</a></li>
            <li role="presentation"><a href="#profile" role="tab" data-toggle="tab">栏目内容</a></li>
        </ul>
        <div class="panel-body">
            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="home">
                    <table class="table table-hover">
                        <tr>
                            <td>父栏目</td>
                            <td>
                                <select class="form-control">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>名称</td>
                            <td>
                                <input type="text" class="form-control" placeholder="Text input">
                            </td>
                        </tr>
                        <tr>
                            <td>类型</td>
                            <td>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                        封面
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                        列表
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" checked>
                                        URL跳转
                                    </label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>URL跳转地址</td>
                            <td>
                                <input type="text" class="form-control" placeholder="如果选了URL跳转,请填写跳转地址">
                            </td>
                        </tr>
                    </table>
                    <button type="button" class="btn btn-primary">添加</button>
                    <button type="button" class="btn btn-success">返回</button>
                </div>
                <div role="tabpanel" class="tab-pane" id="profile">
                    <textarea name="editor1" class="content"></textarea>
                    <div style="margin-top: 20px;">
                        <button type="button" class="btn btn-primary">添加</button>
                        <button type="button" class="btn btn-success">返回</button>
                    </div>
                    <script src="/Public/ckeditor/ckeditor.js"></script>
                    <script type="text/javascript" src="/Public/ckfinder/ckfinder.js"></script>
                    <script>
                        CKEDITOR.replace('editor1',
                                {
                                    filebrowserBrowseUrl: '/Public/ckfinder/ckfinder.html',
                                    filebrowserImageBrowseUrl: '/Public/ckfinder/ckfinder.html?type=Images',
                                    filebrowserFlashBrowseUrl: '/Public/ckfinder/ckfinder.html?type=Flash',
                                    filebrowserUploadUrl: '/Public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                                    filebrowserImageUploadUrl: '/Public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                                    filebrowserFlashUploadUrl: '/Public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
                                });
                    </script>
                </div>
            </div>
        </div>
    </div>

    </div>
</div>

</body>
</html>