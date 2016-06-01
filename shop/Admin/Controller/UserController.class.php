<?php
//后台显示用户控制器
//命名空间
namespace Admin\Controller;
use Tools\AdminController;

class UserController extends AdminController{
	//显示用户列表
	public function show() {
		$user = new \Model\UserModel();
		$info = $user->field('user_id,username,user_email,user_qq,user_tel,user_xueli,user_time,last_time')->select();
		for ($i=0; $i < count($info); $i++) { 
			switch ($info[$i]['user_xueli']) {
				case '2':
					$info[$i]['user_xueli'] = '小学';
					break;
				case '3':
					$info[$i]['user_xueli'] = '初中';
					break;
				case '4':
					$info[$i]['user_xueli'] = '高中';
					break;
				case '5':
					$info[$i]['user_xueli'] = '大学';
					break;
			}
		}
		$this->assign('info',$info);
		$this->display();
	}

	//修改用户信息
	public function update($user_id) {
		//两个逻辑：展示，修改
		// $user = new \Model\UserModel();
		$user = D('User');
		if (!empty($_POST)) {
			$z = $user->save($_POST);
			if ($z) {
				$this->redirect('show',array(),2,'用户信息修改成功');
			} else {
				$this->redirect('update',array('user_id'=>$user_id),2,'用户信息修改失败');
			}
		} else {
			$info = $user->find($user_id);
			$this->assign('info',$info);
			$this->display();
		}
	}

	//删除用户
	public function delete($user_id) {
		$user = new \Model\UserModel();
		$z = $user->delete($user_id);
		if ($z) {
			$this->redirect('show',array(),2,'删除用户成功');
		} else {
			$this->redirect('delete',array('user_id'=>$user_id),2,'删除用户失败，请重试');
		}
	}
}