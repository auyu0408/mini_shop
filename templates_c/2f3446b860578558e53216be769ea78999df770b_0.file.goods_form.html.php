<?php
/* Smarty version 3.1.39, created on 2021-06-11 00:59:37
  from '/usr/share/nginx/html/mini_shop/templates/goods_form.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c244f9bc8c76_97084738',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f3446b860578558e53216be769ea78999df770b' => 
    array (
      0 => '/usr/share/nginx/html/mini_shop/templates/goods_form.html',
      1 => 1623342782,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c244f9bc8c76_97084738 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<h1>Edit goods</h1>
<form action="tool.php" method="post" class="form-horizontal" role="form" enctype="multipart/form-data">
	<div class="form-group">
		<label class="col-2 control-label">Product name:</label>
		<div class="col-10">
			<input type="text" class="form-control" name="goods_title" id="goods_title" placeholder="please enter good's name" value="">
		</div>
	</div>

	<div class="form-group">
		<label class="col-2 control-label">Product content:</label>
		<div class="col-10">
			<textarea class="form-control" name="goods_content" id="goods_content" placeholder="please enter good's content"></textarea>
		</div>
	</div>

	<div class="form-group">
		<label class="col-2 control-label">Product price:</label>
		<div class="col-10">
			<input type="text" class="form-control" name="goods_price" id="goods_price" placeholder="please enter good's price" value="">
		</div>
	</div>

	<div class="form-group">
		<label class="col-2 control-label">Product picture:</label>
		<div class="col-10">
			<input type="file" name="goods_pic" id="goods_pic">
		</div>
	</div>

	<div class="form-group">
		<div class="col-offset-2 col-10">
			<input type="hidden" name="op" value="insert_goods">
			<!--一個op的隱藏表單,是為了把東西導向正確網頁-->
			<br>
			<button type="submit" class="btn btn-outline-dark">Save goods</button>
		</div>
	</div>
</form>
<?php }
}
