<?php
namespace Admin\Controller;
use Think\Controller;
class SchoolController extends Controller {
    //课程添加主页
    public function class_add(){
        $this->display();
    }
    //添加课程
    public function add_class(){
        $User=M('class');
        $data=$_POST;
        //print_r($data);die;
        if(!empty($data['class_name'])&&!empty($data['class_key'])&&!empty($data['class_desc'])){
             $User->data($data)->add();
             $this->success('添加成功',U('School/class_list'));
        }else{
            $this->error('添加失败,请完善信息');
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
    
    //阶段添加主页
    public function stage_add(){
        $this->display();
    }
}