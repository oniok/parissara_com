<?php /* Smarty version Smarty-3.1.19, created on 2016-09-23 10:29:02
         compiled from "C:\xampp\htdocs\parissara_com\modules\leobootstrapmenu\views\widgets\widget_html.tpl" */ ?>
<?php /*%%SmartyHeaderCode:875257e53c2e923bc0-61674690%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5728d5487e9ded2f0b43227e5be28befd0de080' => 
    array (
      0 => 'C:\\xampp\\htdocs\\parissara_com\\modules\\leobootstrapmenu\\views\\widgets\\widget_html.tpl',
      1 => 1474291040,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '875257e53c2e923bc0-61674690',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'html' => 0,
    'widget_heading' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57e53c2e959967_40434014',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e53c2e959967_40434014')) {function content_57e53c2e959967_40434014($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['html']->value)) {?>
<div class="widget-html">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<div class="menu-title">
		<?php echo $_smarty_tpl->tpl_vars['widget_heading']->value;?>

	</div>
	<?php }?>
	<div class="widget-inner">
		<?php echo $_smarty_tpl->tpl_vars['html']->value;?>

	</div>
</div>
<?php }?><?php }} ?>