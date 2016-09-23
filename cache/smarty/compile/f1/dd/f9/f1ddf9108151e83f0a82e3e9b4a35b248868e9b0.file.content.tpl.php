<?php /* Smarty version Smarty-3.1.19, created on 2016-09-19 08:04:44
         compiled from "/home/paris/public_html/parissara_com/iadmin/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:73142224257dfd45cad6cd2-98768581%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1ddf9108151e83f0a82e3e9b4a35b248868e9b0' => 
    array (
      0 => '/home/paris/public_html/parissara_com/iadmin/themes/default/template/content.tpl',
      1 => 1470920564,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '73142224257dfd45cad6cd2-98768581',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57dfd45cadf807_53396521',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57dfd45cadf807_53396521')) {function content_57dfd45cadf807_53396521($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
