<?php
return array(
	//'配置项'=>'配置值'
    'LAYOUT_ON'=>true,

    'LAYOUT_NAME'=>'public/layout',
    //'配置项'=>'配置值'
    //url访问模式为rewrite模式
    'URL_MODEL'=>'2',
    //开启伪静态
    'URL_HTML_SUFFIX'   =>'.html',
    //开启路由
    'URL_ROUTER_ON' =>true,
    //路由规则
    'URL_ROUTE_RULES'=>array(
    'first'  =>   'index/index',
    'stage'  =>   'home/School/stage',
    'video'  =>   'video/index',
    'persons'  =>   'School/index',
    'obtain'  =>   'Student/index',
    ),

    'LAYOUT_NAME'=>'public/layout', 
    'HTML_CACHE_ON'     =>    true, // 开启静态缓存
    'HTML_CACHE_TIME'   =>    60,   // 全局静态缓存有效期（秒）
    'HTML_FILE_SUFFIX'  =>    '.html',//设置静态缓存文件后缀
    'HTML_CACHE_RULES'  =>     array(  // 定义静态缓存规则  
       // 定义格式1 数组方式   
     'Index:'=>array('Index/{:action}_{id}','60'), 
     'Question:'=>array('Question/{:action}_{id}','60'), 
      )

);