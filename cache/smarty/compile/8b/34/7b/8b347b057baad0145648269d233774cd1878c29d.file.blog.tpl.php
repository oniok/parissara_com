<?php /* Smarty version Smarty-3.1.19, created on 2016-09-09 14:36:02
         compiled from "/home/paris/public_html/parissara_com/themes/leo_mode/modules/leoblog/views/templates/front/default/blog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:171984669957d301120bbd21-23409414%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b347b057baad0145648269d233774cd1878c29d' => 
    array (
      0 => '/home/paris/public_html/parissara_com/themes/leo_mode/modules/leoblog/views/templates/front/default/blog.tpl',
      1 => 1470921366,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '171984669957d301120bbd21-23409414',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
    'is_active' => 0,
    'config' => 0,
    'blog' => 0,
    'blog_count_comment' => 0,
    'module_tpl' => 0,
    'tags' => 0,
    'tag' => 0,
    'samecats' => 0,
    'tagrelated' => 0,
    'cblog' => 0,
    'productrelated' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57d301121a1759_29332888',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57d301121a1759_29332888')) {function content_57d301121a1759_29332888($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/paris/public_html/parissara_com/tools/smarty/plugins/modifier.date_format.php';
?>

<?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
		<div id="blogpage">
			<div class="blog-detail">
				<div class="alert alert-warning"><?php echo smartyTranslate(array('s'=>'Sorry, We are updating data, please come back late!!!!','mod'=>'leoblog'),$_smarty_tpl);?>
</div>
			</div>
		</div>
	<?php } else { ?>	
	<div id="blogpage">
		<article class="blog-detail blogs">
			<?php if ($_smarty_tpl->tpl_vars['is_active']->value) {?>
			<?php if ($_smarty_tpl->tpl_vars['config']->value->get('item_show_created','1')) {?>
			<span class="blog-created"> 
				<?php echo smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['blog']->value->date_add),"<span>%d</span> %b, %Y");?>

			</span>
			<?php }?>

			<h1 class="title"><?php echo $_smarty_tpl->tpl_vars['blog']->value->meta_title;?>
</h1>
			<div class="blog-meta">	
				<?php if ($_smarty_tpl->tpl_vars['config']->value->get('item_show_author','1')) {?>
				<span class="blog-author">
					<span class="icon-user"> <?php echo smartyTranslate(array('s'=>'Posted By','mod'=>'leoblog'),$_smarty_tpl);?>
: </span>
					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value->author_link, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo $_smarty_tpl->tpl_vars['blog']->value->author;?>
"><?php echo $_smarty_tpl->tpl_vars['blog']->value->author;?>
</a>
				</span>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['config']->value->get('item_show_category','1')) {?>
				<span class="blog-cat"> 
					<span class="icon-list"> <?php echo smartyTranslate(array('s'=>'In','mod'=>'leoblog'),$_smarty_tpl);?>
: </span> 
					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value->category_link, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value->category_title, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['blog']->value->category_title;?>
</a>
				</span>
				<?php }?>

				
				<?php if (isset($_smarty_tpl->tpl_vars['blog_count_comment']->value)&&$_smarty_tpl->tpl_vars['config']->value->get('item_show_counter','1')) {?>
				<span class="blog-nbcomment">
					<span class="icon-comment"> <?php echo smartyTranslate(array('s'=>'Comment','mod'=>'leoblog'),$_smarty_tpl);?>
:</span> 
					<?php echo $_smarty_tpl->tpl_vars['blog_count_comment']->value;?>

				</span>
				<?php }?>
				<?php if (isset($_smarty_tpl->tpl_vars['blog']->value->hits)&&$_smarty_tpl->tpl_vars['config']->value->get('item_show_hit','1')) {?>
				<span class="blog-hits">
					<span class="icon-heart"> <?php echo smartyTranslate(array('s'=>'Hit','mod'=>'leoblog'),$_smarty_tpl);?>
:</span>
					<?php echo $_smarty_tpl->tpl_vars['blog']->value->hits;?>

				</span>
				<?php }?>
			</div>

			<?php if ($_smarty_tpl->tpl_vars['blog']->value->preview_url&&$_smarty_tpl->tpl_vars['config']->value->get('item_show_image','1')) {?>
				<div class="blog-image">
					<img src="<?php echo $_smarty_tpl->tpl_vars['blog']->value->preview_url;?>
" title="<?php echo $_smarty_tpl->tpl_vars['blog']->value->meta_title;?>
" class="img-responsive" />
				</div>
			<?php }?>

			<div class="blog-description">
				<?php if ($_smarty_tpl->tpl_vars['config']->value->get('item_show_description',1)) {?>
					<?php echo $_smarty_tpl->tpl_vars['blog']->value->description;?>

				<?php }?>
				<?php echo $_smarty_tpl->tpl_vars['blog']->value->content;?>
	
			</div>
			
			

			<?php if (trim($_smarty_tpl->tpl_vars['blog']->value->video_code)) {?>
			<div class="video-code">
				<div class="inner ">
					<?php echo $_smarty_tpl->tpl_vars['blog']->value->video_code;?>

				</div>
			</div>
			<?php }?>

			<div class="blog-social">
				 <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['module_tpl']->value)."_social.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			</div>
			<?php if ($_smarty_tpl->tpl_vars['tags']->value) {?>
			<div class="blog-tags">
				<span><?php echo smartyTranslate(array('s'=>'Tags:','mod'=>'leoblog'),$_smarty_tpl);?>
</span>
			 
				<?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tags']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->_loop = true;
?>
					 <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value['tag'], ENT_QUOTES, 'UTF-8', true);?>
"><span><?php echo $_smarty_tpl->tpl_vars['tag']->value['tag'];?>
</span></a> 	
				<?php } ?>
				 
			</div>
			<?php }?>

			<?php if (!empty($_smarty_tpl->tpl_vars['samecats']->value)||!empty($_smarty_tpl->tpl_vars['tagrelated']->value)) {?>
			<div class="extra-blogs row">
			<?php if (!empty($_smarty_tpl->tpl_vars['samecats']->value)) {?>
				<div class="col-lg-6 col-md-6 col-xs-12">
					<h4><?php echo smartyTranslate(array('s'=>'In Same Category','mod'=>'leoblog'),$_smarty_tpl);?>
</h4>
					<ul>
					<?php  $_smarty_tpl->tpl_vars['cblog'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cblog']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['samecats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cblog']->key => $_smarty_tpl->tpl_vars['cblog']->value) {
$_smarty_tpl->tpl_vars['cblog']->_loop = true;
?>
						<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cblog']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['cblog']->value['meta_title'];?>
</a></li>
					<?php } ?>
					</ul>
				</div>
				<div class="col-lg-6 col-md-6 col-xs-12">
					<h4><?php echo smartyTranslate(array('s'=>'Related by Tags','mod'=>'leoblog'),$_smarty_tpl);?>
</h4>
					<ul>
					<?php  $_smarty_tpl->tpl_vars['cblog'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cblog']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tagrelated']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cblog']->key => $_smarty_tpl->tpl_vars['cblog']->value) {
$_smarty_tpl->tpl_vars['cblog']->_loop = true;
?>
						<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cblog']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['cblog']->value['meta_title'];?>
</a></li>
					<?php } ?>
					</ul>
				</div>
			<?php }?>
			</div>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['productrelated']->value) {?>

			<?php }?>
			<div class="blog-comment">
			<?php if ($_smarty_tpl->tpl_vars['config']->value->get('item_comment_engine','local')=='facebook') {?>
				<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['module_tpl']->value)."_facebook_comment.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<?php } elseif ($_smarty_tpl->tpl_vars['config']->value->get('item_comment_engine','local')=='diquis') {?>
				<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['module_tpl']->value)."_diquis_comment.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			
			<?php } else { ?>
				<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['module_tpl']->value)."_local_comment.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<?php }?>
			</div>	
			<?php } else { ?>
			<div class="alert alert-warning"><?php echo smartyTranslate(array('s'=>'Sorry, This blog is not avariable. May be this was unpublished or deleted.','mod'=>'leoblog'),$_smarty_tpl);?>
</div>
			<?php }?>

		</article>
	</div>
 	<?php }?><?php }} ?>
