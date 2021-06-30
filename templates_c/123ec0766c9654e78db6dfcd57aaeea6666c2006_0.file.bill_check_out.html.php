<?php
/* Smarty version 3.1.39, created on 2021-06-30 17:29:03
  from '/usr/share/nginx/html/mini_shop/templates/bill_check_out.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60dc395fdeb5e4_73486991',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '123ec0766c9654e78db6dfcd57aaeea6666c2006' => 
    array (
      0 => '/usr/share/nginx/html/mini_shop/templates/bill_check_out.html',
      1 => 1625045322,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60dc395fdeb5e4_73486991 (Smarty_Internal_Template $_smarty_tpl) {
?><h2 class="text-center">My shopping list</h2>
	<?php echo '<script'; ?>
 type="text/javascript">
		function check_total(goods_sn,amount,price){
			var total=amount*price;
			$("#total_"+goods_sn).html(total+" NTD");
			$("#goods_total_"+goods_sn).val(total);

			var sum=0;
			$('.price').each(function(){
				sum += Number($(this).val());
			});
			$("#bill_total_display").html(sum+" NTD");
			$("#bill_total").val(sum);
		}
	<?php echo '</script'; ?>
>
<form action="bill.php" method="post" class="form-horizontal">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart_arr']->value, 'goods', false, 'goods_sn');
$_smarty_tpl->tpl_vars['goods']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['goods_sn']->value => $_smarty_tpl->tpl_vars['goods']->value) {
$_smarty_tpl->tpl_vars['goods']->do_else = false;
?>
	<div class="row">
		<label class="col-4 control-label text-center fs-5" for="goods_amount"><?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_title'];?>
</label>
		<div class="col-1">
			<input text="text" class="form-control" name="goods_amount[<?php echo $_smarty_tpl->tpl_vars['goods_sn']->value;?>
]" id="goods_amount_<?php echo $_smarty_tpl->tpl_vars['goods_sn']->value;?>
" placeholder="# of product" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_amount'];?>
" onchange="check_total('<?php echo $_smarty_tpl->tpl_vars['goods_sn']->value;?>
',this.value,'<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_price'];?>
')">
		</div>
		<div class="col-2 text-center">
			<p class="form-control-static">x <?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_price'];?>
 NTD</p>
		</div>
		<div class="col-2 text-center">
			<p class="form-control-static" id="total_<?php echo $_smarty_tpl->tpl_vars['goods_sn']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_total'];?>
 NTD</p>
			<input type="hidden" name="goods_total[<?php echo $_smarty_tpl->tpl_vars['goods_sn']->value;?>
]" class="price" id="goods_total_<?php echo $_smarty_tpl->tpl_vars['goods_sn']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_total'];?>
">
		</div>
	</div>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<hr>
	<div class="row">
		<div class="col-4 text-center">Total:</div>
		<div class="col-8 text-center">
			<p class="form-control-static" id="bill_total_display"><?php echo $_smarty_tpl->tpl_vars['bill_total']->value;?>
 NTD</p>
			<input type="hidden" class="form-control" name="bill_total" id="bill_total" placeholder="Total" value="<?php echo $_smarty_tpl->tpl_vars['bill_total']->value;?>
">
		</div>
	</div>
	<div class="text-center">
		<input type="hidden" name="op" value="save_bill">
		<button type="submit" class="btn btn-danger">Submit</button>
	</div>
</form>
<?php }
}
