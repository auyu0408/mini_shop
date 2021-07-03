<?php
/* Smarty version 3.1.39, created on 2021-07-03 19:38:58
  from '/mini_shop/templates/index_side.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60e04c52986845_88384847',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f86b53b6cea4c3d48399963198e3b78751e49bc2' => 
    array (
      0 => '/mini_shop/templates/index_side.html',
      1 => 1625309502,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:side_tool.html' => 1,
    'file:side_login.html' => 1,
    'file:side_cart.html' => 1,
  ),
),false)) {
function content_60e04c52986845_88384847 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card text-dark bg-light">
<?php if ($_smarty_tpl->tpl_vars['isUser']->value) {?>
	<div class="card-header">Menu</div>
<?php } else { ?>
	<div class="card-header">Login</div>
<?php }?>
<div class="card-body">
	<?php if ($_smarty_tpl->tpl_vars['isUser']->value) {?>
		<?php $_smarty_tpl->_subTemplateRender('file:side_tool.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<?php } else { ?>
		<?php $_smarty_tpl->_subTemplateRender('file:side_login.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<?php }?>
</div>
</div>
<div class="card-body">
<?php if ($_smarty_tpl->tpl_vars['mode']->value == 0) {?>
	<?php if ((isset($_smarty_tpl->tpl_vars['cart']->value)) && $_smarty_tpl->tpl_vars['cart']->value != '' && $_smarty_tpl->tpl_vars['op']->value != 'check_out') {?>
	<br>
	<?php $_smarty_tpl->_subTemplateRender('file:side_cart.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<?php }
}?>
</div>
<?php }
}
