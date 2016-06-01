<?php

//后台管理员控制器
//命名空间
namespace Admin\Controller;
// use Think\Controller;
use Tools\AdminController;

class ManagerController extends AdminController{
	/**
	 * 登录方法
	 */
	public function login() {
		//两个逻辑：展示表单、收集表单
		if (!empty($_POST)) {
			//验证码的校验
			$vry = new \Think\Verify();
			if ($vry->check($_POST['captcha'])) {
				//验证"用户名和密码",$_POST['admin_user'] $_POST['admin_psd']
				$manager = new \Model\ManagerModel();
				$info = $manager->checkNamePwd($_POST['admin_user'], $_POST['admin_psd']);
				if ($info) {
					//给用户信息session持久化操作(名字和id)
					session('admin_id',$info['mg_id']);
					session('admin_name',$info['mg_name']);
					//页面跳转到后台首页
					$this->redirect('Index/index');
				} else {
					$this->redirect('login',array(),2,'用户名或密码错误');
				}
			} else {
				$this->redirect('login',array(),2,'验证码错误');
			}
		} 
		$this->display();
	}

	public function logout() {
		session(null);
		$this->redirect('login');
	}

	//输出验证码
	public function verifyImg() {
		$cfg = array(
			'imageH' => 25,			//验证码图片高度
			'imaghW' => 100,		//验证码图片宽度
			'length' => 4,			//验证码位数
			'fontSize' => 15,		//验证码字体大小(px)
			'fontttf' => '4.ttf',	//验证码字体，不设置随机获取
			);
		//实例化verify类对象，对象调用成员方法即可
		$very = new \Think\Verify($cfg);	//完全限定名称方式 元素访问
		$very->entry();
	}

	//修改密码
	public function updatePwd($mg_id) {
		//两个逻辑：展示，修改
		$manager = new \Model\ManagerModel();
		if (!empty($_POST)) {
			if ($_POST['new_pwd_1'] == $_POST['new_pwd_2']) {
				$z = $manager->checkPwd($mg_id,$_POST['mg_pwd']);
				if ($z) {
					$z = $manager->updatePwd($mg_id,$_POST['new_pwd_1']);
					if ($z) {
						$this->redirect('Index/right',array(),2,'密码修改成功');
					} else {
						$this->redirect('updatePwd',array('mg_id'=>$mg_id),2,'密码修改失败');
					}
				} else {
					$this->redirect('updatePwd',array('mg_id'=>$mg_id),2,'输入的原密码错误');
				}
			} else {
				$this->redirect('updatePwd',array('mg_id'=>$mg_id),2,'两次输入的新密码不相同，请重新输入');
			}
		} else {
			$this->display();
		}
	}
}















