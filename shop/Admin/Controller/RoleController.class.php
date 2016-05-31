<?php
//后台角色控制器
//命名空间
namespace Admin\Controller;
// use Think\Controller;
use Tools\AdminController;

class RoleController extends AdminController{
	//列表展示
	public function show() {
		//获得全部角色数据
		$info = D('Role')->select();
		$this->assign('info',$info);
		$this->display();
	}

	//权限分配
	public function fenpei($role_id) {
		//两个逻辑：展示、收集
		$role = new \Model\RoleModel();
		if (!empty($_POST)) {
			//表单过来的数据不能支持直接的记录更新
			//利用saveAuth方法实现表单数据的制作和最终更新
			$z = $role->saveAuth($_POST['authid'],$_POST['role_id']);
			if ($z) {
				$this->redirect('show',array(),2,'分配权限成功');
			} else {
				$this->redirect('fenpei',array('role_id'=>$role_id),2,'分配权限失败！');
			}
		} else {
			//根据$role_id获得被分配权限的角色信息
			$role_info = D('Role')->find($role_id);

			//获得已经拥有的全部权限，并传递给模版使用
			$have_auth = explode(',',$role_info['role_auth_ids']);
			//获得被分配的全部权限，并传递给模版使用
			$auth_infoA = D('Auth')->where('auth_level=0')->select();
			$auth_infoB = D('Auth')->where('auth_level=1')->select();

			$this->assign('auth_infoA',$auth_infoA);
			$this->assign('auth_infoB',$auth_infoB);
			$this->assign('role_info',$role_info);
			$this->assign('have_auth',$have_auth);
			$this->display();	

		}
	}
	//添加角色
	public function add() {
		$this->redirect('show',array(),2,'添加成功');
	}	
}