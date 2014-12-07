<?php
namespace Admin\Controller;
use Think\Controller;
class StudentController extends Controller {
	/*
		就业信息页面
	*/
    public function stu_info(){
		if(isset($_GET['id']))
		{
			$User = M('student');
			$data['info']=$User->where('student_id='.$_GET['id'])->find();
			$data['action']='stu_update';
			$data['tag']='修改';
			$data['h_id']=$_GET['id'];
		}
		else
		{
			$data['action']='stu_insert';
			$data['tag']='添加';
		}
		$this->assign($data);
		$this->display();
    }
	/*
		就业信息列表页面
	*/
	 public function stu_list(){
		 //每页记录条数
		 $size=1;
		 //查询数据
		 $User = M('student');
		 $list = $User->page($_GET['p'].','.$size)->select();
		 $data['list']=$list;
		//设置分页
		 $count=$User->count();
		 $Page=new \Think\Page($count,$size);
		 $Page->setConfig('prev','上一页');
		 $Page->setConfig('next','下一页');
		 $data['page']=$Page->show();
		//模板赋值
		 $this->assign($data);
		 $this->display();
    }
	/*
		添加就业信息
	*/
	public function stu_insert(){
		// 实例化上传类
		$upload = new \Think\Upload();
		$upload->rootPath='Public/student/';
		$upload->autoSub=false;
		$upload->saveName=md5($_POST['name']);
		$info=$upload->upload();    
		if(!$info){
			echo $upload->getError();    
		}else{   
			foreach($info as $file){        
				$img='student/'.$file['savename'];
				//插入数据
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
		删除就业信息
	*/
	public function stu_delete()
	{
		$id=$_GET['id'];
		$User = M("student");
		$User->delete($_GET['id']);
		$this->info('成功','','','stu_list','查看列表');
	}
	/*
		修改就业信息
	*/
	public function stu_update()
	{
		echo "<pre>";
		print_r($_POST);
		print_r($_FILES);
	}
	/*
		操作信息页面
		* $info		    页面提示信息
		* $url X		跳转地址
		* $href X     跳转信息
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