<?php
namespace Admin\Controller;
use Think\Controller;
class SchoolController extends CommonController {
    //课程添加主页
    public function class_add(){
        $this->display();
    }
    //添加课程
    public function add_class(){
        $User=M('class');
        $data=$_POST;
        //print_r($data);die;
         $upload = new \Think\Upload();// 实例化上传类 
          //$upload->maxSize   =     3145728 ;// 设置附件上传大小  
          $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型   
          $upload->rootPath  =      './Public/uploads/'; // 设置附件上传目录    // 上传文件  
          $info   =   $upload->upload();    
         if(!$info) {// 上传错误提示错误信息       
             $this->error($upload->getError());    
         }else{        
                  if(!empty($data['class_name'])&&!empty($data['class_key'])&&!empty($data['class_desc'])){
                        
                        $data[class_img]= $info['class_img']['savepath'].$info['class_img']['savename'];
                        $User->data($data)->add();
                        $this->success('添加成功',U('School/class_list'));
                   }else{
                       $this->error('添加失败,请完善信息');
                   }
            }
    }
    //课程显示
    public function class_list(){
        $User = M('class'); // 实例化User对象
        $count = $User->count();// 查询满足要求的总记录数
        $Page  = new \Think\Page($count,3);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show  = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $User->limit($Page->firstRow.','.$Page->listRows)->select();$this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板
    }
    //删除课程
    public function del_class(){
        $User = M('class'); // 实例化User对象
        $User->delete($_GET['id']);
       $this->success('删除成功',U('School/class_list'));
    }
    //修改课程状态
    public function up_class_stu(){
        $User = M('class'); // 实例化User对象
        $id=$_GET['id'];
        $stu=$_GET['stu'];
       if(!empty( $id)){
           $data['class_stu']=$stu;
           $User->where("class_id=".$id."")->save($data);
           if($stu=='0'){
               $this->success('关闭成功',U('School/class_list'));
           }else{
               $this->success('开启成功',U('School/class_list'));
           }
       }
    }
    /*
     * 编辑课程
     */
    public function up_class(){
        $User = M('class');
        $list= $User->where("class_id=".$_GET['id']."")->find();
        $this->assign('list',$list);
        $this->display();
    }
    /*
     * 进行课程修改
     */
    public function up_class_pro(){
        $id=$_POST['class_id'];
        $data=$_POST;
        if(empty($_FILES['class_img']['name'])){        
            $User = M('class'); 
            $data[class_img]=$data[class_imgs];
            unset($data['class_imgs']);
            $info=$User->where("class_id=".$id."")->save($data);
            if($info){
                 $this->success('修改成功',U('School/class_list'));
            }else{
                 $this->success('修改失败');
            }
        }else{
          unset($data['class_imgs']);
          $upload = new \Think\Upload();// 实例化上传类 
          //$upload->maxSize   =     3145728 ;// 设置附件上传大小  
          $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型   
          $upload->rootPath  =      './Public/uploads/'; // 设置附件上传目录    // 上传文件  
          $info   =   $upload->upload();    
         if(!$info) {// 上传错误提示错误信息       
             $this->error($upload->getError());    
         }else{ 
                       $User = M('class'); 
                       $data[class_img]= $info['class_img']['savepath'].$info['class_img']['savename'];
                       unset($data['class_imgs']);
                       $User->where("class_id=".$id."")->save($data);
                       $this->success('修改成功',U('School/class_list'));
            }
        }
    }

    //阶段添加主页
    public function stage_add(){
        $User = M('class');
        $brand = $User->select();
        $this->assign('brand',$brand);
        $this->display();
    }
     //阶段
    public function add_class_leve(){
        $User=M('class_leve');
        $data=$_POST;
        //print_r($data);die;
        if(!empty($data['class_leve_name'])&&!empty($data['class_name'])&&!empty($data['class_leve_content'])){
             $User->data($data)->add();
             $this->success('添加成功',U('School/stage_list'));
        }else{
            $this->error('添加失败,请完善信息');
        }
    }
    //阶段显示
    public function stage_list(){
        $User = M('class_leve'); // 实例化User对象
        $count = $User->count();// 查询满足要求的总记录数
        $Page  = new \Think\Page($count,3);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show  = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $User->limit($Page->firstRow.','.$Page->listRows)->select();$this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板
    }
    //删除阶段
    public function del_class_leve(){
        $User = M('class_leve'); // 实例化User对象
        $User->delete($_GET['id']);
       $this->success('删除成功',U('School/stage_list'));
    }
    /*
     * 编辑阶段
     */
    public function up_stage(){
        $User = M('class');
        $brand = $User->select();
        $this->assign('brand',$brand);
        $User = M('class_leve');
        $list= $User->where("class_leve_id=".$_GET['id']."")->find();
        $this->assign('list',$list);
        $this->display();
    }
    /*
     * 进行阶段修改
     */
    public function up_stage_pro(){
        $id=$_POST['class_leve_id'];
        $data=$_POST;
        $User = M('class_leve');
        //print_r($data);die;
        $info=$User->where("class_leve_id=".$id."")->save($data);
        if($info){
             $this->success('修改成功',U('School/stage_list'));
        }else{
             $this->success('修改失败');
        }
    }
     //教师主页
    public function teacher_add(){
        $this->display();
    }
     //教师添加
    public function add_teacher(){
        $User=M('teacher');
        $data=$_POST;
        //print_r($data);die;
          $upload = new \Think\Upload();// 实例化上传类 
          //$upload->maxSize   =     3145728 ;// 设置附件上传大小  
          $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型   
          $upload->rootPath  =      './Public/uploads/'; // 设置附件上传目录    // 上传文件  
          $info   =   $upload->upload();    
         if(!$info) {// 上传错误提示错误信息       
             $this->error($upload->getError());    
         }else{        
                  if(!empty($data['teacher_name'])&&!empty($data['teacher_job'])&&!empty($data['teacher_desc'])){
                        
                        $data[teacher_img]= $info['teacher_img']['savepath'].$info['teacher_img']['savename'];
                        $User->data($data)->add();
                        $this->success('添加成功',U('School/teacher_list'));
                   }else{
                       $this->error('添加失败,请完善信息');
                   }
            }
     }
    //阶段显示
    public function teacher_list(){
        $User = M('teacher'); // 实例化User对象
        $count = $User->count();// 查询满足要求的总记录数
        $Page  = new \Think\Page($count,3);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show  = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $User->limit($Page->firstRow.','.$Page->listRows)->select();$this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板
    }
    //删除阶段
    public function del_teacher(){
        $User = M('teacher'); // 实例化User对象
        $User->delete($_GET['id']);
       $this->success('删除成功',U('School/teacher_list'));
    }
    /*
     * 编辑教师信息
     */
    public function up_teacher(){
        $User = M('teacher');
        $list= $User->where("teacher_id=".$_GET['id']."")->find();
        $this->assign('list',$list);
        $this->display();
    }
    /*
     * 进行阶段修改
     */
    public function up_teacher_pro(){
        $id=$_POST['teacher_id'];
        $data=$_POST;
        if(empty($_FILES['teacher_img']['name'])){        
            $User = M('teacher'); 
            $data[teacher_img]=$data[teacher_imgs];
            unset($data['teacher_imgs']);
            $info=$User->where("teacher_id=".$id."")->save($data);
            if($info){
                 $this->success('修改成功',U('School/teacher_list'));
            }else{
                 $this->success('修改失败');
            }
        }else{
          
          unset($data['teacher_imgs']);
          $upload = new \Think\Upload();// 实例化上传类 
          //$upload->maxSize   =     3145728 ;// 设置附件上传大小  
          $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型   
          $upload->rootPath  =      './Public/uploads/'; // 设置附件上传目录    // 上传文件  
          $info   =   $upload->upload();    
         if(!$info) {// 上传错误提示错误信息       
             $this->error($upload->getError());    
         }else{ 
                       $User = M('teacher'); 
                       $data[teacher_img]= $info['teacher_img']['savepath'].$info['teacher_img']['savename'];
                       unset($data['teacher_imgs']);
                       $User->where("teacher_id=".$id."")->save($data);
                       $this->success('修改成功',U('School/teacher_list'));
            }
        }
    }
}