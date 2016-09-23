<?php /* Smarty version Smarty-3.1.19, created on 2016-09-19 08:04:44
         compiled from "/home/paris/public_html/parissara_com/iadmin/themes/default/template/helpers/modules_list/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:42607445057dfd45cc24171-81735025%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57a01e57c51271735da6fea4853f749e83c22966' => 
    array (
      0 => '/home/paris/public_html/parissara_com/iadmin/themes/default/template/helpers/modules_list/modal.tpl',
      1 => 1470921297,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '42607445057dfd45cc24171-81735025',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57dfd45cc27282_48576979',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57dfd45cc27282_48576979')) {function content_57dfd45cc27282_48576979($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
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
