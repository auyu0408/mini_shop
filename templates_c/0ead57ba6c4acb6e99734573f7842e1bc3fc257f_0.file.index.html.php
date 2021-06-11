<?php
/* Smarty version 3.1.39, created on 2021-06-11 18:56:41
  from '/usr/share/nginx/html/mini_shop/templates/index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c34169e16168_55900184',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ead57ba6c4acb6e99734573f7842e1bc3fc257f' => 
    array (
      0 => '/usr/share/nginx/html/mini_shop/templates/index.html',
      1 => 1623408958,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:goods_form.html' => 1,
    'file:index_side.html' => 1,
  ),
),false)) {
function content_60c34169e16168_55900184 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="zh-Hant">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatable" content="IE=edge">
		<!--上面主要是IE在用啦，但IE都要掰掰了-->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo $_smarty_tpl->tpl_vars['shop_name']->value;?>
</title>
		<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<?php echo '<script'; ?>
 src="vendor/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
		<link href="style.css" rel="stylesheet">
	</head>
	<body>
		<div class="container">
			<div id="shop_head">
				<a herf="index.php">
					<img src="image/title.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['shop_name']->value;?>
" class="img-responsive"><img src="image/title_sm.jpg" width="300" alt="little 3boshi" class="img-responsive">
<!--img-responsive自適應功能，alt無障礙網頁，沒有圖片時也有文字說明，兩個中間沒換行可以並排，然後利用限制圖片寬度或高度來縮小圖片，讓他在比例內-->
				</a>
			</div>
			<div id="shop_main" class="row">
				<div class="col-9">
					<?php if ($_smarty_tpl->tpl_vars['op']->value == "goods_form") {?>
						<?php $_smarty_tpl->_subTemplateRender("file:goods_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
					<?php } else { ?>
						<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

					<?php }?>
				</div>
				<div class="col-3"><?php $_smarty_tpl->_subTemplateRender('file:index_side.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></div>
			</div>
			<div id="shop_foot" class="text-cent">
				<div>Address: 日本〒167-0053 Tokyo, Suginami City, Nishiogiminami, 2 Chome-11-5</div>
				<div>Phone:+81 3-2021-0211</div>
				<div>copyright &#169 2021 3bosui_youshudo.net All right reserved.</div>
<!--&#169是版權符號-->
			</div>
		</div>
	</body>
</html>
<?php }
}
