<?php /* Smarty version Smarty-3.1.19, created on 2016-09-10 03:53:10
         compiled from "/home/paris/public_html/parissara_com/themes/leo_mode/modules/blockviewed/blockviewed.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28949844357d3bbe6e24602-51007795%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fafb172e7417f21a0dc9e7c8b33ceab76ee022dd' => 
    array (
      0 => '/home/paris/public_html/parissara_com/themes/leo_mode/modules/blockviewed/blockviewed.tpl',
      1 => 1470920061,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28949844357d3bbe6e24602-51007795',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'productsViewedObj' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57d3bbe6e2d680_00124722',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57d3bbe6e2d680_00124722')) {function content_57d3bbe6e2d680_00124722($_smarty_tpl) {?>

<!-- Block Viewed products -->
<div id="viewed-products_block_left" class="block">
	<h4 class="title_block"><?php echo smartyTranslate(array('s'=>'Viewed products','mod'=>'blockviewed'),$_smarty_tpl);?>
</h4>
	<div class="block_content">
			<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./sub/product/sidebar-obj.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['productsViewedObj']->value,'mod'=>'blockspecials'), 0);?>
 
	</div>
</div>
<?php }} ?>
