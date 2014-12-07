<?php
namespace VIP\Controller;
use Common\Controller\CommonController;
class IndexController extends CommonController{

    function index(){ //会员列表
        $user = D("VipView");
        $u = $user->select();
        $this->assign("u",$u);
        $this->display();
    }

    function addVip(){ //添加会员
        $level =M("level");
        $lv = $level->select();
        $this->assign("lv",$lv);
        $this->display();
    }

    function post_add_vip(){
        $psd =$_POST["password"];
        $rpsd = $_POST["repassword"];
        if($psd == $rpsd){ //验证密码是否一致
            $post_add_vip = M("user");
            $post_add_vip->create();
            $post_add_vip->add();
            $this->success("恭喜您添加会员成功",U("index"));
        }else{
            $this->error('密码不一致,请重新填写',U("addvip"));
        }
    }

    function edit_vip(){
        $id = I("get.id");
        $edit_vip = M("user");
        $e_v = $edit_vip->find($id);
        $level =M("level");
        $lv = $level->select();
        $this->assign("lv",$lv);
        $this->assign("e_v",$e_v);
        $this->display();
    }

    function post_edit_vip(){
        $psd =$_POST["password"];
        $rpsd = $_POST["repassword"];
        $id = I("get.id");
        if($psd == $rpsd){
            $post_edit_vip = M("user");
            $post_edit_vip->create();
            $post_edit_vip->where("id=$id")->save();
            $this->success("恭喜修改成功",U("index"));
        }else{
            $this->error('密码不一致,请重新填写',U("edit_vip","id=$id"));
        }
    }

    function del_vip(){ //删除会员
        $id = I("get.id");
        $del_vip = M("user");
        $del_vip->where("id=$id")->delete();
        $this->success("恭喜删除用户成功",U("index"));
    }

    function level(){ //会员等级
        $level =M("level");
        $lv = $level->select();
        $this->assign("lv",$lv);
        $this->display();
    }

    function edit_level(){ //修改等级
        $id = I("get.id");
        $edit_level = M("level");
        $e_l = $edit_level->find($id);
        $this->assign("e_l",$e_l);
        $this->display();
    }

    function post_edit_level(){ //修改等级(发送)
        $id = I("get.id");
        $post_edit_level = M("level");
        $post_edit_level->create();
        $post_edit_level->where("id=$id")->save();
        $this->success("恭喜修改成功",U("level"));
    }

    function add_level(){ //新增等级
        $this->display();
    }
    function post_add_level(){ //新增等级(发送)
        $post_add_level = M("level");
        $post_add_level->create();
        $post_add_level->add();
        $this->success("恭喜添加成功",U("level"));
    }

    function del_level(){
        $id = I("get.id");
        $del_level = M("level");
        $del_level->where("id=$id")->delete();
        $this->success("恭喜删除成功",U("level"));
    }

    function massage(){ //会员留言
        $massage=M("massage");
        $m = $massage->select();
        $this->assign("m",$m);
        $this->display();
    }

    function del_massage(){ //删除留言
        $id = I("get.id");
        $del_massage = M("massage");
        $del_massage->where("id=$id")->delete();
        $this->success("删除成功",U(massage));
    }
}