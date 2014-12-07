<?php
namespace System\Controller;
use Common\Controller\CommonController;
class IndexController extends CommonController{
    public function index(){ //网站信息
        $this->display();
    }
    function express(){ //配送方式
        $this->display();
    }

    function area(){ //地区列表
        $this->display();
    }

    function link(){ //友情链接
        $this->display();
    }
}