<?php /* Smarty version Smarty-3.1.6, created on 2016-06-01 09:17:31
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/Learning-ThinkPHP/shop/Admin/View/Auth/add.html" */ ?>
<?php /*%%SmartyHeaderCode:118279009574d43502a3b34-74491540%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40facea971243cb5cca634cd5f967c040e0056cb' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/Learning-ThinkPHP/shop/Admin/View/Auth/add.html',
      1 => 1464683893,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '118279009574d43502a3b34-74491540',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_574d43502e7f8',
  'variables' => 
  array (
    'auth_infoA' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574d43502e7f8')) {function content_574d43502e7f8($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>权限管理</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet">
    </head>

    <body>

        <div class="div_head">
            <span>
                <span style="float:left">当前位置是：权限管理-》添加权限信息</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="<?php echo @__MODULE__;?>
/Index/index">【返回】</a>
                </span>
            </span>
        </div>
        <div></div>

        <div style="font-size: 13px;margin: 10px 5px">
            <form action="<?php echo @__SELF__;?>
" method="post" enctype="multipart/form-data">
            <table border="1" width="100%" class="table_a">
                <tr>
                    <td>权限名称</td>
                    <td><input type="text" name="auth_name" /></td>
                </tr>
                <tr>
                    <td>权限上级</td>
                    <td><select name="auth_pid">
                        <option value="0">-请选择-</option>
                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['auth_infoA']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['auth_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['auth_name'];?>
</option>
                        <?php } ?>
                    </select></td>
                </tr>
                <tr>
                    <td>权限控制器</td>
                    <td><input type="text" name="auth_c" /></td>
                </tr>
                <tr>
                    <td>权限操作方法</td>
                    <td><input type="text" name="auth_a" /></td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="添加" />
                    </td>
                </tr>
            </table>
            </form>
        </div>
    </body>
</html><?php }} ?>