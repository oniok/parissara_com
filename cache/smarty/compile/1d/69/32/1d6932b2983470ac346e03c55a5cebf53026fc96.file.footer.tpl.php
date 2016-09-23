<?php /* Smarty version Smarty-3.1.19, created on 2016-09-19 08:04:26
         compiled from "/home/paris/public_html/parissara_com/themes/leo_mode/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:175732690957dfd44a75d3a5-81860951%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d6932b2983470ac346e03c55a5cebf53026fc96' => 
    array (
      0 => '/home/paris/public_html/parissara_com/themes/leo_mode/footer.tpl',
      1 => 1470919431,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '175732690957dfd44a75d3a5-81860951',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content_only' => 0,
    'right_column_size' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
    'fullwidth_hook' => 0,
    'HOOK_FOOTER' => 0,
    'LEO_PANELTOOL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57dfd44a7983f7_42844257',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57dfd44a7983f7_42844257')) {function content_57dfd44a7983f7_42844257($_smarty_tpl) {?>
<?php if (!isset($_smarty_tpl->tpl_vars['content_only']->value)||!$_smarty_tpl->tpl_vars['content_only']->value) {?>
								
						</section>
						<?php if (isset($_smarty_tpl->tpl_vars['right_column_size']->value)&&!empty($_smarty_tpl->tpl_vars['right_column_size']->value)) {?>
						<!-- Right -->
						<section id="right_column" class="column sidebar col-md-<?php echo intval($_smarty_tpl->tpl_vars['right_column_size']->value);?>
">
								<?php echo $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value;?>

						</section>
						<?php }?> 
				<?php if (isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayHome'])&&$_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayHome']==0) {?>
					</div>
					</div>
				<?php } else { ?>
					</div>
				<?php }?>
            </section>
			<!-- Footer -->
			<footer id="footer" class="footer-container">       
				<?php if (isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayFooter'])&&$_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayFooter']==0) {?>
				<div class="container">  	
				<?php }?>
						<?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER']->value;?>
							
				<?php if (isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayFooter'])&&$_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayFooter']==0) {?>
				 
				</div>
				<?php }?>
            </footer>
		</section><!-- #page -->
		<div id="back-top"><a href="#" class="fa fa-angle-up"></a></div>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./global.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php if (isset($_smarty_tpl->tpl_vars['LEO_PANELTOOL']->value)&&$_smarty_tpl->tpl_vars['LEO_PANELTOOL']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./info/paneltool.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>
	</body>
</html><?php }} ?>
