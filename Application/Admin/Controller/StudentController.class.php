<?php
namespace Admin\Controller;
use Think\Controller;
class StudentController extends Controller {
	/*
		就业信息页面
	*/
    public function stu_info(){
		$data['action']='stu_insert';
		$data['tag']='添加';
		$this->assign($data);
		$this->display();
    }
	/*
		就业信息列表页面
	*/
	 public function stu_list(){
		 $this->display();
    }
	/*
		添加就业信息
	*/
	public function stu_insert(){
		$upload = new \Think\Upload();// 实例化上传类
		$upload->rootPath='Public/student/';
		$upload->autoSub=false;
		$upload->saveName=md5($_POST['name']);
		$info=$upload->upload();    
		if(!$info){
			echo $upload->getError();    
		}else{   
			foreach($info as $file){        
				$img='student/'.$file['savename'];
				$User = M("student");
				if($User->add(array(
						'student_name'=>$_POST['name'],
						'student_school'=>$_POST['school'],
						'student_img'=>$img,
						'job_time'=>$_POST['time'],
						'job_company'=>$_POST['company'],
						'job_money'=>$_POST['money']
					))){
					$this->info('成功','stu_info','继续添加','stu_list','查看列表');
				}else{
					$this->info('失败','','','stu_list','查看列表');
				}
			}
		}
    }
	/*
		操作信息页面
	*/
	 public function info($info,$url1,$href1,$url2,$href2){
		 $data['info']=$info;
		 $data['url1']=$url1;
		 $data['href1']=$href1;
		 $data['url2']=$url2;
		 $data['href2']=$href2;
		 $this->assign($data);
		 $this->display('info');
    }


}