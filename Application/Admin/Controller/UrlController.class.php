<?php
namespace Admin\Controller;
use Think\Controller;
class UrlController extends Controller {
    
    public function add_url(){
        $this->display();
    }
    
    public function list_url(){
        $list=D(nav);
        $data=$list->select();
        $this->display('data',$data);
        $this->display();
    }
}