<?php
namespace User\Controller;
use Common\Controller\HomeController;
class IndexController extends HomeController{

    

    public function index(){ //欢迎页
        $id = $this->user["id"];
        $user_index = D("UserView");
        $u_f = $user_index->find($id);
        $money_sum = M("my_money");
        $sum = $money_sum->where("mid=$id")->sum("money");
        $this->assign("sum",$sum);
        $this->assign("u_f",$u_f);
        $this->display();
    }
    public function user_info(){ //用户信息
        $id = $this->user["id"];
        $user_info = D("UserView");
        $u_f = $user_info->find($id);
        $this->assign("u_f",$u_f);
        $this->display();
    }

    public function post_user_info(){ //修改用户信息
        $id = I("get.id");
        $post_user_info = M("user");
        $post_user_info->create();
        $post_user_info->where("id=$id")->save();
        $User = D("UserView");
        $u = $User->having("id='$id'")->find();
        session("user",$u);
        $this->success("恭喜，修改成功",U("index"));
    }

    function user_goods(){ //订单管理
        $id = $this->user["id"];
        $user_goods = M("order");
        $u_g = $user_goods->where("uid=$id")->select();
        $goods_info = M("goods");
        foreach($u_g as $k=>$v){
            $goods_id = $goods_info->find("$v[oid]");
            $u_g[$k]["gid_name"] = $goods_id["thumb"];
            $u_g[$k]["sum_price"]=$goods_id["price"]*$v["count"];
        }

        $this->assign("u_g",$u_g);
        $this->display();
    }

    function car(){ //购物车
        $id=$this->user['id'];
        $car=D("UserView");
        $c = $car->where("uid=$id")->select();
        $sum_count = $car->where("uid=$id")->sum("count"); //商品总数
        $sum_money = 0;
        foreach($c as $v){
            $sum_money+=$v["price"]*$v["count"];
        }
        echo $sum_money;
        $this->assign("sum_money",$sum_money);
        $this->assign("sum_count",$sum_count);
        $this->assign("c",$c);
        $this->display();
    }

    //加减商品发送过来的数据
    function car_ajax(){
        $count = I("post.count");
        $gid = I("post.gid");
        $id = $this->user["id"];
        $car_ajax = M("goods_car");
        $car_ajax->count = $count;
        $car_ajax->where("uid=$id and gid=$gid")->save();
        $sum_count = $car_ajax->where("uid=$id")->sum("count"); //商品总数
        echo $sum_count;
    }

    function account(){ //结算页面
        $id = $this->user["id"];
        $address = M("address");
        $ad = $address->where("add_id=$id and type='1'")->find(); //查询默认发货地址
        $my_money = M("my_money");
        $my_money_sum = $my_money->where("mid=$id")->sum("money"); //查询我的余额
        $account = D("UserView");
        $ac = $account->where("uid=$id")->select();//查询购物车订单
        //dump($ac);
        $pay_sum = 0; //初始化购物金额
        foreach($ac as $v){
            $pay_sum+=$v["price"]*$v["count"];
        }
        $this->assign("pay_sum",$pay_sum);
        $this->assign("my_money_sum",$my_money_sum);
        $this->assign("ad",$ad);
        $this->assign("ac",$ac);
        $this->display();
    }

    function account_ajax(){ //结算提交ajax
        if(IS_AJAX){
        $id = $this->user["id"];
        $money_sum = I("post.money_sum");
        $new_money = M("my_money");
        $new_money->money=-$money_sum;
        $new_money->time=time();
        $new_money->type="消费";
        $new_money->mid=$id;
        $new_money->where("mid=$id")->add(); //将消费金额插入数据库
        $order = D("UserView");
        $my_order = $order->where("uid=$id")->select();
        $new_order =M("order");
        $my_sn = $new_order->max("sn")+1;
        foreach($my_order as $v){
            $oid = $v["gid"];
            $new_order->oid=$oid;
            $new_order->sn=$my_sn;
            $new_order->uid=$id;
            $new_order->time=time();
            $new_order->count=$v["count"];
            $new_order->where("uid=$id")->add(); //将购物车商品加入到订单列表
        }
        $car = M("goods_car");
        $car->where("uid=$id")->delete(); //加入我的订单后删除购物车
        }else{
            $this->error("不要非法点击");
        }





    }

    function points(){ //积分
        $this->display();
    }
    function collect(){ //我的收藏
        $this->display();
    }
    function my_comm(){ //评论管理
        $this->display();
    }
    function money_manage(){ //资金管理
        $id=$this->user["id"];
        $money_sum = M("my_money");
        $sum = $money_sum->where("mid=$id")->sum("money");
        $money_info=$money_sum->where("mid=$id")->select();
        $this->assign("sum",$sum);
        $this->assign("money_info",$money_info);
        $this->display();
    }

    function post_money(){ //账户充值
        $id = $this->user["id"];
        $post_money = M("my_money");
        $post_money->create();
        $post_money->time = time();
        $post_money->mid=$id;
        $post_money->where("mid=$id")->add();
        $this->success("充值成功",U("money_manage"));
    }


    function address(){ //收货地址
        $id = $this->user["id"];
        $address = M("address");
        $my_address = $address->where("add_id=$id")->select();
        $this->assign("my_address",$my_address);
        $this->display();
    }
    function post_address(){ //添加收货地址
        $id = $this->user["id"];
        $type = I("post.type");
        $post_address = M("address");
        $post_address->create();
        $post_address->add_id = $id;
        $add_id = $post_address->where("add_id=$id")->add();
        if($type==1){ //如果设置了默认值为1，其他的默认值全部改为0
            $post_address->type = 0;
            $post_address->where("id!=$add_id")->save();
        }
        $this->success("添加地址成功",U("address"));
    }

    function del_address(){ //删除地址
        $id = I("get.id");
        $del_address = M("address");
        $del_address->where("id=$id")->delete();
        $this->success("删除成功",U("address"));
    }
}