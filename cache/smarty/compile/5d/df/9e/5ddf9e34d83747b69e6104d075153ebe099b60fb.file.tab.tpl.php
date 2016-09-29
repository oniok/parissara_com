<?php /* Smarty version Smarty-3.1.19, created on 2016-09-29 22:54:23
         compiled from "C:\xampp\htdocs\parissara_com\themes\leo_mode\modules\productcomments\\tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3225057ed392fb5fc96-61755120%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ddf9e34d83747b69e6104d075153ebe099b60fb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\parissara_com\\themes\\leo_mode\\modules\\productcomments\\\\tab.tpl',
      1 => 1474879718,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3225057ed392fb5fc96-61755120',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'USE_PTABS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ed392fb9dce1_48134613',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ed392fb9dce1_48134613')) {function content_57ed392fb9dce1_48134613($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['USE_PTABS']->value)&&$_smarty_tpl->tpl_vars['USE_PTABS']->value) {?>
    <li><a id="link_idTab5" href="#idTab5" data-toggle="tab"><?php echo smartyTranslate(array('s'=>'Reviews','mod'=>'productcomments'),$_smarty_tpl);?>
</a></li>
<?php } else { ?>
   <?php echo smartyTranslate(array('s'=>'Reviews','mod'=>'productcomments'),$_smarty_tpl);?>

<?php }?><?php }} ?>
