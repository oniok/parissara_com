<?php /* Smarty version Smarty-3.1.19, created on 2016-09-25 01:40:19
         compiled from "C:\xampp\htdocs\parissara_com\iadmin\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:554957e76343248ab3-66412338%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97583e12c7e1584c9c845fb6ee91bb1452fcdb85' => 
    array (
      0 => 'C:\\xampp\\htdocs\\parissara_com\\iadmin\\themes\\default\\template\\content.tpl',
      1 => 1474290518,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '554957e76343248ab3-66412338',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57e763432712b1_43066231',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e763432712b1_43066231')) {function content_57e763432712b1_43066231($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
