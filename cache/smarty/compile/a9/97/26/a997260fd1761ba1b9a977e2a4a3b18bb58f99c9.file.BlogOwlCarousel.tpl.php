<?php /* Smarty version Smarty-3.1.19, created on 2016-09-09 22:26:01
         compiled from "/home/paris/public_html/parissara_com/themes/leo_mode/modules/appagebuilder/views/templates/hook/BlogOwlCarousel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:183366256557d36f39216445-74443253%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a997260fd1761ba1b9a977e2a4a3b18bb58f99c9' => 
    array (
      0 => '/home/paris/public_html/parissara_com/themes/leo_mode/modules/appagebuilder/views/templates/hook/BlogOwlCarousel.tpl',
      1 => 1470921316,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '183366256557d36f39216445-74443253',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'carouselName' => 0,
    'products' => 0,
    'formAtts' => 0,
    'mproducts' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57d36f392b3205_21233347',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57d36f392b3205_21233347')) {function content_57d36f392b3205_21233347($_smarty_tpl) {?>
<!-- @file modules\appagebuilder\views\templates\hook\BlogOwlCarousel -->
<div id="<?php echo $_smarty_tpl->tpl_vars['carouselName']->value;?>
" class="owl-carousel owl-theme">
<?php $_smarty_tpl->tpl_vars['mproducts'] = new Smarty_variable(array_chunk($_smarty_tpl->tpl_vars['products']->value,$_smarty_tpl->tpl_vars['formAtts']->value['itempercolumn']), null, 0);?>
<?php  $_smarty_tpl->tpl_vars['products'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['products']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mproducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['products']->key => $_smarty_tpl->tpl_vars['products']->value) {
$_smarty_tpl->tpl_vars['products']->_loop = true;
?>
	<div class="item">
		<?php  $_smarty_tpl->tpl_vars['blog'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['blog']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['blog']->key => $_smarty_tpl->tpl_vars['blog']->value) {
$_smarty_tpl->tpl_vars['blog']->_loop = true;
?>
			<?php echo $_smarty_tpl->getSubTemplate ('./BlogItem.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<?php } ?>
	</div>
<?php } ?>
</div>
<script type="text/javascript">
$(document).ready(function() {
	$('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['carouselName']->value, ENT_QUOTES, 'UTF-8', true);?>
').owlCarousel({
            items : <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['items']) {?><?php echo intval($_smarty_tpl->tpl_vars['formAtts']->value['items']);?>
<?php } else { ?>false<?php }?>,
            <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['itemsdesktop']) {?>itemsDesktop : [1199,<?php echo intval($_smarty_tpl->tpl_vars['formAtts']->value['itemsdesktop']);?>
],<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['itemsdesktopsmall']) {?>itemsDesktopSmall : [979,<?php echo intval($_smarty_tpl->tpl_vars['formAtts']->value['itemsdesktopsmall']);?>
],<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['itemstablet']) {?>itemsTablet : [768,<?php echo intval($_smarty_tpl->tpl_vars['formAtts']->value['itemstablet']);?>
],<?php }?>

            <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['itemsmobile']) {?>itemsMobile : [479,<?php echo intval($_smarty_tpl->tpl_vars['formAtts']->value['itemsmobile']);?>
],<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['itemscustom']) {?>itemsCustom : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['itemscustom'], ENT_QUOTES, 'UTF-8', true);?>
,<?php }?>
            singleItem : false,         // true : show only 1 item
            itemsScaleUp : false,
            slideSpeed : <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['slidespeed']) {?><?php echo intval($_smarty_tpl->tpl_vars['formAtts']->value['slidespeed']);?>
<?php } else { ?>200<?php }?>,  //  change speed when drag and drop a item
            paginationSpeed : <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['paginationspeed']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['paginationspeed'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?>800<?php }?>, // change speed when go next page

            autoPlay : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['autoplay'], ENT_QUOTES, 'UTF-8', true);?>
,   // time to show each item
            stopOnHover : <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['stoponhover']) {?>true<?php } else { ?>false<?php }?>,
            navigation : <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['navigation']) {?>true<?php } else { ?>false<?php }?>,
            navigationText : ["&lsaquo;", "&rsaquo;"],

            scrollPerPage : <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['scrollperpage']) {?>true<?php } else { ?>false<?php }?>,
            
            pagination : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['pagination'], ENT_QUOTES, 'UTF-8', true);?>
, // show bullist
            paginationNumbers : <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['paginationnumbers']) {?>true<?php } else { ?>false<?php }?>, // show number
            
            responsive : <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['responsive']) {?>true<?php } else { ?>false<?php }?>,
            //responsiveRefreshRate : 200,
            //responsiveBaseWidth : window,
            
            //baseClass : "owl-carousel",
            //theme : "owl-theme",
            
            lazyLoad : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['lazyload'], ENT_QUOTES, 'UTF-8', true);?>
,
            lazyFollow : <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['lazyfollow']) {?>true<?php } else { ?>false<?php }?>,  // true : go to page 7th and load all images page 1...7. false : go to page 7th and load only images of page 7th
            lazyEffect : "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['lazyeffect'], ENT_QUOTES, 'UTF-8', true);?>
",
            
            autoHeight : <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['autoheight']) {?>true<?php } else { ?>false<?php }?>,

            //jsonPath : false,
            //jsonSuccess : false,

            //dragBeforeAnimFinish
            mouseDrag : <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['mousedrag']) {?>true<?php } else { ?>false<?php }?>,
            touchDrag : <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['touchdrag']) {?>true<?php } else { ?>false<?php }?>,
            
            addClassActive : true,
            <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['rtl']) {?>direction:'rtl',<?php }?>
            //transitionStyle : "owl_transitionStyle",
            
            //beforeUpdate : false,
            //afterUpdate : false,
            //beforeInit : false,
            //afterInit : false,
            //beforeMove : false,
            //afterMove : false,
            afterAction : SetOwlCarouselFirstLast,
            //startDragging : false,
            //afterLazyLoad: false
    

        });
});

function SetOwlCarouselFirstLast(el){
	el.find(".owl-item").removeClass("first");
	el.find(".owl-item.active").first().addClass("first");

	el.find(".owl-item").removeClass("last");
	el.find(".owl-item.active").last().addClass("last");
}
</script><?php }} ?>
