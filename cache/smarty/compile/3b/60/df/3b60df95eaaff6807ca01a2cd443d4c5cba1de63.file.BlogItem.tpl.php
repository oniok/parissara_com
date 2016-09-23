<?php /* Smarty version Smarty-3.1.19, created on 2016-09-09 22:26:01
         compiled from "/home/paris/public_html/parissara_com/themes/leo_mode/modules/appagebuilder/views/templates/hook/BlogItem.tpl" */ ?>
<?php /*%%SmartyHeaderCode:132355465657d36f392b8b33-68110818%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b60df95eaaff6807ca01a2cd443d4c5cba1de63' => 
    array (
      0 => '/home/paris/public_html/parissara_com/themes/leo_mode/modules/appagebuilder/views/templates/hook/BlogItem.tpl',
      1 => 1470921316,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '132355465657d36f392b8b33-68110818',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'blog' => 0,
    'formAtts' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57d36f39378098_34110686',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57d36f39378098_34110686')) {function content_57d36f39378098_34110686($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/paris/public_html/parissara_com/tools/smarty/plugins/modifier.date_format.php';
?>
<!-- @file modules\appagebuilder\views\templates\hook\BlogItem -->
<div class="blog-container media" itemscope itemtype="https://schema.org/Blog">
	<div class="media-body clearfix">
		<div class="blog-image-container">
			<a class="blog_img_link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" itemprop="url">
			<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_sima'])&&$_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_sima']) {?>
				<img class="replace-2x img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['blog']->value['preview_url'];?>
" 
					 alt="<?php if (!empty($_smarty_tpl->tpl_vars['blog']->value['legend'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" 
					 title="<?php if (!empty($_smarty_tpl->tpl_vars['blog']->value['legend'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" 
					 <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_width'])) {?>width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_width'], ENT_QUOTES, 'UTF-8', true);?>
" <?php }?>
					 <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_height'])) {?> height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_height'], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>
					 itemprop="image" />
			<?php }?>
			</a>
		</div>
		 <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['show_title'])&&$_smarty_tpl->tpl_vars['formAtts']->value['show_title']) {?>
			<h5 class="blog-title">
				<a href="<?php echo $_smarty_tpl->tpl_vars['blog']->value['link'];?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['blog']->value['title']),60,'...');?>
</a>
			</h5>
        <?php }?>
		<div class="blog-meta">
			<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_scre'])&&$_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_scre']) {?>
				<span class="blog-created">			
					<time class="date" datetime="<?php echo smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['blog']->value['date_add']),"%Y");?>
">
						<span><?php echo smartyTranslate(array('s'=>smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['blog']->value['date_add']),"%e"),'mod'=>'appagebuilder'),$_smarty_tpl);?>
</span> 	<!-- day of month -->
						<?php echo smartyTranslate(array('s'=>smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['blog']->value['date_add']),"%b"),'mod'=>'appagebuilder'),$_smarty_tpl);?>
		<!-- month-->
					</time>
				</span>
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_saut'])&&$_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_saut']) {?>
			<span class="author">
				<span class="icon-author"> <?php echo smartyTranslate(array('s'=>'by','mod'=>'appagebuilder'),$_smarty_tpl);?>
:</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['author'], ENT_QUOTES, 'UTF-8', true);?>

			</span>
			<?php }?>
			
			<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_scat'])&&$_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_scat']) {?>
			<span class="blog-cat"> <span class="icon-list"><?php echo smartyTranslate(array('s'=>'In','mod'=>'appagebuilder'),$_smarty_tpl);?>
</span> 
				<a href="<?php echo $_smarty_tpl->tpl_vars['blog']->value['category_link'];?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['category_title'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['category_title'], ENT_QUOTES, 'UTF-8', true);?>
</a>
			</span>
			<?php }?>
			
			<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_scoun'])&&$_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_scoun']) {?>
			<span class="blog-nbcomment">
				<span class="icon-comment"> <?php echo smartyTranslate(array('s'=>'Comment','mod'=>'appagebuilder'),$_smarty_tpl);?>
:</span> <?php echo intval($_smarty_tpl->tpl_vars['blog']->value['comment_count']);?>

			</span>
			<?php }?>
			
			<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_shits'])&&$_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_shits']) {?>
			<span class="blog-hits">
				<span class="icon-hits"> <?php echo smartyTranslate(array('s'=>'Hits','mod'=>'appagebuilder'),$_smarty_tpl);?>
:</span> <?php echo intval($_smarty_tpl->tpl_vars['blog']->value['hits']);?>

			</span>	
			<?php }?>
		</div>
		<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['show_desc'])&&$_smarty_tpl->tpl_vars['formAtts']->value['show_desc']) {?>
			<div class="blog-desc" itemprop="description">
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['blog']->value['description']),160,'...');?>

			</div>
		<?php }?>
	</div>
</div>



	


	
<?php }} ?>
