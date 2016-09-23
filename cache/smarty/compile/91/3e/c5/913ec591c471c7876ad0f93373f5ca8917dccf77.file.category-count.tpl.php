<?php /* Smarty version Smarty-3.1.19, created on 2016-09-14 08:37:28
         compiled from "/home/paris/public_html/parissara_com/themes/leo_mode/category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:188839218157d944880d1890-51436462%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '913ec591c471c7876ad0f93373f5ca8917dccf77' => 
    array (
      0 => '/home/paris/public_html/parissara_com/themes/leo_mode/category-count.tpl',
      1 => 1470919430,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '188839218157d944880d1890-51436462',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'nb_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57d9448812f342_39466228',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57d9448812f342_39466228')) {function content_57d9448812f342_39466228($_smarty_tpl) {?>
<small class="heading-counter"><?php if ((isset($_smarty_tpl->tpl_vars['category']->value)&&$_smarty_tpl->tpl_vars['category']->value->id==1)||(isset($_smarty_tpl->tpl_vars['nb_products']->value)&&$_smarty_tpl->tpl_vars['nb_products']->value==0)) {?><?php echo smartyTranslate(array('s'=>'There are no products in this category.'),$_smarty_tpl);?>
<?php } else { ?><?php if (isset($_smarty_tpl->tpl_vars['nb_products']->value)&&$_smarty_tpl->tpl_vars['nb_products']->value==1) {?><?php echo smartyTranslate(array('s'=>'There is 1 product.'),$_smarty_tpl);?>
<?php } elseif (isset($_smarty_tpl->tpl_vars['nb_products']->value)) {?><?php echo smartyTranslate(array('s'=>'There are %d products.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>
<?php }?><?php }?></small>
<?php }} ?>
