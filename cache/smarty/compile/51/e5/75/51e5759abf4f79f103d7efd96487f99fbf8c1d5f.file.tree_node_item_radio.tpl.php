<?php /* Smarty version Smarty-3.1.19, created on 2016-09-11 00:51:27
         compiled from "/home/paris/public_html/parissara_com/iadmin/themes/default/template/helpers/tree/tree_node_item_radio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:99936568257d4e2cfac0c82-28379918%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51e5759abf4f79f103d7efd96487f99fbf8c1d5f' => 
    array (
      0 => '/home/paris/public_html/parissara_com/iadmin/themes/default/template/helpers/tree/tree_node_item_radio.tpl',
      1 => 1470921299,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '99936568257d4e2cfac0c82-28379918',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'input_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57d4e2cfaf68a9_03467030',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57d4e2cfaf68a9_03467030')) {function content_57d4e2cfaf68a9_03467030($_smarty_tpl) {?>
<li class="tree-item<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> tree-item-disable<?php }?>">
	<span class="tree-item-name">
		<input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id_category'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> disabled="disabled"<?php }?> />
		<i class="tree-dot"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
</li><?php }} ?>
