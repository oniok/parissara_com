<?php /* Smarty version Smarty-3.1.19, created on 2016-09-29 22:55:50
         compiled from "C:\xampp\htdocs\parissara_com\themes\leo_mode\modules\appagebuilder\views\templates\hook\ApImage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1611257ed39869887f9-96040535%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b8064043f2d2ddf2769c4945d25746fdb615ee1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\parissara_com\\themes\\leo_mode\\modules\\appagebuilder\\views\\templates\\hook\\ApImage.tpl',
      1 => 1474879717,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1611257ed39869887f9-96040535',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'formAtts' => 0,
    'apLiveEdit' => 0,
    'path' => 0,
    'apLiveEditEnd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ed3986b7d7d1_34377694',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ed3986b7d7d1_34377694')) {function content_57ed3986b7d7d1_34377694($_smarty_tpl) {?>
<!-- @file modules\appagebuilder\views\templates\hook\ApImage -->
<div id="image-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['form_id'], ENT_QUOTES, 'UTF-8', true);?>
" class="block <?php echo isset($_smarty_tpl->tpl_vars['formAtts']->value['css_class'])&&$_smarty_tpl->tpl_vars['formAtts']->value['css_class'] ? $_smarty_tpl->tpl_vars['formAtts']->value['css_class'] : htmlspecialchars('', ENT_QUOTES, 'UTF-8', true);?>
 <?php echo isset($_smarty_tpl->tpl_vars['formAtts']->value['class'])&&$_smarty_tpl->tpl_vars['formAtts']->value['class'] ? $_smarty_tpl->tpl_vars['formAtts']->value['class'] : htmlspecialchars('', ENT_QUOTES, 'UTF-8', true);?>
">
	<?php echo $_smarty_tpl->tpl_vars['apLiveEdit']->value ? $_smarty_tpl->tpl_vars['apLiveEdit']->value : '';?>

    <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['image'])&&$_smarty_tpl->tpl_vars['formAtts']->value['image']) {?>
        <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['url'])&&$_smarty_tpl->tpl_vars['formAtts']->value['url']) {?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['formAtts']->value['url'];?>
" <?php echo isset($_smarty_tpl->tpl_vars['formAtts']->value['is_open'])&&$_smarty_tpl->tpl_vars['formAtts']->value['is_open'] ? 'target="_blank"' : htmlspecialchars('', ENT_QUOTES, 'UTF-8', true);?>
>
        <?php }?>
        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['image'], ENT_QUOTES, 'UTF-8', true);?>
" class="img-responsive <?php echo isset($_smarty_tpl->tpl_vars['formAtts']->value['animation'])&&$_smarty_tpl->tpl_vars['formAtts']->value['animation']!='none' ? 'has-animation' : htmlspecialchars('', ENT_QUOTES, 'UTF-8', true);?>
"
            <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['animation'])&&$_smarty_tpl->tpl_vars['formAtts']->value['animation']!='none') {?> data-animation="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['animation'], ENT_QUOTES, 'UTF-8', true);?>
" <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['animation_delay']!='') {?> data-animation-delay="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['animation_delay'], ENT_QUOTES, 'UTF-8', true);?>
" <?php }?>
            title="<?php echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['formAtts']->value['title'])&&$_smarty_tpl->tpl_vars['formAtts']->value['title'] ? $_smarty_tpl->tpl_vars['formAtts']->value['title'] : ''), ENT_QUOTES, 'UTF-8', true);?>
"
            alt="<?php echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['formAtts']->value['alt'])&&$_smarty_tpl->tpl_vars['formAtts']->value['alt'] ? $_smarty_tpl->tpl_vars['formAtts']->value['alt'] : ''), ENT_QUOTES, 'UTF-8', true);?>
"
	    style=" width:<?php echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['formAtts']->value['width'])&&$_smarty_tpl->tpl_vars['formAtts']->value['width'] ? $_smarty_tpl->tpl_vars['formAtts']->value['width'] : 'auto'), ENT_QUOTES, 'UTF-8', true);?>
; 
			height:<?php echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['formAtts']->value['height'])&&$_smarty_tpl->tpl_vars['formAtts']->value['height'] ? $_smarty_tpl->tpl_vars['formAtts']->value['height'] : 'auto'), ENT_QUOTES, 'UTF-8', true);?>
" />

        <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['url'])&&$_smarty_tpl->tpl_vars['formAtts']->value['url']) {?>
        </a>
        <?php }?>
    <?php }?>
	<?php echo $_smarty_tpl->tpl_vars['apLiveEditEnd']->value ? $_smarty_tpl->tpl_vars['apLiveEditEnd']->value : '';?>

        <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['description'])&&$_smarty_tpl->tpl_vars['formAtts']->value['description']) {?>
            <div class='image_description'>
								<?php echo $_smarty_tpl->tpl_vars['formAtts']->value['description'] ? $_smarty_tpl->tpl_vars['formAtts']->value['description'] : '';?>

            </div>
        <?php }?>
</div>
<?php }} ?>
