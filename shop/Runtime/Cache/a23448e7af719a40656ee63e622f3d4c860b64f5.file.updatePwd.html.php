<?php /* Smarty version Smarty-3.1.6, created on 2016-06-01 11:31:35
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/Learning-ThinkPHP/shop/Admin/View/Manager/updatePwd.html" */ ?>
<?php /*%%SmartyHeaderCode:787701884574e5116301233-66168299%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a23448e7af719a40656ee63e622f3d4c860b64f5' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/Learning-ThinkPHP/shop/Admin/View/Manager/updatePwd.html',
      1 => 1464751892,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '787701884574e5116301233-66168299',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_574e511631ec3',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574e511631ec3')) {function content_574e511631ec3($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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