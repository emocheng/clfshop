<?php
namespace Home\Model;
use Think\Model\ViewModel;

class HomeViewModel extends ViewModel {
    public $viewFields = array(
        'User'=>array('id','name','sex','password', 'level','money'),
        'Level'=>array('name'=>'level_name','_on'=>'User.level=Level.id'),
    );
}