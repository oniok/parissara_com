<?php /* Smarty version Smarty-3.1.19, created on 2016-09-19 04:06:08
         compiled from "/home/paris/public_html/parissara_com/themes/leo_mode/new-products.tpl" */ ?>
<?php /*%%SmartyHeaderCode:79348648057df9c7051e666-98806213%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27167536b06b77e988e06048ea5281c26d819dcd' => 
    array (
      0 => '/home/paris/public_html/parissara_com/themes/leo_mode/new-products.tpl',
      1 => 1470919433,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '79348648057df9c7051e666-98806213',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57df9c705300d8_99500774',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57df9c705300d8_99500774')) {function content_57df9c705300d8_99500774($_smarty_tpl) {?>

<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'New products'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<h1 class="page-heading product-listing"><?php echo smartyTranslate(array('s'=>'New products'),$_smarty_tpl);?>
</h1>

<?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./sub/product/product-list-form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php } else { ?>
	<p class="alert alert-warning"><?php echo smartyTranslate(array('s'=>'No new products.'),$_smarty_tpl);?>
</p>
<?php }?>
<?php }} ?>
