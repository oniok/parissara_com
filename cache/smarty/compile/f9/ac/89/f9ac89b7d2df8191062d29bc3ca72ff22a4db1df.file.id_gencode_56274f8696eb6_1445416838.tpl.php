<?php /* Smarty version Smarty-3.1.19, created on 2016-09-19 08:04:26
         compiled from "/home/paris/public_html/parissara_com/themes/leo_mode/profiles/profile1445014794/id_gencode_56274f8696eb6_1445416838.tpl" */ ?>
<?php /*%%SmartyHeaderCode:206791571857dfd44a4b9c64-18837024%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9ac89b7d2df8191062d29bc3ca72ff22a4db1df' => 
    array (
      0 => '/home/paris/public_html/parissara_com/themes/leo_mode/profiles/profile1445014794/id_gencode_56274f8696eb6_1445416838.tpl',
      1 => 1474286666,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '206791571857dfd44a4b9c64-18837024',
  'function' => 
  array (
  ),
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
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57dfd44a4de1c2_06231580',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57dfd44a4de1c2_06231580')) {function content_57dfd44a4de1c2_06231580($_smarty_tpl) {?><div id="header_logo">                                    <a href="<?php if (isset($_smarty_tpl->tpl_vars['force_ssl']->value)&&$_smarty_tpl->tpl_vars['force_ssl']->value) {?><?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
<?php }?>" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop_name']->value, ENT_QUOTES, 'UTF-8', true);?>
">                                        <img class="logo img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['logo_url']->value;?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop_name']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if (isset($_smarty_tpl->tpl_vars['logo_image_width']->value)&&$_smarty_tpl->tpl_vars['logo_image_width']->value) {?> width="<?php echo $_smarty_tpl->tpl_vars['logo_image_width']->value;?>
"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['logo_image_height']->value)&&$_smarty_tpl->tpl_vars['logo_image_height']->value) {?> height="<?php echo $_smarty_tpl->tpl_vars['logo_image_height']->value;?>
"<?php }?>/>                                    </a>                                </div><?php }} ?>