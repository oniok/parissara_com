<?php /* Smarty version Smarty-3.1.19, created on 2016-09-19 08:04:25
         compiled from "/home/paris/public_html/parissara_com/modules/appagebuilder/views/templates/hook/ApModule.tpl" */ ?>
<?php /*%%SmartyHeaderCode:72091726857dfd4498182f8-43280210%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c858a15117873a994a6d149db4e1acf8683b905' => 
    array (
      0 => '/home/paris/public_html/parissara_com/modules/appagebuilder/views/templates/hook/ApModule.tpl',
      1 => 1470920792,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '72091726857dfd4498182f8-43280210',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'apLiveEdit' => 0,
    'apContent' => 0,
    'apLiveEditEnd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57dfd4498250a4_40423536',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57dfd4498250a4_40423536')) {function content_57dfd4498250a4_40423536($_smarty_tpl) {?>
<!-- @file modules\appagebuilder\views\templates\hook\ApModule -->
<?php echo $_smarty_tpl->tpl_vars['apLiveEdit']->value ? $_smarty_tpl->tpl_vars['apLiveEdit']->value : '';?>

<?php echo $_smarty_tpl->tpl_vars['apContent']->value;?>

<?php echo $_smarty_tpl->tpl_vars['apLiveEditEnd']->value ? $_smarty_tpl->tpl_vars['apLiveEditEnd']->value : '';?>
<?php }} ?>
