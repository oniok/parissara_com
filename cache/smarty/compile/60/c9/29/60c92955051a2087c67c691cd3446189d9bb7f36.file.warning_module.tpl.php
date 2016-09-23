<?php /* Smarty version Smarty-3.1.19, created on 2016-09-10 12:22:33
         compiled from "/home/paris/public_html/parissara_com/iadmin/themes/default/template/controllers/modules/warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:42515467957d43349965da7-05112299%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60c92955051a2087c67c691cd3446189d9bb7f36' => 
    array (
      0 => '/home/paris/public_html/parissara_com/iadmin/themes/default/template/controllers/modules/warning_module.tpl',
      1 => 1470921274,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '42515467957d43349965da7-05112299',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_link' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57d4334996d022_12157488',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57d4334996d022_12157488')) {function content_57d4334996d022_12157488($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a><?php }} ?>
