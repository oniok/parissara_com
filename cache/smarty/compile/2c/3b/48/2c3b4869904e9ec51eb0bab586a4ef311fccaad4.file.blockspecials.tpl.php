<?php /* Smarty version Smarty-3.1.19, created on 2016-09-24 10:49:48
         compiled from "C:\xampp\htdocs\parissara_com\themes\leo_mode\modules\blockspecials\blockspecials.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2178557e6928c46cb49-41944865%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c3b4869904e9ec51eb0bab586a4ef311fccaad4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\parissara_com\\themes\\leo_mode\\modules\\blockspecials\\blockspecials.tpl',
      1 => 1474291649,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2178557e6928c46cb49-41944865',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'special' => 0,
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57e6928c50e6c4_73785039',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e6928c50e6c4_73785039')) {function content_57e6928c50e6c4_73785039($_smarty_tpl) {?>

<!-- MODULE Block specials -->
<div id="special_block_right" class="block">
	<h4 class="title_block">
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('prices-drop'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Specials','mod'=>'blockspecials'),$_smarty_tpl);?>
">
            <?php echo smartyTranslate(array('s'=>'Specials','mod'=>'blockspecials'),$_smarty_tpl);?>

        </a>
    </h4>
	<div class="block_content products-block">
    <?php if ($_smarty_tpl->tpl_vars['special']->value) {?>
        <?php $_smarty_tpl->tpl_vars['products'] = new Smarty_variable(array($_smarty_tpl->tpl_vars['special']->value), null, 0);?> 
		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./sub/product/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['products']->value,'mod'=>'blockspecials'), 0);?>
  
		<div class="lnk">
			<a 
            class="btn btn-outline button btn-sm" 
            href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('prices-drop'), ENT_QUOTES, 'UTF-8', true);?>
" 
            title="<?php echo smartyTranslate(array('s'=>'All specials','mod'=>'blockspecials'),$_smarty_tpl);?>
">
                <span><?php echo smartyTranslate(array('s'=>'All specials','mod'=>'blockspecials'),$_smarty_tpl);?>
</span>
            </a>
		</div>
    <?php } else { ?>
		<div><?php echo smartyTranslate(array('s'=>'No special products at this time.','mod'=>'blockspecials'),$_smarty_tpl);?>
</div>
    <?php }?>
	</div>
</div>
<!-- /MODULE Block specials -->
<?php }} ?>
