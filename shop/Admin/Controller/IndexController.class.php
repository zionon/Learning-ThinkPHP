<?php
//后台首页控制器
//命名空间
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller{
	//头部
	public function head() {
		//设置配置信息，使得头部不要显示跟踪信息
		C('SHOW_PAGE_TRACE',false);
		$this->display();
	}

	//左侧
	public function left() {
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