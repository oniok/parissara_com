<?php /* Smarty version Smarty-3.1.19, created on 2016-09-19 04:06:08
         compiled from "/home/paris/public_html/parissara_com/themes/leo_mode/modules/leoblog/views/templates/hook/categories_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17863488457df9c700acc01-70344701%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '149e92aef6c9fd1386e6532a8981f10e15e17340' => 
    array (
      0 => '/home/paris/public_html/parissara_com/themes/leo_mode/modules/leoblog/views/templates/hook/categories_menu.tpl',
      1 => 1470921323,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17863488457df9c700acc01-70344701',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tree' => 0,
    'currentCategory' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57df9c700bd883_54262836',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57df9c700bd883_54262836')) {function content_57df9c700bd883_54262836($_smarty_tpl) {?>

<!-- Block categories module -->
    <?php if ($_smarty_tpl->tpl_vars['tree']->value) {?>
    <div id="categories_blog_menu" class="block bullet">
      <h4 class="title_block"><?php if (isset($_smarty_tpl->tpl_vars['currentCategory']->value)) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currentCategory']->value->title, ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Blog Categories','mod'=>'leoblog'),$_smarty_tpl);?>
<?php }?></h4>
        <div class="block_content">
            <?php echo $_smarty_tpl->tpl_vars['tree']->value;?>

        </div>
    </div>
    <?php }?>
    <!-- /Block categories module -->
<?php }} ?>
