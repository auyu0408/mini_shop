<?php
/* Smarty version 3.1.39, created on 2021-07-03 15:05:40
  from '/usr/share/nginx/html/mini_shop/templates/side_tool.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60e00c44a75753_55480186',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9119903f5498c147e6906cfa2f20845636307b99' => 
    array (
      0 => '/usr/share/nginx/html/mini_shop/templates/side_tool.html',
      1 => 1625295901,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60e00c44a75753_55480186 (Smarty_Internal_Template $_smarty_tpl) {
?>		<div class="toolbox">
		<div class="alert alert-info col-12">
			Hi, <?php echo $_smarty_tpl->tpl_vars['login_user']->value['user_name'];?>
. Welecome to <?php echo $_smarty_tpl->tpl_vars['shop_name']->value;?>
!
		</div>
		</div>
		<div class="d-grid gap-2 col-6 mx-auto">
		<a href="index.php" class="btn btn-outline-info">Home</a>
		<a href="user.php?op=user_display&user_sn=<?php echo $_smarty_tpl->tpl_vars['login_user']->value['user_sn'];?>
" class="btn btn-outline-warning">My account</a>
		<?php if ($_smarty_tpl->tpl_vars['mode']->value == 0) {?>
		<a href="bill.php" class="btn btn-outline-secondary">My order</a>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['isAdmin']->value) {?>
			<a href="tool.php?op=goods_form" class="btn btn-outline-success">Published</a>
			<?php }?>
		<a href="user.php?op=user_logout" class="btn btn-outline-danger">Log out</a>
		</div>
<?php }
}
