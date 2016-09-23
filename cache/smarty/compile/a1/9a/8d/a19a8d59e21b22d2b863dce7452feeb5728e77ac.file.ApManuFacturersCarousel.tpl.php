<?php /* Smarty version Smarty-3.1.19, created on 2016-09-13 20:42:59
         compiled from "/home/paris/public_html/parissara_com/themes/leo_mode/modules/appagebuilder/views/templates/hook/ApManuFacturersCarousel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:61780147057d89d13839e37-63977092%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a19a8d59e21b22d2b863dce7452feeb5728e77ac' => 
    array (
      0 => '/home/paris/public_html/parissara_com/themes/leo_mode/modules/appagebuilder/views/templates/hook/ApManuFacturersCarousel.tpl',
      1 => 1470921316,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '61780147057d89d13839e37-63977092',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'apLiveEdit' => 0,
    'formAtts' => 0,
    'manufacturers' => 0,
    'apLiveEditEnd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57d89d13881982_01884499',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57d89d13881982_01884499')) {function content_57d89d13881982_01884499($_smarty_tpl) {?>
<!-- @file modules\appagebuilder\views\templates\hook\ApManuFacturersCarousel -->
<div class="block manufacturers_block exclusive appagebuilder">
	<?php echo $_smarty_tpl->tpl_vars['apLiveEdit']->value ? $_smarty_tpl->tpl_vars['apLiveEdit']->value : '';?>

	<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['title'])&&!empty($_smarty_tpl->tpl_vars['formAtts']->value['title'])) {?>
	<h4 class="title_block">
		<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['title'], ENT_QUOTES, 'UTF-8', true);?>

	</h4>
	<?php }?>
	<div class="block_content">
		<?php if (!empty($_smarty_tpl->tpl_vars['manufacturers']->value)) {?>
			<?php if ($_smarty_tpl->tpl_vars['formAtts']->value['carousel_type']=="boostrap") {?>
				<?php echo $_smarty_tpl->getSubTemplate ('./manufacturers_carousel.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<?php } else { ?>
				<?php echo $_smarty_tpl->getSubTemplate ('./manufacturers_owl_carousel.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<?php }?>
		<?php } else { ?>
			<p class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No manufacturer at this time.','mod'=>'appagebuilder'),$_smarty_tpl);?>
</p>
		<?php }?>
	</div>
	<?php echo $_smarty_tpl->tpl_vars['apLiveEditEnd']->value ? $_smarty_tpl->tpl_vars['apLiveEditEnd']->value : '';?>

</div><?php }} ?>
