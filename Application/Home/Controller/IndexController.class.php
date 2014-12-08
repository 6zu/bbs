<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $model=M('nav');
        $data=$model->where('is_show=1')->order('sort')->select();
        $data1=$this->kaibanxinxi();
        $data2=$this->jiuyexinxi();
        $this->assign('data',$data);
        $this->assign('data1',$data1);
        $this->assign('data2',$data2);
        $this->display();
    }
    //开班信息
    public function kaibanxinxi(){
          $model=M('class');
          $data=$model->select();
          return $data;
    }
    
    //就业信息
    
    public function jiuyexinxi(){
          $model=M('student');
          $data=$model->select();
          return $data;
    }
}