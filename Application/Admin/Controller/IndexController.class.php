<?php
namespace Admin\Controller;
use Common\Controller\CommonController;
class IndexController extends CommonController{

    function index(){ //加载后台首页
        $this->display();
    }
}