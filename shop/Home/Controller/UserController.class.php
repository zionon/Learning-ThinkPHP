<?php
/**
 * 创建前台分组的会员控制器
 */
//命名空间
namespace Home\Controller;
use Think\Controller;

//父类Controller:ThinkPHP/Library/Think/Controller.class.php
class UserController extends Controller{
	//登录系统
	public function login() {
		//调用模版视图
		//display(),其是父类Controller的方法
		$this->display(); 	//1.视图模版名称与当前操作方法名称一致
		// $this->display('register');		//2.调用当前User视图模版下的其他模版文件
		// $this->display('Goods/showlist');	//3.访问其他控制器下的模版文件
	}

	//注册
	public function register() {
		$this->display();
	}
}