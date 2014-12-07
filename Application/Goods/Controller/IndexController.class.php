<?php
namespace Goods\Controller;
use Common\Controller\CommonController;
class IndexController extends CommonController {
    public $cate;
    public $glist;
    public $treeList = array();

    public function _initialize(){
        $this->cate = M('goods_cate');
        $list = $this->cate ->order('`pid` asc,`sort` asc, `id` asc')->select();
        $this->glist = $this->tree($list);
    }

    function tree(&$data,$pid=0,$count=1){
        foreach($data as $key =>$value){
            if($value['pid']==$pid){
                $value['count'] = $count;
                $this->treeList[] = $value;
                unset($data[$key]);
                $this->tree($data,$value['id'],$count+1);
            }
        }
        return $this->treeList;
    }

    public function index(){//商品管理首页
        $this->assign("glist",$this->glist);
        $this->display();
    }

    function add_goods_cate(){ //添加商品分类
        $this->assign("glist",$this->glist);
        $this->display();
    }

    function post_add_goods_cate(){ //添加商品分类(提交)
        $post_add_goods_cate = M("goods_cate");
        $post_add_goods_cate->create();
        $post_add_goods_cate->add();
        $this->success("添加成功",U("index"));
    }

    function edit_goods_cate(){ //修改商品
        $id=I("get.id");
        $edit_goods_cate = M("goods_cate");
        $e_g_c=$edit_goods_cate->find($id);
        $this->assign("e_g_c",$e_g_c);
        $this->assign("glist",$this->glist);
        $this->display();
    }

    function post_edit_goods_cate(){ //修改商品（提交）
        $id=I("get.id");
        $p_e_g_c = M("goods_cate");
        $p_e_g_c->create();
        $p_e_g_c->where("id=$id")->save();
        $this->success("修改成功",U("index"));
    }

    function del_goods_cate(){ //删除商品分类
        $id = I("get.id");
        $del_goods_cate=M("goods_cate");
        $del_goods_cate->where("id=$id")->delete();
        $this->success("删除成功",U("index"));
    }

    function editGoods(){ //修改商品首页
        $editGoods =D("GoodsView");
        $eg = $editGoods->select();
        $this->assign("eg",$eg);
        $this->display();
    }

    function add_goods(){ //添加商品
        $this->assign("glist",$this->glist);
        $this->display();
    }

    function post_add_goods(){ //添加商品(发送)
        $post_add_goods = M("goods");
        $post_add_goods->create();
        $post_add_goods->add();
        $this->success("恭喜添加商品成功",U("editGoods"));
    }

    function edit_goods(){ //修改商品
        $id = I("get.id");
        $edit_goods = M("goods");
        $e = $edit_goods->find("$id");
        $this->assign("glist",$this->glist);
        $this->assign("e",$e);
        $this->display();
    }

    function post_edit_goods(){ //修改商品(发送)
        $id = I("get.id");
        $post_edit_goods = M("goods");
        $post_edit_goods->create();
        $post_edit_goods->where("id=$id")->save();
        $this->success("恭喜修改成功",U("editGoods"));
    }

    function del_goods(){ //删除商品
        $id = I("get.id");
        $del_goods=M("goods");
        $del_goods->where("id=$id")->delete();
        $this->success("删除成功",U("editGoods"));
    }
}