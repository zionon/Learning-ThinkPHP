<?php /* Smarty version Smarty-3.1.6, created on 2016-05-31 14:30:54
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/Learning-ThinkPHP/shop/Admin/View/Role/fenpei.html" */ ?>
<?php /*%%SmartyHeaderCode:1213082484574d2f9e4c4d37-21807505%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88f210b5abcff301b4df65bd8e820a9f7e005ffd' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/Learning-ThinkPHP/shop/Admin/View/Role/fenpei.html',
      1 => 1464676231,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1213082484574d2f9e4c4d37-21807505',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'role_info' => 0,
    'auth_infoA' => 0,
    'v' => 0,
    'have_auth' => 0,
    'auth_infoB' => 0,
    'vv' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_574d2f9e524ac',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574d2f9e524ac')) {function content_574d2f9e524ac($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <title>分配权限</title>

        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <style>
            .tr_color{ background-color: #9F88FF }
        </style>
        <div class="div_head">
            <span>
                <span style="float: left;">当前位置是：角色管理-》角色分配权限 【<?php echo $_smarty_tpl->tpl_vars['role_info']->value['role_name'];?>
】</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                    <a style="text-decoration: none;" href="<?php echo @__CONTROLLER__;?>
/show">【返回】</a>
                </span>
            </span>
        </div>
        <div></div>
        <div style="font-size: 13px; margin: 10px 5px;">
            <form action="<?php echo @__SELF__;?>
" method="post" enctype="multipart/form-data">
                <input type="hidden" name="role_id" value="<?php echo $_smarty_tpl->tpl_vars['role_info']->value['role_id'];?>
" />
                <table border="1" width="100%" class="table_a">
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['auth_infoA']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                    <tr>
                        <td width="18%">
                            <input type="checkbox" name="authid[]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['auth_id'];?>
" <?php if (in_array($_smarty_tpl->tpl_vars['v']->value['auth_id'],$_smarty_tpl->tpl_vars['have_auth']->value)){?>checked="checked"<?php }?> /><?php echo $_smarty_tpl->tpl_vars['v']->value['auth_name'];?>

                        </td>
                        <td>
                            <?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_smarty_tpl->tpl_vars['kk'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['auth_infoB']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value){
$_smarty_tpl->tpl_vars['vv']->_loop = true;
 $_smarty_tpl->tpl_vars['kk']->value = $_smarty_tpl->tpl_vars['vv']->key;
?>
                            <?php if ($_smarty_tpl->tpl_vars['vv']->value['auth_pid']==$_smarty_tpl->tpl_vars['v']->value['auth_id']){?>
                            <div style="width: 200px; float:left">
                                <input type="checkbox" name="authid[]" value="<?php echo $_smarty_tpl->tpl_vars['vv']->value['auth_id'];?>
" <?php if (in_array($_smarty_tpl->tpl_vars['vv']->value['auth_id'],$_smarty_tpl->tpl_vars['have_auth']->value)){?>checked="checked"<?php }?> /><?php echo $_smarty_tpl->tpl_vars['vv']->value['auth_name'];?>

                            </div>
                            <?php }?>
                            <?php } ?>
                        </td>
                    </tr>
                    <?php } ?>
                    <tr>
                        <td colspan="2" align="center">
                            <input type="submit" value="分配权限" />
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>












<?php }} ?>