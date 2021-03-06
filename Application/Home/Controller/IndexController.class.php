<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $model=M('nav');
        $data=$model->where('is_show=1')->order('sort')->select();     
        $data1=$this->kaibanxinxi();
        $data2=$this->jiuyexinxi();
        $data3=$this->college();
        $data4=$this->question();
        $user_name=  session('user_name');
        $user_id=  session('user_id');
        $this->assign('username',$user_name);
        $this->assign('data',$data);
        $this->assign('data1',$data1);
        $this->assign('data2',$data2);
        $this->assign('data3',$data3);
        $this->assign('data4',$data4);
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
    
    //学院消息
    public function college(){
        $model=M('college_article');
        $data=$model->select();
        return $data;
    }
    
    //学院消息详细信息
    public function article_detail(){
        $models=M('college_article');
        $model=M('nav');
        $data=$model->where('is_show=1')->order('sort')->select();     
        $article=$models->where("college_article_id=$_GET[id]")->find();
        $this->assign("data",$data);
        $this->assign("article",$article);
        $this->display();
    }
    
    //常见问题
    public function question(){
        $model=M('question');
       // join("bbs_question_type on bbs_question.question_type=bbs_question_type.question_type_id")->
        $data=$model->select();
        return $data;
    }
}