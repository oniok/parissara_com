<?php /* Smarty version Smarty-3.1.19, created on 2016-09-19 08:04:25
         compiled from "/home/paris/public_html/parissara_com/modules/appagebuilder/views/templates/hook/ApGenCode.tpl" */ ?>
<?php /*%%SmartyHeaderCode:202611897957dfd449cbdca0-39462244%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5999c03fa5a4d218228fa62519eac9adb1f94527' => 
    array (
      0 => '/home/paris/public_html/parissara_com/modules/appagebuilder/views/templates/hook/ApGenCode.tpl',
      1 => 1470920791,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '202611897957dfd449cbdca0-39462244',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'formAtts' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57dfd449cd8118_29387588',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57dfd449cd8118_29387588')) {function content_57dfd449cd8118_29387588($_smarty_tpl) {?>
<!-- @file modules\appagebuilder\views\templates\hook\ApGenCode -->

<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['tpl_file'])&&!empty($_smarty_tpl->tpl_vars['formAtts']->value['tpl_file'])) {?>
	<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['formAtts']->value['tpl_file'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['error_file'])&&!empty($_smarty_tpl->tpl_vars['formAtts']->value['error_file'])) {?>
	<?php echo $_smarty_tpl->tpl_vars['formAtts']->value['error_message'];?>

<?php }?>
<?php }} ?>
