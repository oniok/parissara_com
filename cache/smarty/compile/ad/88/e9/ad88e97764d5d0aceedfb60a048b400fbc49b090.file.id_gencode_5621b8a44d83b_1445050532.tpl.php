<?php /* Smarty version Smarty-3.1.19, created on 2016-09-13 15:18:02
         compiled from "/home/paris/public_html/parissara_com/themes/leo_mode/profiles/profile1445936262/id_gencode_5621b8a44d83b_1445050532.tpl" */ ?>
<?php /*%%SmartyHeaderCode:72150803157d850ea18fd93-09149359%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad88e97764d5d0aceedfb60a048b400fbc49b090' => 
    array (
      0 => '/home/paris/public_html/parissara_com/themes/leo_mode/profiles/profile1445936262/id_gencode_5621b8a44d83b_1445050532.tpl',
      1 => 1473794282,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '72150803157d850ea18fd93-09149359',
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
  'unifunc' => 'content_57d850ea1b5935_86932619',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57d850ea1b5935_86932619')) {function content_57d850ea1b5935_86932619($_smarty_tpl) {?><div id="footer-logo">                                    <a href="<?php if (isset($_smarty_tpl->tpl_vars['force_ssl']->value)&&$_smarty_tpl->tpl_vars['force_ssl']->value) {?><?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
<?php }?>" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop_name']->value, ENT_QUOTES, 'UTF-8', true);?>
">                                        <img class="logo img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['logo_url']->value;?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop_name']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if (isset($_smarty_tpl->tpl_vars['logo_image_width']->value)&&$_smarty_tpl->tpl_vars['logo_image_width']->value) {?> width="<?php echo $_smarty_tpl->tpl_vars['logo_image_width']->value;?>
"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['logo_image_height']->value)&&$_smarty_tpl->tpl_vars['logo_image_height']->value) {?> height="<?php echo $_smarty_tpl->tpl_vars['logo_image_height']->value;?>
"<?php }?>/>                                    </a>                                </div><?php }} ?>