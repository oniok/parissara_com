<?php /* Smarty version Smarty-3.1.19, created on 2016-09-23 10:29:09
         compiled from "C:\xampp\htdocs\parissara_com\modules\appagebuilder\views\templates\hook\ApSlideShow.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1063857e53c35779279-18879162%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cff8ef1b8b7f77b87ee0f444385c586e981c5494' => 
    array (
      0 => 'C:\\xampp\\htdocs\\parissara_com\\modules\\appagebuilder\\views\\templates\\hook\\ApSlideShow.tpl',
      1 => 1474290874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1063857e53c35779279-18879162',
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
  'unifunc' => 'content_57e53c357cab83_15418269',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e53c357cab83_15418269')) {function content_57e53c357cab83_15418269($_smarty_tpl) {?>
<!-- @file modules\appagebuilder\views\templates\hook\ApSlideShow -->
<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['isEnabled'])&&$_smarty_tpl->tpl_vars['formAtts']->value['isEnabled']==true) {?>
<div id="slideshow-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['form_id'], ENT_QUOTES, 'UTF-8', true);?>
" class="ApSlideShow">
	<?php if (isset($_smarty_tpl->tpl_vars['content_slider']->value)) {?>
		<?php echo $_smarty_tpl->tpl_vars['content_slider']->value;?>

	<?php }?>
</div>
<?php }?><?php }} ?>