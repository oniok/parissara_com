<?php /* Smarty version Smarty-3.1.19, created on 2016-09-18 17:29:52
         compiled from "/home/paris/public_html/parissara_com/themes/leo_mode/modules/productcomments//tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:182642415157df0750148036-49608130%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46aca60186804317733214d8a3cbfd7612e60c54' => 
    array (
      0 => '/home/paris/public_html/parissara_com/themes/leo_mode/modules/productcomments//tab.tpl',
      1 => 1470920069,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '182642415157df0750148036-49608130',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'USE_PTABS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57df07501553d3_43980566',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57df07501553d3_43980566')) {function content_57df07501553d3_43980566($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['USE_PTABS']->value)&&$_smarty_tpl->tpl_vars['USE_PTABS']->value) {?>
    <li><a id="link_idTab5" href="#idTab5" data-toggle="tab"><?php echo smartyTranslate(array('s'=>'Reviews','mod'=>'productcomments'),$_smarty_tpl);?>
</a></li>
<?php } else { ?>
   <?php echo smartyTranslate(array('s'=>'Reviews','mod'=>'productcomments'),$_smarty_tpl);?>

<?php }?><?php }} ?>
