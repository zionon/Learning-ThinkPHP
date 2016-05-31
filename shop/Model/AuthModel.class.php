<?php
//auth模型类
//命名空间
namespace Model;
use Think\Model;

class AuthModel extends Model{
	//实现path和level的制作，并完善信息记录的全部字段写入数据库表
	public function saveData($four) {
		//1.根据已有的4个字段生成一个新纪录
		$newid = $this->add($four);
		//2.根据新纪录信息制作path和level
		//A.制作path
		if ($four['auth_pid'] == 0) {	//1.顶级权限：全路径 ＝ 新纪录的id值
			$path = $newid;
		} else {
			$pinfo = $this->find($four['auth_pid']);	//获得父级权限信息
			$p_path = $pinfo['auth_path'];	//父级全路径
			$path = $p_path . '-' . $newid;
		}
		//B.制作level
		//规则：等级 ＝ 全路径里边“－”中横线的个数
		$level = substr_count($path,'-');	//计算字符串中出现多少个子字符串
		//把path和level更新到新纪录里边
		$sql = "UPDATE sw_auth SET auth_path='$path',auth_level='$level' WHERE auth_id='$newid'";
		return $this->execute($sql);
	}
}