<?php /* Smarty version Smarty-3.1.19, created on 2016-09-24 10:49:46
         compiled from "C:\xampp\htdocs\parissara_com\themes\leo_mode\modules\blockbestsellers\blockbestsellers.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1097757e6928ad0a222-86747544%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '222c0e298acb4c668bfc1f083d3acc722feeccb0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\parissara_com\\themes\\leo_mode\\modules\\blockbestsellers\\blockbestsellers.tpl',
      1 => 1474291638,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1097757e6928ad0a222-86747544',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'best_sellers' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57e6928adaa0e6_48547195',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e6928adaa0e6_48547195')) {function content_57e6928adaa0e6_48547195($_smarty_tpl) {?>

<!-- MODULE Block best sellers -->
<div id="best-sellers_block_right" class="block products_block">
	<h4 class="title_block">
    	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('best-sales'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'View a top sellers products','mod'=>'blockbestsellers'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Top sellers','mod'=>'blockbestsellers'),$_smarty_tpl);?>
</a>
    </h4>
	<div class="block_content products-block">
	<?php if ($_smarty_tpl->tpl_vars['best_sellers']->value&&count($_smarty_tpl->tpl_vars['best_sellers']->value)>0) {?>
	  	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./sub/product/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['best_sellers']->value,'mod'=>'blockbestsellers'), 0);?>
  
		<div class="lnk">
        	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('best-sales'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'All best sellers','mod'=>'blockbestsellers'),$_smarty_tpl);?>
"  class="btn btn-outline button button-small btn-sm"><span><?php echo smartyTranslate(array('s'=>'All best sellers','mod'=>'blockbestsellers'),$_smarty_tpl);?>
</span></a>
        </div>
	<?php } else { ?>
		<p><?php echo smartyTranslate(array('s'=>'No best sellers at this time','mod'=>'blockbestsellers'),$_smarty_tpl);?>
</p>
	<?php }?>
	</div>
</div>
<!-- /MODULE Block best sellers --><?php }} ?>
