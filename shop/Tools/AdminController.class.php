<?php
//后台控制器的父类控制器
//命名空间
namespace Tools;
use Think\Controller;

class AdminController extends Controller{
	//构造方法
	public function __construct() {
		//先执行父类构造方法，避免功能缺失
		parent::__construct();
		//获得面前访问的"控制器和操作方法"，并连接为字符串称作"当前操作"
		//并使得"当前操作"与"权限列表"做对比
		$nowac = CONTROLLER_NAME . '-' . ACTION_NAME;	//当前操作
		//获得用户对应的"权限列表"信息
		//admin_id--->role_id--->auth_ac
		$admin_id = session('admin_id');
		$admin_name = session('admin_name');

		//没有登录系统的判断
		//有几个权限无需登录系统也可以访问Role-showlist
		$yunxu_ac = "Manager-login,Manager-verifyImg";
		if (empty($admin_id) && strpos($yunxu_ac,$nowac)===false) {
			// $this->redirect('Manager/login');
			$group_url = __MODULE__;
			$js = <<<eof
				<script type="text/javascript">
					//top:作用使得整个framset都跳转
					windows.top.location.href = "$group_url"/Manager/login;
				</script>
eof;
			echo $js;
		}
		$admin_info = D('Manager')->find($admin_id);	//管理员信息
		$role_id = $admin_info['mg_role_id'];	//角色id信息
		$role_info = D('Role')->find($role_id);	//角色信息
		$auth_ac = $role_info['role_auth_ac'];	//权限列表信息

		//当前操作是否是权限列表的信息判断
		//strpos($s1,$s2)判断$s1里边从左边开始第一次出现$s2的下标信息，并返回该下标信息
		//有出现则返回0/1/2/3....,没有出现直接返回false
		//具体限制
		//1.当前操作 没有出现在 权限列表 里边
		//2.当前操作 没有出现在 默认允许的 权限列表 里边
		//默认允许访问的权限列表
		$allow_ac = "Manager-login,Manager-logout,Manager-verifyImg,Index-left,Index-head,Index-right,Index-index";
		//3.当前用户还不是超级管理员admin
		//以上1，2，3条件同时满足，就没有访问权限
		if (strpos($auth_ac,$nowac)===false && strpos($allow_ac,$nowac)===false && $admin_name!=='admin') {
			// dump(MODULE_PATH);
			exit('没有权限访问！！！');
		}
	}
}















