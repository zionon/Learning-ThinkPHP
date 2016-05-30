<?php

//后台管理员控制器
//命名空间
namespace Admin\Controller;
use Think\Controller;

class ManagerController extends Controller{
	/**
	 * 登录方法
	 */
	public function login() {
		//两个逻辑：展示表单、收集表单
		if (!empty($_POST)) {
			//验证码的校验
			$vry = new \Think\Verify();
			if ($vry->check($_POST['captcha'])) {
				echo '验证码正确';
			} else {
				echo '验证码错误';
			}
		} 
		$this->display();
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
}