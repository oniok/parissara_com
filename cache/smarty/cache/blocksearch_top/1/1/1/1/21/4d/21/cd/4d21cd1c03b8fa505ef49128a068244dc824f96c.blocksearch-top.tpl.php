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
  'unifunc' => 'content_57bb2287a36970_39466948',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57bb2287a36970_39466948')) {function content_57bb2287a36970_39466948($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top">
	<form id="searchbox" method="get" action="//parissara.com/en/search" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Search" value="" />
		<button type="submit" name="submit_search" class="fa fa-search">&nbsp;</button> 
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
