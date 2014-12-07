<?php
namespace Report\Controller;
use Common\Controller\CommonController;
class IndexController extends CommonController{
    public function index(){
        $this->display();
    }

    function sale(){ //销售明细
        $this->display();
    }

    function sale_top(){ //销售排行
        $this->display();
    }
}