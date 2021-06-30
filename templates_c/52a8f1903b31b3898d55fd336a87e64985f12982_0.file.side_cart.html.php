<?php
/* Smarty version 3.1.39, created on 2021-06-30 12:03:26
  from '/usr/share/nginx/html/mini_shop/templates/side_cart.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60dbed0e7d6427_72479082',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52a8f1903b31b3898d55fd336a87e64985f12982' => 
    array (
      0 => '/usr/share/nginx/html/mini_shop/templates/side_cart.html',
      1 => 1625025754,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60dbed0e7d6427_72479082 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<form action="bill.php" method="post" class="form-horizontal" role="form">
	<div class="card broder-info">
		<div class="card-header">Shopping list</div>
		<table class="table">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value, 'goods', false, 'goods_sn');
$_smarty_tpl->tpl_vars['goods']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['goods_sn']->value => $_smarty_tpl->tpl_vars['goods']->value) {
$_smarty_tpl->tpl_vars['goods']->do_else = false;
?>
				<tr>
					<td>
						<a href="index.php?goods_sn=<?php echo $_smarty_tpl->tpl_vars['goods_sn']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_title'];?>
</a>
					</td>
					<td>
						<input type="text" name="goods_amount[<?php echo $_smarty_tpl->tpl_vars['goods_sn']->value;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_amount'];?>
" class="form-control" style="width:40px">
					</td>
				</tr>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<tr>
					<td colspan=2>
						<input type="hidden" name="op" value="check_out">
						<button type="submit" class="btn btn-block btn-danger">Check Out</button>
					</td>
				</tr>
		</table>
	</div>
</form>
<?php }
}
