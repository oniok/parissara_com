<?php /*%%SmartyHeaderCode:144728184157aca421a48817-66439532%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a83b6d82a31263a8c7bfea34482feb7c2128b11c' => 
    array (
      0 => '/home/paris/public_html/parissara_com/themes/leo_mode/modules/blockmanufacturer/blockmanufacturer.tpl',
      1 => 1470920054,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '144728184157aca421a48817-66439532',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57b31e6beceac7_85322362',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57b31e6beceac7_85322362')) {function content_57b31e6beceac7_85322362($_smarty_tpl) {?>
<!-- Block manufacturers module -->
<div id="manufacturers_block_left" class="block blockmanufacturer">
	<h4 class="title_block">
					<a href="http://parissara.com/ru/manufacturers" title="Производители">
						Производители
					</a>
			</h4>
	<div class="block_content">
								<ul class="list-block list-group bullet">
														<li class="first_item">
						<a 
						href="http://parissara.com/ru/2_aneque" title="Подробнее о Aneque ">
							Aneque 
						</a>
					</li>
																			<li class="item">
						<a 
						href="http://parissara.com/ru/3_dolorem" title="Подробнее о Dolorem">
							Dolorem
						</a>
					</li>
																			<li class="item">
						<a 
						href="http://parissara.com/ru/4_feminine" title="Подробнее о Feminine">
							Feminine
						</a>
					</li>
																			<li class="item">
						<a 
						href="http://parissara.com/ru/5_geatest" title="Подробнее о Geatest">
							Geatest
						</a>
					</li>
																			<li class="item">
						<a 
						href="http://parissara.com/ru/6_helegance" title="Подробнее о Helegance">
							Helegance
						</a>
					</li>
																					</ul>
										<form action="/index.php" method="get">
					<div class="form-group">
						<select class="form-control" name="manufacturer_list">
							<option value="0">Все производители</option>
													<option value="http://parissara.com/ru/2_aneque">Aneque </option>
													<option value="http://parissara.com/ru/3_dolorem">Dolorem</option>
													<option value="http://parissara.com/ru/4_feminine">Feminine</option>
													<option value="http://parissara.com/ru/5_geatest">Geatest</option>
													<option value="http://parissara.com/ru/6_helegance">Helegance</option>
													<option value="http://parissara.com/ru/7_stylish">Stylish</option>
												</select>
					</div>
				</form>
						</div>
</div>
<!-- /Block manufacturers module -->
<?php }} ?>
