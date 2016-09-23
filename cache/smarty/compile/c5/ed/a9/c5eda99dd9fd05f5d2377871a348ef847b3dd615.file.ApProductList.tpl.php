<?php /* Smarty version Smarty-3.1.19, created on 2016-09-12 16:26:09
         compiled from "/home/paris/public_html/parissara_com/modules/appagebuilder/views/templates/hook/ApProductList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32909469457d70f61ddbe91-41657718%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5eda99dd9fd05f5d2377871a348ef847b3dd615' => 
    array (
      0 => '/home/paris/public_html/parissara_com/modules/appagebuilder/views/templates/hook/ApProductList.tpl',
      1 => 1470920792,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32909469457d70f61ddbe91-41657718',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'apAjax' => 0,
    'formAtts' => 0,
    'apLiveEdit' => 0,
    'apPConfig' => 0,
    'products' => 0,
    'id' => 0,
    'class' => 0,
    'productClassWidget' => 0,
    'scolumn' => 0,
    'profile' => 0,
    'p' => 0,
    'comparator_max_item' => 0,
    'compared_products' => 0,
    'apLiveEditEnd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57d70f61e71564_48155769',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57d70f61e71564_48155769')) {function content_57d70f61e71564_48155769($_smarty_tpl) {?>
<!-- @file modules\appagebuilder\views\templates\hook\ApProductList -->
<?php if (!isset($_smarty_tpl->tpl_vars['apAjax']->value)) {?>
    <div class="block <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['class'], ENT_QUOTES, 'UTF-8', true);?>
">
		<?php echo $_smarty_tpl->tpl_vars['apLiveEdit']->value ? $_smarty_tpl->tpl_vars['apLiveEdit']->value : '';?>

		<input type="hidden" class="apconfig" value='<?php echo $_smarty_tpl->tpl_vars['apPConfig']->value;?>
'/>
		<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['title'])&&!empty($_smarty_tpl->tpl_vars['formAtts']->value['title'])) {?>
		<h4 class="title_block">
			<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['title'], ENT_QUOTES, 'UTF-8', true);?>

		</h4>
		<?php }?>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
    <?php if (!isset($_smarty_tpl->tpl_vars['apAjax']->value)) {?>
    <!-- Products list -->
    <ul<?php if (isset($_smarty_tpl->tpl_vars['id']->value)&&$_smarty_tpl->tpl_vars['id']->value) {?> id="<?php echo intval($_smarty_tpl->tpl_vars['id']->value);?>
"<?php }?> class="product_list grid row<?php if (isset($_smarty_tpl->tpl_vars['class']->value)&&$_smarty_tpl->tpl_vars['class']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['productClassWidget']->value)) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['productClassWidget']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>">
    <?php }?>
        <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['product']->iteration=0;
 $_smarty_tpl->tpl_vars['product']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['product']->iteration++;
 $_smarty_tpl->tpl_vars['product']->index++;
 $_smarty_tpl->tpl_vars['product']->first = $_smarty_tpl->tpl_vars['product']->index === 0;
 $_smarty_tpl->tpl_vars['product']->last = $_smarty_tpl->tpl_vars['product']->iteration === $_smarty_tpl->tpl_vars['product']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['first'] = $_smarty_tpl->tpl_vars['product']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['last'] = $_smarty_tpl->tpl_vars['product']->last;
?>
            <li class="ajax_block_product product_block 
                <?php if ($_smarty_tpl->tpl_vars['scolumn']->value==5) {?> col-md-2-4 <?php } else { ?> col-md-<?php echo 12/intval($_smarty_tpl->tpl_vars['scolumn']->value);?>
<?php }?> 
                col-xs-12 <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['first']) {?>first_item<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['last']) {?>last_item<?php }?>">
                <?php if (isset($_smarty_tpl->tpl_vars['profile']->value)&&$_smarty_tpl->tpl_vars['profile']->value) {?>
                    <?php $_smarty_tpl->tpl_vars["tplPath"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./profiles/".((string)$_smarty_tpl->tpl_vars['profile']->value).".tpl", null, 0);?>
                    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplPath']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <?php } else { ?>
                    <?php echo $_smarty_tpl->getSubTemplate ('./ProductItem.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <?php }?>
            </li>
        <?php } ?>
    <?php if (!isset($_smarty_tpl->tpl_vars['apAjax']->value)) {?>
    </ul>
    <!-- End Products list -->
    <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['use_showmore'])&&$_smarty_tpl->tpl_vars['formAtts']->value['use_showmore']&&count($_smarty_tpl->tpl_vars['products']->value)>=$_smarty_tpl->tpl_vars['formAtts']->value['nb_products']) {?>
    <div class="box-show-more open">
        <a href="javascript:void(0)" class="btn btn-default btn-show-more" data-page="<?php echo intval($_smarty_tpl->tpl_vars['p']->value);?>
" data-loading-text="<?php echo smartyTranslate(array('s'=>'Loading...','mod'=>'appagebuilder'),$_smarty_tpl);?>
">
            <span><?php echo smartyTranslate(array('s'=>'Show more','mod'=>'appagebuilder'),$_smarty_tpl);?>
</span></a>
    </div>
    <?php }?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'min_item')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'min_item'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Please select at least one product','js'=>1,'mod'=>'appagebuilder'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'min_item'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'max_item')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'max_item'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'You cannot add more than %d product(s) to the product comparison','mod'=>'appagebuilder','sprintf'=>$_smarty_tpl->tpl_vars['comparator_max_item']->value,'js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'max_item'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('comparator_max_item'=>$_smarty_tpl->tpl_vars['comparator_max_item']->value),$_smarty_tpl);?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('comparedProductsIds'=>$_smarty_tpl->tpl_vars['compared_products']->value),$_smarty_tpl);?>

    </div>
	<?php echo $_smarty_tpl->tpl_vars['apLiveEditEnd']->value ? $_smarty_tpl->tpl_vars['apLiveEditEnd']->value : '';?>

    <?php }?>
	<?php } else { ?>
</div>
<?php }?>
<?php }} ?>
