<?php
namespace Admin\Controller;
use Think\Controller;
class CollegeController extends CommonController {
    public function add_college(){
        $this->display();
    }
    public function add_article_pro(){
        
         $model=M('college_article');
        $arr=$model->create();
        if($arr){
            $arr['add_time']=date("Y-m-d");
            $data=$model->add($arr);
            if($data){
                   redirect("list_college");
            }
        }
    }
    
    public function list_college(){
        $model =M('college_article'); // 实例化User对象
        $count= $model->count();// 查询满足要求的总记录数
        $Page= new \Think\Page($count,3);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $model->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('data',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板
    }

    public function del(){
    $id=$_GET['id'];
    $model = M("college_article"); // 实例化User对象
    $data= $model->where("college_article_id=$id")->delete(); // 删除id为5的用户数据
    if($data){
         redirect("list_college");
    }else{
        $this->error("删除失败");
    }
}
//编辑页面
public function update_college(){
    $id=$_GET[id];
    $model = M("college_article"); // 实例化User对象
    $data=$model->where("college_article_id=$id")->find();
    $this->assign("data",$data);  
    $this->display();
}

public function update_article_pro(){
    $model=M('college_article');
    $arr=$model->create();

    if($arr){
            $arr['update_time']=  date("Y-m-d H-m-s");
            $data=$model->where("college_article_id=$_POST[college_article_id]")->save($arr);
            if($data){
                redirect("list_college");
            }
    }else{	
            $this->error('修改失败');			
    }
}
}