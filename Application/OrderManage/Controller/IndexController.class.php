<?php
namespace OrderManage\Controller;
use Common\Controller\CommonController;
class IndexController extends CommonController{

    function index(){ //加载订单首页
        $user_order = M("order"); //实例化订单表
        $goods = M("goods");//实例化商品表
        $own = M("user"); //实例化用户表
        $u = $user_order->select();

        foreach($u as $k=>$v){
            $g = $goods->find("$v[oid]");
            $o = $own->find("$v[uid]");
            $u[$k]["goods_name"] = $g["name"];
            $u[$k]["user_name"] = $o["name"];
            $u[$k]["sum_price"] = $g["price"]*$v["count"];
            $u[$k]["phone"] = $o["phone"];
        }
        //dump($u);
        $this->assign("u",$u);
        $this->display();
    }
    function send(){ //发货
        $id = I("get.id");
        $send = M("order");
        $send->stat = "已发货";
        $send->where("id=$id")->save();
        $this->success("发货成功");
    }

    function check(){ //订单查询
        $this->display();
    }
    function out(){ //发货单列表
        $this->display();
    }
}