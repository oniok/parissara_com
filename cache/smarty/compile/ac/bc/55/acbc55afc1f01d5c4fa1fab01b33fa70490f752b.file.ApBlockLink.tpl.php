<?php /* Smarty version Smarty-3.1.19, created on 2016-09-26 15:33:05
         compiled from "C:\xampp\htdocs\parissara_com\themes\leo_mode\modules\appagebuilder\views\templates\hook\sidebar-fix\ApBlockLink.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2719157e8dd412c0652-23369939%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'acbc55afc1f01d5c4fa1fab01b33fa70490f752b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\parissara_com\\themes\\leo_mode\\modules\\appagebuilder\\views\\templates\\hook\\sidebar-fix\\ApBlockLink.tpl',
      1 => 1474858334,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2719157e8dd412c0652-23369939',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'apLiveEdit' => 0,
    'formAtts' => 0,
    'item' => 0,
    'apLiveEditEnd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57e8dd41413b84_28240130',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e8dd41413b84_28240130')) {function content_57e8dd41413b84_28240130($_smarty_tpl) {?>
<!-- @file modules\appagebuilder\views\templates\hook\ApBlockLink -->
<?php echo $_smarty_tpl->tpl_vars['apLiveEdit']->value ? $_smarty_tpl->tpl_vars['apLiveEdit']->value : '';?>



<div id="blockLink-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['form_id'], ENT_QUOTES, 'UTF-8', true);?>
" class="ApBlockLink">
    <div class="block">
        <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['name'])&&!empty($_smarty_tpl->tpl_vars['formAtts']->value['name'])) {?>
				<h4 class="title_block">
					<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

				</h4>
				<?php }?>
        <ul class="list-group">
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['formAtts']->value['links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['item']->value['title']&&$_smarty_tpl->tpl_vars['item']->value['link']) {?>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</a></li>
            <?php }?>
        <?php } ?>
        </ul>
    </div>
</div>

<?php echo $_smarty_tpl->tpl_vars['apLiveEditEnd']->value ? $_smarty_tpl->tpl_vars['apLiveEditEnd']->value : '';?>
<?php }} ?>
