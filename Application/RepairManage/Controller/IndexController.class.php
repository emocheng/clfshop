<?php
namespace RepairManage\Controller;
use Common\Controller\CommonController;
class IndexController extends CommonController{
    public function index(){ //退货管理
        $this->display();
    }

    function repair(){ //返修管理
        $this->display();
    }
}