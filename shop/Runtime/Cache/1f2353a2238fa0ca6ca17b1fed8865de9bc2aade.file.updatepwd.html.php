<?php /* Smarty version Smarty-3.1.6, created on 2016-06-01 12:00:39
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/Learning-ThinkPHP/shop/Admin/View/Manager/updatepwd.html" */ ?>
<?php /*%%SmartyHeaderCode:1664676915574e5de7153c55-16635575%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f2353a2238fa0ca6ca17b1fed8865de9bc2aade' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/Learning-ThinkPHP/shop/Admin/View/Manager/updatepwd.html',
      1 => 1464751892,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1664676915574e5de7153c55-16635575',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_574e5de718617',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574e5de718617')) {function content_574e5de718617($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <title>修改密码</title>

        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <style>
            .tr_color{ background-color: #9F88FF }
        </style>
        <div class="div_head">
            <span>
                <span style="float: left;">当前位置是：账号管理-》修改密码</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                    <a style="text-decoration: none;" href="<?php echo @__MODULE__;?>
/Index/right">【返回】</a>
                </span>
            </span>
        </div>
        <div></div>
        <div style="font-size: 13px; margin: 10px 5px;">
            <form action="<?php echo @__SELF__;?>
" method="post" enctype="multipart/form-data">
                <table border="1" width="100%" class="table_a">
                	<tr>
                		<td>原密码:</td>
                		<td><input type="password" name="mg_pwd"></td>
                	</tr>
                	<tr>
                		<td>新密码:</td>
                		<td><input type="password" name="new_pwd_1" /></td>
                	</tr>
                	<tr>
                		<td>新密码:</td>
                		<td><input type="password" name="new_pwd_2" /></td>
                	</tr>
                	<tr>
                		<td colspan="2" align="center">
                		<input type="submit" value="修改密码" />
                		</td>
                	</tr>
                </table>
            </form>
        </div>
    </body>
</html><?php }} ?>