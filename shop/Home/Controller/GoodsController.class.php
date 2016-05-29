<?php
/**
 * 创建前台商品控制器
 */
//命名空间
namespace Home\Controller;
use Think\Controller;

class GoodsController extends Controller{
	//显示商品详情
	public function detail() {
		$this->display();
	}

	//显示商品列表
	public function category() {
		$this->display();
	}
}