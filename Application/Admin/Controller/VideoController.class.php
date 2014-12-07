<?php
namespace Admin\Controller;
use Think\Controller;
 use Think\Upload;
class VideoController extends Controller {
//添加视频
public function video_add(){
	$this->display();
}
//添加视频处理
public function video_add_pro(){
      $Video=M('video');
    $config = array(
            'maxSize' => 3145728,
          'saveName'   =>    array('uniqid',''),
            'exts'=>array('jpg', 'gif', 'png', 'jpeg'),
            'rootPath'=>'./Public/uploads/'
            );
        $upload = new \Think\Upload($config);// 实例化上传类
        // 上传文件 
        $info = $upload->upload(); 
        if(!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        }else{// 上传成功
             $image=$info['fenmian']['savepath'].$info['fenmian']['savename'];
              $data['video_name']=$_POST['name'];
              $data['video_author']=$_POST['author'];
              $data['video_path']=$_POST['video'];
              $data['video_img']=$image;
              $a=$Video->add($data);
              if($a){
                  $this->success('上传成功！','video_list');  
              }else{
                  $this->error('上传失败');   
              }  
        }  
}
//视频列表
public function video_list(){
    $Video = M('video'); // 实例化User对象
    $count= $Video->count();
    $Page = new \Think\Page($count,3);
    $show= $Page->show();
    $list = $Video->limit($Page->firstRow.','.$Page->listRows)->select();
    $this->assign('list',$list);
    $this->assign('page',$show);
    $this->display(); 
}

//删除视频数据
public function del(){
    $id=$_POST['id'];
      $Video = M("video"); 
     $data=$Video->where("video_id=$id")->delete(); 
     if($data){
         echo 1;
     }else{
         echo 2;
     }
}

//查询要修改的内容
public function update(){
    $id=$_GET['id'];
   
    $Video = M("video"); 
    $data = $Video->where("video_id=$id")->find();
    $this->assign('list', $data);
    $this->display(); 
}
//修改视频处理
public function video_update_pro(){
   $Video=M('video');
   $id=$_POST['h_id'];
   $data = $Video->where("video_id=$id")->find();    
    if(!empty($_FILES['fenmian']['name'])){
    $config = array(
          'maxSize' => 3145728,
        'saveName'   =>    array('uniqid',''),
          'exts'=>array('jpg', 'gif', 'png', 'jpeg'),
          'rootPath'=>'./Public/uploads/'
          );
    $upload = new \Think\Upload($config);// 实例化上传类
        // 上传文件 
    $info = $upload->upload(); 
    $image=$info['fenmian']['savepath'].$info['fenmian']['savename'];
       
    if(!$info) {// 上传错误提示错误信息
        $this->error($upload->getError());
    }else{// 上传成功
         $image=$info['fenmian']['savepath'].$info['fenmian']['savename'];
          $data['video_name']=$_POST['name'];
          $data['video_author']=$_POST['author'];
            $data['video_path']=$_POST['video'];
          $data['video_img']=$image;
          $a=$Video->where("video_id=$id")->save($data); 
          if($a){
              $this->success('修改成功！','video_list');  
          }else{
              $this->error('修改失败');     
          }
    }
  }else{
         if($data['video_name']==$_POST['name'] && $data['video_author']==$_POST['author'] && $data['video_path']==$_POST['video'] ){
            $this->success('未做任何修改！','video_list');  
            die;
      }
        $data['video_name']=$_POST['name'];
        $data['video_author']=$_POST['author'];
        $data['video_path']=$_POST['video'];
        $a=$Video->where("video_id=$id")->save($data); 
          if($a){
              $this->success('修改成功！','video_list');  
          }else{
              $this->error('修改失败');
          }
      }
     
}


}