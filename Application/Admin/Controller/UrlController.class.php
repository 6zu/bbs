<?php
namespace Admin\Controller;
use Think\Controller;
class UrlController extends CommonController {
    //添加表单
    public function add_url(){
        $this->display();
    }
    //添加操作
    public function add_url_pro(){
      
        $creat = M('nav');
        $data=$creat->create();
        $data=$creat->add($data);
        if($data){
             redirect("list_url");
        }
    }

//导航列表
    public function list_url(){
       
        
        $select =M('nav'); // 实例化User对象
        $count= $select->count();// 查询满足要求的总记录数
        $Page= new \Think\Page($count,3);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $select->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('data',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板
       
    }
    //是否显示
    public function show(){
       $id=$_GET['id'];
       $is_show=$_GET['is_show'];
       //echo 123;
       $model=M('nav');
       $data=$model->where("nav_id=$id")->find();
       if($data['is_show']==1){
           $data['is_show']=0;
           $model->where("nav_id=$id")->save($data);
       }else{
           $data['is_show']=1;
           $model->where("nav_id=$id")->save($data);
       }
        redirect("list_url");
    }


//删除
public function del(){
    $id=$_GET['id'];
    $model = M("nav"); // 实例化User对象
    $data= $model->where("nav_id=$id")->delete(); // 删除id为5的用户数据
    if($data){
         redirect("list_url");
    }else{
        $this->error("删除失败");
    }
}

//编辑页面
public function update_nav(){
    $id=$_GET[id];
    $model = M("nav"); // 实例化User对象
    $data=$model->where("nav_id=$id")->find();
    $this->assign("data",$data);  
    $this->display();
}
public function update_nav_pro(){
    $model=M('nav');
    $arr=$model->create();

    if($arr){
         
            $data=$model->where("nav_id=$_POST[h_id]")->save($arr);
            if($data){
                redirect("list_url");
            }
    }else{	
            $this->error('修改失败');			
    }

}

}