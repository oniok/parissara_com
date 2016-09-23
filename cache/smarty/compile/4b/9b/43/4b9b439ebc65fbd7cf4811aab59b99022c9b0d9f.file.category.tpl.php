<?php /* Smarty version Smarty-3.1.19, created on 2016-09-08 03:14:04
         compiled from "/home/paris/public_html/parissara_com/themes/leo_mode/modules/leoblog/views/templates/front/default/category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:126201679557d10fbce881e2-91476879%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b9b439ebc65fbd7cf4811aab59b99022c9b0d9f' => 
    array (
      0 => '/home/paris/public_html/parissara_com/themes/leo_mode/modules/leoblog/views/templates/front/default/category.tpl',
      1 => 1470921366,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '126201679557d10fbce881e2-91476879',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'no_follow' => 0,
    'config' => 0,
    'childrens' => 0,
    'children' => 0,
    'leading_blogs' => 0,
    'secondary_blogs' => 0,
    'listing_leading_column' => 0,
    'listing_secondary_column' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57d10fbcf37fa3_05161758',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57d10fbcf37fa3_05161758')) {function content_57d10fbcf37fa3_05161758($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['category']->value)&&$_smarty_tpl->tpl_vars['category']->value->id_leoblogcat&&$_smarty_tpl->tpl_vars['category']->value->active) {?>
<?php if (isset($_smarty_tpl->tpl_vars['no_follow']->value)&&$_smarty_tpl->tpl_vars['no_follow']->value) {?>
    <?php $_smarty_tpl->tpl_vars['no_follow_text'] = new Smarty_variable('rel="nofollow"', null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['no_follow_text'] = new Smarty_variable('', null, 0);?>
<?php }?>
<div id="blog-category" class="blogs-container">
        <?php if ($_smarty_tpl->tpl_vars['category']->value->show_title) {?>
			<h1><?php echo $_smarty_tpl->tpl_vars['category']->value->title;?>
</h1>
        <?php }?>
	<div class="inner">
		
		<?php if ($_smarty_tpl->tpl_vars['config']->value->get('listing_show_categoryinfo',1)) {?>
			<div class="panel panel-default">
				<div class="panel-body">
					<?php if ($_smarty_tpl->tpl_vars['category']->value->image) {?>
						<div class="row">
							<div class="category-image col-xs-12 col-sm-12 col-lg-6 col-md-6 text-center">
								<img src="<?php echo $_smarty_tpl->tpl_vars['category']->value->image;?>
" class="img-responsive" />
							</div>
							<div class="col-xs-12 col-sm-12 col-lg-6 col-lg-6 category-info caption">
								<?php echo $_smarty_tpl->tpl_vars['category']->value->content_text;?>

							</div>	
						</div>	
					<?php } else { ?>
						<div class="category-info caption">
							<?php echo $_smarty_tpl->tpl_vars['category']->value->content_text;?>

						</div>
					<?php }?>					 
				</div>
			</div> 
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['childrens']->value&&$_smarty_tpl->tpl_vars['config']->value->get('listing_show_subcategories',1)) {?>
		<div class="childrens">
			<h3><?php echo smartyTranslate(array('s'=>'Childrens','mod'=>'leoblog'),$_smarty_tpl);?>
</h3>
			<div class="row">
			<?php  $_smarty_tpl->tpl_vars['children'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['children']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['childrens']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['children']->key => $_smarty_tpl->tpl_vars['children']->value) {
$_smarty_tpl->tpl_vars['children']->_loop = true;
?>
				<div class="col-lg-3">
					<?php if ($_smarty_tpl->tpl_vars['children']->value['thumb']) {?>
					<img src="<?php echo $_smarty_tpl->tpl_vars['children']->value['thumb'];?>
" class="img-responsive"/>
					<?php }?>
					<h4><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['children']->value['category_link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo $_smarty_tpl->tpl_vars['children']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['children']->value['title'];?>
</a></h4>
					<div class="child-desc"><?php echo $_smarty_tpl->tpl_vars['children']->value['content_text'];?>
</div>
				</div>
			<?php } ?>
			</div>
		 
		</div>
		<?php }?>

		<div class="clearfix"></div>
	 
		<?php if (count($_smarty_tpl->tpl_vars['leading_blogs']->value)+count($_smarty_tpl->tpl_vars['secondary_blogs']->value)) {?>
			<h3><?php echo smartyTranslate(array('s'=>'Recent blog posts','mod'=>'leoblog'),$_smarty_tpl);?>
</h3>
			<?php if (count($_smarty_tpl->tpl_vars['leading_blogs']->value)) {?>
			<div class="leading-blog">  
				<?php  $_smarty_tpl->tpl_vars['blog'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['blog']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['leading_blogs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['blog']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['blog']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['blog']->key => $_smarty_tpl->tpl_vars['blog']->value) {
$_smarty_tpl->tpl_vars['blog']->_loop = true;
 $_smarty_tpl->tpl_vars['blog']->iteration++;
 $_smarty_tpl->tpl_vars['blog']->last = $_smarty_tpl->tpl_vars['blog']->iteration === $_smarty_tpl->tpl_vars['blog']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['leading_blog']['last'] = $_smarty_tpl->tpl_vars['blog']->last;
?>
				 
					<?php if (($_smarty_tpl->tpl_vars['blog']->iteration%$_smarty_tpl->tpl_vars['listing_leading_column']->value==1)&&$_smarty_tpl->tpl_vars['listing_leading_column']->value>1) {?>
						<div class="row">
					<?php }?>
					<div class="<?php if ($_smarty_tpl->tpl_vars['listing_leading_column']->value<=1) {?>no<?php }?>col-lg-<?php echo floor(12/$_smarty_tpl->tpl_vars['listing_leading_column']->value);?>
">
						<?php echo $_smarty_tpl->getSubTemplate ("./_listing_blog.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

					</div>	
					<?php if (($_smarty_tpl->tpl_vars['blog']->iteration%$_smarty_tpl->tpl_vars['listing_leading_column']->value==0||$_smarty_tpl->getVariable('smarty')->value['foreach']['leading_blog']['last'])&&$_smarty_tpl->tpl_vars['listing_leading_column']->value>1) {?>
						</div>
					<?php }?>
				
				<?php } ?>
			</div>
			<?php }?>


			<?php if (count($_smarty_tpl->tpl_vars['secondary_blogs']->value)) {?>
			<div class="secondary-blog">

				<?php  $_smarty_tpl->tpl_vars['blog'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['blog']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['secondary_blogs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['blog']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['blog']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['blog']->key => $_smarty_tpl->tpl_vars['blog']->value) {
$_smarty_tpl->tpl_vars['blog']->_loop = true;
 $_smarty_tpl->tpl_vars['blog']->iteration++;
 $_smarty_tpl->tpl_vars['blog']->last = $_smarty_tpl->tpl_vars['blog']->iteration === $_smarty_tpl->tpl_vars['blog']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['secondary_blog']['last'] = $_smarty_tpl->tpl_vars['blog']->last;
?>
					<?php if (($_smarty_tpl->tpl_vars['blog']->iteration%$_smarty_tpl->tpl_vars['listing_secondary_column']->value==1)&&$_smarty_tpl->tpl_vars['listing_secondary_column']->value>1) {?>
					  <div class="row">
					<?php }?>

					<div class="<?php if ($_smarty_tpl->tpl_vars['listing_secondary_column']->value<=1) {?>no<?php }?>col-lg-<?php echo floor(12/$_smarty_tpl->tpl_vars['listing_secondary_column']->value);?>
">
						<?php echo $_smarty_tpl->getSubTemplate ("./_listing_blog.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

					</div>	
					<?php if (($_smarty_tpl->tpl_vars['blog']->iteration%$_smarty_tpl->tpl_vars['listing_secondary_column']->value==0||$_smarty_tpl->getVariable('smarty')->value['foreach']['secondary_blog']['last'])&&$_smarty_tpl->tpl_vars['listing_secondary_column']->value>1) {?>
					</div>
					<?php }?>
				<?php } ?>
			</div>
			<?php }?>
	 	
			<div class="top-pagination-content clearfix bottom-line">
				<?php echo $_smarty_tpl->getSubTemplate ("./_pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	        </div>
	    <?php } elseif (empty($_smarty_tpl->tpl_vars['childrens']->value)) {?>
	    	<div class="alert alert-warning"><?php echo smartyTranslate(array('s'=>'Sorry, We are updating data, please come back late!!!!','mod'=>'leoblog'),$_smarty_tpl);?>
</div>
	    <?php }?>  
	      
	</div>
</div>
<?php } else { ?>
<div class="alert alert-warning"><?php echo smartyTranslate(array('s'=>'Sorry, We are updating data, please come back late!!!!','mod'=>'leoblog'),$_smarty_tpl);?>
</div>
<?php }?><?php }} ?>
