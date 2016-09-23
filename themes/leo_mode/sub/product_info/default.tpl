
{if (isset($quantity_discounts) && count($quantity_discounts) > 0)}
	<!-- quantity discount -->
	<section class="page-product-box panel panel-default">
		<h3 class="page-subheading">
			<a class="collapsed" data-toggle="collapse" data-parent=".product-information" href="#quantityDiscount" aria-expanded="true" aria-controls="quantityDiscount">
				{l s='Volume discounts'}
			</a>
		</h3>				
		<div id="quantityDiscount" class="panel-collapse collapse table-responsive">
			<table class="std table-product-discounts">
				<thead>
					<tr>
						<th>{l s='Quantity'}</th>
						<th>{if $display_discount_price}{l s='Price'}{else}{l s='Discount'}{/if}</th>
						<th>{l s='You Save'}</th>
					</tr>
				</thead>
				<tbody>
					{foreach from=$quantity_discounts item='quantity_discount' name='quantity_discounts'}
							{if $quantity_discount.price >= 0 || $quantity_discount.reduction_type == 'amount'}
								{$realDiscountPrice=$productPriceWithoutReduction|floatval-$quantity_discount.real_value|floatval}
							{else}
								{$realDiscountPrice=$productPriceWithoutReduction|floatval-($productPriceWithoutReduction*$quantity_discount.reduction)|floatval}
							{/if}
							<tr id="quantityDiscount_{$quantity_discount.id_product_attribute}" class="quantityDiscount_{$quantity_discount.id_product_attribute}" data-real-discount-value="{convertPrice price = $realDiscountPrice}" data-discount-type="{$quantity_discount.reduction_type}" data-discount="{$quantity_discount.real_value|floatval}" data-discount-quantity="{$quantity_discount.quantity|intval}">
								<td>
							{$quantity_discount.quantity|intval}
						</td>
						<td>
							{if $quantity_discount.price >= 0 || $quantity_discount.reduction_type == 'amount'}
								{if $display_discount_price}
									{if $quantity_discount.reduction_tax == 0 && !$quantity_discount.price}
										{convertPrice price = $productPriceWithoutReduction|floatval-($productPriceWithoutReduction*$quantity_discount.reduction_with_tax)|floatval}
									{else}
										{convertPrice price=$productPriceWithoutReduction|floatval-$quantity_discount.real_value|floatval}
									{/if}
								{else}
									{convertPrice price=$quantity_discount.real_value|floatval}
								{/if}
							{else}
								{if $display_discount_price}
									{if $quantity_discount.reduction_tax == 0}
										{convertPrice price = $productPriceWithoutReduction|floatval-($productPriceWithoutReduction*$quantity_discount.reduction_with_tax)|floatval}
									{else}
										{convertPrice price = $productPriceWithoutReduction|floatval-($productPriceWithoutReduction*$quantity_discount.reduction)|floatval}
									{/if}
								{else}
									{$quantity_discount.real_value|floatval}%
								{/if}
							{/if}
						</td>
						<td>
							<span>{l s='Up to'}</span>
							{if $quantity_discount.price >= 0 || $quantity_discount.reduction_type == 'amount'}
								{$discountPrice=$productPriceWithoutReduction|floatval-$quantity_discount.real_value|floatval}
							{else}
								{$discountPrice=$productPriceWithoutReduction|floatval-($productPriceWithoutReduction*$quantity_discount.reduction)|floatval}
							{/if}
							{$discountPrice=$discountPrice * $quantity_discount.quantity}
							{$qtyProductPrice=$productPriceWithoutReduction|floatval * $quantity_discount.quantity}
							{convertPrice price=$qtyProductPrice - $discountPrice}
						</td>
					</tr>
					{/foreach}
				</tbody>
			</table>
		</div>
	</section>
{/if}
{if isset($features) && $features}
	<!-- Data sheet -->
	<section class="page-product-box panel panel-default">
		<h3 class="page-subheading">
			<a class="collapsed" data-toggle="collapse" data-parent=".product-information" href="#data_sheet" aria-expanded="true" aria-controls="data_sheet">
				{l s='Data sheet'}
			</a>
		</h3>
		<div id="data_sheet" class="panel-collapse collapse">
			<table class="table-data-sheet">
				{foreach from=$features item=feature}
				<tr class="{cycle values="odd,even"}">
					{if isset($feature.value)}
					<td>{$feature.name|escape:'html':'UTF-8'}</td>
					<td>{$feature.value|escape:'html':'UTF-8'}</td>
					{/if}
				</tr>
				{/foreach}
			</table>
		</div>
	</section>
	<!--end Data sheet -->
{/if}
{if isset($product) && $product->description}
	<!-- More info -->
	<section class="page-product-box panel panel-default">
		<h3 class="page-subheading">
			<a class="collapsed" data-toggle="collapse" data-parent=".product-information" href="#sp_description" aria-expanded="true" aria-controls="sp_description">
				{l s='More info'}
			</a>
		</h3>
		<!-- full description -->
		<div id="sp_description" class="panel-collapse collapse">
			<div class="rte">{$product->description}</div>
		</div>
	</section>
	<!--end  More info -->
{/if}
<!--HOOK_PRODUCT_TAB -->
<section class="page-product-box panel panel-default">
	<h3 class="page-subheading">
		<a class="collapsed" data-toggle="collapse" data-parent=".product-information" href="#product_tabs" aria-expanded="true" aria-controls="product_tabs">
		   {$HOOK_PRODUCT_TAB}
		</a>
	</h3>
	{if isset($HOOK_PRODUCT_TAB_CONTENT) && $HOOK_PRODUCT_TAB_CONTENT}<div id="product_tabs" class="panel-collapse collapse">{$HOOK_PRODUCT_TAB_CONTENT}</div>{/if}
</section>
<!--end HOOK_PRODUCT_TAB -->
{if isset($accessories) && $accessories}
	<!--Accessories -->
	<section class="page-product-box panel panel-default">
		<h3 class="page-subheading">
			<a class="collapsed" data-toggle="collapse" data-parent=".product-information" href="#product_accessories" aria-expanded="true" aria-controls="product_accessories">
			   {l s='Accessories'}
			</a>
		</h3>
		<div id="product_accessories" class="panel-collapse collapse">
			<div class="block products_block accessories-block clearfix">
				<div class="product_list grid row">
					{foreach from=$accessories item=accessory name=accessories_list}
						{if ($accessory.allow_oosp || $accessory.quantity_all_versions > 0 || $accessory.quantity > 0) && $accessory.available_for_order && !isset($restricted_country_mode)}
							{assign var='accessoryLink' value=$link->getProductLink($accessory.id_product, $accessory.link_rewrite, $accessory.category)}
							<div class="product-container product-block col-xs-12 col-sm-6 col-md-3 col-lg-3 text-center" itemscope itemtype="http://schema.org/Product">
								<div class="left-block">
									<div class="product-image-container image">
										<a class="product_img_link"	href="{$accessory.link|escape:'html':'UTF-8'}" title="{$accessory.name|escape:'html':'UTF-8'}" itemprop="url">
											<img class="replace-2x img-responsive" src="{$link->getImageLink($accessory.link_rewrite, $accessory.id_image, 'home_default')|escape:'html':'UTF-8'}" alt="{if !empty($accessory.legend)}{$accessory.legend|escape:'html':'UTF-8'}{else}{$accessory.name|escape:'html':'UTF-8'}{/if}" title="{if !empty($accessory.legend)}{$accessory.legend|escape:'html':'UTF-8'}{else}{$accessory.name|escape:'html':'UTF-8'}{/if}" itemprop="image" />
										</a>
										<div class="box-buttons">
											{if isset($quick_view) && $quick_view}
												<div class="quickview">
													<a class="quick-view btn-tooltip" href="{$accessory.link|escape:'html':'UTF-8'}" rel="{$accessory.link|escape:'html':'UTF-8'}" data-original-title="{l s='Quick view'}">
														<i class="fa fa-search-plus"></i> <span>{l s='Quick view'}</span>
													</a>
												</div>
											{/if}
										</div>
									</div>
									<div class="functional-buttons clearfix">
										<div class="cart">
											{if ($accessory.id_product_attribute == 0 || (isset($add_prod_display) && ($add_prod_display == 1))) && $accessory.available_for_order && !isset($restricted_country_mode) && $accessory.customizable != 2 && !$PS_CATALOG_MODE}
												{if (!isset($accessory.customization_required) || !$accessory.customization_required) && ($accessory.allow_oosp || $accessory.quantity > 0)}
													{capture}add=1&amp;id_product={$accessory.id_product|intval}{if isset($accessory.id_product_attribute) && $accessory.id_product_attribute}&amp;ipa={$accessory.id_product_attribute|intval}{/if}{if isset($static_token)}&amp;token={$static_token}{/if}{/capture}
													<a class="button ajax_add_to_cart_button" href="{$link->getPageLink('cart', true, NULL, $smarty.capture.default, false)|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Add to cart'}" data-id-product-attribute="{$accessory.id_product_attribute|intval}" data-id-product="{$accessory.id_product|intval}" data-minimal_quantity="{if isset($accessory.product_attribute_minimal_quantity) && $accessory.product_attribute_minimal_quantity >= 1}{$accessory.product_attribute_minimal_quantity|intval}{else}{$accessory.minimal_quantity|intval}{/if}">
														<i class="fa fa-shopping-cart"></i> <span>{l s='Add to cart'}</span>
													</a>
												{else}
													<span class="button ajax_add_to_cart_button disabled" title="{l s='Out of stock'}">
														<i class="fa fa-shopping-cart"></i> <span>{l s='Out of stock'}</span>
													</span>
												{/if}
											{/if}
										</div>
										
										{hook h='displayProductListFunctionalButtons' product=$accessory}
										
										<div class="view">
											<a class="button lnk_view" href="{$accessory.link|escape:'html':'UTF-8'}" title="{l s='View'}">
												<i class="fa fa-info"></i>
												<span>{if (isset($accessory.customization_required) && $accessory.customization_required)}{l s='Customize'}{else}{l s='More'}{/if}</span>
											</a>
										</div>
									</div>
								</div>
								<div class="right-block">
									<div class="product-meta">
										
										<h5 itemprop="name" class="name">
											{if isset($accessory.pack_quantity) && $accessory.pack_quantity}{$accessory.pack_quantity|intval|cat:' x '}{/if}
											<a class="product-name" href="{$accessory.link|escape:'html':'UTF-8'}" title="{$accessory.name|escape:'html':'UTF-8'}" itemprop="url" >
												{$accessory.name|truncate:45:'...'|escape:'html':'UTF-8'}
											</a>
										</h5>
										<p class="product-desc" itemprop="description">
											{$accessory.description_short|strip_tags:'UTF-8'|truncate:360:'...'}
										</p>
										{if (!$PS_CATALOG_MODE AND ((isset($accessory.show_price) && $accessory.show_price) || (isset($accessory.available_for_order) && $accessory.available_for_order)))}
											<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="content_price">
												{if isset($accessory.show_price) && $accessory.show_price && !isset($restricted_country_mode)}
													<span itemprop="price" class="price product-price">
														{if !$priceDisplay}{convertPrice price=$accessory.price}{else}{convertPrice price=$accessory.price_tax_exc}{/if}
													</span>
													<meta itemprop="priceCurrency" content="{$priceDisplay}" />
													{if isset($accessory.specific_prices) && $accessory.specific_prices && isset($accessory.specific_prices.reduction) && $accessory.specific_prices.reduction > 0}
														<span class="old-price product-price">
															{displayWtPrice p=$accessory.price_without_reduction}
														</span>
														{if $accessory.specific_prices.reduction_type == 'percentage'}
															<span class="price-percent-reduction">-{$accessory.specific_prices.reduction * 100}%</span>
														{/if}
													{/if}
												{/if}
											</div>
										{/if}
									</div>
								</div>
							</div>
						{/if}
					{/foreach}
				</div>
			</div>
		</div>	
	</section>
	<!--end Accessories -->
{/if}
		<!-- description & features -->
		{if (isset($product) && $product->description) || (isset($features) && $features) || (isset($accessories) && $accessories) || (isset($HOOK_PRODUCT_TAB) && $HOOK_PRODUCT_TAB) || (isset($attachments) && $attachments) || isset($product) && $product->customizable}
			{if isset($attachments) && $attachments}
			<!--Download -->
			<section class="page-product-box panel panel-default">
				<h3 class="page-subheading">
	                <a class="collapsed" data-toggle="collapse" data-parent=".product-information" href="#product_attachment" aria-expanded="true" aria-controls="product_attachment">
	                   {l s='Download'}
	                </a>
	            </h3>
				<div id="product_attachment" class="panel-collapse collapse">
					{foreach from=$attachments item=attachment name=attachements}
						{if $smarty.foreach.attachements.iteration %3 == 1}<div class="row">{/if}
							<div class="col-lg-4">
								<h4><a href="{$link->getPageLink('attachment', true, NULL, "id_attachment={$attachment.id_attachment}")|escape:'html':'UTF-8'}">{$attachment.name|escape:'html':'UTF-8'}</a></h4>
								<p class="text-muted">{$attachment.description|escape:'html':'UTF-8'}</p>
								<a class="btn btn-outline btn-block" href="{$link->getPageLink('attachment', true, NULL, "id_attachment={$attachment.id_attachment}")|escape:'html':'UTF-8'}">
									<i class="fa fa-download"></i>
									{l s="Download"} ({Tools::formatBytes($attachment.file_size, 2)})
								</a>
								<hr>
							</div>
						{if $smarty.foreach.attachements.iteration %3 == 0 || $smarty.foreach.attachements.last}</div>{/if}
					{/foreach}
				</div>
			</section>
			<!--end Download -->
			{/if}
			{if isset($product) && $product->customizable}
			<!--Customization -->
			<section class="page-product-box panel panel-default">
				<h3 class="page-subheading">
	                <a class="collapsed" data-toggle="collapse" data-parent=".product-information" href="#product_customization" aria-expanded="true" aria-controls="product_customization">
	                   {l s='Product customization'}
	                </a>
	            </h3>
				<div id="product_customization" class="panel-collapse collapse">
					<!-- Customizable products -->
					<form method="post" action="{$customizationFormTarget}" enctype="multipart/form-data" id="customizationForm" class="clearfix">
						<p class="infoCustomizable">
							{l s='After saving your customized product, remember to add it to your cart.'}
							{if $product->uploadable_files}
							<br />
							{l s='Allowed file formats are: GIF, JPG, PNG'}{/if}
						</p>
						{if $product->uploadable_files|intval}
							<div class="customizableProductsFile">
								<h5 class="product-heading-h5">{l s='Pictures'}</h5>
								<ul id="uploadable_files" class="clearfix">
									{counter start=0 assign='customizationField'}
									{foreach from=$customizationFields item='field' name='customizationFields'}
										{if $field.type == 0}
											<li class="customizationUploadLine{if $field.required} required{/if}">{assign var='key' value='pictures_'|cat:$product->id|cat:'_'|cat:$field.id_customization_field}
												{if isset($pictures.$key)}
													<div class="customizationUploadBrowse">
														<img src="{$pic_dir}{$pictures.$key}_small" alt="" />
															<a href="{$link->getProductDeletePictureLink($product, $field.id_customization_field)|escape:'html':'UTF-8'}" title="{l s='Delete'}" >
																<img src="{$img_dir}icon/delete.gif" alt="{l s='Delete'}" class="customization_delete_icon" width="11" height="13" />
															</a>
													</div>
												{/if}
												<div class="customizationUploadBrowse form-group">
													<label class="customizationUploadBrowseDescription">
														{if !empty($field.name)}
															{$field.name}
														{else}
															{l s='Please select an image file from your computer'}
														{/if}
														{if $field.required}<sup>*</sup>{/if}
													</label>
													<input type="file" name="file{$field.id_customization_field}" id="img{$customizationField}" class="form-control customization_block_input {if isset($pictures.$key)}filled{/if}" />
												</div>
											</li>
											{counter}
										{/if}
									{/foreach}
								</ul>
							</div>
						{/if}
						{if $product->text_fields|intval}
							<div class="customizableProductsText">
								<h5 class="product-heading-h5">{l s='Text'}</h5>
								<ul id="text_fields">
								{counter start=0 assign='customizationField'}
								{foreach from=$customizationFields item='field' name='customizationFields'}
									{if $field.type == 1}
										<li class="customizationUploadLine{if $field.required} required{/if}">
											<label for ="textField{$customizationField}">
												{assign var='key' value='textFields_'|cat:$product->id|cat:'_'|cat:$field.id_customization_field}
												{if !empty($field.name)}
													{$field.name}
												{/if}
												{if $field.required}<sup>*</sup>{/if}
											</label>
											<textarea name="textField{$field.id_customization_field}" class="form-control customization_block_input" id="textField{$customizationField}" rows="3" cols="20">{strip}
												{if isset($textFields.$key)}
													{$textFields.$key|stripslashes}
												{/if}
											{/strip}</textarea>
										</li>
										{counter}
									{/if}
								{/foreach}
								</ul>
							</div>
						{/if}
						<p id="customizedDatas">
							<input type="hidden" name="quantityBackup" id="quantityBackup" value="" />
							<input type="hidden" name="submitCustomizedDatas" value="1" />
							<button class="button btn btn-outline button button-small btn-sm" name="saveCustomization">
								<span>{l s='Save'}</span>
							</button>
							<span id="ajax-loader" class="unvisible">
								<img src="{$img_ps_dir}loader.gif" alt="loader" />
							</span>
						</p>
					</form>
					<p class="clear required"><sup>*</sup> {l s='required fields'}</p>	
				</div>
			</section>
			<!--end Customization -->
			{/if}
		{/if}
		{if isset($packItems) && $packItems|@count > 0}
			<section id="blockpack" class="page-product-box panel panel-default">
				<h3 class="page-subheading">
	                <a class="collapsed" data-toggle="collapse" data-parent=".product-information" href="#product_pack" aria-expanded="true" aria-controls="product_pack">
	                   {l s='Pack content'}
	                </a>
	            </h3>
	            <div id="product_pack" class="panel-collapse collapse">
					{include file="$tpl_dir./product-list.tpl" products=$packItems}
				</div>
			</section>
		{/if}