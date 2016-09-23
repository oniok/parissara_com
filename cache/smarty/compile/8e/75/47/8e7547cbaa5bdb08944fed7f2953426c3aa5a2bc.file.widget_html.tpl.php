<?php /* Smarty version Smarty-3.1.19, created on 2016-09-19 08:04:25
         compiled from "/home/paris/public_html/parissara_com/modules/leobootstrapmenu/views/widgets/widget_html.tpl" */ ?>
<?php /*%%SmartyHeaderCode:96710587457dfd449327470-49305818%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e7547cbaa5bdb08944fed7f2953426c3aa5a2bc' => 
    array (
      0 => '/home/paris/public_html/parissara_com/modules/leobootstrapmenu/views/widgets/widget_html.tpl',
      1 => 1470920117,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '96710587457dfd449327470-49305818',
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
  'unifunc' => 'content_57dfd449337eb1_93421728',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57dfd449337eb1_93421728')) {function content_57dfd449337eb1_93421728($_smarty_tpl) {?>

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
