<?php /* Smarty version Smarty-3.1.19, created on 2016-09-29 22:50:44
         compiled from "C:\xampp\htdocs\parissara_com\modules\appagebuilder\views\templates\hook\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3049757ed38544bfa75-94426864%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '716d30e25346b916bd66e849d74ca9fb880526fb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\parissara_com\\modules\\appagebuilder\\views\\templates\\hook\\header.tpl',
      1 => 1474879701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3049757ed38544bfa75-94426864',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ap_header_config' => 0,
    'leo_customajax' => 0,
    'leo_customajax_pn' => 0,
    'leo_customajax_img' => 0,
    'leo_customajax_tran' => 0,
    'leo_customajax_count' => 0,
    'leo_customajax_acolor' => 0,
    'homeSize' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ed38546304d2_63981187',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ed38546304d2_63981187')) {function content_57ed38546304d2_63981187($_smarty_tpl) {?>
<!-- @file modules\appagebuilder\views\templates\hook\header -->
<?php if (isset($_smarty_tpl->tpl_vars['ap_header_config']->value)&&isset($_smarty_tpl->tpl_vars['leo_customajax']->value)) {?>
<script type='text/javascript'>
        var leoOption = {
		productNumber:<?php if ($_smarty_tpl->tpl_vars['leo_customajax_pn']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['leo_customajax_pn']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?>0<?php }?>,
		productInfo:<?php if ($_smarty_tpl->tpl_vars['leo_customajax_img']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['leo_customajax_img']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?>0<?php }?>,
		productTran:<?php if ($_smarty_tpl->tpl_vars['leo_customajax_tran']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['leo_customajax_tran']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?>0<?php }?>,
		productCdown: <?php if ($_smarty_tpl->tpl_vars['leo_customajax_count']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['leo_customajax_count']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?>0<?php }?>,
		productColor: <?php if ($_smarty_tpl->tpl_vars['leo_customajax_acolor']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['leo_customajax_acolor']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?>0<?php }?>,
		homeWidth: <?php if ($_smarty_tpl->tpl_vars['homeSize']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['homeSize']->value['width'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?>0<?php }?>,
		homeheight: <?php if ($_smarty_tpl->tpl_vars['homeSize']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['homeSize']->value['height'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?>0<?php }?>,
	}

        $(document).ready(function(){	
            var leoCustomAjax = new $.LeoCustomAjax();
            leoCustomAjax.processAjax();
        });
	<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ap_header_config']->value, ENT_QUOTES, 'UTF-8', true);?>

</script>
<?php }?><?php }} ?>
