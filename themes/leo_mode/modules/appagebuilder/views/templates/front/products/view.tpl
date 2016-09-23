{* 
* @Module Name: AP Page Builder
* @Website: apollotheme.com - prestashop template provider
* @author Apollotheme <apollotheme@gmail.com>
* @copyright  2007-2015 Apollotheme
* @description: ApPageBuilder is module help you can build content for your shop
*}
<!-- @file modules\appagebuilder\views\templates\front\products\view -->
<div class="view">
	<a class="button lnk_view" href="{$product.link|escape:'html':'UTF-8'}" title="{l s='View' mod='appagebuilder'}">
		<i class="fa fa-info"></i>
		<span>{if (isset($product.customization_required) && $product.customization_required)}{l s='Customize' mod='appagebuilder'}{else}{l s='More' mod='appagebuilder'}{/if}</span>
	</a>
</div>

