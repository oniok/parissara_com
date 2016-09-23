<?php /* Smarty version Smarty-3.1.19, created on 2016-09-15 05:21:57
         compiled from "/home/paris/public_html/parissara_com/themes/leo_mode/modules/blocksearch/blocksearch-top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:189790376557da68357f9ab3-34576778%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d21cd1c03b8fa505ef49128a068244dc824f96c' => 
    array (
      0 => '/home/paris/public_html/parissara_com/themes/leo_mode/modules/blocksearch/blocksearch-top.tpl',
      1 => 1470920058,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '189790376557da68357f9ab3-34576778',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'search_query' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57da6835828ea5_97707455',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57da6835828ea5_97707455')) {function content_57da6835828ea5_97707455($_smarty_tpl) {?>
<!-- Block search module TOP -->
<div id="search_block_top">
	<form id="searchbox" method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search',null,null,null,false,null,true), ENT_QUOTES, 'UTF-8', true);?>
" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="<?php echo smartyTranslate(array('s'=>'Search','mod'=>'blocksearch'),$_smarty_tpl);?>
" value="<?php echo stripslashes(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['search_query']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
" />
		<button type="submit" name="submit_search" class="fa fa-search">&nbsp;</button> 
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
