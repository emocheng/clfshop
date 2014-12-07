<?php
namespace User\Model;
use Think\Model\ViewModel;

class UserViewModel extends ViewModel {
    public $viewFields = array(
//        'User'=>array('id','name','sex','password', 'level'),
//        'Level'=>array('name'=>'level_name','_on'=>'User.level=Level.id'),

        'goods_car'=>array('uid','gid','count'),
        'goods'=>array('id','name','thumb','price','_on'=>'goods_car.gid=goods.id'),
    );
}