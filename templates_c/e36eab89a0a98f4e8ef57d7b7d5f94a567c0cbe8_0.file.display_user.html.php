<?php
/* Smarty version 3.1.39, created on 2021-06-30 20:59:16
  from '/usr/share/nginx/html/mini_shop/templates/display_user.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60dc6aa43f2008_98872135',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e36eab89a0a98f4e8ef57d7b7d5f94a567c0cbe8' => 
    array (
      0 => '/usr/share/nginx/html/mini_shop/templates/display_user.html',
      1 => 1625057521,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60dc6aa43f2008_98872135 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<div class="row">
	<?php if ($_smarty_tpl->tpl_vars['isAdmin']->value) {?>
	<div class="col-2">
		<select size=10 class="form-control" onChange="location.href='user.php?user_sn='+this.value">
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
		<h1 class="text-center">Profile</h1>
		<table class="table table-warning table-hover table-responsive">
		<tr>
			<td>Name:</td><td><?php echo $_smarty_tpl->tpl_vars['user']->value['user_name'];?>
</td>
		</tr>
		<tr>
			<td>ID:</td><td><?php echo $_smarty_tpl->tpl_vars['user']->value['user_id'];?>
</td>
		</tr>
		<tr>
			<td>Email:</td><td><?php echo $_smarty_tpl->tpl_vars['user']->value['user_email'];?>
</td>
		</tr>
		<tr>
			<td>Sex:</td><td><?php echo $_smarty_tpl->tpl_vars['user']->value['user_sex'];?>
</td>
		</tr>
		<tr>
			<td>Phone:</td><td><?php echo $_smarty_tpl->tpl_vars['user']->value['user_tel'];?>
</td>
		</tr>
		<tr>
			<td>Address:</td><td><?php echo $_smarty_tpl->tpl_vars['user']->value['user_zip'];
echo $_smarty_tpl->tpl_vars['user']->value['user_country'];
echo $_smarty_tpl->tpl_vars['user']->value['user_district'];
echo $_smarty_tpl->tpl_vars['user']->value['user_address'];?>
</td>
		</tr>
		</table>
		<div class="text-center">
			<a href="user.php?op=user_form&user_sn=<?php echo $_smarty_tpl->tpl_vars['user']->value['user_sn'];?>
" class="btn btn-outline-secondary">Edit Profile</a>
			<?php if ($_smarty_tpl->tpl_vars['isAdmin']->value) {?>
				<?php echo '<script'; ?>
 src="vendor/bootstrap-sweetalert/sweetalert.min.js"><?php echo '</script'; ?>
>
				<link rel="stylesheet" type="text/css" href="vendor/bootstrap-sweetalert/sweetalert.css">
				<?php echo '<script'; ?>
 type="text/javascript">
					function delete_user(user_sn){
						swal({
							title:"確定要刪除嗎？",
							text:"刪掉之後，該會員所有資料會消失喔！",
							type:"warning",
							showCancelButton: true,
							confirmButtonClass:	"btn-outline-danger",
							confirmButtonText: "Yes",
							closeOnConfirm: false
							},
							function()
							{
								location.href='user.php?op=delete_user&user_sn='+user_sn;
								swal("Success","It's too late.","success");
							});
					}
				<?php echo '</script'; ?>
>
				<?php if ($_smarty_tpl->tpl_vars['now_user_sn']->value != $_smarty_tpl->tpl_vars['login_user']->value['user_sn']) {?>
					<a href="javascript:delete_user('<?php echo $_smarty_tpl->tpl_vars['user']->value['user_sn'];?>
')" class="btn btn-outline-danger">Delete Account</a>
				<?php }?>
			<?php }?>
		</div>
	</div>
</div>
<?php }
}
