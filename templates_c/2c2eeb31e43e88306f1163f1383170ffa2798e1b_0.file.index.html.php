<?php
/* Smarty version 3.1.39, created on 2021-07-03 19:38:58
  from '/mini_shop/templates/index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60e04c529784d4_56102704',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c2eeb31e43e88306f1163f1383170ffa2798e1b' => 
    array (
      0 => '/mini_shop/templates/index.html',
      1 => 1625280407,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:goods_form.html' => 1,
    'file:goods_display.html' => 1,
    'file:user_form.html' => 1,
    'file:display_user.html' => 1,
    'file:bill_check_out.html' => 1,
    'file:display_bill.html' => 1,
    'file:list_bill.html' => 1,
    'file:goods_list.html' => 1,
    'file:index_side.html' => 1,
  ),
),false)) {
function content_60e04c529784d4_56102704 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="zh-Hant">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatable" content="IE=edge">
		<!--上面主要是IE在用啦，但IE都要掰掰了-->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="jquery/jquery-ui.css" rel="stylesheet">
		<link href="style.css" rel="stylesheet">

		<title><?php echo $_smarty_tpl->tpl_vars['shop_name']->value;?>
</title>
		<?php echo '<script'; ?>
 src="jquery/external/jquery/jquery.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="jquery/jquery-ui.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="vendor/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"><?php echo '</script'; ?>
>
	</head>
	<body>
		<div class="container">
			<div id="shop_head">
				<a herf="index.php">
					<img src="image/title.gif" alt="<?php echo $_smarty_tpl->tpl_vars['shop_name']->value;?>
" class="img-responsive"><img src="image/title_sm.png" width="300" alt="little 3boshi" class="img-responsive">
<!--img-responsive自適應功能，alt無障礙網頁，沒有圖片時也有文字說明，兩個中間沒換行可以並排，然後利用限制圖片寬度或高度來縮小圖片，讓他在比例內-->
				</a>
			</div>
			<div id="shop_main" class="row">
				<div class="col-9">
					<?php if ((isset($_smarty_tpl->tpl_vars['msg']->value))) {?>
					<div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</div>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['op']->value == "goods_form") {?>
						<?php $_smarty_tpl->_subTemplateRender("file:goods_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
					<?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "goods_display") {?>
						<?php $_smarty_tpl->_subTemplateRender("file:goods_display.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
					<?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "user_form") {?>
						<?php $_smarty_tpl->_subTemplateRender("file:user_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
					<?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "display_user") {?>
						<?php $_smarty_tpl->_subTemplateRender("file:display_user.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
					<?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "check_out") {?>
						<?php $_smarty_tpl->_subTemplateRender('file:bill_check_out.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
					<?php } elseif ($_smarty_tpl->tpl_vars['op']->value == 'display_bill') {?>
		 				<?php $_smarty_tpl->_subTemplateRender('file:display_bill.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
					<?php } elseif ($_smarty_tpl->tpl_vars['op']->value == 'list_bill') {?>
						<?php $_smarty_tpl->_subTemplateRender('file:list_bill.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
					<?php } else { ?>
						<?php $_smarty_tpl->_subTemplateRender('file:goods_list.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
					<?php }?>
				</div>
				<div class="col-3"><?php $_smarty_tpl->_subTemplateRender('file:index_side.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></div>
			</div>
			<div id="shop_foot" class="text-cent">
				<div>カバー株式会社</div>
				<div>Address: 日本〒104-0023 Tokyo, Chuo City, Shinkawa, 1 Chome-25-2</div>
				<div>copyright Impressum &#169 2021 cover corp. All right reserved.</div>
<!--&#169是版權符號-->
			</div>
		</div>
	</body>
</html>
<?php }
}
