<?php
/* Smarty version 3.1.39, created on 2021-07-02 18:59:31
  from '/usr/share/nginx/html/mini_shop/templates/list_bill.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60def1932d3166_98079002',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e69c2fc5b9c86fa088efc59b5b5576a4f0a8eff' => 
    array (
      0 => '/usr/share/nginx/html/mini_shop/templates/list_bill.html',
      1 => 1625223570,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60def1932d3166_98079002 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<div class="row">
	<?php if ($_smarty_tpl->tpl_vars['isAdmin']->value) {?>
	<div class="col-2">
		<select size=10 class="form-control" onChange="location.href='bill.php?user_sn='+this.value">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_users']->value, 'mem');
$_smarty_tpl->tpl_vars['mem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['mem']->value) {
$_smarty_tpl->tpl_vars['mem']->do_else = false;
?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['mem']->value['user_sn'];?>
"<?php if ($_smarty_tpl->tpl_vars['now_user_sn']->value == $_smarty_tpl->tpl_vars['mem']->value['user_sn']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['mem']->value['user_name'];?>
</option>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</select>
	</div>
	<?php }?>
	<div class="col-10">
		<ul class="list-group">
			<h3 class="text-center">UNDO</h3>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bill_arr']->value, 'bill');
$_smarty_tpl->tpl_vars['bill']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['bill']->value) {
$_smarty_tpl->tpl_vars['bill']->do_else = false;
?>
			<a href="bill.php?op=display_bill&bill_sn=<?php echo $_smarty_tpl->tpl_vars['bill']->value['bill_sn'];?>
" class="list-group-item list-group-item-light list-group-item-action"><?php echo $_smarty_tpl->tpl_vars['bill']->value['bill_date'];?>
</a>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<br>
			<h3 class="text-center">DONE</h3>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bill_d']->value, 'bill');
$_smarty_tpl->tpl_vars['bill']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['bill']->value) {
$_smarty_tpl->tpl_vars['bill']->do_else = false;
?>
			<a href="bill.php?op=display_bill&bill_sn=<?php echo $_smarty_tpl->tpl_vars['bill']->value['bill_sn'];?>
" class="list-group-item list-group-item-light list-group-item-action"><?php echo $_smarty_tpl->tpl_vars['bill']->value['bill_date'];?>
</a>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ul>
	</div>
</div>
<?php }
}
