<?php /* Smarty version Smarty-3.1.19, created on 2016-09-18 17:34:49
         compiled from "/home/paris/public_html/parissara_com/themes/leo_mode/modules/leoblog/views/templates/front/default/_listing_blog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:140538054157df087932f959-48704269%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9fa08119379af86249eff1721425464e6ec0f93e' => 
    array (
      0 => '/home/paris/public_html/parissara_com/themes/leo_mode/modules/leoblog/views/templates/front/default/_listing_blog.tpl',
      1 => 1470921366,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '140538054157df087932f959-48704269',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'blog' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57df087944c4b9_37157526',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57df087944c4b9_37157526')) {function content_57df087944c4b9_37157526($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/paris/public_html/parissara_com/tools/smarty/plugins/modifier.date_format.php';
?>

<article class="blog-item blogs">
	<?php if ($_smarty_tpl->tpl_vars['config']->value->get('listing_show_created','1')) {?>
	<span class="blog-created">
		<?php echo smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['blog']->value['date_add']),"<span>%d</span> %b, %Y");?>

	</span>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['config']->value->get('listing_show_title','1')) {?>
	<h4 class="title"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo $_smarty_tpl->tpl_vars['blog']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['blog']->value['title'];?>
</a></h4>
	<?php }?>
	<div class="blog-meta">
		<?php if ($_smarty_tpl->tpl_vars['config']->value->get('listing_show_author','1')&&!empty($_smarty_tpl->tpl_vars['blog']->value['author'])) {?>
		<span class="blog-author">
			<span class="icon-user"> <?php echo smartyTranslate(array('s'=>'Posted By','mod'=>'leoblog'),$_smarty_tpl);?>
:</span> 
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['author_link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo $_smarty_tpl->tpl_vars['blog']->value['author'];?>
"><?php echo $_smarty_tpl->tpl_vars['blog']->value['author'];?>
</a> 
		</span>
		<?php }?>
		
		<?php if ($_smarty_tpl->tpl_vars['config']->value->get('listing_show_category','1')) {?>
		<span class="blog-cat"> 
			<span class="icon-list"> <?php echo smartyTranslate(array('s'=>'In','mod'=>'leoblog'),$_smarty_tpl);?>
:</span> 
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['category_link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['category_title'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['blog']->value['category_title'];?>
</a>
		</span>
		<?php }?>
		
		
		<?php if (isset($_smarty_tpl->tpl_vars['blog']->value['comment_count'])&&$_smarty_tpl->tpl_vars['config']->value->get('listing_show_counter','1')) {?>	
		<span class="blog-nbcomment">
			<span class="icon-comment"> <?php echo smartyTranslate(array('s'=>'Comment','mod'=>'leoblog'),$_smarty_tpl);?>
:</span> 
			<?php echo $_smarty_tpl->tpl_vars['blog']->value['comment_count'];?>

		</span>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['config']->value->get('listing_show_hit','1')) {?>	
		<span class="blog-hits">
			<span class="icon-heart"> <?php echo smartyTranslate(array('s'=>'Hit','mod'=>'leoblog'),$_smarty_tpl);?>
:</span> 
			<?php echo $_smarty_tpl->tpl_vars['blog']->value['hits'];?>

		</span>
		<?php }?>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['blog']->value['image']&&$_smarty_tpl->tpl_vars['config']->value->get('listing_show_image',1)) {?>
	<div class="blog-image">
		<img src="<?php echo $_smarty_tpl->tpl_vars['blog']->value['preview_url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['blog']->value['title'];?>
" class="img-responsive" />
	</div>
	<?php }?>

	<div class="blog-shortinfo">
		<?php if ($_smarty_tpl->tpl_vars['config']->value->get('listing_show_description','1')) {?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['blog']->value['description']),160,'...');?>

		<?php }?>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['config']->value->get('listing_show_readmore',1)) {?>
	<p>
		<a href="<?php echo $_smarty_tpl->tpl_vars['blog']->value['link'];?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" class="more btn btn-default"><?php echo smartyTranslate(array('s'=>'Read more','mod'=>'leoblog'),$_smarty_tpl);?>
</a>
	</p>
	<?php }?>
</article><?php }} ?>
