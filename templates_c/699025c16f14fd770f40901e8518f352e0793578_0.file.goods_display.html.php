<?php
/* Smarty version 3.1.39, created on 2021-06-14 00:32:29
  from '/usr/share/nginx/html/mini_shop/templates/goods_display.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c6331d3eefc1_06446826',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '699025c16f14fd770f40901e8518f352e0793578' => 
    array (
      0 => '/usr/share/nginx/html/mini_shop/templates/goods_display.html',
      1 => 1623601087,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c6331d3eefc1_06446826 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<div class="row">
	<div class="col-md-6">
		<img src="<?php echo $_smarty_tpl->tpl_vars['goods']->value['pic'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_titile'];?>
" class="img-thumbnail">
	</div>
	<div class="col-md-6">
		<h2><?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_title'];?>
</h2>
		Price:<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_price'];?>
NTD
	</div>
</div>

<br>
<div class="row">
	<div class="col-md-12">
		<h3>Introduction</h3>
		<p><?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_content'];?>
</p>
	</div>
</div>
<?php }
}
