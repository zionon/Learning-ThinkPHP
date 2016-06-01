<?php /* Smarty version Smarty-3.1.6, created on 2016-06-01 22:03:14
         compiled from "F:/xampp/htdocs/Learning-ThinkPHP/shop/Admin/View\User\show.html" */ ?>
<?php /*%%SmartyHeaderCode:7380574eeb220404e2-49978560%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c605ba2de04827e939d580f9ffad668935dfe53' => 
    array (
      0 => 'F:/xampp/htdocs/Learning-ThinkPHP/shop/Admin/View\\User\\show.html',
      1 => 1464785871,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7380574eeb220404e2-49978560',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_574eeb22103a1',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574eeb22103a1')) {function content_574eeb22103a1($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <title>用户列表</title>

        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <style>
            .tr_color{ background-color: #9F88FF }
        </style>
        <div class="div_head">
            <span>
                <span style="float: left;">当前位置是：会员管理-》会员列表</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                    <a style="text-decoration: none;" href="<?php echo @__CONTROLLER__;?>
/add">【添加会员】</a>
                </span>
            </span>
        </div>
        <div></div>
<!--         <div class="div_search">
            <span>
                <form action="#" method="get">
                    品牌<select name="s_product_mark" style="width: 100px;">
                        <option selected="selected" value="0">请选择</option>
                        <option value="1">苹果apple</option>
                    </select>
                    <input value="查询" type="submit" />
                </form>
            </span>
        </div> -->
        <div style="font-size: 13px; margin: 10px 5px;">
            <table class="table_a" border="1" width="100%">
                <tbody><tr style="font-weight: bold;">
                        <td>注册ID</td>
                        <td>用户名</td>
                        <td>邮箱</td>
                        <td>QQ</td>
                        <td>电话</td>
                        <td>学历</td>
                        <td>注册时间</td>
                        <td>最后一次登录时间</td>
                        <td>修改</td>
                        <td>删除</td>
                    </tr>
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
 $_smarty_tpl->tpl_vars['v']->iteration++;
?>
                    <tr id="product1">
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['user_id'];?>
--<?php echo $_smarty_tpl->tpl_vars['v']->iteration;?>
</td>
                        <!--根据权限的等级，显示对应的缩进符号-->
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['user_email'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['user_qq'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['user_tel'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['user_xueli'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['user_time'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['last_time'];?>
</td>
                        <td><a href="<?php echo @__CONTROLLER__;?>
/update/user_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['user_id'];?>
">修改</a></td>
                        <td><a href="<?php echo @__CONTROLLER__;?>
/delete/user_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['user_id'];?>
">删除</a></td>
                    </tr>
                    <?php } ?>
                    <tr>
                        <td colspan="20" style="text-align: center;">
                            <?php echo $_smarty_tpl->tpl_vars['pagelist']->value;?>

                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html><?php }} ?>