<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display('admin/index');
    }
	//验证码 
    public function yzm(){
        $config =    array(    
             'fontSize'    =>    100,    // 验证码字体大小   
             'length'      =>    4,     // 验证码位数   
             'useNoise'    =>    false, // 关闭验证码杂点
           
         );
        $Verify = new \Think\Verify($config);
        $Verify->codeSet = '0123456789'; 
        $Verify->entry();
    }
}