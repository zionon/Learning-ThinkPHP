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
		// $this->display(); 	//1.视图模版名称与当前操作方法名称一致
		// $this->display('register');		//2.调用当前User视图模版下的其他模版文件
		// $this->display('Goods/showlist');	//3.访问其他控制器下的模版文件
		//两个逻辑：展示、收集
		if (!empty($_POST)) {
			$user = new \Model\UserModel();
			$info = $user->checkNamePwd($_POST['username'],$_POST['password']);
			if ($info) {
				//给用户信息session持久化操作
				session('user_id',$info['user_id']);
				session('user_name',$info['username']);
				$this->redirect('ucenter1');
			} else {
				$this->redirect('login',array(),2,'用户名或者密码错误');
			}
		} else {
			$this->display();
		}
	}

	//注册
	public function register() {
		// $user = D('User');
		$user = new \Model\UserModel();
		//两个逻辑：展示、收集
		if (!empty($_POST)) {
			//收集表单、过滤表单信息、非法字段过滤、表单自动验证
			//并把处理好的信息返回
			$info = $user->create();
			//通过create方法的返回值$info判断是否验证成功
			//1.array实体内容，说明验证成功 2.false则验证失败
			if ($info) {
				//把爱好的array数组变为字符串String,"1,2,4"
				$Info['user_hobby'] = implode(',',$info['user_hobby']);
				$z = $user->add($info);
				if ($z) {
					$this->redirect('Index/index');
				}
			} else{
				//验证失败的错误信息
				$this->assign('errorinfo',$user->getError());
			}
		}
		$this->display(); 
	}

	//登出
	public function logout() {
		session(null);
		$this->redirect('Index/index');
	}
}















