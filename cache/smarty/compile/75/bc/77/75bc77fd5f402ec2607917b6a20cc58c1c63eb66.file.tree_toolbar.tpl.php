<?php /* Smarty version Smarty-3.1.19, created on 2016-09-24 10:17:40
         compiled from "C:\xampp\htdocs\parissara_com\iadmin\themes\default\template\helpers\tree\tree_toolbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3091057e68b04e6c767-15681391%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75bc77fd5f402ec2607917b6a20cc58c1c63eb66' => 
    array (
      0 => 'C:\\xampp\\htdocs\\parissara_com\\iadmin\\themes\\default\\template\\helpers\\tree\\tree_toolbar.tpl',
      1 => 1474290589,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3091057e68b04e6c767-15681391',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'actions' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57e68b04ea96b9_39138917',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e68b04ea96b9_39138917')) {function content_57e68b04ea96b9_39138917($_smarty_tpl) {?>
<div class="tree-actions pull-right">
	<?php if (isset($_smarty_tpl->tpl_vars['actions']->value)) {?>
	<?php  $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['action']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['actions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['action']->key => $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->_loop = true;
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php } ?>
	<?php }?>
</div><?php }} ?>
