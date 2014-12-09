<?php
namespace Home\Controller;
use Think\Controller;
class StudentController extends Controller {
	public function index()
	{
		$model=M('nav');
                                       $data['data']=$model->where('is_show=1')->order('sort')->select();
		$User = M("student");
		$data['count']=$User->group('job_time')->getField('job_time',true);
		$data['info']=$User->select();
		$user_name=  session('user_name');
                                       $user_id=  session('user_id');
                                       $data1=$this->kaibanxinxi();
                                       $this->assign('username',$user_name);
                                       $this->assign('data1',$data1);
		$this->assign($data);
		$this->display();
	}
         //开班信息
    public function kaibanxinxi(){
          $model=M('class');
          $data=$model->select();
          return $data;
    }
}