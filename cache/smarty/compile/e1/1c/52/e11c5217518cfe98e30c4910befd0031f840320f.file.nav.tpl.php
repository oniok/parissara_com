<?php /* Smarty version Smarty-3.1.19, created on 2016-09-19 08:04:26
         compiled from "/home/paris/public_html/parissara_com/themes/leo_mode/modules/blockuserinfo/nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13767642457dfd44a45b775-72678715%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e11c5217518cfe98e30c4910befd0031f840320f' => 
    array (
      0 => '/home/paris/public_html/parissara_com/themes/leo_mode/modules/blockuserinfo/nav.tpl',
      1 => 1470920061,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13767642457dfd44a45b775-72678715',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_logged' => 0,
    'link' => 0,
    'cookie' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57dfd44a4b0597_24581381',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57dfd44a4b0597_24581381')) {function content_57dfd44a4b0597_24581381($_smarty_tpl) {?><script type="text/javascript">
/* Blockusreinfo */
	
$(document).ready( function(){
	if( $(window).width() < 991 ){
			 $(".header_user_info").addClass('popup-over e-scale');
			 $(".header_user_info .links").addClass('popup-content');
		}
		else{
			$(".header_user_info").removeClass('popup-over e-scale');
			 $(".header_user_info .links").removeClass('popup-content');
		}
	$(window).resize(function() {
		if( $(window).width() < 991 ){
			 $(".header_user_info").addClass('popup-over e-scale');
			 $(".header_user_info .links").addClass('popup-content');
		}
		else{
			$(".header_user_info").removeClass('popup-over e-scale');
			 $(".header_user_info .links").removeClass('popup-content');
		}
	});
});
</script>
<!-- Block user information module NAV  -->
<div class="header_user_info">
	<div data-toggle="dropdown" class="popup-title"><a href="#"><span><?php echo smartyTranslate(array('s'=>'Account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</span></a></div>	
	<ul class="links">
		<?php if ($_smarty_tpl->tpl_vars['is_logged']->value) {?>
			<li>
				<a class="logout" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true,null,"mylogout"), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Log me out','mod'=>'blockuserinfo'),$_smarty_tpl);?>
">
					<i class="fa fa-unlock-alt"></i><span><?php echo smartyTranslate(array('s'=>'Sign out','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</span>
				</a>
			</li>
		<?php } else { ?>
			<li>
				<a class="login" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Login to your customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
">
					<i class="fa fa-unlock-alt"></i><span><?php echo smartyTranslate(array('s'=>'Sign in','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</span>
				</a>
			</li>
		<?php }?>

		<li>
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
">
				<i class="fa fa-user"></i><span><?php echo smartyTranslate(array('s'=>'Account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</span>
			</a>
		</li>
		<li>
			<a class="ap-btn-wishlist" id="wishlist-total" href="<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getModuleLink('blockwishlist','mywishlist',array(),true));?>
" title="<?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockuserinfo'),$_smarty_tpl);?>
">
				<i class="fa fa-heart"></i><span><?php echo smartyTranslate(array('s'=>'Wishlist','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</span><span class="ap-total-wishlist ap-total"></span>
			</a>
		</li>
		<li>
			<a class="ap-btn-compare" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('products-comparison'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Compare','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" rel="nofollow">
				<i class="fa fa-compress"></i><span><?php echo smartyTranslate(array('s'=>'Compare','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</span><span class="ap-total-compare ap-total"></span>
			</a>
		</li>

		<?php if ($_smarty_tpl->tpl_vars['is_logged']->value) {?>
			<li class="say-hello">
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'View my customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" class="account" rel="nofollow">
					<i class="fa fa-user"></i>
					<span><?php echo smartyTranslate(array('s'=>'Hello','mod'=>'blockuserinfo'),$_smarty_tpl);?>
, <?php echo $_smarty_tpl->tpl_vars['cookie']->value->customer_firstname;?>
 <?php echo $_smarty_tpl->tpl_vars['cookie']->value->customer_lastname;?>
</span>
				</a>
			</li>
		<?php }?>		
	</ul>	
</div>	<?php }} ?>
