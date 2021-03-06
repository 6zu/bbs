<?php
namespace Home\Controller;
use Think\Controller;

class VideoController extends Controller {
    //php视频列表
        public function index(){

            $video=M('video');
            $count= $video->count();
            $Page = new \Think\Page($count,10);
            $show= $Page->show();
            $list = $video->limit($Page->firstRow.','.$Page->listRows)->select();
            $this->assign('arr',$list);
            $this->assign('page',$show);

            $models=M('nav');
            $data=$models->where('is_show=1')->order('sort')->select();

            $this->assign('data',$data);
                        $user_name=  session('user_name');
                        $user_id=  session('user_id');
                        $this->assign('username',$user_name);
                         $data4=$this->question();
                   $this->assign('data4',$data4);
            $this->display();	

    }
        //播放视频
        public function play(){
                $video=M('video');
                $models=M('nav');
                $user=M('user'); 
                 $user_id=  session('user_id');
                   $jifen=$user->where("user_id= $user_id")->find();

                if($jifen['user_jifen']<10){
                   $this->error("播放失败，当前积分不足"); 
                }else{
                        $data['user_jifen']=$jifen['user_jifen']-10;
                    $user->where("user_id= $user_id")->data($data)->save();
                 $data=$models->where('is_show=1')->order('sort')->select();
                $this->assign('data',$data);
                $user_name=  session('user_name');
                 $user_id=  session('user_id');
                $this->assign('username',$user_name);
                $data=$video->where("video_id='".$_GET['id']."'")->select();
                $this->assign('arr',$data);
                
                $this->display(); 
              
                }
}
 //常见问题
    public function question(){
        $model=M('question');
       // join("bbs_question_type on bbs_question.question_type=bbs_question_type.question_type_id")->
        $data=$model->select();
        return $data;
    }

}