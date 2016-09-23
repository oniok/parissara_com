<?php /* Smarty version Smarty-3.1.19, created on 2016-09-11 00:41:02
         compiled from "/home/paris/public_html/parissara_com/iadmin/themes/default/template/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:113905732257d4e05ec0ff44-25403966%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e0ca807448d37eb495260fea3533b6ac26d6592' => 
    array (
      0 => '/home/paris/public_html/parissara_com/iadmin/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1470921295,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '113905732257d4e05ec0ff44-25403966',
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
  'unifunc' => 'content_57d4e05ec1db19_38465790',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57d4e05ec1db19_38465790')) {function content_57d4e05ec1db19_38465790($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
