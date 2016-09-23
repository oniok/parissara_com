<?php /* Smarty version Smarty-3.1.19, created on 2016-09-15 05:21:57
         compiled from "/home/paris/public_html/parissara_com/themes/leo_mode/profiles/profile1445940463/id_gencode_56274f8696eb6_1445416838.tpl" */ ?>
<?php /*%%SmartyHeaderCode:66910877657da6835390714-87523972%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2b65edad5deb2f5fe6110597921bea4c00d46dd' => 
    array (
      0 => '/home/paris/public_html/parissara_com/themes/leo_mode/profiles/profile1445940463/id_gencode_56274f8696eb6_1445416838.tpl',
      1 => 1473931317,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '66910877657da6835390714-87523972',
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
  'unifunc' => 'content_57da68353e1222_31852853',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57da68353e1222_31852853')) {function content_57da68353e1222_31852853($_smarty_tpl) {?><div id="header_logo">                                    <a href="<?php if (isset($_smarty_tpl->tpl_vars['force_ssl']->value)&&$_smarty_tpl->tpl_vars['force_ssl']->value) {?><?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
<?php }?>" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop_name']->value, ENT_QUOTES, 'UTF-8', true);?>
">                                        <img class="logo img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['logo_url']->value;?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop_name']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if (isset($_smarty_tpl->tpl_vars['logo_image_width']->value)&&$_smarty_tpl->tpl_vars['logo_image_width']->value) {?> width="<?php echo $_smarty_tpl->tpl_vars['logo_image_width']->value;?>
"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['logo_image_height']->value)&&$_smarty_tpl->tpl_vars['logo_image_height']->value) {?> height="<?php echo $_smarty_tpl->tpl_vars['logo_image_height']->value;?>
"<?php }?>/>                                    </a>                                </div><?php }} ?>
