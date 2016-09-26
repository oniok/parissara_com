<?php /* Smarty version Smarty-3.1.19, created on 2016-09-26 17:46:03
         compiled from "C:\xampp\htdocs\parissara_com\themes\leo_mode\profiles\profile1445014794\id_gencode_56274f8696eb6_1445416838.tpl" */ ?>
<?php /*%%SmartyHeaderCode:505457e8dd55ea3800-98705510%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d6ad7dea4bace48a4993d34f54e2551e4acaf57' => 
    array (
      0 => 'C:\\xampp\\htdocs\\parissara_com\\themes\\leo_mode\\profiles\\profile1445014794\\id_gencode_56274f8696eb6_1445416838.tpl',
      1 => 1474886763,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '505457e8dd55ea3800-98705510',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57e8dd55ed8ed2_95727893',
  'variables' => 
  array (
    'force_ssl' => 0,
    'base_dir_ssl' => 0,
    'base_dir' => 0,
    'shop_name' => 0,
    'logo_url' => 0,
    'logo_image_width' => 0,
    'logo_image_height' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e8dd55ed8ed2_95727893')) {function content_57e8dd55ed8ed2_95727893($_smarty_tpl) {?><div id="header_logo">                                    <a href="<?php if (isset($_smarty_tpl->tpl_vars['force_ssl']->value)&&$_smarty_tpl->tpl_vars['force_ssl']->value) {?><?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
<?php }?>" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop_name']->value, ENT_QUOTES, 'UTF-8', true);?>
">                                        <img class="logo img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['logo_url']->value;?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop_name']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if (isset($_smarty_tpl->tpl_vars['logo_image_width']->value)&&$_smarty_tpl->tpl_vars['logo_image_width']->value) {?> width="<?php echo $_smarty_tpl->tpl_vars['logo_image_width']->value;?>
"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['logo_image_height']->value)&&$_smarty_tpl->tpl_vars['logo_image_height']->value) {?> height="<?php echo $_smarty_tpl->tpl_vars['logo_image_height']->value;?>
"<?php }?>/>                                    </a>                                </div><?php }} ?>
