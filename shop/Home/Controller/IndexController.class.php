<?php
/**
 * 创建前台首页控制器
 */
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display();
        // dump(get_defined_constants(true));
    }
}