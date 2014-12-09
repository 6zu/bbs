<?php
namespace Home\Controller;
use Think\Controller;
class PublicController extends Controller {
    //头部
    public function layout(){
        $model=M('nav');
        $data=$model->where('is_show=1')->order('sort')->select();
        $this->assign('data',$data);
        $user_name=session('username');
      
        $this->assign('username',$user_name);
        
        
        $this->display();
    }
    
    public function register(){
           $model=M('nav');
           $data=$model->where('is_show=1')->order('sort')->select();
           $this->assign('data',$data);
           $this->display();
    }
    
    public function register_pro(){
        $model=M('user');
        $arr=$model->create();
        $username=$_POST['user_name'];
        if($arr){
            $arr['user_time']=  date("Y-m-d");
             $data=$model->add($arr);
             if($data){
                
                 session('user_id',$data); 
                 session('user_name',$username); 
                 redirect("/home/index/index");
             }
        }
        
    }
    
    public function logo(){
       
        $name=$_POST['username'];
        $pwd=$_POST['password'];
        
        $model = D('user');
        $data = $model->where("user_name='".$name."'")->find();
            
            if($data!=""){
                  if($data['user_pass']==$pwd){
                    $uid=$data['user_id'];
                    session('user_id',$uid); 
                    session('user_name',$name); 
                    redirect("/home/index/index");
                    
                  }else{
                    $this->error("用户名与密码不匹配");
                  }
            }
            
        
    }
    
    public function logoout(){
         session(null);
         redirect("/home/index/index");
    }
   
}