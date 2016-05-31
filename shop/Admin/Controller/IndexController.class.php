<?php
//后台首页控制器
//命名空间
namespace Admin\Controller;
// use Think\Controller;
use Tools\AdminController;
class IndexController extends AdminController{
	//头部
	public function head() {
		//设置配置信息，使得头部不要显示跟踪信息
		C('SHOW_PAGE_TRACE',false);
		// //获得管理员session持久化的登录信息
		// $admin_name = session('admin_name');
		// $this->assign('admin_name',$admin_name);
		$this->display();
	}

	//左侧
	public function left() {
		//战略:admin_id--->role_id--->auth_ids
		//获得管理员session持久化的登录信息
		$admin_id = session('admin_id');
		$admin_name = session('admin_name');
		//1.管理员信息
		$admin_info = D('Manager')->find($admin_id);	//SELECT * FROM `sw_manager` WHERE `mg_id` = 1
		$role_id = $admin_info['mg_role_id'];	//角色id信息
		//2.角色信息
		$role_info = D('Role')->find($role_id);		//SELECT * FROM `sw_role` WHERE `role_id` = 50
		$auth_ids = $role_info['role_auth_ids'];		//权限的ids信息
		//3.全部权限信息
		//SELECT * FROM `sw_auth` WHERE `auth_id` IN ('101','104','102','107','109')
		if ($admin_name === 'admin') {
			//[admin超级管理员]要显示全部的权限
			//SELECT * FROM `sw_auth` WHERE (auth_level=0)
			$auth_infoA = D('Auth')->where("auth_level=0")->select();	//顶级权限
			$auth_infoB = D('Auth')->where("auth_level=1")->select();	//次顶级权限
		} else {
			$auth_infoA = D('Auth')->where("auth_level=0 and auth_id in ($auth_ids)")->select();	//顶级权限
			$auth_infoB = D('Auth')->where("auth_level=1 and auth_id in ($auth_ids)")->select();	//次顶级权限
		}
		$this->assign('auth_infoA',$auth_infoA);
		$this->assign('auth_infoB',$auth_infoB);
		$this->display();
	}

	//右侧
	public function right() {
		$this->display();
	}

	//集成页面
	public function index() {
		$this->display();
	}
}