<?php /* Smarty version Smarty-3.1.19, created on 2016-09-09 14:36:02
         compiled from "/home/paris/public_html/parissara_com/modules/leoblog/views/templates/front/default/_social.tpl" */ ?>
<?php /*%%SmartyHeaderCode:45331374757d301121abc19-19174222%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d5943e59e754479c4a52d0327dc7aa005504f71' => 
    array (
      0 => '/home/paris/public_html/parissara_com/modules/leoblog/views/templates/front/default/_social.tpl',
      1 => 1470921183,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '45331374757d301121abc19-19174222',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57d301121c1565_61383076',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57d301121c1565_61383076')) {function content_57d301121c1565_61383076($_smarty_tpl) {?>

		<div class="social-wrap">
			<div class="social-heading"> <b><?php echo smartyTranslate(array('s'=>'Like This','mod'=>'leoblog'),$_smarty_tpl);?>
</b> </div>
			<?php if ($_smarty_tpl->tpl_vars['config']->value->get('social_code','')) {?>
				<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value->get('social_code',''), ENT_QUOTES, 'UTF-8', true);?>

			<?php } else { ?>
			<!-- Twitter Button -->
			<div class="itemTwitterButton">
				<a href="https://twitter.com/share" class="twitter-share-button" data-count="horizontal" >
					<?php echo smartyTranslate(array('s'=>'Twitter','mod'=>'leoblog'),$_smarty_tpl);?>

				</a>
				<script type="text/javascript" src="//platform.twitter.com/widgets.js"></script>
			</div>

			 
			<!-- Facebook Button -->
			<div class="itemFacebookButton">
				<div id="fb-root"></div>
				<script type="text/javascript">
					(function(d, s, id) {
					  var js, fjs = d.getElementsByTagName(s)[0];
					  if (d.getElementById(id)) return;
					  js = d.createElement(s); js.id = id;
					  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
					  fjs.parentNode.insertBefore(js, fjs);
					}(document, 'script', 'facebook-jssdk'));
				</script>
				<div class="fb-like" data-send="false" data-width="200" data-show-faces="true"></div>
			</div>

			 
			 	<!-- Google +1 Button -->
			<div class="itemGooglePlusOneButton">
				<g:plusone annotation="inline" width="120"></g:plusone>
				<script type="text/javascript">
				  (function() {
				  	window.___gcfg = { lang: 'en' }; // Define button default language here
				    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
				    po.src = 'https://apis.google.com/js/plusone.js';
				    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
				  })();
				</script>
			</div>
			<?php }?>
		</div>	 




<?php }} ?>
