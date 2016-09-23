<?php /*%%SmartyHeaderCode:75712910557aca421b4a7b5-74500141%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab0f3216f67ccb7e296cd5a7c9021fb9d2f20412' => 
    array (
      0 => '/home/paris/public_html/parissara_com/themes/leo_mode/modules/blocksupplier/blocksupplier.tpl',
      1 => 1470920059,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '75712910557aca421b4a7b5-74500141',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57b9b8124a7b97_95746369',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57b9b8124a7b97_95746369')) {function content_57b9b8124a7b97_95746369($_smarty_tpl) {?>
<!-- Block suppliers module -->
<div id="suppliers_block_left" class="block blocksupplier">
	<h4 class="title_block">
					<a href="http://parissara.com/ar/supplier" title="الموردين">
					الموردين
					</a>
			</h4>
	<div class="block_content">
								<ul class="list-block list-group bullet">
											<li class="last_item">
                					<a 
					href="http://parissara.com/ar/1__fashion-supplier" 
					title="المزيد عن Fashion Supplier">
				                Fashion Supplier
                					</a>
                				</li>
										</ul>
										<form action="/index.php" method="get">
					<div class="form-group">
						<select class="form-control" name="supplier_list">
							<option value="0">جميع الموردين</option>
													<option value="http://parissara.com/ar/1__fashion-supplier">Fashion Supplier</option>
												</select>
					</div>
				</form>
						</div>
</div>
<!-- /Block suppliers module -->
<?php }} ?>
