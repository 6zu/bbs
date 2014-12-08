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
        if(empty($verify->check($code, $id=''))){
            $this->error("验证码错误");
        }else{
            $admin_user = D('admin');
            $data = $admin_user->where("admin_name='".$name."'")->find();
            //echo $admin_user->getLastSql();
            //dump($data);
            if(!empty($data)){
                  if($data['admin_pass']=md5($pwd)){
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
        
        $name=session('name');
        $this->assign('name',$name);
        $this->display();
    }

//后台主页  
	public function admin_welcome(){
		 $this->display();
	}
	public function admin_header(){
		 $this->display();
	}
//班级列表
public function class_list(){
		 $this->display();
	}

//添加阶段
public function stage_add(){
		 $this->display();
	}
//班级列表
public function stage_list(){
		 $this->display();
	}
//添加视频
public function video_add(){
		 $this->display();
	}
//视频列表
public function video_list(){
	 $this->display();
}



//添加职位
public function Position_add(){
				 $this->display();
		}
//职位列表
public function Position_list(){
				 $this->display();
		}

//添加教师
public function teacher_add(){
				 $this->display();
		}

//教师列表
public function teac_list(){
				 $this->display();
		}

}