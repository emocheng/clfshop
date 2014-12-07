<?php
namespace Article\Controller;
use Common\Controller\CommonController;
class IndexController extends CommonController{

    public $cate;
    public $alist;
    public $treeList = array();

    public function _initialize(){
        $this->cate = M('Category');
        $list = $this->cate ->order('`pid` asc,`sort` asc, `id` asc')->select();
        $this->alist = $this->tree($list);
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

    function index(){//栏目表
        $this->assign("alist",$this->alist);
        $this->display();
    }

    function articlelist(){ //文章列表
        $article = D("ArticleView");
        $art = $article->select();
        $this->assign("art",$art);
        $this->display();
    }

    function add_assortment(){ //新增栏目表(显示)
        $this->assign("alist",$this->alist);
        $this->display();
    }

    function edit_column(){ //修改栏目表(显示)
        $id = I('get.id');
        $edit_column = M('Category');
        $e = $edit_column->find($id);
        $this->assign("alist",$this->alist);
        //dump($e);
        $this->assign("e",$e);
        $this->display();
    }

    function post_edit_column(){ //修改栏目表(发送)
        $id = I('get.id');
        $post_edit_column = M('Category');
        $post_edit_column->create();
        $post_edit_column->where("id=$id")->save();
        $this->success("恭喜你修改成功", U("index"));
    }

    function del_column(){ //删除栏目表(包括子栏目，栏目下的文章)
        $id = I('get.id');
        $del_column = M('Category');
        $del_column->where("id=$id")->delete();
        $this->success("恭喜你删除成功", U("index"));
    }

    function add_article(){ //添加文章
        $this->assign("alist",$this->alist);
        $this->display();
    }

    function post_add_article(){ //添加文章(发送)
//        $content = $_POST['content'];
//        $title =$_POST['title'];
//        $cid = $_POST['cid'];
        //$time = time();
        $post_add_article = M("article");
        $post_add_article ->create();
        $post_add_article ->time = time();
        $post_add_article -> add();
        $this->success("恭喜你添加成功", U("articlelist"));
    }
    function post_column(){ //新增栏目表(发送)
//        $name = $_POST['column_name'];
//        $pid = $_POST["pid"];
//        $content = $_POST['editor1'];
//        $type = $_POST['type'];
//        $url = $_POST['url'];
        $post_column = M("Category");
        $post_column->create();
        $post_column->add();//新增栏目表
        $this->success("恭喜你添加成功", U("index"));
    }

    function edit_article(){ //修改文章（显示）
        $id = I("get.id");
        $edit_article = M("article");
        $a = $edit_article->find($id);
        $this->assign("a",$a);
        $this->assign("alist",$this->alist);
        $this->display();

    }

    function post_edit_article(){ //修改文章(发送)
        $id = I("get.id");
        $post_edit_article = M("article");
        $post_edit_article ->create();
        $post_edit_article ->where("id=$id")->save();
        $this->success("恭喜你修改成功", U("articlelist"));
    }

    function del_article(){ //删除文章
        $id = I("get.id");
        $del_article = M("article");
        $del_article->where("id=$id")->delete();
        $this->success("恭喜你删除成功", U("articlelist"));
    }
}