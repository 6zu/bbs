<?php
namespace Admin\Controller;
use Think\Controller;
class UrlController extends Controller {
    //添加表单
    public function add_url(){
        $this->display();
    }
    //添加操作
    public function add_url_pro(){
      
        $User = M('nav');
        $data=$User->create();
        $data=$User->add($data);
        if($data){
             redirect("list_url");
        }
    }


    public function list_url(){
        $list=D(nav);
        $data=$list->select();
        $this->assign('data',$data);
        $this->display();
    }
}