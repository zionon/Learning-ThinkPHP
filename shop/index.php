<?php
//利用ThinkPHP框架开发shop商城系统
//入口程序文件

//确定系统模式
define('APP_DEBUG', true);		//开发模式

//给静态资源文件设置访问常量路径
//Home分组
define('CSS_URL','/Learning-ThinkPHP/shop/Home/Public/css/');
define('IMG_URL','/Learning-ThinkPHP/shop/Home/Public/img/');
define('JS_URL','/Learning-ThinkPHP/shop/Home/Public/JS/');

//Admin分组
define('ADMIN_CSS_URL','/Learning-ThinkPHP/shop/Admin/Public/css/');
define('ADMIN_IMG_URL','/Learning-ThinkPHP/shop/Admin/Public/img/');

//引入接口文件
include ("../ThinkPHP/ThinkPHP.php");