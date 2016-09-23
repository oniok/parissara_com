<?php /* Smarty version Smarty-3.1.19, created on 2016-09-23 10:29:06
         compiled from "C:\xampp\htdocs\parissara_com\themes\leo_mode\modules\blockcurrencies\blockcurrencies.tpl" */ ?>
<?php /*%%SmartyHeaderCode:581557e53c32e04160-39504129%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8741a70fda73f4047013cffeebe733dc41ebc7e1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\parissara_com\\themes\\leo_mode\\modules\\blockcurrencies\\blockcurrencies.tpl',
      1 => 1474291642,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '581557e53c32e04160-39504129',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'currencies' => 0,
    'cookie' => 0,
    'f_currency' => 0,
    'request_uri' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57e53c32ec1f43_79861051',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e53c32ec1f43_79861051')) {function content_57e53c32ec1f43_79861051($_smarty_tpl) {?>
<!-- Block currencies module -->
<?php if (count($_smarty_tpl->tpl_vars['currencies']->value)>1) {?>

<div class="popup-over pull-left e-scale">
	<div data-toggle="dropdown" class="popup-title"><a href="#">
			<?php  $_smarty_tpl->tpl_vars['f_currency'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f_currency']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f_currency']->key => $_smarty_tpl->tpl_vars['f_currency']->value) {
$_smarty_tpl->tpl_vars['f_currency']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['f_currency']->key;
?>
				<?php if ($_smarty_tpl->tpl_vars['cookie']->value->id_currency==$_smarty_tpl->tpl_vars['f_currency']->value['id_currency']) {?>
					<?php echo $_smarty_tpl->tpl_vars['f_currency']->value['iso_code'];?>

				<?php }?>
			<?php } ?>
			</a>

	</div>
	<div class="popup-content">
		<div id="currencies-block-top">
			<form id="setCurrency" action="<?php echo $_smarty_tpl->tpl_vars['request_uri']->value;?>
" method="post">
		 	
				<input type="hidden" name="id_currency" id="id_currency" value=""/>
				<input type="hidden" name="SubmitCurrency" value="" />
	 
				<ul id="first-currencies" class="currencies_ul toogle_content">
					<?php  $_smarty_tpl->tpl_vars['f_currency'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f_currency']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f_currency']->key => $_smarty_tpl->tpl_vars['f_currency']->value) {
$_smarty_tpl->tpl_vars['f_currency']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['f_currency']->key;
?>
						<li <?php if ($_smarty_tpl->tpl_vars['cookie']->value->id_currency==$_smarty_tpl->tpl_vars['f_currency']->value['id_currency']) {?>class="selected"<?php }?>>
							<a href="javascript:setCurrency(<?php echo $_smarty_tpl->tpl_vars['f_currency']->value['id_currency'];?>
);" rel="nofollow" title="<?php echo $_smarty_tpl->tpl_vars['f_currency']->value['name'];?>
">
								<?php echo $_smarty_tpl->tpl_vars['f_currency']->value['sign'];?>
 <?php echo $_smarty_tpl->tpl_vars['f_currency']->value['name'];?>

							</a>
						</li>
					<?php } ?>
				</ul>
			</form>
		</div>
	</div>	
</div>


	
<?php }?>
<!-- /Block currencies module -->
<?php }} ?>
