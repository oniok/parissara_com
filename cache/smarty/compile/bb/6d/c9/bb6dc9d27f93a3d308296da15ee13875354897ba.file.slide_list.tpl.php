<?php /* Smarty version Smarty-3.1.19, created on 2016-09-10 12:24:39
         compiled from "/home/paris/public_html/parissara_com/modules/leoslideshow/views/templates/hook/slide_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:48064234657d433c7eedcc5-54158761%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb6dc9d27f93a3d308296da15ee13875354897ba' => 
    array (
      0 => '/home/paris/public_html/parissara_com/modules/leoslideshow/views/templates/hook/slide_list.tpl',
      1 => 1470920836,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '48064234657d433c7eedcc5-54158761',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'id_group' => 0,
    'group_title' => 0,
    'slides' => 0,
    'slide' => 0,
    'currentSliderID' => 0,
    'languages' => 0,
    'previewLink' => 0,
    'msecure_key' => 0,
    'arrayParam' => 0,
    'language' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57d433c8136fb2_09737946',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57d433c8136fb2_09737946')) {function content_57d433c8136fb2_09737946($_smarty_tpl) {?>
<div class="alert alert-danger" id="slider-warning" style="display:none"></div>
<fieldset>
<div class="panel">
<div class="panel-heading">
	<i class="icon-list-ul"></i> <?php echo smartyTranslate(array('s'=>'Slides list','mod'=>'leoslideshow'),$_smarty_tpl);?>

	<span class="panel-heading-action">
		<a id="desc-product-new" class="list-toolbar-btn" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'), ENT_QUOTES, 'UTF-8', true);?>
&configure=leoslideshow&addNewSlider=1&id_group=<?php echo intval($_smarty_tpl->tpl_vars['id_group']->value);?>
">
			<label><span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="Add new" data-html="true"><i class="process-icon-new "></i></span></label>
		</a>
	</span>
</div>
        <div class="alert alert-info"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'), ENT_QUOTES, 'UTF-8', true);?>
&configure=leoslideshow&editgroup=1&id_group=<?php echo intval($_smarty_tpl->tpl_vars['id_group']->value);?>
" alt=<?php echo smartyTranslate(array('s'=>'Back to','mod'=>'leoslideshow'),$_smarty_tpl);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_title']->value, ENT_QUOTES, 'UTF-8', true);?>
><?php echo smartyTranslate(array('s'=>'Back to','mod'=>'leoslideshow'),$_smarty_tpl);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_title']->value, ENT_QUOTES, 'UTF-8', true);?>
</a></div>
	<div id="slidesContent" style="width: 500px; margin-top: 30px;">
		<ul id="slides">
		<?php  $_smarty_tpl->tpl_vars['slide'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slide']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['slides']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->key => $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->_loop = true;
?>
			<li id="slides_<?php echo intval($_smarty_tpl->tpl_vars['slide']->value['id_slide']);?>
">
				<strong>#<?php echo intval($_smarty_tpl->tpl_vars['slide']->value['id_slide']);?>
</strong> <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['slide']->value['title'],32,'...'), ENT_QUOTES, 'UTF-8', true);?>

				<div style="float: right;margin-top: -5px;">
					<?php echo $_smarty_tpl->tpl_vars['slide']->value['status'];?>

                                        <div class="btn-group">
                                            <a class="btn btn-default dropdown-toggle" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'), ENT_QUOTES, 'UTF-8', true);?>
&configure=leoslideshow&editSlider=1&id_slide=<?php echo intval($_smarty_tpl->tpl_vars['slide']->value['id_slide']);?>
&id_group=<?php echo intval($_smarty_tpl->tpl_vars['id_group']->value);?>
"> 
                                                <?php if ($_smarty_tpl->tpl_vars['slide']->value['id_slide']==$_smarty_tpl->tpl_vars['currentSliderID']->value) {?>
                                                    <?php echo smartyTranslate(array('s'=>'Editting','mod'=>'leoslideshow'),$_smarty_tpl);?>

                                                <?php } else { ?>
                                                    <?php echo smartyTranslate(array('s'=>'Action','mod'=>'leoslideshow'),$_smarty_tpl);?>

                                                <?php }?>
                                            </a>

                                            <button data-toggle="dropdown" class="btn btn-default dropdown-toggle">
                                                <span class="caret"></span>&nbsp;
                                            </button>
                                            <ul class="dropdown-menu" style="border: none">
                                                <li style="background-color:#fff;border: none">
                                                   <a class="" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'), ENT_QUOTES, 'UTF-8', true);?>
&configure=leoslideshow&editSlider=1&id_slide=<?php echo intval($_smarty_tpl->tpl_vars['slide']->value['id_slide']);?>
&id_group=<?php echo intval($_smarty_tpl->tpl_vars['id_group']->value);?>
"> 
                                                       <i class="icon-edit"></i> <?php echo smartyTranslate(array('s'=>'Click to Edit','mod'=>'leoslideshow'),$_smarty_tpl);?>

                                                   </a>
                                                </li>
                                                <li style="background-color:#fff;border: none">
                                                    <a class="color_danger btn-actionslider" data-confirm="<?php echo smartyTranslate(array('s'=>'Are you sure you want to delete this slider?','mod'=>'leoslideshow'),$_smarty_tpl);?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'), ENT_QUOTES, 'UTF-8', true);?>
&configure=leoslideshow&leoajax=1&action=deleteSlider&id_slide=<?php echo intval($_smarty_tpl->tpl_vars['slide']->value['id_slide']);?>
"><i class="icon-remove-sign"></i> <?php echo smartyTranslate(array('s'=>'Delete This slider','mod'=>'leoslideshow'),$_smarty_tpl);?>
</a>
                                                </li>
                                                <li style="background-color:#fff;border: none">
                                                   <a class="btn-actionslider" data-confirm="<?php echo smartyTranslate(array('s'=>'Are you sure you want to duplicate this slider?','mod'=>'leoslideshow'),$_smarty_tpl);?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'), ENT_QUOTES, 'UTF-8', true);?>
&configure=leoslideshow&leoajax=1&action=duplicateSlider&id_slide=<?php echo intval($_smarty_tpl->tpl_vars['slide']->value['id_slide']);?>
"> 
                                                       <i class="icon-film"></i> <?php echo smartyTranslate(array('s'=>'Duplicate This Slider','mod'=>'leoslideshow'),$_smarty_tpl);?>

                                                   </a>
                                                </li>
                                            </ul>
                                            
                                        </div>
                                        
                                        <div class="btn-group"> 
                                            <a class="btn btn-default <?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>dropdown-toggle <?php } else { ?>slider-preview <?php }?>color_danger" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['previewLink']->value, ENT_QUOTES, 'UTF-8', true);?>
&id_group=<?php echo intval($_smarty_tpl->tpl_vars['id_group']->value);?>
&id_slide=<?php echo intval($_smarty_tpl->tpl_vars['slide']->value['id_slide']);?>
"><i class="icon-eye-open"></i> <?php echo smartyTranslate(array('s'=>'Preview','mod'=>'leoslideshow'),$_smarty_tpl);?>
</a>
                                            <?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>

                                            <button data-toggle="dropdown" class="btn btn-default dropdown-toggle">
                                                <span class="caret"></span>&nbsp;
                                            </button>
                                            <ul class="dropdown-menu" style="border: none">
                                                <?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
                                                <li style="background-color:#fff;border: none">
                                                    <?php $_smarty_tpl->tpl_vars['arrayParam'] = new Smarty_variable(array('secure_key'=>$_smarty_tpl->tpl_vars['msecure_key']->value,'id_group'=>$_smarty_tpl->tpl_vars['id_group']->value,'id_slide'=>$_smarty_tpl->tpl_vars['slide']->value['id_slide']), null, 0);?>
                                                    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('leoslideshow','preview',$_smarty_tpl->tpl_vars['arrayParam']->value,null,$_smarty_tpl->tpl_vars['language']->value['id_lang']), ENT_QUOTES, 'UTF-8', true);?>
" class="slider-preview">
                                                        <i class="icon-eye-open"></i> <?php echo smartyTranslate(array('s'=>'Preview For','mod'=>'leoslideshow'),$_smarty_tpl);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                                                    </a>
                                                </li>
                                                <?php } ?>
                                            </ul>
                                            <?php }?>
                                        </div>
				</div>
			</li>
		<?php } ?>
		</ul>
	</div>
</div>
</fieldset>
<?php }} ?>
