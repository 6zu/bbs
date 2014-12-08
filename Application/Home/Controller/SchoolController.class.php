<?php
namespace Home\Controller;
use Think\Controller;
class SchoolController extends Controller {
    //师资力量
    public function index(){
        $model=M('nav');
        $data=$model->where('is_show=1')->order('sort')->select();
        $this->assign('data',$data);
      /*  S(array(    'type'=>'memcache',  
                    'host'=>'192.168.1.151',   
                    'port'=>'11211',  
                    'prefix'=>'think'
               )
         );
        if(S('a')==''){
             $user=M('teacher');
             $list=$user->select();
             S('a',$list,10);
        }else{
             $list=S('a');
        }*/
        $user=M('teacher');
        $list=$user->select();
        $this->assign('list',$list);
        $this->display();
    }
    public function stage(){
        $model=M('nav');
        $data=$model->where('is_show=1')->order('sort')->select();
        $this->assign('data',$data);
        $brand=M('class');
        $list=$brand->select();
        $user=M('class_leve');
        $info=$user->select();
        $this->assign('list',$list);
        $this->assign('info',$info);
        $this->display();
    }
}