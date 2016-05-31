<?php
//后台权限控制器
//命名空间
namespace Admin\Controller;
use Think\Controller;

class AuthController extends Controller{
	//权限列表展示
	public function show() {
		//通过auth_path排序获得数据，以便数据通过"上下级关系"呈现出来
		$info = D('Auth')->order('auth_path')->select();

		$this->assign('info',$info);
		$this->display();
	}
}