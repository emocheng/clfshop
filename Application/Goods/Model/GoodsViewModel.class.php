<?php
namespace Goods\Model;
use Think\Model\ViewModel;

class GoodsViewModel extends ViewModel {
    public $viewFields = array(
        'Goods'=>array('id','name','sn', 'price', 'gid','logo','weight','place', 'size', 'cpu','touch','t','shelve','cp','thumb'),
        'Goods_cate'=>array('name'=>'goods_cate','_on'=>'Goods.gid=Goods_cate.id'),
    );
}