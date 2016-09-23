<?php /*%%SmartyHeaderCode:72167811257aca081a49021-34693114%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '72167811257aca081a49021-34693114',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57b92576aee196_84904449',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57b92576aee196_84904449')) {function content_57b92576aee196_84904449($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top">
	<form id="searchbox" method="get" action="//parissara.com/de/search" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Suche" value="" />
		<button type="submit" name="submit_search" class="fa fa-search">&nbsp;</button> 
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
