<?php /* Smarty version Smarty-3.1.19, created on 2016-09-23 10:29:05
         compiled from "C:\xampp\htdocs\parissara_com\modules\appagebuilder\views\templates\hook\ApGeneral.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1743357e53c311bebe7-74772000%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a5df3676b2cd7acf08cde008dd7282cf6d16688' => 
    array (
      0 => 'C:\\xampp\\htdocs\\parissara_com\\modules\\appagebuilder\\views\\templates\\hook\\ApGeneral.tpl',
      1 => 1474290876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1743357e53c311bebe7-74772000',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'formAtts' => 0,
    'apLiveEdit' => 0,
    'apContent' => 0,
    'apLiveEditEnd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57e53c31286d82_52514745',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e53c31286d82_52514745')) {function content_57e53c31286d82_52514745($_smarty_tpl) {?>
<!-- @file modules\appagebuilder\views\templates\hook\ApGeneral -->
<div<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['id'])&&$_smarty_tpl->tpl_vars['formAtts']->value['id']) {?> id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['class'])) {?> 
    class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['class'], ENT_QUOTES, 'UTF-8', true);?>
 block"<?php }?>>
	<?php echo $_smarty_tpl->tpl_vars['apLiveEdit']->value ? $_smarty_tpl->tpl_vars['apLiveEdit']->value : '';?>

    <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['title'])&&$_smarty_tpl->tpl_vars['formAtts']->value['title']) {?>
    <h4 class="title_block"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</h4>
    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['content_html'])) {?>
        <?php echo $_smarty_tpl->tpl_vars['formAtts']->value['content_html'];?>

    <?php } else { ?>
        <?php echo $_smarty_tpl->tpl_vars['apContent']->value;?>

    <?php }?>
	<?php echo $_smarty_tpl->tpl_vars['apLiveEditEnd']->value ? $_smarty_tpl->tpl_vars['apLiveEditEnd']->value : '';?>

</div><?php }} ?>
