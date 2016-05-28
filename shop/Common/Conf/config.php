<?php
return array(
	//'配置项'=>'配置值'
	//'URL_HTML_SUFFIX' => 'abc'  //URL伪静态后缀设置
	
	//使得页面底部显示跟踪信息
	'SHOW_PAGE_TRACE' => true,

	//设置默认分组
	'DEFAULT_MODULE' => 'Home',   //默认模块
	//允许访问的分组信息
	'MODULE_ALLOW_LIST' => array('Home','Admin'),

	//设置Smarty模版引擎使用
	'TMPL_ENGINE_TYPE' => 'Smarty',		//默认模版引擎

	//为Smarty配置相关配置
	'TMPL_ENGINE_CONFIG' => array(
		// 'left_delimiter' => '<@@@',
		// 'right_delimiter' => '@@@>',
		),
);