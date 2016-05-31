<?php
//后台商品控制器
//命名空间
namespace Admin\Controller;
use Think\Controller;

class GoodsController extends Controller{
	//学习查询
	public function testSelect() {
		// $goods = D('Goods');
		//1.where设置查询的条件
		// $goods->where("goods_name like '诺%' and goods_price > 1000");
		// $info = $goods->select();
		// dump($info);
		
		//2.limit([偏移量，长度])限制查询条数
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

	//学习添加
	public function testAdd(){
		$goods = D('Goods');
		//1.数组方式数据添加
		// $arr = array(
		// 	'goods_name' => 'iphone7',
		// 	'goods_price' => 6500,
		// 	'goods_weight' => 115,
		// 	'goods_number' => 15,
		// 	);
		// $z = $goods->add($arr);
		// dump($z);
		
		//2.AR方式数据添加
		//以下是对象本身不存在(私有成员属性)的成员属性赋值，会自动调用__set()
		//__set()方法会把如下4个成语都放到data成员里边，再传递给add()使用
		// $goods->goods_name = 'samsung7';
		// $goods->goods_price = 4600;
		// $goods->goods_number = 16;
		// $goods->goods_weight = 116;
		// $z = $goods->add();
		// dump($z);
	}

	//学习修改
	// public function testUpdate() {
	// 	$goods = new \Model\GoodsModel();
	// 	$goods->goods_name = "nokia333";
	// 	$goods->goods_price = 3200;
	// 	$goods->goods_number = 23;

	// 	$z = $goods->where('goods_id >144 and goods_id<150')->save();
	// 	dump($z);
	// }

	//列表展示
	public function show() {
		$goods = new \Model\GoodsModel();
		// $goods = D('Goods');
		//$info = $goods->select();		//SELECT * FROM sw_goods;
		// $this->display();
		// $obj = D('User');
		// dump($obj);
		//$info = $goods->select(17);		//SELECT * FROM `sw_goods` WHERE `goods_id` = 17
		//$info = $goods->select("21,24,29,30");	//SELECT * FROM `sw_goods` WHERE `goods_id` IN ('21','24','29','30')
		// dump($info);
		// $info = $goods->order('goods_id desc')->limit(0,3)->select();
		//1.获得数据的总记录条数
		$total = $goods->count();
		$per = 7;
		//2.实例化分页类对象
		$page_obj = new \Tools\Page($total, $per);
		//3.拼装sql语句获得每页信息
		$sql = "SELECT * FROM sw_goods ORDER BY goods_id DESC ".$page_obj->limit;
		$info = $goods->query($sql);
		//3.获得页码列表
		$pagelist = $page_obj->fpage(array(3,4,5,6,7,8));
		//以下两个方法直接被定义到了父类Controller里边
		//它们都是对smarty相关方法的封装
		$this->assign('pagelist',$pagelist);
		$this->assign('info',$info);
		$this->display();
	}

	//添加商品
	public function add() {
		$goods = D('Goods');
		//两个逻辑：展示表单，收集表单信息
		if (!empty($_POST)) {
			//处理上传的商品图片
			if ($_FILES['goods_pic']['error'] === 0) {
				$cfg = array(
					'rootPath' => './uploads/',		//保存根路径
				);
				$up = new \Think\Upload($cfg);
				//uploadone()会返回上传附件存储在服务器的“名字”和“路径”等信息
				$z = $up->uploadOne($_FILES['goods_pic']);
				//1.把上传好的图片保存到数据库表记录里边
				$bigpathname = $up->rootPath.$z['savepath'].$z['savename'];
				$_POST['goods_big_img'] = ltrim($bigpathname,'./');	//去除路径的"./信息"，避免数据的数据有冗余

				//2.给上传好的图片制作缩略图
				$im = new \Think\Image();		//1.实例化Image类对象
				$im->open($bigpathname);		//2.打开被处理的图片
				$im->thumb(125,125,6);			//3.制作缩略图（默认有自适应效果）
				$smallpathname = $up->rootPath.$z['savepath'].'small'.$z['savename'];
				$im->save($smallpathname);		//4.保存缩略图到服务器
				//把制作好的缩略图保存到数据库表记录里边
				$_POST['goods_small_img'] = ltrim($smallpathname,'./');
			}
			//收集表单信息
			$info = $goods->create();
			$z = $goods->add($info);
			if ($z) {
				//页面跳转
				//$this->redirect(分组／控制器／操作方法，参数array，间隔时间，提示信息)
				$this->redirect('show',array(),2,'数据添加成功');
			} else {
				$this->redirect('add',array(),2,'数据添加失败');
			}
		} else{
			//展示表单
			$this->display();
		}
	}

	//修改商品
	public function update($goods_id) {
		$goods = D('Goods');
		//两个逻辑：展示、收集
		if (!empty($_POST)) {
			$z = $goods->save($_POST);
			if ($z) {
				$this->redirect('show',array(),2,'数据修改成功!');
			} else {
				$this->redirect('update',array('goods_id' =>$goods_id),2,'数据修改失败！');
			}
		} else {
			$info = $goods->find($goods_id);	//SELECT * FROM `sw_goods` WHERE `goods_id` = 173 LIMIT 1
			$this->assign('info',$info);
			$this->display();
		}
	}

	//删除商品
	public function delete($goods_id) {
		$goods = D('Goods');
		$z = $goods->delete($goods_id);
		if ($z) {
			$this->redirect('show',array(),2,'数据删除成功！');
		} else {
			$this->redirect('delete',array('goods_id' => $goods_id),2,'数据删除失败！');
		}
	}
}














