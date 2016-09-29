<?php /* Smarty version Smarty-3.1.19, created on 2016-09-29 22:54:28
         compiled from "C:\xampp\htdocs\parissara_com\themes\leo_mode\sub\product_info\default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:508157ed393406bfa3-88322794%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f2b978d724fce7303d5d553a527622f69b4ac47' => 
    array (
      0 => 'C:\\xampp\\htdocs\\parissara_com\\themes\\leo_mode\\sub\\product_info\\default.tpl',
      1 => 1474879719,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '508157ed393406bfa3-88322794',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'quantity_discounts' => 0,
    'display_discount_price' => 0,
    'quantity_discount' => 0,
    'productPriceWithoutReduction' => 0,
    'realDiscountPrice' => 0,
    'discountPrice' => 0,
    'qtyProductPrice' => 0,
    'features' => 0,
    'feature' => 0,
    'product' => 0,
    'HOOK_PRODUCT_TAB' => 0,
    'HOOK_PRODUCT_TAB_CONTENT' => 0,
    'accessories' => 0,
    'accessory' => 0,
    'restricted_country_mode' => 0,
    'link' => 0,
    'quick_view' => 0,
    'add_prod_display' => 0,
    'PS_CATALOG_MODE' => 0,
    'static_token' => 0,
    'priceDisplay' => 0,
    'attachments' => 0,
    'attachment' => 0,
    'customizationFormTarget' => 0,
    'customizationFields' => 0,
    'field' => 0,
    'key' => 0,
    'pictures' => 0,
    'pic_dir' => 0,
    'img_dir' => 0,
    'customizationField' => 0,
    'textFields' => 0,
    'img_ps_dir' => 0,
    'packItems' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ed3934dcae01_66012535',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ed3934dcae01_66012535')) {function content_57ed3934dcae01_66012535($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include 'C:\\xampp\\htdocs\\parissara_com\\tools\\smarty\\plugins\\function.cycle.php';
if (!is_callable('smarty_function_counter')) include 'C:\\xampp\\htdocs\\parissara_com\\tools\\smarty\\plugins\\function.counter.php';
?>
<?php if ((isset($_smarty_tpl->tpl_vars['quantity_discounts']->value)&&count($_smarty_tpl->tpl_vars['quantity_discounts']->value)>0)) {?>
	<!-- quantity discount -->
	<section class="page-product-box panel panel-default">
		<h3 class="page-subheading">
			<a class="collapsed" data-toggle="collapse" data-parent=".product-information" href="#quantityDiscount" aria-expanded="true" aria-controls="quantityDiscount">
				<?php echo smartyTranslate(array('s'=>'Volume discounts'),$_smarty_tpl);?>

			</a>
		</h3>				
		<div id="quantityDiscount" class="panel-collapse collapse table-responsive">
			<table class="std table-product-discounts">
				<thead>
					<tr>
						<th><?php echo smartyTranslate(array('s'=>'Quantity'),$_smarty_tpl);?>
</th>
						<th><?php if ($_smarty_tpl->tpl_vars['display_discount_price']->value) {?><?php echo smartyTranslate(array('s'=>'Price'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Discount'),$_smarty_tpl);?>
<?php }?></th>
						<th><?php echo smartyTranslate(array('s'=>'You Save'),$_smarty_tpl);?>
</th>
					</tr>
				</thead>
				<tbody>
					<?php  $_smarty_tpl->tpl_vars['quantity_discount'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['quantity_discount']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['quantity_discounts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['quantity_discount']->key => $_smarty_tpl->tpl_vars['quantity_discount']->value) {
$_smarty_tpl->tpl_vars['quantity_discount']->_loop = true;
?>
							<?php if ($_smarty_tpl->tpl_vars['quantity_discount']->value['price']>=0||$_smarty_tpl->tpl_vars['quantity_discount']->value['reduction_type']=='amount') {?>
								<?php $_smarty_tpl->tpl_vars['realDiscountPrice'] = new Smarty_variable(floatval($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value)-floatval($_smarty_tpl->tpl_vars['quantity_discount']->value['real_value']), null, 0);?>
							<?php } else { ?>
								<?php $_smarty_tpl->tpl_vars['realDiscountPrice'] = new Smarty_variable(floatval($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value)-floatval(($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value*$_smarty_tpl->tpl_vars['quantity_discount']->value['reduction'])), null, 0);?>
							<?php }?>
							<tr id="quantityDiscount_<?php echo $_smarty_tpl->tpl_vars['quantity_discount']->value['id_product_attribute'];?>
" class="quantityDiscount_<?php echo $_smarty_tpl->tpl_vars['quantity_discount']->value['id_product_attribute'];?>
" data-real-discount-value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['realDiscountPrice']->value),$_smarty_tpl);?>
" data-discount-type="<?php echo $_smarty_tpl->tpl_vars['quantity_discount']->value['reduction_type'];?>
" data-discount="<?php echo floatval($_smarty_tpl->tpl_vars['quantity_discount']->value['real_value']);?>
" data-discount-quantity="<?php echo intval($_smarty_tpl->tpl_vars['quantity_discount']->value['quantity']);?>
">
								<td>
							<?php echo intval($_smarty_tpl->tpl_vars['quantity_discount']->value['quantity']);?>

						</td>
						<td>
							<?php if ($_smarty_tpl->tpl_vars['quantity_discount']->value['price']>=0||$_smarty_tpl->tpl_vars['quantity_discount']->value['reduction_type']=='amount') {?>
								<?php if ($_smarty_tpl->tpl_vars['display_discount_price']->value) {?>
									<?php if ($_smarty_tpl->tpl_vars['quantity_discount']->value['reduction_tax']==0&&!$_smarty_tpl->tpl_vars['quantity_discount']->value['price']) {?>
										<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>floatval($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value)-floatval(($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value*$_smarty_tpl->tpl_vars['quantity_discount']->value['reduction_with_tax']))),$_smarty_tpl);?>

									<?php } else { ?>
										<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>floatval($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value)-floatval($_smarty_tpl->tpl_vars['quantity_discount']->value['real_value'])),$_smarty_tpl);?>

									<?php }?>
								<?php } else { ?>
									<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>floatval($_smarty_tpl->tpl_vars['quantity_discount']->value['real_value'])),$_smarty_tpl);?>

								<?php }?>
							<?php } else { ?>
								<?php if ($_smarty_tpl->tpl_vars['display_discount_price']->value) {?>
									<?php if ($_smarty_tpl->tpl_vars['quantity_discount']->value['reduction_tax']==0) {?>
										<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>floatval($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value)-floatval(($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value*$_smarty_tpl->tpl_vars['quantity_discount']->value['reduction_with_tax']))),$_smarty_tpl);?>

									<?php } else { ?>
										<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>floatval($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value)-floatval(($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value*$_smarty_tpl->tpl_vars['quantity_discount']->value['reduction']))),$_smarty_tpl);?>

									<?php }?>
								<?php } else { ?>
									<?php echo floatval($_smarty_tpl->tpl_vars['quantity_discount']->value['real_value']);?>
%
								<?php }?>
							<?php }?>
						</td>
						<td>
							<span><?php echo smartyTranslate(array('s'=>'Up to'),$_smarty_tpl);?>
</span>
							<?php if ($_smarty_tpl->tpl_vars['quantity_discount']->value['price']>=0||$_smarty_tpl->tpl_vars['quantity_discount']->value['reduction_type']=='amount') {?>
								<?php $_smarty_tpl->tpl_vars['discountPrice'] = new Smarty_variable(floatval($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value)-floatval($_smarty_tpl->tpl_vars['quantity_discount']->value['real_value']), null, 0);?>
							<?php } else { ?>
								<?php $_smarty_tpl->tpl_vars['discountPrice'] = new Smarty_variable(floatval($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value)-floatval(($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value*$_smarty_tpl->tpl_vars['quantity_discount']->value['reduction'])), null, 0);?>
							<?php }?>
							<?php $_smarty_tpl->tpl_vars['discountPrice'] = new Smarty_variable($_smarty_tpl->tpl_vars['discountPrice']->value*$_smarty_tpl->tpl_vars['quantity_discount']->value['quantity'], null, 0);?>
							<?php $_smarty_tpl->tpl_vars['qtyProductPrice'] = new Smarty_variable(floatval($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value)*$_smarty_tpl->tpl_vars['quantity_discount']->value['quantity'], null, 0);?>
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['qtyProductPrice']->value-$_smarty_tpl->tpl_vars['discountPrice']->value),$_smarty_tpl);?>

						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</section>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['features']->value)&&$_smarty_tpl->tpl_vars['features']->value) {?>
	<!-- Data sheet -->
	<section class="page-product-box panel panel-default">
		<h3 class="page-subheading">
			<a class="collapsed" data-toggle="collapse" data-parent=".product-information" href="#data_sheet" aria-expanded="true" aria-controls="data_sheet">
				<?php echo smartyTranslate(array('s'=>'Data sheet'),$_smarty_tpl);?>

			</a>
		</h3>
		<div id="data_sheet" class="panel-collapse collapse">
			<table class="table-data-sheet">
				<?php  $_smarty_tpl->tpl_vars['feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feature']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->key => $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->_loop = true;
?>
				<tr class="<?php echo smarty_function_cycle(array('values'=>"odd,even"),$_smarty_tpl);?>
">
					<?php if (isset($_smarty_tpl->tpl_vars['feature']->value['value'])) {?>
					<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</td>
					<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['value'], ENT_QUOTES, 'UTF-8', true);?>
</td>
					<?php }?>
				</tr>
				<?php } ?>
			</table>
		</div>
	</section>
	<!--end Data sheet -->
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['product']->value)&&$_smarty_tpl->tpl_vars['product']->value->description) {?>
	<!-- More info -->
	<section class="page-product-box panel panel-default">
		<h3 class="page-subheading">
			<a class="collapsed" data-toggle="collapse" data-parent=".product-information" href="#sp_description" aria-expanded="true" aria-controls="sp_description">
				<?php echo smartyTranslate(array('s'=>'More info'),$_smarty_tpl);?>

			</a>
		</h3>
		<!-- full description -->
		<div id="sp_description" class="panel-collapse collapse">
			<div class="rte"><?php echo $_smarty_tpl->tpl_vars['product']->value->description;?>
</div>
		</div>
	</section>
	<!--end  More info -->
<?php }?>
<!--HOOK_PRODUCT_TAB -->
<section class="page-product-box panel panel-default">
	<h3 class="page-subheading">
		<a class="collapsed" data-toggle="collapse" data-parent=".product-information" href="#product_tabs" aria-expanded="true" aria-controls="product_tabs">
		   <?php echo $_smarty_tpl->tpl_vars['HOOK_PRODUCT_TAB']->value;?>

		</a>
	</h3>
	<?php if (isset($_smarty_tpl->tpl_vars['HOOK_PRODUCT_TAB_CONTENT']->value)&&$_smarty_tpl->tpl_vars['HOOK_PRODUCT_TAB_CONTENT']->value) {?><div id="product_tabs" class="panel-collapse collapse"><?php echo $_smarty_tpl->tpl_vars['HOOK_PRODUCT_TAB_CONTENT']->value;?>
</div><?php }?>
</section>
<!--end HOOK_PRODUCT_TAB -->
<?php if (isset($_smarty_tpl->tpl_vars['accessories']->value)&&$_smarty_tpl->tpl_vars['accessories']->value) {?>
	<!--Accessories -->
	<section class="page-product-box panel panel-default">
		<h3 class="page-subheading">
			<a class="collapsed" data-toggle="collapse" data-parent=".product-information" href="#product_accessories" aria-expanded="true" aria-controls="product_accessories">
			   <?php echo smartyTranslate(array('s'=>'Accessories'),$_smarty_tpl);?>

			</a>
		</h3>
		<div id="product_accessories" class="panel-collapse collapse">
			<div class="block products_block accessories-block clearfix">
				<div class="product_list grid row">
					<?php  $_smarty_tpl->tpl_vars['accessory'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['accessory']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['accessories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['accessory']->key => $_smarty_tpl->tpl_vars['accessory']->value) {
$_smarty_tpl->tpl_vars['accessory']->_loop = true;
?>
						<?php if (($_smarty_tpl->tpl_vars['accessory']->value['allow_oosp']||$_smarty_tpl->tpl_vars['accessory']->value['quantity_all_versions']>0||$_smarty_tpl->tpl_vars['accessory']->value['quantity']>0)&&$_smarty_tpl->tpl_vars['accessory']->value['available_for_order']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) {?>
							<?php $_smarty_tpl->tpl_vars['accessoryLink'] = new Smarty_variable($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['accessory']->value['id_product'],$_smarty_tpl->tpl_vars['accessory']->value['link_rewrite'],$_smarty_tpl->tpl_vars['accessory']->value['category']), null, 0);?>
							<div class="product-container product-block col-xs-12 col-sm-6 col-md-3 col-lg-3 text-center" itemscope itemtype="http://schema.org/Product">
								<div class="left-block">
									<div class="product-image-container image">
										<a class="product_img_link"	href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['accessory']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['accessory']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" itemprop="url">
											<img class="replace-2x img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['accessory']->value['link_rewrite'],$_smarty_tpl->tpl_vars['accessory']->value['id_image'],'home_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php if (!empty($_smarty_tpl->tpl_vars['accessory']->value['legend'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['accessory']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['accessory']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" title="<?php if (!empty($_smarty_tpl->tpl_vars['accessory']->value['legend'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['accessory']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['accessory']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" itemprop="image" />
										</a>
										<div class="box-buttons">
											<?php if (isset($_smarty_tpl->tpl_vars['quick_view']->value)&&$_smarty_tpl->tpl_vars['quick_view']->value) {?>
												<div class="quickview">
													<a class="quick-view btn-tooltip" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['accessory']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" rel="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['accessory']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" data-original-title="<?php echo smartyTranslate(array('s'=>'Quick view'),$_smarty_tpl);?>
">
														<i class="fa fa-search-plus"></i> <span><?php echo smartyTranslate(array('s'=>'Quick view'),$_smarty_tpl);?>
</span>
													</a>
												</div>
											<?php }?>
										</div>
									</div>
									<div class="functional-buttons clearfix">
										<div class="cart">
											<?php if (($_smarty_tpl->tpl_vars['accessory']->value['id_product_attribute']==0||(isset($_smarty_tpl->tpl_vars['add_prod_display']->value)&&($_smarty_tpl->tpl_vars['add_prod_display']->value==1)))&&$_smarty_tpl->tpl_vars['accessory']->value['available_for_order']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&$_smarty_tpl->tpl_vars['accessory']->value['customizable']!=2&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
												<?php if ((!isset($_smarty_tpl->tpl_vars['accessory']->value['customization_required'])||!$_smarty_tpl->tpl_vars['accessory']->value['customization_required'])&&($_smarty_tpl->tpl_vars['accessory']->value['allow_oosp']||$_smarty_tpl->tpl_vars['accessory']->value['quantity']>0)) {?>
													<?php $_smarty_tpl->_capture_stack[0][] = array('default', null, null); ob_start(); ?>add=1&amp;id_product=<?php echo intval($_smarty_tpl->tpl_vars['accessory']->value['id_product']);?>
<?php if (isset($_smarty_tpl->tpl_vars['accessory']->value['id_product_attribute'])&&$_smarty_tpl->tpl_vars['accessory']->value['id_product_attribute']) {?>&amp;ipa=<?php echo intval($_smarty_tpl->tpl_vars['accessory']->value['id_product_attribute']);?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['static_token']->value)) {?>&amp;token=<?php echo $_smarty_tpl->tpl_vars['static_token']->value;?>
<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
													<a class="button ajax_add_to_cart_button" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',true,null,Smarty::$_smarty_vars['capture']['default'],false), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Add to cart'),$_smarty_tpl);?>
" data-id-product-attribute="<?php echo intval($_smarty_tpl->tpl_vars['accessory']->value['id_product_attribute']);?>
" data-id-product="<?php echo intval($_smarty_tpl->tpl_vars['accessory']->value['id_product']);?>
" data-minimal_quantity="<?php if (isset($_smarty_tpl->tpl_vars['accessory']->value['product_attribute_minimal_quantity'])&&$_smarty_tpl->tpl_vars['accessory']->value['product_attribute_minimal_quantity']>=1) {?><?php echo intval($_smarty_tpl->tpl_vars['accessory']->value['product_attribute_minimal_quantity']);?>
<?php } else { ?><?php echo intval($_smarty_tpl->tpl_vars['accessory']->value['minimal_quantity']);?>
<?php }?>">
														<i class="fa fa-shopping-cart"></i> <span><?php echo smartyTranslate(array('s'=>'Add to cart'),$_smarty_tpl);?>
</span>
													</a>
												<?php } else { ?>
													<span class="button ajax_add_to_cart_button disabled" title="<?php echo smartyTranslate(array('s'=>'Out of stock'),$_smarty_tpl);?>
">
														<i class="fa fa-shopping-cart"></i> <span><?php echo smartyTranslate(array('s'=>'Out of stock'),$_smarty_tpl);?>
</span>
													</span>
												<?php }?>
											<?php }?>
										</div>
										
										<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductListFunctionalButtons','product'=>$_smarty_tpl->tpl_vars['accessory']->value),$_smarty_tpl);?>

										
										<div class="view">
											<a class="button lnk_view" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['accessory']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'View'),$_smarty_tpl);?>
">
												<i class="fa fa-info"></i>
												<span><?php if ((isset($_smarty_tpl->tpl_vars['accessory']->value['customization_required'])&&$_smarty_tpl->tpl_vars['accessory']->value['customization_required'])) {?><?php echo smartyTranslate(array('s'=>'Customize'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'More'),$_smarty_tpl);?>
<?php }?></span>
											</a>
										</div>
									</div>
								</div>
								<div class="right-block">
									<div class="product-meta">
										
										<h5 itemprop="name" class="name">
											<?php if (isset($_smarty_tpl->tpl_vars['accessory']->value['pack_quantity'])&&$_smarty_tpl->tpl_vars['accessory']->value['pack_quantity']) {?><?php echo (intval($_smarty_tpl->tpl_vars['accessory']->value['pack_quantity'])).(' x ');?>
<?php }?>
											<a class="product-name" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['accessory']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['accessory']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" itemprop="url" >
												<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['accessory']->value['name'],45,'...'), ENT_QUOTES, 'UTF-8', true);?>

											</a>
										</h5>
										<p class="product-desc" itemprop="description">
											<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['accessory']->value['description_short']),360,'...');?>

										</p>
										<?php if ((!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&((isset($_smarty_tpl->tpl_vars['accessory']->value['show_price'])&&$_smarty_tpl->tpl_vars['accessory']->value['show_price'])||(isset($_smarty_tpl->tpl_vars['accessory']->value['available_for_order'])&&$_smarty_tpl->tpl_vars['accessory']->value['available_for_order'])))) {?>
											<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="content_price">
												<?php if (isset($_smarty_tpl->tpl_vars['accessory']->value['show_price'])&&$_smarty_tpl->tpl_vars['accessory']->value['show_price']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) {?>
													<span itemprop="price" class="price product-price">
														<?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['accessory']->value['price']),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['accessory']->value['price_tax_exc']),$_smarty_tpl);?>
<?php }?>
													</span>
													<meta itemprop="priceCurrency" content="<?php echo $_smarty_tpl->tpl_vars['priceDisplay']->value;?>
" />
													<?php if (isset($_smarty_tpl->tpl_vars['accessory']->value['specific_prices'])&&$_smarty_tpl->tpl_vars['accessory']->value['specific_prices']&&isset($_smarty_tpl->tpl_vars['accessory']->value['specific_prices']['reduction'])&&$_smarty_tpl->tpl_vars['accessory']->value['specific_prices']['reduction']>0) {?>
														<span class="old-price product-price">
															<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0][0]->displayWtPrice(array('p'=>$_smarty_tpl->tpl_vars['accessory']->value['price_without_reduction']),$_smarty_tpl);?>

														</span>
														<?php if ($_smarty_tpl->tpl_vars['accessory']->value['specific_prices']['reduction_type']=='percentage') {?>
															<span class="price-percent-reduction">-<?php echo $_smarty_tpl->tpl_vars['accessory']->value['specific_prices']['reduction']*100;?>
%</span>
														<?php }?>
													<?php }?>
												<?php }?>
											</div>
										<?php }?>
									</div>
								</div>
							</div>
						<?php }?>
					<?php } ?>
				</div>
			</div>
		</div>	
	</section>
	<!--end Accessories -->
<?php }?>
		<!-- description & features -->
		<?php if ((isset($_smarty_tpl->tpl_vars['product']->value)&&$_smarty_tpl->tpl_vars['product']->value->description)||(isset($_smarty_tpl->tpl_vars['features']->value)&&$_smarty_tpl->tpl_vars['features']->value)||(isset($_smarty_tpl->tpl_vars['accessories']->value)&&$_smarty_tpl->tpl_vars['accessories']->value)||(isset($_smarty_tpl->tpl_vars['HOOK_PRODUCT_TAB']->value)&&$_smarty_tpl->tpl_vars['HOOK_PRODUCT_TAB']->value)||(isset($_smarty_tpl->tpl_vars['attachments']->value)&&$_smarty_tpl->tpl_vars['attachments']->value)||isset($_smarty_tpl->tpl_vars['product']->value)&&$_smarty_tpl->tpl_vars['product']->value->customizable) {?>
			<?php if (isset($_smarty_tpl->tpl_vars['attachments']->value)&&$_smarty_tpl->tpl_vars['attachments']->value) {?>
			<!--Download -->
			<section class="page-product-box panel panel-default">
				<h3 class="page-subheading">
	                <a class="collapsed" data-toggle="collapse" data-parent=".product-information" href="#product_attachment" aria-expanded="true" aria-controls="product_attachment">
	                   <?php echo smartyTranslate(array('s'=>'Download'),$_smarty_tpl);?>

	                </a>
	            </h3>
				<div id="product_attachment" class="panel-collapse collapse">
					<?php  $_smarty_tpl->tpl_vars['attachment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['attachment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['attachments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['attachment']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['attachment']->iteration=0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['attachements']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['attachment']->key => $_smarty_tpl->tpl_vars['attachment']->value) {
$_smarty_tpl->tpl_vars['attachment']->_loop = true;
 $_smarty_tpl->tpl_vars['attachment']->iteration++;
 $_smarty_tpl->tpl_vars['attachment']->last = $_smarty_tpl->tpl_vars['attachment']->iteration === $_smarty_tpl->tpl_vars['attachment']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['attachements']['iteration']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['attachements']['last'] = $_smarty_tpl->tpl_vars['attachment']->last;
?>
						<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['attachements']['iteration']%3==1) {?><div class="row"><?php }?>
							<div class="col-lg-4">
								<h4><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('attachment',true,null,"id_attachment=".((string)$_smarty_tpl->tpl_vars['attachment']->value['id_attachment'])), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attachment']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a></h4>
								<p class="text-muted"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attachment']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
</p>
								<a class="btn btn-outline btn-block" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('attachment',true,null,"id_attachment=".((string)$_smarty_tpl->tpl_vars['attachment']->value['id_attachment'])), ENT_QUOTES, 'UTF-8', true);?>
">
									<i class="fa fa-download"></i>
									<?php echo smartyTranslate(array('s'=>"Download"),$_smarty_tpl);?>
 (<?php echo Tools::formatBytes($_smarty_tpl->tpl_vars['attachment']->value['file_size'],2);?>
)
								</a>
								<hr>
							</div>
						<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['attachements']['iteration']%3==0||$_smarty_tpl->getVariable('smarty')->value['foreach']['attachements']['last']) {?></div><?php }?>
					<?php } ?>
				</div>
			</section>
			<!--end Download -->
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['product']->value)&&$_smarty_tpl->tpl_vars['product']->value->customizable) {?>
			<!--Customization -->
			<section class="page-product-box panel panel-default">
				<h3 class="page-subheading">
	                <a class="collapsed" data-toggle="collapse" data-parent=".product-information" href="#product_customization" aria-expanded="true" aria-controls="product_customization">
	                   <?php echo smartyTranslate(array('s'=>'Product customization'),$_smarty_tpl);?>

	                </a>
	            </h3>
				<div id="product_customization" class="panel-collapse collapse">
					<!-- Customizable products -->
					<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['customizationFormTarget']->value;?>
" enctype="multipart/form-data" id="customizationForm" class="clearfix">
						<p class="infoCustomizable">
							<?php echo smartyTranslate(array('s'=>'After saving your customized product, remember to add it to your cart.'),$_smarty_tpl);?>

							<?php if ($_smarty_tpl->tpl_vars['product']->value->uploadable_files) {?>
							<br />
							<?php echo smartyTranslate(array('s'=>'Allowed file formats are: GIF, JPG, PNG'),$_smarty_tpl);?>
<?php }?>
						</p>
						<?php if (intval($_smarty_tpl->tpl_vars['product']->value->uploadable_files)) {?>
							<div class="customizableProductsFile">
								<h5 class="product-heading-h5"><?php echo smartyTranslate(array('s'=>'Pictures'),$_smarty_tpl);?>
</h5>
								<ul id="uploadable_files" class="clearfix">
									<?php echo smarty_function_counter(array('start'=>0,'assign'=>'customizationField'),$_smarty_tpl);?>

									<?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['customizationFields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
										<?php if ($_smarty_tpl->tpl_vars['field']->value['type']==0) {?>
											<li class="customizationUploadLine<?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?> required<?php }?>"><?php $_smarty_tpl->tpl_vars['key'] = new Smarty_variable(((('pictures_').($_smarty_tpl->tpl_vars['product']->value->id)).('_')).($_smarty_tpl->tpl_vars['field']->value['id_customization_field']), null, 0);?>
												<?php if (isset($_smarty_tpl->tpl_vars['pictures']->value[$_smarty_tpl->tpl_vars['key']->value])) {?>
													<div class="customizationUploadBrowse">
														<img src="<?php echo $_smarty_tpl->tpl_vars['pic_dir']->value;?>
<?php echo $_smarty_tpl->tpl_vars['pictures']->value[$_smarty_tpl->tpl_vars['key']->value];?>
_small" alt="" />
															<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductDeletePictureLink($_smarty_tpl->tpl_vars['product']->value,$_smarty_tpl->tpl_vars['field']->value['id_customization_field']), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Delete'),$_smarty_tpl);?>
" >
																<img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
icon/delete.gif" alt="<?php echo smartyTranslate(array('s'=>'Delete'),$_smarty_tpl);?>
" class="customization_delete_icon" width="11" height="13" />
															</a>
													</div>
												<?php }?>
												<div class="customizationUploadBrowse form-group">
													<label class="customizationUploadBrowseDescription">
														<?php if (!empty($_smarty_tpl->tpl_vars['field']->value['name'])) {?>
															<?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>

														<?php } else { ?>
															<?php echo smartyTranslate(array('s'=>'Please select an image file from your computer'),$_smarty_tpl);?>

														<?php }?>
														<?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?><sup>*</sup><?php }?>
													</label>
													<input type="file" name="file<?php echo $_smarty_tpl->tpl_vars['field']->value['id_customization_field'];?>
" id="img<?php echo $_smarty_tpl->tpl_vars['customizationField']->value;?>
" class="form-control customization_block_input <?php if (isset($_smarty_tpl->tpl_vars['pictures']->value[$_smarty_tpl->tpl_vars['key']->value])) {?>filled<?php }?>" />
												</div>
											</li>
											<?php echo smarty_function_counter(array(),$_smarty_tpl);?>

										<?php }?>
									<?php } ?>
								</ul>
							</div>
						<?php }?>
						<?php if (intval($_smarty_tpl->tpl_vars['product']->value->text_fields)) {?>
							<div class="customizableProductsText">
								<h5 class="product-heading-h5"><?php echo smartyTranslate(array('s'=>'Text'),$_smarty_tpl);?>
</h5>
								<ul id="text_fields">
								<?php echo smarty_function_counter(array('start'=>0,'assign'=>'customizationField'),$_smarty_tpl);?>

								<?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['customizationFields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
									<?php if ($_smarty_tpl->tpl_vars['field']->value['type']==1) {?>
										<li class="customizationUploadLine<?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?> required<?php }?>">
											<label for ="textField<?php echo $_smarty_tpl->tpl_vars['customizationField']->value;?>
">
												<?php $_smarty_tpl->tpl_vars['key'] = new Smarty_variable(((('textFields_').($_smarty_tpl->tpl_vars['product']->value->id)).('_')).($_smarty_tpl->tpl_vars['field']->value['id_customization_field']), null, 0);?>
												<?php if (!empty($_smarty_tpl->tpl_vars['field']->value['name'])) {?>
													<?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>

												<?php }?>
												<?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?><sup>*</sup><?php }?>
											</label>
											<textarea name="textField<?php echo $_smarty_tpl->tpl_vars['field']->value['id_customization_field'];?>
" class="form-control customization_block_input" id="textField<?php echo $_smarty_tpl->tpl_vars['customizationField']->value;?>
" rows="3" cols="20"><?php if (isset($_smarty_tpl->tpl_vars['textFields']->value[$_smarty_tpl->tpl_vars['key']->value])) {?><?php echo stripslashes($_smarty_tpl->tpl_vars['textFields']->value[$_smarty_tpl->tpl_vars['key']->value]);?>
<?php }?></textarea>
										</li>
										<?php echo smarty_function_counter(array(),$_smarty_tpl);?>

									<?php }?>
								<?php } ?>
								</ul>
							</div>
						<?php }?>
						<p id="customizedDatas">
							<input type="hidden" name="quantityBackup" id="quantityBackup" value="" />
							<input type="hidden" name="submitCustomizedDatas" value="1" />
							<button class="button btn btn-outline button button-small btn-sm" name="saveCustomization">
								<span><?php echo smartyTranslate(array('s'=>'Save'),$_smarty_tpl);?>
</span>
							</button>
							<span id="ajax-loader" class="unvisible">
								<img src="<?php echo $_smarty_tpl->tpl_vars['img_ps_dir']->value;?>
loader.gif" alt="loader" />
							</span>
						</p>
					</form>
					<p class="clear required"><sup>*</sup> <?php echo smartyTranslate(array('s'=>'required fields'),$_smarty_tpl);?>
</p>	
				</div>
			</section>
			<!--end Customization -->
			<?php }?>
		<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['packItems']->value)&&count($_smarty_tpl->tpl_vars['packItems']->value)>0) {?>
			<section id="blockpack" class="page-product-box panel panel-default">
				<h3 class="page-subheading">
	                <a class="collapsed" data-toggle="collapse" data-parent=".product-information" href="#product_pack" aria-expanded="true" aria-controls="product_pack">
	                   <?php echo smartyTranslate(array('s'=>'Pack content'),$_smarty_tpl);?>

	                </a>
	            </h3>
	            <div id="product_pack" class="panel-collapse collapse">
					<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['packItems']->value), 0);?>

				</div>
			</section>
		<?php }?><?php }} ?>
