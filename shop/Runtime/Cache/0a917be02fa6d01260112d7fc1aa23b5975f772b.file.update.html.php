<?php /* Smarty version Smarty-3.1.6, created on 2016-06-01 17:35:25
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/Learning-ThinkPHP/shop/Admin/View/User/update.html" */ ?>
<?php /*%%SmartyHeaderCode:164216571574e9debe72c46-19851886%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a917be02fa6d01260112d7fc1aa23b5975f772b' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/Learning-ThinkPHP/shop/Admin/View/User/update.html',
      1 => 1464773645,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '164216571574e9debe72c46-19851886',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_574e9debe940f',
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574e9debe940f')) {function content_574e9debe940f($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>修改商品</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet">
    </head>

    <body>

        <div class="div_head">
            <span>
                <span style="float:left">当前位置是：会员管理-》修改会员信息</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="<?php echo @__CONTROLLER__;?>
/show">【返回】</a>
                </span>
            </span>
        </div>
        <div></div>

        <div style="font-size: 13px;margin: 10px 5px">
            <form action="<?php echo @__SELF__;?>
" method="post" enctype="multipart/form-data">
                <input type="hidden" name="user_id" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['user_id'];?>
" />
            <table border="1" width="100%" class="table_a">
                <tr>
                    <td>用户名</td>
                    <td><input type="text" name="username" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['username'];?>
" /></td>
                </tr>
				<tr>
					<td>邮箱</td>
					<td><input type="text" name="user_email" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['user_email'];?>
" /></td>
				</tr>
				<tr>
					<td>QQ</td>
					<td><input type="text" name="user_qq" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['user_qq'];?>
" /></td>
				</tr>
				<tr>
					<td>电话</td>
					<td><input type="text" name="user_tel" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['user_tel'];?>
" /></td>
				</tr>
				<tr>
					<td>学历</td>
					<td><input type="text" name="user_xueli" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['user_xueli'];?>
" /></td>
				</tr>
                
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="修改">
                    </td>
                </tr>  
            </table>
            </form>
        </div>
    </body>
</html><?php }} ?>