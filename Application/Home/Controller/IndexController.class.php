<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $model=M('nav');
        $data=$model->where('is_show=1')->order('sort')->select();
      
        $this->assign('data',$data);
        $this->display();
    }
}