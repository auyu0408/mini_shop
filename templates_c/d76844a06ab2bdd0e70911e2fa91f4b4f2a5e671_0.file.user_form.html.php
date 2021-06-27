<?php
/* Smarty version 3.1.39, created on 2021-06-27 20:41:28
  from '/usr/share/nginx/html/mini_shop/templates/user_form.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60d871f8bf5713_26237273',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd76844a06ab2bdd0e70911e2fa91f4b4f2a5e671' => 
    array (
      0 => '/usr/share/nginx/html/mini_shop/templates/user_form.html',
      1 => 1624797685,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60d871f8bf5713_26237273 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<h1>Sign up</h1>

<!--
	<?php echo '<script'; ?>
 language="javascript" src="vendor/jquery.twzipcode.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript">
		$(document).ready(function(){
			$("#twzipcode").twzipcode();
		});
	<?php echo '</script'; ?>
>

	<div id="twzipcode">
  		<div data-role="county" data-style="Style Name" data-value="110"></div>
  		<div data-role="district" data-style="Style Name" data-value="臺北市"></div>
  		<div data-role="zipcode" data-style="Style Name" data-value="信義區"></div>
	</div>
-->
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

		<div class="col-md-6 has-error">
			<label for="user_passwd">Password:</label>
			<input type="password" class="form-control <?php if ($_smarty_tpl->tpl_vars['user']->value['user_passwd'] == '') {?> validate[required] <?php }?>" name="user_passwd" id="user_passwd" placeholder="<?php if ($_smarty_tpl->tpl_vars['user']->value['user_passwd']) {?> 需要改密碼才寫<?php } else { ?>please enter your password<?php }?>">
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

		
			<label class="col-md-2 control-label">Address:</label>
				<div class="col-md-2">
					<input type="text" class="form-control" name="user_zip" id="user_zip" placeholder="zip(ex.110)" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['user_zip'];?>
">
				</div>
				<div class="col-md-2">
					<input type="text" class="form-control" name="user_country" id="user_country" placeholder="縣市(ex.台北市)" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['user_country'];?>
">
				</div>
				<div class="col-md-2">
					<input type="text" class="form-control" name="user_district" id="user_district" placeholder="區(ex.信義區)" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['user_district'];?>
">
				</div>
			<div class="col-md-4">
				<input type="text" class="form-control" name="user_address" id="user_address" placeholder="please enter address" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['user_address'];?>
">
			</div>
		
		<div class="col-12">
			<br>
			<?php if ($_smarty_tpl->tpl_vars['user']->value['user_sn'] > 0) {?>
			<input type="hidden" name="op" value="update_user">
			<input type="hidden" name="user_sn" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['user_sn'];?>
">
			<?php } else { ?>
			<input type="hidden" name="op" value="insert_user">
			<?php }?>
			<button type="submit" class="btn btn-outline-info">Save</button>
		</div>

	</div>

</form>
<?php }
}