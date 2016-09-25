<?php /* Smarty version Smarty-3.1.19, created on 2016-09-25 01:40:17
         compiled from "C:\xampp\htdocs\parissara_com\iadmin\themes\default\template\helpers\list\list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1908257e76341337129-19475487%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67b96b125cfd6d265976031a3b7b430906c3687c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\parissara_com\\iadmin\\themes\\default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1474290587,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1908257e76341337129-19475487',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57e7634136d530_92193375',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e7634136d530_92193375')) {function content_57e7634136d530_92193375($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
