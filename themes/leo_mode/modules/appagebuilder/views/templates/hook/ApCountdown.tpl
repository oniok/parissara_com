{* 
* @Module Name: AP Page Builder
* @Website: apollotheme.com - prestashop template provider
* @author Apollotheme <apollotheme@gmail.com>
* @copyright  2007-2015 Apollotheme
* @description: ApPageBuilder is module help you can build content for your shop
*}
<!-- @file modules\appagebuilder\views\templates\hook\ApSlideShow -->
{if isset($formAtts.active) && $formAtts.active == 1}
	<div  id="countdown-{$formAtts.form_id|escape:'html':'UTF-8'}" class="block {(isset($formAtts.css_class) && $formAtts.css_class) ? $formAtts.css_class : ''|escape:'html':'UTF-8'} {(isset($formAtts.class) && $formAtts.class) ? $formAtts.class : ''|escape:'html':'UTF-8'}">
		
		{if isset($formAtts.title) && !empty($formAtts.title)}
			<h4 class="title_block">
				{$formAtts.title}{* HTML form , no escape necessary *}
			</h4>
		{/if}
		<div class="block_content">
			{if isset($formAtts.description) && !empty($formAtts.description)}
				<p>{$formAtts.description}{* HTML form , no escape necessary *}</p>
			{/if}
			<div class="ap-countdown-time">
				<ul class="deal-clock lof-clock-11-detail list-inline"></ul>
			</div>
			<div class="ap-countdown-link">
				{if isset($formAtts.link) && $formAtts.link}
					{if isset($formAtts.new_tab) && $formAtts.new_tab == 1}
						<a class="btn-link" href="{$formAtts.link|escape:'html':'UTF-8'}" target="_blank">{$formAtts.link_label|escape:'html':'UTF-8'}</a>
					{/if}	
					{if isset($formAtts.new_tab) && $formAtts.new_tab == 0}
						<a class="btn-link" href="{$formAtts.link|escape:'html':'UTF-8'}">{$formAtts.link_label|escape:'html':'UTF-8'}</a>
					{/if}			
				{/if}
			</div>
		</div>
	</div>

	{if isset($formAtts.addJS) && !empty($formAtts.addJS)}
		<script type="text/javascript" src="{$formAtts.countdown}"></script>
	{/if}
	<script type="text/javascript">
		{literal}
		jQuery(document).ready(function($){{/literal}
			var text_d = '{l s='days' mod='appagebuilder'}';
			var text_h = '{l s='hours' mod='appagebuilder'}';
			var text_m = '{l s='min' mod='appagebuilder'}';
			var text_s = '{l s='sec' mod='appagebuilder'}';
			$(".lof-clock-11-detail").lofCountDown({literal}{{/literal}
				TargetDate:"{$formAtts.time_to|escape:'html':'UTF-8'}",
				DisplayFormat:'<li class="countdown_num">%%D%%<span>'+text_d+'</span></li><li class="countdown_num">%%H%%<span>'+text_h+'</span></li><li class="countdown_num">%%M%%<span>'+text_m+'</span></li><li class="countdown_num">%%S%%<span>'+text_s+'</span></li>',
				//FinishMessage: "Expired"
			{literal}
			});
		});
		{/literal}
	</script>
{/if}