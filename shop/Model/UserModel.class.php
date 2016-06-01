<?php
//user模型类
//命名空间
namespace Model;
use Think\Model;

class UserModel extends Model{
	//是否批处理验证
	//批量获得全部的错误验证信息
	protected $patchValidate = true;
	//通过定义$_validate成员，设置表单验证的规则
	//自动验证定义
	protected $_validate = array(
		//array(字段，规则，错误提示［验证条件，附加规则，验证时间］)，
		//1.username用户名的眼中，必须填写、唯一
		array('username','require','用户名必须填写'),
		array('username',',','该用户名已经被占用',0,'unique'),
		//2.password密码验证，必须填写
		array('password','require','密码必须填写'),
		//3.password2确认密码，必须填写，与密码保持一致
		array('password2','require','确认密码必须填写'),
		array('password2','password','两次密码保持一致',0,'confirm'),
		//4.user_email邮箱验证
		array('user_email','email','邮箱格式不正确',2),
		//5.user_qq验证：数字组成、5-12位
		array('user_qq','number','qq必须是数字组成'),
		array('user_qq','5,12','位数在5-12位之间',0,'length'),
		//6.user_xueli学历验证，必须选择一个
		array('user_xueli','2,5','学历必须选择一个',0,'between'),
		//7.user_hobby爱好验证，必须选择两项获以上
		//callback方法验证
		array('user_hobby','check_hobby','爱好必须选择两项或以上',1,'callback'),
		);

	//定义一个方法进行爱好的验证
	//参数$arg代表被验证的表单信息
	protected function check_hobby($arg){
		if (count($arg) < 2) {
			return false;	//会自动输出验证错误信息
		}
		return true;
	}

	//检查登录用户名和密码
	public function checkNamePwd($username,$password) {
		//根据用户名查询整条记录
		$z = $this->where("username='$username'")->find();
		if ($z) {
			if ($z['password'] == md5($password)) {
				return $z;
			}
		}
		return null;
	}

	//修改用户信息
	public function update($user_id,$users) {
		//先把收集到数组转字符串
	}
}












