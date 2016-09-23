<?php /* Smarty version Smarty-3.1.19, created on 2016-09-19 08:04:26
         compiled from "/home/paris/public_html/parissara_com/modules/appagebuilder/views/templates/hook/ApSlideShow.tpl" */ ?>
<?php /*%%SmartyHeaderCode:88001148957dfd44a73c186-74250710%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8f4f0a2463148eb8aae4b69023248c87ded5129' => 
    array (
      0 => '/home/paris/public_html/parissara_com/modules/appagebuilder/views/templates/hook/ApSlideShow.tpl',
      1 => 1470920793,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '88001148957dfd44a73c186-74250710',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'formAtts' => 0,
    'content_slider' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57dfd44a7522e7_03312899',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57dfd44a7522e7_03312899')) {function content_57dfd44a7522e7_03312899($_smarty_tpl) {?>
<!-- @file modules\appagebuilder\views\templates\hook\ApSlideShow -->
<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['isEnabled'])&&$_smarty_tpl->tpl_vars['formAtts']->value['isEnabled']==true) {?>
<div id="slideshow-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['form_id'], ENT_QUOTES, 'UTF-8', true);?>
" class="ApSlideShow">
	<?php if (isset($_smarty_tpl->tpl_vars['content_slider']->value)) {?>
		<?php echo $_smarty_tpl->tpl_vars['content_slider']->value;?>

	<?php }?>
</div>
<?php }?><?php }} ?>
