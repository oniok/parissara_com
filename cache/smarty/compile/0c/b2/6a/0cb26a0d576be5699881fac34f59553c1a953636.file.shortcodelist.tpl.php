<?php /* Smarty version Smarty-3.1.19, created on 2016-09-24 10:17:31
         compiled from "C:\xampp\htdocs\parissara_com\modules\appagebuilder\views\templates\admin\ap_page_builder_shortcodes\shortcodelist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:90757e68afb964507-02603713%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0cb26a0d576be5699881fac34f59553c1a953636' => 
    array (
      0 => 'C:\\xampp\\htdocs\\parissara_com\\modules\\appagebuilder\\views\\templates\\admin\\ap_page_builder_shortcodes\\shortcodelist.tpl',
      1 => 1474290869,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '90757e68afb964507-02603713',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'importData' => 0,
    'shortCodeList' => 0,
    'kshort' => 0,
    'shortCode' => 0,
    'author' => 0,
    'item' => 0,
    'listModule' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57e68afbaafff0_89347115',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e68afbaafff0_89347115')) {function content_57e68afbaafff0_89347115($_smarty_tpl) {?>
<!-- @file modules\appagebuilder\views\templates\admin\ap_page_builder_shortcodes\shortcodelist -->
<?php if (isset($_smarty_tpl->tpl_vars['importData']->value)) {?>
    
<?php } else { ?>
<ul class="nav nav-tabs" role="tablist" id="tab-new-widget">
    <li role="presentation" class="active"><a href="#widget" aria-controls="widget" role="tab" data-toggle="tab">Widget</a></li>
    <li role="presentation"><a href="#module" aria-controls="module" role="tab" data-toggle="tab">Module</a></li>
</ul>

<div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="widget">
        <ol class="breadcrumb in-widget filters for-widget" data-for="widget">
            <li><a href="javascript:;"><button data-filter="*" class="btn is-checked">Show all</button></a></li>
            <li><a href="javascript:;"><button data-filter="content" class="btn">Content</button></a></li>
            <li><a href="javascript:;"><button data-filter="slider" class="btn">Slider</button></a></li>
            <li><a href="javascript:;"><button data-filter="social" class="btn">Social</button></a></li>
            <li><a href="javascript:;"><button data-filter="structure" class="btn">Structure</button></a></li>
        </ol>
        <div class="row" id="widget_container">
            <?php  $_smarty_tpl->tpl_vars['shortCode'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['shortCode']->_loop = false;
 $_smarty_tpl->tpl_vars['kshort'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['shortCodeList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['shortCode']->key => $_smarty_tpl->tpl_vars['shortCode']->value) {
$_smarty_tpl->tpl_vars['shortCode']->_loop = true;
 $_smarty_tpl->tpl_vars['kshort']->value = $_smarty_tpl->tpl_vars['shortCode']->key;
?>
                <?php if ($_smarty_tpl->tpl_vars['kshort']->value!='ApModule') {?>
                <div class="item col-md-3 col-sm-4 col-xs-6 " data-tag="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shortCode']->value['tag'], ENT_QUOTES, 'UTF-8', true);?>
">
                    <div class="cover-short-code">
                        <a href="javascript:void(0)" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shortCode']->value['desc'], ENT_QUOTES, 'UTF-8', true);?>
" class="shortcode new-shortcode" data-type='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['kshort']->value, ENT_QUOTES, 'UTF-8', true);?>
'>
                            <i class="icon <?php if (isset($_smarty_tpl->tpl_vars['shortCode']->value['icon_class'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shortCode']->value['icon_class'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>"> </i>
                            <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shortCode']->value['label'], ENT_QUOTES, 'UTF-8', true);?>
</span>
                            <small class="clearfix"><i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shortCode']->value['desc'], ENT_QUOTES, 'UTF-8', true);?>
</i></small>
                        </a>
                    </div>
                </div>
                <?php }?>
            <?php } ?>
        </div>
    </div>
    <div role="tabpanel" class="tab-pane" id="module">
        <ol class="breadcrumb in-widget filters for-module" data-for="module">
            <li><a href="javascript:;"><button data-filter="*" class="btn is-checked"><?php echo smartyTranslate(array('s'=>'Show all','mod'=>'appagebuilder'),$_smarty_tpl);?>
</button></a></li>
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['author']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <li><a href="javascript:;"><button data-filter="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="btn"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value, ENT_QUOTES, 'UTF-8', true);?>
</button></a></li>
            <?php } ?>
            <li><a href="javascript:;"><button data-filter="other" class="btn"><?php echo smartyTranslate(array('s'=>'Other','mod'=>'appagebuilder'),$_smarty_tpl);?>
</button></a></li>
        </ol>
        <div class="row" id="module_container">
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['kshort'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['listModule']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['kshort']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                <div class="item col-md-3 col-sm-4 col-xs-6 " data-tag="<?php if ($_smarty_tpl->tpl_vars['item']->value['author']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['author'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?>other<?php }?>">
                    <div class="cover-short-code">
                        <a href="javascript:void(0)" title="<?php if ($_smarty_tpl->tpl_vars['item']->value['description_short']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" 
                           class="shortcode new-shortcode module" data-type="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
">
                            <img class="icon" src="../modules/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
/logo.png"/>
                            <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</span>
                            <small class="clearfix"><i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['description_short'], ENT_QUOTES, 'UTF-8', true);?>
</i></small>
                        </a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(function () {
		var tab = $(".btn-back-to-list").attr("tab");
        $("#tab-new-widget a").each(function() {
			if($(this).attr("aria-controls") == tab) {
				$(this).tab("show");
			}
		});
		//$("#tab-new-widget a:first").tab("show");
    })
</script>
<?php }?><?php }} ?>
