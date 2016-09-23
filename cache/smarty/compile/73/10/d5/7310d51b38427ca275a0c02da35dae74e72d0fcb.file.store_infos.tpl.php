<?php /* Smarty version Smarty-3.1.19, created on 2016-09-03 05:04:18
         compiled from "/home/paris/public_html/parissara_com/themes/leo_mode/store_infos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26325440157ca92121f8b93-65983198%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7310d51b38427ca275a0c02da35dae74e72d0fcb' => 
    array (
      0 => '/home/paris/public_html/parissara_com/themes/leo_mode/store_infos.tpl',
      1 => 1470919439,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26325440157ca92121f8b93-65983198',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'days_datas' => 0,
    'one_day' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ca9212204b59_76336390',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ca9212204b59_76336390')) {function content_57ca9212204b59_76336390($_smarty_tpl) {?>


	<?php  $_smarty_tpl->tpl_vars['one_day'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one_day']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['days_datas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['one_day']->key => $_smarty_tpl->tpl_vars['one_day']->value) {
$_smarty_tpl->tpl_vars['one_day']->_loop = true;
?>
	<p>
		<strong class="dark"><?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['one_day']->value['day']),$_smarty_tpl);?>
: </strong> &nbsp;<span><?php echo $_smarty_tpl->tpl_vars['one_day']->value['hours'];?>
</span>
	</p>
	<?php } ?>

<?php }} ?>
