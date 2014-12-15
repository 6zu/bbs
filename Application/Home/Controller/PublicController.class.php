<?php
namespace Home\Controller;
use Think\Controller;
class PublicController extends Controller {
	public function __construct()
	{
		parent::__construct();
		require_once './config.inc.php';
		require_once './uc_client/client.php';
	}
    //头部
    public function layout(){
        $model=M('nav');
        $data=$model->where('is_show=1')->order('sort')->select();
        $this->assign('data',$data);
        //$user_name=session('username');
      if(!empty($_COOKIE['Example_auth'])) {
			list($Example_uid, $Example_username) = explode("\t", uc_authcode($_COOKIE['Example_auth'], 'DECODE'));
		} else {
			$Example_uid = $Example_username = '';
		}
        $this->assign('username',$user_name);
        
        
        $this->display();
    }
    
    public function register(){
           $model=M('nav');
           $data=$model->where('is_show=1')->order('sort')->select();
           $this->assign('data',$data);
           $this->display('register');
    }
    
    public function register_pro(){
        $model=M('user');
        $arr=$model->create();
        $username=$_POST['user_name'];
        if($arr){
            $arr['user_time']=  date("Y-m-d");
             $data=$model->add($arr);
             if($data){
                
                 session('user_id',$data); 
                 session('user_name',$username); 
                 redirect("/home/index/index");
             }
        }
        
    }
    
    public function logo(){

		//通过接口判断登录帐号的正确性，返回值为数组
		list($uid, $username, $password, $email) = uc_user_login($_POST['username'], $_POST['password']);

		setcookie('Example_auth', '', -86400);
		if($uid > 0) {
			//用户登陆成功，设置 Cookie，加密直接用 uc_authcode 函数，用户使用自己的函数
			setcookie('Example_auth', uc_authcode($uid."\t".$username, 'ENCODE'));
			session('user_id',$uid); 
            session('user_name',$username);
			//生成同步登录的代码
			$ucsynlogin = uc_user_synlogin($uid);
			echo '登录成功'.$ucsynlogin.'<br><script>location.href="../index/index"</script>';
			exit;
		} elseif($uid == -1) {
			$this->error('用户不存在,或者被删除');
		} elseif($uid == -2) {
			$this->error('密码错');
		} else {
			$this->error('未定义');
		}
       /*
        $name=$_POST['username'];
        $pwd=$_POST['password'];
        
        $model = D('user');
        $data = $model->where("user_name='".$name."'")->find();
            
            if($data!=""){
                  if($data['user_pass']==$pwd){
                    $uid=$data['user_id'];
                    session('user_id',$uid); 
                    session('user_name',$name); 
                    redirect("/home/index/index");
                    
                  }else{
                    $this->error("用户名与密码不匹配");
                  }
            }
            */
    }
    
    public function logoout(){
		setcookie('Example_auth', '', -86400);
		//生成同步退出的代码
		$ucsynlogout = uc_user_synlogout();
		echo '退出成功'.$ucsynlogout.'<br><script>location.href="../index/index"</script>';
		session(null);
		exit;
    }

	public function pv(){
		require_once './public/src/jpgraph.php';
		require_once 'public/src/jpgraph_line.php';
		require_once 'public/src/jpgraph_bar.php';
	
		$ydata=array('12','4','9','15','11','10','9','7','15','7');
		$graph=new \Graph(350,250,"auto");
		$graph->SetScale("textlin");
		$lineplot=new \LinePlot($ydata);
		$lineplot->SetColor("blue");
		$graph->Add($lineplot);
		$graph->Stroke();
		
	}
	public function pie(){
		require_once './public/src/jpgraph.php';
		require_once ("public/src/jpgraph_pie.php");
		require_once ("public/src/jpgraph_pie3d.php");   //引用3D饼图PiePlot3D对象所在的类文件
		$data = array(266036,295621,335851,254256,254254,685425);   //定义数组
		$graph=new \PieGraph(540,260,'auto');    //创建画布
		$graph->SetShadow();        //设置画布阴影
		//$graph->title->Set("应用3D饼形图统计2009年商品的年销售额比率");   //创建标题
		//$graph->title->SetFont(FF_SIMSUN,FS_BOLD);   //设置标题字体
		//$graph->legend->SetFont(FF_SIMSUN,FS_NORMAL);   //设置图例字体
		$p1 = new \PiePlot3D($data);       //创建3D饼形图对象
		$p1->SetLegends(array("IT数码","家电通讯","家居日用","服装鞋帽","健康美容","食品烟酒"));
		$targ=array("pie3d_csimex1.php?v=1","pie3d_csimex1.php?v=2","pie3d_csimex1.php?v=3",
		   "pie3d_csimex1.php?v=4","pie3d_csimex1.php?v=5","pie3d_csimex1.php?v=6");
		$alts=array("val=%d","val=%d","val=%d","val=%d","val=%d","val=%d");
		$p1->SetCSIMTargets($targ,$alts);
		$p1->SetCenter(0.4,0.5);     //设置饼形图所在画布的位置
		$graph->Add($p1);       //将3D饼图形添加到图像中
		$graph->StrokeCSIM();      //输出图像到浏览器

	}

	public function zhu(){
		require_once './public/src/jpgraph.php';
		//require_once 'public/src/jpgraph_line.php';
		require_once 'public/src/jpgraph_bar.php';
		
		$datay=array(160,180,203,289,405,488,489,408,299,166,187,105);

//创建画布
$graph = new \Graph(600,300,"auto"); 
$graph->SetScale("textlin");
$graph->yaxis->scale->SetGrace(20);

//创建画布阴影
$graph->SetShadow();

//设置显示区左、右、上、下距边线的距离，单位为像素
$graph->img->SetMargin(40,30,30,40);

//创建一个矩形的对象
$bplot = new \BarPlot($datay);

//设置柱形图的颜色
$bplot->SetFillColor('orange'); 
//设置显示数字 
$bplot->value->Show();
//在柱形图中显示格式化的图书销量
$bplot->value->SetFormat('%d');
//将柱形图添加到图像中
$graph->Add($bplot);

//设置画布背景色为淡蓝色
$graph->SetMarginColor("lightblue");

//创建标题
$graph->title->Set("《PHP从入门到精通》2009年销量统计");

//设置X坐标轴文字
$a=array("1月","2月","3月","4月","5月","6月","7月","8月","9月","10月","11月","12月");
$graph->xaxis->SetTickLabels($a);

//设置字体
$graph->title->SetFont(FF_SIMSUN);
$graph->xaxis->SetFont(FF_SIMSUN);

//输出矩形图表
$graph->Stroke();
	}
   
}