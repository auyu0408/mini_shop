<?php
/* Smarty version 3.1.39, created on 2021-06-10 16:45:38
  from '/usr/share/nginx/html/mini_shop/templates/side_login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c1d132802353_14218571',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1f658df20199218994ca8964df0a7d6a53caf48' => 
    array (
      0 => '/usr/share/nginx/html/mini_shop/templates/side_login.html',
      1 => 1623163078,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c1d132802353_14218571 (Smarty_Internal_Template $_smarty_tpl) {
?>		<form role="form" class="form-horizontal" action="index.php" method="post">
			<div class="form-group">
				<label class="col-4 control-label">Account</label>
				<div class="col-8"> 
					<input type="text" name="user_name" value="" placeholder="enter your account">
				</div>
			</div>
			<div class="form-group">
				<label class="col-4"></label>
				<div class="col-5">
					<input type="hidden" name="op" value="user_login">
					<button class="btn btn-outline-secondary btn-sm" type="submit" name="button">login</button>
				</div>
			<label class="col-3"></label>
			</div>
		</form>
<?php }
}
