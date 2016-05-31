<?php /* Smarty version Smarty-3.1.6, created on 2016-05-31 13:17:55
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/Learning-ThinkPHP/shop/Admin/View/Index/left.html" */ ?>
<?php /*%%SmartyHeaderCode:930126948574b9dbda28809-02149022%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1bafd48443fab8756efdaed4a1f0b9a936a1a6a0' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/Learning-ThinkPHP/shop/Admin/View/Index/left.html',
      1 => 1464671871,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '930126948574b9dbda28809-02149022',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_574b9dbdb61b5',
  'variables' => 
  array (
    'auth_infoA' => 0,
    'v' => 0,
    'auth_infoB' => 0,
    'vv' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574b9dbdb61b5')) {function content_574b9dbdb61b5($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv=content-type content="text/html; charset=utf-8" />
        <link href="<?php echo @ADMIN_CSS_URL;?>
admin.css" type="text/css" rel="stylesheet" />
        <script language=javascript>
            function expand(el)
            {
                childobj = document.getElementById("child" + el);

                if (childobj.style.display == 'none')
                {
                    childobj.style.display = 'block';
                }
                else
                {
                    childobj.style.display = 'none';
                }
                return;
            }
        </script>
    </head>
    <body>
        <table height="100%" cellspacing=0 cellpadding=0 width=170 background=<?php echo @ADMIN_IMG_URL;?>
menu_bg.jpg border=0>
            <tr>
                <td valign=top align=middle>
                    <table cellspacing=0 cellpadding=0 width="100%" border=0>
                        <tr>
                            <td height=10></td>
                        </tr>
                      </table>
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['auth_infoA']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                    <table cellspacing=0 cellpadding=0 width="100%" border=0>
                        <tr>
                            <td height=10></td>
                        </tr>
                    </table>
                    <table cellspacing=0 cellpadding=0 width=150 border=0>
                        <tr height=22>
                            <td style="padding-left: 30px" background=<?php echo @ADMIN_IMG_URL;?>
menu_bt.jpg><a 
                                    class=menuparent onclick=expand(<?php echo $_smarty_tpl->tpl_vars['v']->value['auth_id'];?>
) href="javascript:void(0);"><?php echo $_smarty_tpl->tpl_vars['v']->value['auth_name'];?>
</a>
                            </td>
                        </tr>
                        <tr height=4>
                            <td></td>
                        </tr>
                      </table>
                    <table id="child<?php echo $_smarty_tpl->tpl_vars['v']->value['auth_id'];?>
" style="display: none" cellspacing=0 cellpadding=0 
                           width=150 border=0>
                        <?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_smarty_tpl->tpl_vars['kk'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['auth_infoB']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value){
$_smarty_tpl->tpl_vars['vv']->_loop = true;
 $_smarty_tpl->tpl_vars['kk']->value = $_smarty_tpl->tpl_vars['vv']->key;
?>
                        <?php if ($_smarty_tpl->tpl_vars['vv']->value['auth_pid']==$_smarty_tpl->tpl_vars['v']->value['auth_id']){?>
                        <tr height=20>
                            <td align=middle width=30><img height=9 src="<?php echo @ADMIN_IMG_URL;?>
menu_icon.gif" width=9>
                            </td>
                            <td>
                            <a class=menuchild href="<?php echo @__MODULE__;?>
/<?php echo $_smarty_tpl->tpl_vars['vv']->value['auth_c'];?>
/<?php echo $_smarty_tpl->tpl_vars['vv']->value['auth_a'];?>
" target=right><?php echo $_smarty_tpl->tpl_vars['vv']->value['auth_name'];?>
</a>
                            </td>
                        </tr>
                        <?php }?>
                        <?php } ?>
                        <tr height=4>
                          <td colspan=2></td>
                        </tr>
                    </table>
                    <?php } ?>
                  </td>
                  <td width=1 bgcolor=#d1e6f7>
                  </td>
            </tr>
        </table>
    </body>
</html><?php }} ?>