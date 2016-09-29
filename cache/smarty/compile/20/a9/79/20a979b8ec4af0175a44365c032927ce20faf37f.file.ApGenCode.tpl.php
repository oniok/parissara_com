<?php /* Smarty version Smarty-3.1.19, created on 2016-09-29 22:56:45
         compiled from "C:\xampp\htdocs\parissara_com\modules\appagebuilder\views\templates\hook\ApGenCode.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2033257ed39bda64e86-21253039%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20a979b8ec4af0175a44365c032927ce20faf37f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\parissara_com\\modules\\appagebuilder\\views\\templates\\hook\\ApGenCode.tpl',
      1 => 1474879701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2033257ed39bda64e86-21253039',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'formAtts' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ed39bdabb5d3_38048338',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ed39bdabb5d3_38048338')) {function content_57ed39bdabb5d3_38048338($_smarty_tpl) {?>
<!-- @file modules\appagebuilder\views\templates\hook\ApGenCode -->

<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['tpl_file'])&&!empty($_smarty_tpl->tpl_vars['formAtts']->value['tpl_file'])) {?>
	<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['formAtts']->value['tpl_file'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['error_file'])&&!empty($_smarty_tpl->tpl_vars['formAtts']->value['error_file'])) {?>
	<?php echo $_smarty_tpl->tpl_vars['formAtts']->value['error_message'];?>

<?php }?>
<?php }} ?>
