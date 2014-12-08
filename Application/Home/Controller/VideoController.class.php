<?php
namespace Home\Controller;
use Think\Controller;
class VideoController extends Controller {
    //php视频列表
	public function index(){
		$video=M('video');
		$data=$video->select();
		$this->assign('arr',$data);
		$models=M('nav');
		$data=$models->where('is_show=1')->order('sort')->select();
		$this->assign('data',$data);
		$this->display();	
    }
	//播放视频
	public function play(){
		$video=M('video');
		$models=M('nav');
		$data=$models->where('is_show=1')->order('sort')->select();
		$this->assign('data',$data);
		$data=$video->where("video_id='".$_GET['id']."'")->select();
		$this->assign('arr',$data);
		$this->display();	
	}

}