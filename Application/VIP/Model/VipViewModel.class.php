<?php
namespace Vip\Model;
use Think\Model\ViewModel;

class VipViewModel extends ViewModel {
    public $viewFields = array(
        'User'=>array('id','name','sex','password', 'level'),
        'Level'=>array('name'=>'level_name','_on'=>'User.level=Level.id'),
    );
}