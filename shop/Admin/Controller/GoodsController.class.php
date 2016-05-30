<?php
//后台商品控制器
//命名空间
namespace Admin\Controller;
use Think\Controller;

class GoodsController extends Controller{
	//测试用例
	public function test() {
		// $goods = D('Goods');
		//1.where设置查询的条件
		// $goods->where("goods_name like '诺%' and goods_price > 1000");
		// $info = $goods->select();
		// dump($info);
		
		//2.limit([便宜量，长度])限制查询条数
		// $goods->limit(21,7);
		// $info = $goods->select();
		// dump($info);
		
		//3.field()限制查询的字段
		// $goods->field('goods_name,goods_price');
		// $info = $goods->select();
		// dump($info);
		
		//4.order()排序查询
		// $goods->order('goods_price desc');
		// $info = $goods->select();
		// dump($info);
		
		//5.group()分组查询，group by
		//获得每个品牌下商品的总数量
		// $goods->group('goods_brand_id');
		// $goods->field('goods_brand_id, count(*)');
		// $info = $goods->select();
		// dump($info);
		
		//6.having()条件方法使用
		// $goods->having('goods_price>1000');
		// $info = $goods->select();
		// dump($info);
		
		//连贯操作
		// $goods = new \Model\GoodsModel();
		// dump($goods);
		// $info = $goods->where('goods_price>1000')->field('goods_name,goods_price')->select();
		// dump($info);
	}


	//列表展示
	public function show() {
		$goods = new \Model\GoodsModel();
		$info = $goods->select();		//SELECT * FROM sw_goods;
		// $this->display();
		// $obj = D('User');
		// dump($obj);
		$info = $goods->select(17);		//SELECT * FROM `sw_goods` WHERE `goods_id` = 17
		$info = $goods->select("21,24,29,30");	//SELECT * FROM `sw_goods` WHERE `goods_id` IN ('21','24','29','30')
		// dump($info);
		//以下两个方法直接被定义到了父类Controller里边
		//它们都是对smarty相关方法的封装
		$this->assign('info',$info);
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