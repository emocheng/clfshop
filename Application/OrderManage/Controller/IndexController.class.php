<?php
namespace OrderManage\Controller;
use Common\Controller\CommonController;
class IndexController extends CommonController{

    function index(){ //加载订单首页
        $this->display();
    }

    function check(){ //订单查询
        $this->display();
    }
    function out(){ //发货单列表
        $this->display();
    }
}