<?php /* Smarty version Smarty-3.1.19, created on 2016-09-29 22:50:53
         compiled from "C:\xampp\htdocs\parissara_com\iadmin\themes\default\template\helpers\modules_list\modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1106957ed385d370326-07564152%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bab4917970a407752bbb1cfcdf824621be013b23' => 
    array (
      0 => 'C:\\xampp\\htdocs\\parissara_com\\iadmin\\themes\\default\\template\\helpers\\modules_list\\modal.tpl',
      1 => 1474879691,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1106957ed385d370326-07564152',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ed385d37ccc8_18826129',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ed385d37ccc8_18826129')) {function content_57ed385d37ccc8_18826129($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
