<?php

namespace Admin\Controller;
use Think\Controller;

class CommonController extends Controller {

     public function __construct(){
		parent::__construct();
		
		//检测是否登录
		if(!isset($_SESSION["name"])){
			//没有登录跳转到登陆页面
			$this->error("没有登录，禁止访问",U("admin/index"));
		}

    }
}