<?php
namespace Home\Controller;
use Think\Controller;
class QuestionController extends Controller {
    public function index(){
        $model=M('nav');
        $data=$model->where('is_show=1')->order('sort')->select();     
        $data1=$this->kaibanxinxi();
        $data2=$this->jiuyexinxi();
        $user_name=  session('user_name');
        $user_id=  session('user_id');
        $models=M('question');
        $list=$models->select();
         $modelss=M('question_type');
        $lists=$modelss->where("is_show=1")->select();
        $this->assign('username',$user_name);
        $this->assign('list',$list);
        $this->assign('lists',$lists);
        $this->assign('data',$data);
        $this->assign('data1',$data1);
        $this->assign('data2',$data2);
        $this->display();
    }
    //开班信息
    public function kaibanxinxi(){
          $model=M('class');
          $data=$model->select();
          return $data;
    }
    //就业信息
     public function jiuyexinxi(){
          $model=M('student');
          $data=$model->select();
          return $data;
    }
    
     public function question_detail(){
        $models=M('question');
        $model=M('nav');
        $data=$model->where('is_show=1')->order('sort')->select();     
        $question=$models->where("question_id=$_GET[id]")->find();
        $this->assign("data",$data);
        $this->assign("question",$question);
        $this->display();
    }
}