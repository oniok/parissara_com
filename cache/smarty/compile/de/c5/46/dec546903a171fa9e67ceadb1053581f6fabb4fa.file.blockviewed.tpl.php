<?php /* Smarty version Smarty-3.1.19, created on 2016-09-26 16:49:05
         compiled from "C:\xampp\htdocs\parissara_com\themes\leo_mode\modules\blockviewed\blockviewed.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1080457e8ef11359399-70362310%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dec546903a171fa9e67ceadb1053581f6fabb4fa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\parissara_com\\themes\\leo_mode\\modules\\blockviewed\\blockviewed.tpl',
      1 => 1474858338,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1080457e8ef11359399-70362310',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'productsViewedObj' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57e8ef113a0ca2_82988291',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e8ef113a0ca2_82988291')) {function content_57e8ef113a0ca2_82988291($_smarty_tpl) {?>

<!-- Block Viewed products -->
<div id="viewed-products_block_left" class="block">
	<h4 class="title_block"><?php echo smartyTranslate(array('s'=>'Viewed products','mod'=>'blockviewed'),$_smarty_tpl);?>
</h4>
	<div class="block_content">
			<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./sub/product/sidebar-obj.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['productsViewedObj']->value,'mod'=>'blockspecials'), 0);?>
 
	</div>
</div>
<?php }} ?>
