<?php
/* Smarty version 3.1.39, created on 2021-07-03 21:37:01
  from '/mini_shop/templates/side_login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60e067fd663798_78146112',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ead3e15617d3f43a7c46b7efbf433c9c7145a4e5' => 
    array (
      0 => '/mini_shop/templates/side_login.html',
      1 => 1625317479,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60e067fd663798_78146112 (Smarty_Internal_Template $_smarty_tpl) {
?>		<form role="form" class="form-horizontal" action="user.php" method="post">
			<div class="form-group">
				<label class="col-4 control-label">ID:</label>
				<div class="col-8"> 
					<input type="text" name="user_id" id="user_id" value="" placeholder="enter your id" class="form-control">
				</div>
			</div>

			<div class="form-group">
				<label class="col-4 control-label">Password:</label>
				<div class="col-8">
					<input type="password" name="user_passwd" id="user_passwd" class="form-control" placeholder="enter password">
				</div>
			</div>

			<div class="form-group">
				<label class="col-4"></label>
				<div class="col-8">
					<input type="hidden" name="op" value="user_login">
					<button type="submit name" name="button" class="btn btn-secondary btn-sm">Log in</button>
					<?php if ($_smarty_tpl->tpl_vars['mode']->value == 0) {?>
					<a href="user.php?op=user_form" class="btn btn-warning btn-sm">Sign Up</a>
					<?php }?>
				</div>
			</div>
		</form>
<?php }
}
