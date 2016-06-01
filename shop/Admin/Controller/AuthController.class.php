<?php
//后台权限控制器
//命名空间
namespace Admin\Controller;
// use Think\Controller;
use Tools\AdminController;

class AuthController extends AdminController{
	//权限列表展示
	public function show() {
		//通过auth_path排序获得数据，以便数据通过"上下级关系"呈现出来
		$info = D('Auth')->order('auth_path')->select();

		$this->assign('info',$info);
		$this->display();
	}

	//添加权限
	public function add() {
		//两个逻辑：展示、收集
		$auth = new \Model\AuthModel();
		if (!empty($_POST)) {
			//表单只收集到了4个信息，另外两个字段(path/level)需要计算
			//在savedata方法里边实现path/level的制作，并最终完善整条纪录信息
			$z = $auth->saveData($_POST);
			if ($z) {
				$this->redirect('show',array(),2,'添加权限成功');
				$this->redirect('Index/left');
			} else {
				$this->redirect('add',array(),2,'添加权限失败');
			}
		} else {
			//获得被选取的上级权限
			$auth_infoA = $auth->where('auth_level=0')->select();
			$this->assign('auth_infoA',$auth_infoA);
			$this->display();
		}
	}
	//删除权限
	public function delete($auth_id) {
		$auth = D('Auth');
		$z = $auth->delete($auth_id);
		if ($z) {
			$this->redirect('show',array(),2,'删除权限成功！！');
		} else {
			$this->redirect('show',array('auth_id'=>$auth_id),2,'删除权限失败！！！');
		}
	}
}