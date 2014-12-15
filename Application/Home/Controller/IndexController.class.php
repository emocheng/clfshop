<?php
namespace Home\Controller;
use Common\Controller\HomeController;
class IndexController extends HomeController{

   function index(){ //首页显示
       $pc = M("goods");
       $pc_desktop = $pc->where("gid=3")->select();//台式
       $pc_table = $pc->where("gid=2")->select(); //平板
       $pc_note = $pc->where("gid=1")->select(); //笔记本
       $this->assign("pc_desktop",$pc_desktop);
       $this->assign("pc_table",$pc_table);
       $this->assign("pc_note",$pc_note);
       $this->display();
   }

   function goods(){ //产品详情页
       $id = I("get.id");
       $goods = M("goods");
       $g = $goods->find($id);
       $comm = M("goods_comm");//实例化评论表
       $user_comm = $comm->where("gid=$id")->select();
       $user_info = M("user");
        foreach($user_comm as $k=>$v){
           $u_i = $user_info->find("$v[uid]");
            $user_comm["$k"]["user_name"] = $u_i["name"];
        }
       $this->assign("user_comm",$user_comm);
       $this->assign("id",$id);
       $this->assign("g",$g);
       $this->display();
   }
    function promotion(){
        $this->display();
    }

    function goods_list(){ //产品内页
        $gid = I("get.id");
        $goods_list = M("goods");
        $g_l = $goods_list->where("gid=$gid")->select();
        $this->assign("g_l",$g_l);
        $this->display();
    }

    function login(){
        $this->display();
    }
    function post_login(){
        $name=I("post.name");
        $password=I("post.password");
        $post_login = M("User");
        $count  = $post_login->where("name='$name' and password='$password'")->count();
        if($count>0){
            $User = D("HomeView");
            $u = $User->having("name='$name'")->find();
            session("user",$u);
            $this->success("登陆成功",U("home/index/index"));
        }else{
            $this->error("用户不存在",U("login"));
        }
    }

   function register(){

       $this->display();
   }

    function post_register(){
        if(IS_POST){
            $code = I("post.code");
            $password = I("post.password");
            $repassword=I("post.repassword");
            $name=I("post.name");
            if(!$this->check_verify($code)){
                $this->error("验证码错误",U("register"));
            }
            if($name!=""&$password==$repassword){
                $post_register = M("user");
                $post_register->create();
                $id = $post_register->add();
                $user = $post_register->find($id);
                session("user",$user);
                $this->success("注册成功",U("home/index/index"));
            }else{
                $this->error("用户名为空或密码不一致",U("register"));
            }
        }

    }
    function yzm(){
        $Verify = new \Think\Verify();
        $Verify->fontSize = 30;
        $Verify->length   = 3;
        $Verify->useNoise = false;
        $Verify->entry();
    }

    function check_verify($code, $id = ''){
        $verify = new \Think\Verify();
        return $verify->check($code, $id);
    }

    function logout(){ //退出账号
        session(null);
        $this->success("登出成功");
    }

    function post_add_car(){
        $uid = $this->user["id"];
        $gid = I("post.gid");
       if(isset($this->user)){
            $post_add_car = M("goods_car");
           $num = $post_add_car->where("uid=$uid and gid=$gid")->find();

           //如果购物车里已经有相同的商品，数量加1;
           if($num){
               $car_id = $num["id"];
               $post_add_car->where("id=$car_id")->setInc("count");
               $this->success("恭喜您添加成功");
           }
           //如果购物车里没有相关记录,添加一条新记录
           $post_add_car->uid=$uid;
           $post_add_car->gid=$gid;
           $post_add_car->add();
           $this->success("恭喜您添加成功");

        }else{
           $this->error("您还没有登陆");
       }
    }

}