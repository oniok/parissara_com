<?php /* Smarty version Smarty-3.1.19, created on 2016-09-24 10:49:48
         compiled from "C:\xampp\htdocs\parissara_com\themes\leo_mode\modules\leoblog\views\templates\hook\categories_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:198357e6928c825081-49207065%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4e08c5c6b8320690d8879e27200dd4c370428c0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\parissara_com\\themes\\leo_mode\\modules\\leoblog\\views\\templates\\hook\\categories_menu.tpl',
      1 => 1474291663,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '198357e6928c825081-49207065',
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
  'unifunc' => 'content_57e6928c878ce2_61639596',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e6928c878ce2_61639596')) {function content_57e6928c878ce2_61639596($_smarty_tpl) {?>

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
