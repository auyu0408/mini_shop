<?php
/* Smarty version 3.1.39, created on 2021-07-02 17:49:00
  from '/usr/share/nginx/html/mini_shop/templates/goods_display.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60dee10ce58328_06648260',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '699025c16f14fd770f40901e8518f352e0793578' => 
    array (
      0 => '/usr/share/nginx/html/mini_shop/templates/goods_display.html',
      1 => 1625218808,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60dee10ce58328_06648260 (Smarty_Internal_Template $_smarty_tpl) {
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
		<p>Price:<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_price'];?>
NTD</p>
		<p>Popular:<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_counter'];?>
</p>
		<div>
			<a href="index.php?op=add_to_cart&goods_sn=<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_sn'];?>
&goods_title=<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_title'];?>
" class="btn btn-outline-success" role="button">Add to Cart</a>
			<?php if ($_smarty_tpl->tpl_vars['isAdmin']->value) {?>
				<a href="tool.php?op=goods_form&goods_sn=<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_sn'];?>
" class="btn btn-outline-secondary">edit</a>
				<a href="tool.php?op=delete_goods&goods_sn=<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_sn'];?>
" class="btn btn-outline-danger">delete</a>
			<?php }?>
		</div>
	</div>
</div>

<br>
<div class="row">
	<div class="col-md-12">
		<ul class="nav nav-tabs" role="tablist">
			<li class="nav-item" role="presentation">
				<button class="nav-link active" id="goods-tab" data-bs-toggle="tab" data-bs-target="#goods" type="button" role="tab" aria-controls="goods" aria-selected="true">Introduction</button>
			</li>
			<li class="nav-item" role="presentation">
				<button class="nav-link" id="note-tab" data-bs-toggle="tab" data-bs-target="#note" type="button" role="tab" aria-controls="note" aria-selected="false">Lyrics</button>
			</li>
			<li role="nav-item" role="presentation">
				<button class="nav-link" id="service-tab" data-bs-toggle="tab" data-bs-target="#service" type="button" role="tab" aria-controls="goods" aria-selected="false">Video</button>
			</li>
			<li role="nav-item" role="presentation">
				<button class="nav-link" id="special-tab" data-bs-toggle="tab" data-bs-target="#special" type="button" role="tab" aria-controls="goods" aria-selected="false">Credit</button>
			</li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane fade show active" id="goods" role="tabpanel" aria-labelledby="goods-tab">
				<p><?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_content'];?>
</p>
			</div>
			<div class="tab-pane fade" id="note" role="tabpanel" aria-laballedy="note-tab">
				<p><?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_notice'];?>
</p>
			</div>
			<div class="tab-pane fade" id="service" role="tabpanel" aria-laballedy="special-tab">
				<br>
				<p class="text-center"><?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_service'];?>
</p>
			</div>
			<div class="tab-pane fade" id="special" role="tabpanel" aria-laballedy="special-tab">
				<p><?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_special'];?>
</p>
			</div>
		</div>
	</div>
</div>
<?php }
}
