<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $model=M('nav');
        $data=$model->where('is_show=1')->order('sort')->select();
        $data1=$this->kaibanxinxi();
        $this->assign('data',$data);
        $this->assign('data1',$data1);
        $this->display();
    }
    
    public function kaibanxinxi(){
          $model=M('class');
          $data=$model->select();
          return $data;
    }
}