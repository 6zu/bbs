<?php
namespace Home\Controller;
use Think\Controller;
class PublicController extends Controller {
    //头部
    public function layout(){
        $model=M('nav');
        $data=$model->where('is_show=1')->select();
      
        $this->assign('data',$data);
        
        $this->display();
    }
   
}