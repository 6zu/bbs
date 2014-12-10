<?php
namespace Admin\Controller;
use Think\Controller;
class QuestionController extends Controller {
    //添加分类
    public function add_question_type(){
        $this->display();
    }
    
    public function add_type_pro(){
        $model=M('question_type');
        $arr=$model->create();
        if($arr){
            $data=$model->add($arr);
            if($data){
                   redirect("list_question_type");
            }
        }
    }
    //显示列表
    public function list_question_type(){
        
        $model =M('question_type'); // 实例化User对象
        $count= $model->count();// 查询满足要求的总记录数
        $Page= new \Think\Page($count,3);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $model->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('data',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板
    }

 //是否显示
    public function show(){
       $id=$_GET['id'];
       $is_show=$_GET['is_show'];
       //echo 123;
       $model=M('question_type');
       $data=$model->where("question_type_id=$id")->find();
       if($data['is_show']==1){
           $data['is_show']=0;
           $model->where("question_type_id=$id")->save($data);
       }else{
           $data['is_show']=1;
           $model->where("question_type_id=$id")->save($data);
       }
        redirect("list_question_type");
    }
    
    //删除
public function del_type(){
    $id=$_GET['id'];
    $model = M("question_type"); // 实例化User对象
    $data= $model->where("question_type_id=$id")->delete(); // 删除id为5的用户数据
    if($data){
         redirect("list_question_type");
    }else{
        $this->error("删除失败");
    }
}
//编辑页面
public function update_type(){
    $id=$_GET[id];
    $model = M("question_type"); // 实例化User对象
    $data=$model->where("question_type_id=$id")->find();
    $this->assign("data",$data);  
    $this->display();
}
//修改
public function update_type_pro(){
    $model=M('question_type');
    $arr=$model->create();

    if($arr){
         
            $data=$model->where("question_type_id=$_POST[question_type_id]")->save($arr);
            if($data){
                redirect("list_question_type");
            }
    }else{	
            $this->error('修改失败');			
    }

}

//添加问题
    public function add_question(){
        $model=M(question_type);
        $data=$model->where("is_show=1")->select();
        $this->assign('data',$data);
        $this->display();
    }
    
     public function add_question_pro(){
        $model=M('question');
        $arr=$model->create();
        if($arr){
            $arr['add_time']=date("Y-m-d");
            $data=$model->add($arr);
            if($data){
                   redirect("list_question");
            }
        }
    }
    //列表
    public function list_question(){
         
        $model =M('question'); // 实例化User对象
        $count= $model->count();// 查询满足要求的总记录数
        $Page= new \Think\Page($count,3);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $model->limit($Page->firstRow.','.$Page->listRows)->join('bbs_question_type ON bbs_question.question_type = bbs_question_type.question_type_id')->select();
        $this->assign('data',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板
    }
    
    //编辑页面
public function update_question(){
    $id=$_GET[id];
    $model = M("question"); // 实例化User对象
    $models = M("question_type"); // 实例化User对象
    $data=$model->where("question_id=$id")->find();
    $type_name=$models->where("is_show=1")->select();
    $this->assign("type_name",$type_name);  
    $this->assign("data",$data);  
    $this->display();
}
//修改
public function update_question_pro(){
    $model=M('question');
    $arr=$model->create();
    if($arr){
        $arr['update_time']=  date("Y-m-d H-m-s");
             $data=$model->where("question_id=$_POST[question_id]")->save($arr);
            if($data){
                
                redirect("list_question");
            }
    }else{	
            $this->error('修改失败');			
    }

}
public function del_question(){
    $id=$_GET['id'];
    $model = M("question"); // 实例化User对象
    $data= $model->where("question_id=$id")->delete(); // 删除id为5的用户数据
    if($data){
         redirect("list_question");
    }else{
        $this->error("删除失败");
    }
}
}

