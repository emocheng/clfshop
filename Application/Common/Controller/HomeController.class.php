<?php
namespace Common\Controller;
use Think\Controller;
class HomeController extends Controller {
        function __construct(){
            parent::__construct();
            $this->layout_home();
            $this->check_login();
        }

        function layout_home(){
            $layout_home = M("goods_cate");
            $l_h = $layout_home->where("pid=0")->select();
            $this->assign("l_h",$l_h);
        }

        function check_login()
        {
            if (session('user') != "") {
                $user = session(user);
                $this->assign("user",$user);
            } else {
                if(MODULE_NAME == "User") {
                    $this->error("您还没有登陆， 请不要恶意访问", "index.php");
                }
            }
        }
}