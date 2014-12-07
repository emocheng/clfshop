<?php
namespace Article\Model;
use Think\Model\ViewModel;

class ArticleViewModel extends ViewModel {
    public $viewFields = array(
        'Article'=>array('id','title','content', 'time', 'cid'),
        'Category'=>array('name'=>'cate_name','_on'=>'Article.cid=Category.id'),
    );
}