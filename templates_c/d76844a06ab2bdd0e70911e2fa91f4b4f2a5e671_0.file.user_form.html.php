<?php
/* Smarty version 3.1.39, created on 2021-06-27 01:39:51
  from '/usr/share/nginx/html/mini_shop/templates/user_form.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60d76667e1f9d5_59429827',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd76844a06ab2bdd0e70911e2fa91f4b4f2a5e671' => 
    array (
      0 => '/usr/share/nginx/html/mini_shop/templates/user_form.html',
      1 => 1624729186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60d76667e1f9d5_59429827 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<h1>Sign up</h1>
	<?php echo '<script'; ?>
 src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/twzipcode.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="vendor/twzipcode.js"><?php echo '</script'; ?>
>

<form action="user.php" method="post" class="form-horizontal">
	<div class="row g-3">
		<div class="col-md-6">
			<label for="user_name">Name:</label>
			<input type="text" class="form-control" name="user_name" id="user_name" placeholder="please enter your name" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['user_name'];?>
">
		</div>
	
		<div class="col-md-6">
			<label for="user_sex">Sex:</label>
			<br>
			<label class="radio-inline">
				<input type="radio" name="user_sex" id="user_sex_1" value="M" <?php if ($_smarty_tpl->tpl_vars['user']->value['user_sex'] == 'M') {?>checked<?php }?>> Male
			</label>
			<label class="radio-inline">
				<input type="radio" name="user_sex" id="user_sex_0" value="F" <?php if ($_smarty_tpl->tpl_vars['user']->value['user_sex'] == 'F') {?>checked<?php }?>> Female
			</label>
		</div>

		<div class="col-md-6">
			<label for="user_id">ID:</label>
			<input type="text" class="form-control" name="user_id" id="user_id" placeholder="please enter your account id" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['user_id'];?>
">
		</div>

		<div class="col-md-6">
			<label for="user_passwd">Password:</label>
			<input type="password" class="form-control" name="user_passwd" id="user_passwd" placeholder="please enter your password">
		</div>

		<div class="col-md-6">
			<label for="user_email">Email:</label>
			<input type="text" class="form-control" name="user_email" id="user_email" placeholder="please enter you email" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['user_email'];?>
">
		</div>

		<div class="col-md-6">
			<label for="user_tel">Phone:</label>
			<input type="text" class="form-control" name="user_tel" id="user_tel" placeholder="please enter your phone number" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['user_tel'];?>
">
		</div>

		<div>
			<label class="col-md-2 control-label">Address:</label>
			<div id="twzipcode">
				<div class="col-md-2">
					<div data-role="zipcode"
						 data-name="user-zip"
					 	data-value="<?php echo $_smarty_tpl->tpl_vars['user']->value['user_zip'];?>
"
					 	data-style="form-control">
					</div>
				</div>
				<div class="col-md-2">
					<div data-role="country"
						 data-name="user_country"
					 	data-value="<?php echo $_smarty_tpl->tpl_vars['user']->value['user_country'];?>
"
					 	data-style="form-control">
					</div>
				</div>
				<div class="col-md-2">
					<div data-role="district"
						 data-name="user_district"
					 	data-value="<?php echo $_smarty_tpl->tpl_vars['user']->value['user_district'];?>
"
					 	data-style="form-control">
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<input type="text" class="form-control" name="user_address" id="user_address" placeholder="please enter address" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['user_address'];?>
">
			</div>
		</div>

		<div class="col-12">
			<br>
			<input type="hidden" name="op" value="insert_user">
			<button type="submit" class="btn btn-outline-info">Save</button>
		</div>

	</div>

</form>
<?php }
}
