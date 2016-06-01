<?php /* Smarty version Smarty-3.1.6, created on 2016-06-01 10:54:18
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/Learning-ThinkPHP/shop/Admin/View/Auth/show.html" */ ?>
<?php /*%%SmartyHeaderCode:707330925574d3ceb37ceb7-27622824%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4de645c333b41151dc9129ba92f3905f5cfbbc5' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/Learning-ThinkPHP/shop/Admin/View/Auth/show.html',
      1 => 1464749602,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '707330925574d3ceb37ceb7-27622824',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_574d3ceb3c64b',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574d3ceb3c64b')) {function content_574d3ceb3c64b($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <title>权限列表</title>

        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <style>
            .tr_color{ background-color: #9F88FF }
        </style>
        <div class="div_head">
            <span>
                <span style="float: left;">当前位置是：权限管理-》权限列表</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                    <a style="text-decoration: none;" href="<?php echo @__CONTROLLER__;?>
/add">【添加权限】</a>
                </span>
            </span>
        </div>
        <div></div>
        <div class="div_search">
            <span>
                <form action="#" method="get">
                    品牌<select name="s_product_mark" style="width: 100px;">
                        <option selected="selected" value="0">请选择</option>
                        <option value="1">苹果apple</option>
                    </select>
                    <input value="查询" type="submit" />
                </form>
            </span>
        </div>
        <div style="font-size: 13px; margin: 10px 5px;">
            <table class="table_a" border="1" width="100%">
                <tbody><tr style="font-weight: bold;">
                        <td>序号</td>
                        <td>权限名称</td>
                        <td>父id</td>
                        <td>控制器</td>
                        <td>操作方法</td>
                        <td>全路径</td>
                        <td>等级</td>
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
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['auth_id'];?>
----<?php echo $_smarty_tpl->tpl_vars['v']->iteration;?>
</td>
                        <!--根据权限的等级，显示对应的缩进符号-->
                        <td><?php echo preg_replace('!^!m',str_repeat('---/',$_smarty_tpl->tpl_vars['v']->value['auth_level']),$_smarty_tpl->tpl_vars['v']->value['auth_name']);?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['auth_pid'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['auth_c'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['auth_a'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['auth_path'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['auth_level'];?>
</td>
                        <td><a href="">修改</a></td>
                        <td><a href="<?php echo @__CONTROLLER__;?>
/delete/auth_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['auth_id'];?>
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