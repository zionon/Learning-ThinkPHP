<?php 
//分页工具类
//命名空间的名称与上级名录tools一致
//原因：当前page.class.php类文件会被自动加载机制引入
//		在引入的同时会把"tools"变为文件的上级目录,进而获得该page类文件
namespace Tools;

class Page{
	private $total;		//数据表中总记录数
	private $listRows;	//每页显示行数
	private $limit;
	private $url;
	private $pageNum	//页数
	private $config = array(
						'header' => '个记录',
						'prev' => '上一页',
						'next' => '下一页',
						'first' => '首 页',
						'last' => '尾 页');
	private $listNum = 8;
}