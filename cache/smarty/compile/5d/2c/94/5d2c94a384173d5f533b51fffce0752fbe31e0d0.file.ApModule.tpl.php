<?php /* Smarty version Smarty-3.1.19, created on 2016-09-24 10:17:41
         compiled from "C:\xampp\htdocs\parissara_com\modules\appagebuilder\views\templates\admin\ap_page_builder_shortcodes\ApModule.tpl" */ ?>
<?php /*%%SmartyHeaderCode:802457e68b056c3337-34859755%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d2c94a384173d5f533b51fffce0752fbe31e0d0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\parissara_com\\modules\\appagebuilder\\views\\templates\\admin\\ap_page_builder_shortcodes\\ApModule.tpl',
      1 => 1474290869,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '802457e68b056c3337-34859755',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'apInfo' => 0,
    'formAtts' => 0,
    'moduleDir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57e68b058ecc43_75740179',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e68b058ecc43_75740179')) {function content_57e68b058ecc43_75740179($_smarty_tpl) {?>
<!-- @file modules\appagebuilder\views\templates\admin\ap_page_builder_shortcodes\ApModule -->
<div <?php if (!isset($_smarty_tpl->tpl_vars['apInfo']->value)) {?>id="default_widget"<?php }?> class="widget-row clearfix<?php if (isset($_smarty_tpl->tpl_vars['apInfo']->value)) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['apInfo']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php if (isset($_smarty_tpl->tpl_vars['apInfo']->value['icon_class'])) {?> widget-icon<?php }?><?php }?><?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value)) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['form_id'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" <?php if (isset($_smarty_tpl->tpl_vars['apInfo']->value)) {?>data-type="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['apInfo']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>>
    <div class="widget-controll-top pull-right">
        <a href="javascript:void(0)" title="<?php echo smartyTranslate(array('s'=>'Drag to sort Widget','mod'=>'appagebuilder'),$_smarty_tpl);?>
" class="widget-action waction-drag label-tooltip"><i class="icon-move"></i> </a>
        <a href="javascript:void(0)" title="<?php echo smartyTranslate(array('s'=>'Disable or Enable Column','mod'=>'appagebuilder'),$_smarty_tpl);?>
" class="widget-action btn-status  <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['active'])&&!$_smarty_tpl->tpl_vars['formAtts']->value['active']) {?> deactive<?php } else { ?> active<?php }?> label-tooltip">
            <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['active'])&&!$_smarty_tpl->tpl_vars['formAtts']->value['active']) {?>
                <i class="icon-remove"></i>
            <?php } else { ?>
                <i class="icon-ok"></i>
            <?php }?>
        </a>
        <a href="javascript:void(0)" title="<?php echo smartyTranslate(array('s'=>'Edit Widget','mod'=>'appagebuilder'),$_smarty_tpl);?>
" class="widget-action btn-edit label-tooltip" <?php if (isset($_smarty_tpl->tpl_vars['apInfo']->value)) {?>data-type="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['apInfo']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>><i class="icon-pencil"></i></a>
        <a href="javascript:void(0)" title="<?php echo smartyTranslate(array('s'=>'Duplicate Widget','mod'=>'appagebuilder'),$_smarty_tpl);?>
" class="widget-action btn-duplicate label-tooltip"><i class="icon-paste"></i></a>
        <a href="javascript:void(0)" title="<?php echo smartyTranslate(array('s'=>'Delete Column','mod'=>'appagebuilder'),$_smarty_tpl);?>
" class="widget-action btn-delete label-tooltip"><i class="icon-trash"></i></a>
    </div>
    <div class="widget-content">
        <img class="w-img" width="16" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['moduleDir']->value, ENT_QUOTES, 'UTF-8', true);?>
appagebuilder/logo.gif" title="<?php echo smartyTranslate(array('s'=>'Appolo Widget','mod'=>'appagebuilder'),$_smarty_tpl);?>
" alt="<?php echo smartyTranslate(array('s'=>'Appolo Widget','mod'=>'appagebuilder'),$_smarty_tpl);?>
"/>
        <i class="icon w-icon<?php if (isset($_smarty_tpl->tpl_vars['apInfo']->value)&&isset($_smarty_tpl->tpl_vars['apInfo']->value['icon_class'])) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['apInfo']->value['icon_class'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>"></i>
        <a href="javascript:void(0);" title="" class="widget-title">
			<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['title'])&&$_smarty_tpl->tpl_vars['formAtts']->value['title']) {?><?php echo htmlspecialchars(rtrim($_smarty_tpl->tpl_vars['formAtts']->value['title']), ENT_QUOTES, 'UTF-8', true);?>
 - 
			<?php } elseif (isset($_smarty_tpl->tpl_vars['formAtts']->value['name_module'])&&$_smarty_tpl->tpl_vars['formAtts']->value['name_module']) {?><?php echo htmlspecialchars(htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['name_module'], ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8', true);?>
 - 
			<?php }?>
		
			<?php if (isset($_smarty_tpl->tpl_vars['apInfo']->value)) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['apInfo']->value['label'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?></a>
    </div>
</div><?php }} ?>
