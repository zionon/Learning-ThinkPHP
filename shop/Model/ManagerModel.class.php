<?php
//manager模型类
//命名空间
namespace Model;
use \Think\Model;

class  ManagerModel extends Model{
	//检验用户名和密码
	public function checkNamePwd($name,$pwd) {
		//1.先根据$name查询是否存在指定名字的记录
		//	find()方法如果没有查询到结果要返回"null"，否则返回"整条记录"信息
		$z = $this->where("mg_name='$name'")->find();
		if ($z) {
			//2.把查询到的记录的密码与用户输入密码($pwd)做比较
			if ($z['mg_pwd'] == md5($pwd)) {
				return $z;
			}
		}
		return null;
	}

	//检验用户输入的密码
	public function checkPwd($mg_id,$mg_pwd) {
		//1.根据id查询对应的密码
		$z = $this->where("mg_id='$mg_id'")->find();
		if ($z) {
			//2.把查询到的记录的密码与用户输入的密码做比较
			if ($z['mg_pwd'] == md5($mg_pwd)) {
				return true;
			}
		}
		return null;
	}

	//更新密码
	public function updatePwd($mg_id,$new_pwd) {
		$sql = "UPDATE `sw_manager` SET `mg_pwd` = MD5('$new_pwd') WHERE `sw_manager`.`mg_id`='$mg_id'";
		return $this->execute($sql);
	}

}