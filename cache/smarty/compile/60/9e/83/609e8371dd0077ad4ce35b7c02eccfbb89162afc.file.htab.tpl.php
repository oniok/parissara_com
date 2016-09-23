<?php /* Smarty version Smarty-3.1.19, created on 2016-09-19 08:04:25
         compiled from "/home/paris/public_html/parissara_com/modules/appagebuilder/views/templates/hook/htab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:54538798357dfd4499dd134-40187279%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '609e8371dd0077ad4ce35b7c02eccfbb89162afc' => 
    array (
      0 => '/home/paris/public_html/parissara_com/modules/appagebuilder/views/templates/hook/htab.tpl',
      1 => 1470920794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '54538798357dfd4499dd134-40187279',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ap_header_config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57dfd4499e69b8_08629617',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57dfd4499e69b8_08629617')) {function content_57dfd4499e69b8_08629617($_smarty_tpl) {?>
<!-- @file modules\appagebuilder\views\templates\hook\htab -->
<?php if (isset($_smarty_tpl->tpl_vars['ap_header_config']->value)) {?>
<script type='text/javascript'>
	<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ap_header_config']->value, ENT_QUOTES, 'UTF-8', true);?>

</script>
<?php }?><?php }} ?>
