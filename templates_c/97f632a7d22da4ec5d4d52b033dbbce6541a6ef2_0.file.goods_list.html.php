<?php
/* Smarty version 3.1.39, created on 2021-07-03 18:49:35
  from '/usr/share/nginx/html/mini_shop/templates/goods_list.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60e040bf24ca34_86562734',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97f632a7d22da4ec5d4d52b033dbbce6541a6ef2' => 
    array (
      0 => '/usr/share/nginx/html/mini_shop/templates/goods_list.html',
      1 => 1625309331,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60e040bf24ca34_86562734 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<div class ="row">
	 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_goods']->value, 'goods');
$_smarty_tpl->tpl_vars['goods']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['goods']->value) {
$_smarty_tpl->tpl_vars['goods']->do_else = false;
?>
	<div class='col-sm-6 col-md-4'>
		<div class="img-thumbnail"><!--不只圖，把文字也包起來-->
			<a href="index.php?goods_sn=<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_sn'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['goods']->value['pic'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_title'];?>
" class="img-thumbnail rounded"></a><!--圖片會包兩層-->
			<div class="caption">
				<div style="height: 60px;">
					<h5><a href="index.php?goods_sn=<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_sn'];?>
"><?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_title'];?>
</a></h5>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['mode']->value == 0) {?>
				<div class="row">
					<div class="col-md-6 fs-6">price:<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_price'];?>
</div>
				</div>
				<?php }?>
				<div class="row">
					<div class="col-md-6 fs-6">popularity:<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_counter'];?>
</div>
				</div>
			</div>
		</div>
	</div>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<div class="row">
<div class="text-center">
	<br>
	共有<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
件商品
</div>
<?php echo $_smarty_tpl->tpl_vars['bar']->value;?>

</div>
<?php }
}
