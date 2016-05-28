<?php
//后台商品控制器
//命名空间
namespace Admin\Controller;
use Think\Controller;

class GoodsController extends Controller{
	//列表展示
	public function showlist() {
		$this->display();
	}

	//添加商品
	public function add() {
		$this->display();
	}

	//修改商品
	public function update() {
		$this->display();
	}
}