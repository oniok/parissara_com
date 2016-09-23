<?php /* Smarty version Smarty-3.1.19, created on 2016-09-23 10:26:30
         compiled from "C:\xampp\htdocs\parissara_com\iadmin\themes\default\template\helpers\modules_list\modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:956157e53b961cd3d6-54422087%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bab4917970a407752bbb1cfcdf824621be013b23' => 
    array (
      0 => 'C:\\xampp\\htdocs\\parissara_com\\iadmin\\themes\\default\\template\\helpers\\modules_list\\modal.tpl',
      1 => 1474290588,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '956157e53b961cd3d6-54422087',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57e53b961d4377_78404807',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e53b961d4377_78404807')) {function content_57e53b961d4377_78404807($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
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
