<?php
/* Smarty version 3.1.39, created on 2021-06-12 21:58:06
  from '/usr/share/nginx/html/mini_shop/templates/side_tool.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c4bd6e723313_65568989',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9119903f5498c147e6906cfa2f20845636307b99' => 
    array (
      0 => '/usr/share/nginx/html/mini_shop/templates/side_tool.html',
      1 => 1623506284,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c4bd6e723313_65568989 (Smarty_Internal_Template $_smarty_tpl) {
?>		<div class="toolbox">
		<div class="alert alert-info col-12">
			Hi, <?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
. Welecome to <?php echo $_smarty_tpl->tpl_vars['shop_name']->value;?>
!
		</div>
		</div>
		<div class="d-grid gap-2 col-6 mx-auto">
		<a href="index.php" class="btn btn-outline-info">Home</a>
		<a href="tool.php?op=goods_form" class="btn btn-outline-warning">Published</a>
		<a href="index.php?op=user_logout" class="btn btn-outline-dark">Logout</a>
		</div>
<?php }
}
