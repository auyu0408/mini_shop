<?php
/* Smarty version 3.1.39, created on 2021-06-28 20:33:45
  from '/usr/share/nginx/html/mini_shop/templates/index_side.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60d9c1a97fcbb1_89680556',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '249b4b774d587b4b735d27f9e85875a04c957e52' => 
    array (
      0 => '/usr/share/nginx/html/mini_shop/templates/index_side.html',
      1 => 1624883241,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:side_tool.html' => 1,
    'file:side_login.html' => 1,
  ),
),false)) {
function content_60d9c1a97fcbb1_89680556 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card-header">Login</div>
<div class="card-body">
	<?php if ($_smarty_tpl->tpl_vars['isUser']->value) {?>
		<?php $_smarty_tpl->_subTemplateRender('file:side_tool.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<?php } else { ?>
		<?php $_smarty_tpl->_subTemplateRender('file:side_login.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<?php }?>
</div>
<?php }
}
