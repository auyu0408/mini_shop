<?php
/* Smarty version 3.1.39, created on 2021-06-27 21:13:36
  from '/usr/share/nginx/html/mini_shop/templates/display_user.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60d87980b08ae4_88292481',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e36eab89a0a98f4e8ef57d7b7d5f94a567c0cbe8' => 
    array (
      0 => '/usr/share/nginx/html/mini_shop/templates/display_user.html',
      1 => 1624798770,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60d87980b08ae4_88292481 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<h1>Profile</h1>
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
" class="btn btn-outline-warning">Edit Profile</a>
</div>
<?php }
}
