<?php
/* Smarty version 3.1.39, created on 2021-06-30 21:45:46
  from '/usr/share/nginx/html/mini_shop/templates/display_bill.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60dc758ad4fdb9_28675458',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0c6794995a09b77efc781146b17620d3ef8e24a' => 
    array (
      0 => '/usr/share/nginx/html/mini_shop/templates/display_bill.html',
      1 => 1625060740,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60dc758ad4fdb9_28675458 (Smarty_Internal_Template $_smarty_tpl) {
?><h3 class="text-center"><?php echo $_smarty_tpl->tpl_vars['bill']->value['bill_date'];?>
訂購細目-<?php echo $_smarty_tpl->tpl_vars['bill']->value['bill_status'];?>
</h3>
<div>收貨人:<?php echo $_smarty_tpl->tpl_vars['bill']->value['user_name'];?>
</div>
<div>收貨地址:<?php echo $_smarty_tpl->tpl_vars['bill']->value['user_zip'];
echo $_smarty_tpl->tpl_vars['bill']->value['user_country'];
echo $_smarty_tpl->tpl_vars['bill']->value['user_district'];
echo $_smarty_tpl->tpl_vars['bill']->value['user_address'];?>
</div>
<div>收貨電話:<?php echo $_smarty_tpl->tpl_vars['bill']->value['user_tel'];?>
</div>
<table class="table table-light table-hover">
	<tr>
		<th>商品名稱</th>
		<th>單價</th>
		<th>數量</th>
		<th style="text-align: right;">小計</th>
	</tr>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bill_detail']->value, 'bill');
$_smarty_tpl->tpl_vars['bill']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['bill']->value) {
$_smarty_tpl->tpl_vars['bill']->do_else = false;
?>
	<tr>
		<td><?php echo $_smarty_tpl->tpl_vars['bill']->value['goods_title'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['bill']->value['goods_price'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['bill']->value['goods_amount'];?>
</td>
		<td style="text-align: right;"><?php echo $_smarty_tpl->tpl_vars['bill']->value['goods_total'];?>
 NTD</td>
	</tr>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<tr>
		<td>Total:</td>
		<td></td>
		<td></td>
		<td style="text-align: right;"><?php echo $_smarty_tpl->tpl_vars['bill']->value['bill_total'];?>
 NTD</td>
	</tr>
</table>
<?php if ($_smarty_tpl->tpl_vars['isAdmin']->value && $_smarty_tpl->tpl_vars['bill']->value['bill_status'] == '') {?>
	<?php echo '<script'; ?>
 src="vendor/bootstrap-sweetalert/sweetalert.min.js"><?php echo '</script'; ?>
><?php echo '</script'; ?>
>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap-sweetalert/sweetalert.css">
	<?php echo '<script'; ?>
 type="text/javascript">
		function delete_bill(bill_sn){
			swal({
				title:"確定要刪除嗎？",
				text:"刪掉之後，訂單資料會消失喔！",
				type:"warning",
				showCancelButton: true,
				confirmButtonClass: "btn-outline-danger",
				confirmButtonText: "Yes",
				closeOnConfirm: false
				},
				function()
				{
					location.href='bill.php?op=delete_bill&bill_sn='+bill_sn;
					swal("Done","It's too late to regrat","success");
				});
		}
	<?php echo '</script'; ?>
>
	<a href="javascript:delete_bill('<?php echo $_smarty_tpl->tpl_vars['bill']->value['bill_sn'];?>
')" class="btn btn-outline-danger">Delete Order</a>
	<a href="bill.php?op=finish_bill&bill_sn=<?php echo $_smarty_tpl->tpl_vars['bill']->value['bill_sn'];?>
" class="btn btn-outline-success">Done</a>
<?php }
}
}
