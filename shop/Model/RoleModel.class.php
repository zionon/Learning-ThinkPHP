<?php
//role模型类
//命名空间
namespace Model;
use Think\Model;

class RoleModel extends Model{
	//权限分配表单数据制作和更新
	//参数:
	//$authid:array
	//$role_id:int
	public function saveAuth($authid,$role_id) {
		//1.把$authid由array变为string
		$authids = implode(',',$authid);
		//2.根据字符串的$authids查询分配的全部权限信息，获得他们的"控制器"和"操作方法"并拼装字符串
		$auth_info = D('Auth')->select($authids);
		$s = "";
		foreach ($auth_info as $k => $v) {
			if (!empty($v['auth_c']) && !empty($v['auth_a'])) {
				$s .= $v['auth_c'] . "-" . $v['auth_a'] . ",";
			}
		}
		$s = rtrim($s,',');	//去除右侧","逗号

		$sql = "UPDATE sw_role SET role_auth_ids='$authids',role_auth_ac='$s' WHERE role_id='$role_id'";
		return $this->execute($sql);
	}

	//角色添加
	public function addRole($role_name,$role_auth_ids) {
		//1.把$role_auth_ids由array变为string
		$role_auth_ids = implode(',',$role_auth_ids);
		//2.根据字符串的$role_auth_ids查询全部模块操作，获得他们的"控制器"和"操作方法"并拼装字符串
		$auth_info = D('Auth')->select($role_auth_ids);
		$s = "";
		foreach ($auth_info as $k => $v) {
			if (!empty($v['auth_a']) && !empty($v['auth_c'])) {
				$s .= $v['auth_c'] . '-' . $v['auth_a'] . ',';
			}
		}
		$s = rtrim($s,',');	//去除最右侧的','逗号
		//拼装sql语句，执行insert操作
		$sql = "INSERT INTO `sw_role` (`role_name`, `role_auth_ids`, `role_auth_ac`) VALUES ('$role_name', '$role_auth_ids', '$s')";
		return $this->execute($sql);
	}
}









