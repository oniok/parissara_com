<?php /* Smarty version Smarty-3.1.19, created on 2016-09-29 22:50:54
         compiled from "C:\xampp\htdocs\parissara_com\modules\appagebuilder\views\templates\hook\ApSlideShow.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1806857ed385e8e6e01-22763051%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cff8ef1b8b7f77b87ee0f444385c586e981c5494' => 
    array (
      0 => 'C:\\xampp\\htdocs\\parissara_com\\modules\\appagebuilder\\views\\templates\\hook\\ApSlideShow.tpl',
      1 => 1474879701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1806857ed385e8e6e01-22763051',
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
  'unifunc' => 'content_57ed385e957593_06864664',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ed385e957593_06864664')) {function content_57ed385e957593_06864664($_smarty_tpl) {?>
<!-- @file modules\appagebuilder\views\templates\hook\ApSlideShow -->
<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['isEnabled'])&&$_smarty_tpl->tpl_vars['formAtts']->value['isEnabled']==true) {?>
<div id="slideshow-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['form_id'], ENT_QUOTES, 'UTF-8', true);?>
" class="ApSlideShow">
	<?php if (isset($_smarty_tpl->tpl_vars['content_slider']->value)) {?>
		<?php echo $_smarty_tpl->tpl_vars['content_slider']->value;?>

	<?php }?>
</div>
<?php }?><?php }} ?>
