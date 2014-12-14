<?php

namespace Admin\Controller;
use Think\Controller;

class AdminController extends Controller {

    //后台登陆
    public function index(){
      $this->display();
    }
    //处理登陆
    public function admin_login_pro(){
        //print_r($_POST);
        $code=$_POST['yzm'];
        $name=$_POST['admin_name'];
        $pwd=$_POST['admin_pwd'];
        $verify = new \Think\Verify();   
        if($verify->check($code, $id='')==""){
            $this->error("验证码错误");
        }else{
            $admin_user = D('admin');
            $data = $admin_user->where("admin_name='".$name."'")->find();
            //echo $admin_user->getLastSql();
            //dump($data);
            if($data!=""){
                  if($data['admin_pass']==md5($pwd)){
                    //  $this->redirect();
                    session('name',$name); 
                    redirect("admin_welcome");
                    
                  }
                 $this->error("用户名与密码不匹配");
            }
            
        }
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
    
    //退出登录
    public function logo_out(){
       
        session(null);
        $this->success('退出成功！',U('admin/index'));
    }
//右
public function admin_main(){
        //检测是否登录
		if(!isset($_SESSION["name"])){
			//没有登录跳转到登陆页面
			$this->error("没有登录，禁止访问",U("admin/index"));
		}
        $name=session('name');
        $this->assign('name',$name);
        $this->display();
    }

//后台主页  
	public function admin_welcome(){
		//检测是否登录
		if(!isset($_SESSION["name"])){
			//没有登录跳转到登陆页面
			$this->error("没有登录，禁止访问",U("admin/index"));
		}
		$this->display();
	}
}