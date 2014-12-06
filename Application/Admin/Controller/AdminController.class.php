<?php

namespace Admin\Controller;
use Think\Controller;

class AdminController extends Controller {

//后台首页
    public function index(){
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