<?php /* Smarty version Smarty-3.1.19, created on 2016-09-10 10:52:05
         compiled from "/home/paris/public_html/parissara_com/modules/leoslideshow/views/templates/admin/leo_slideshow/typo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:212199506357d41e15d7e763-71541577%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '729c34caae24def957ce91282011a2f0fd8653ad' => 
    array (
      0 => '/home/paris/public_html/parissara_com/modules/leoslideshow/views/templates/admin/leo_slideshow/typo.tpl',
      1 => 1470921187,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '212199506357d41e15d7e763-71541577',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'typoDir' => 0,
    'captions' => 0,
    'caption' => 0,
    'field' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57d41e15df6ee8_29281858',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57d41e15df6ee8_29281858')) {function content_57d41e15df6ee8_29281858($_smarty_tpl) {?>
<div class="typos bannercontainer">
    <div class="note"> 
            <?php echo smartyTranslate(array('s'=>'NOTE','mod'=>'leoslideshow'),$_smarty_tpl);?>
: <p><?php echo smartyTranslate(array('s'=>'These Below Typos are getting in the file','mod'=>'leoslideshow'),$_smarty_tpl);?>
:<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['typoDir']->value, ENT_QUOTES, 'UTF-8', true);?>
" target="_blank"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['typoDir']->value, ENT_QUOTES, 'UTF-8', true);?>
</a>
            <br><?php echo smartyTranslate(array('s'=>'you can open this file and add yours css style and it will be listed in here!!!','mod'=>'leoslideshow'),$_smarty_tpl);?>
</p>
            <p><?php echo smartyTranslate(array('s'=>'To Select One, You Click The Text Of Each Typo','mod'=>'leoslideshow'),$_smarty_tpl);?>
</p>
    </div>

    <div class="typos-wrap">	
        <?php  $_smarty_tpl->tpl_vars['caption'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['caption']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['captions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['caption']->key => $_smarty_tpl->tpl_vars['caption']->value) {
$_smarty_tpl->tpl_vars['caption']->_loop = true;
?>
            <div class="typo <?php if ($_smarty_tpl->tpl_vars['caption']->value=='cus_color') {?>typo-big<?php }?>"><div class="tp-caption <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['caption']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['caption']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo smartyTranslate(array('s'=>'Use This Caption Typo','mod'=>'leoslideshow'),$_smarty_tpl);?>
</div></div>
        <?php } ?>
     </div>
</div>  
<script type="text/javascript">
$('div.typo').live('click', function() {  
        if(parent.$('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8', true);?>
').val())
            parent.$('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8', true);?>
').val(parent.$('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8', true);?>
').val()+" "+$("div", this).attr("data-class") );
        else
            parent.$('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8', true);?>
').val($("div", this).attr("data-class") );
        parent.$('#dialog').dialog('close');
        parent.$('#dialog').remove();	
});
</script><?php }} ?>
