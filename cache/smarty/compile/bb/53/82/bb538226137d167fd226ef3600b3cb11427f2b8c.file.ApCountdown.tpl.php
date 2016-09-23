<?php /* Smarty version Smarty-3.1.19, created on 2016-09-09 22:26:00
         compiled from "/home/paris/public_html/parissara_com/themes/leo_mode/modules/appagebuilder/views/templates/hook//ApCountdown.tpl" */ ?>
<?php /*%%SmartyHeaderCode:60423995257d36f383e6210-82368036%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb538226137d167fd226ef3600b3cb11427f2b8c' => 
    array (
      0 => '/home/paris/public_html/parissara_com/themes/leo_mode/modules/appagebuilder/views/templates/hook//ApCountdown.tpl',
      1 => 1470921315,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '60423995257d36f383e6210-82368036',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'formAtts' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57d36f384e20c6_74444381',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57d36f384e20c6_74444381')) {function content_57d36f384e20c6_74444381($_smarty_tpl) {?>
<!-- @file modules\appagebuilder\views\templates\hook\ApSlideShow -->
<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['active'])&&$_smarty_tpl->tpl_vars['formAtts']->value['active']==1) {?>
	<div  id="countdown-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['form_id'], ENT_QUOTES, 'UTF-8', true);?>
" class="block <?php echo isset($_smarty_tpl->tpl_vars['formAtts']->value['css_class'])&&$_smarty_tpl->tpl_vars['formAtts']->value['css_class'] ? $_smarty_tpl->tpl_vars['formAtts']->value['css_class'] : htmlspecialchars('', ENT_QUOTES, 'UTF-8', true);?>
 <?php echo isset($_smarty_tpl->tpl_vars['formAtts']->value['class'])&&$_smarty_tpl->tpl_vars['formAtts']->value['class'] ? $_smarty_tpl->tpl_vars['formAtts']->value['class'] : htmlspecialchars('', ENT_QUOTES, 'UTF-8', true);?>
">
		
		<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['title'])&&!empty($_smarty_tpl->tpl_vars['formAtts']->value['title'])) {?>
			<h4 class="title_block">
				<?php echo $_smarty_tpl->tpl_vars['formAtts']->value['title'];?>

			</h4>
		<?php }?>
		<div class="block_content">
			<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['description'])&&!empty($_smarty_tpl->tpl_vars['formAtts']->value['description'])) {?>
				<p><?php echo $_smarty_tpl->tpl_vars['formAtts']->value['description'];?>
</p>
			<?php }?>
			<div class="ap-countdown-time">
				<ul class="deal-clock lof-clock-11-detail list-inline"></ul>
			</div>
			<div class="ap-countdown-link">
				<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['link'])&&$_smarty_tpl->tpl_vars['formAtts']->value['link']) {?>
					<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['new_tab'])&&$_smarty_tpl->tpl_vars['formAtts']->value['new_tab']==1) {?>
						<a class="btn-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" target="_blank"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['link_label'], ENT_QUOTES, 'UTF-8', true);?>
</a>
					<?php }?>	
					<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['new_tab'])&&$_smarty_tpl->tpl_vars['formAtts']->value['new_tab']==0) {?>
						<a class="btn-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['link_label'], ENT_QUOTES, 'UTF-8', true);?>
</a>
					<?php }?>			
				<?php }?>
			</div>
		</div>
	</div>

	<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['addJS'])&&!empty($_smarty_tpl->tpl_vars['formAtts']->value['addJS'])) {?>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['formAtts']->value['countdown'];?>
"></script>
	<?php }?>
	<script type="text/javascript">
		
		jQuery(document).ready(function($){
			var text_d = '<?php echo smartyTranslate(array('s'=>'days','mod'=>'appagebuilder'),$_smarty_tpl);?>
';
			var text_h = '<?php echo smartyTranslate(array('s'=>'hours','mod'=>'appagebuilder'),$_smarty_tpl);?>
';
			var text_m = '<?php echo smartyTranslate(array('s'=>'min','mod'=>'appagebuilder'),$_smarty_tpl);?>
';
			var text_s = '<?php echo smartyTranslate(array('s'=>'sec','mod'=>'appagebuilder'),$_smarty_tpl);?>
';
			$(".lof-clock-11-detail").lofCountDown({
				TargetDate:"<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['time_to'], ENT_QUOTES, 'UTF-8', true);?>
",
				DisplayFormat:'<li class="countdown_num">%%D%%<span>'+text_d+'</span></li><li class="countdown_num">%%H%%<span>'+text_h+'</span></li><li class="countdown_num">%%M%%<span>'+text_m+'</span></li><li class="countdown_num">%%S%%<span>'+text_s+'</span></li>',
				//FinishMessage: "Expired"
			
			});
		});
		
	</script>
<?php }?><?php }} ?>
