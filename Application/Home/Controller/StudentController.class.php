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
		$this->assign($data);
		$this->display();
	}
}