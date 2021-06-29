<?php
//look cart
if(isset($_COOKIE['cart']) and $_COOKIE['cart']!='')
{
	$smarty->assign('cart', $_COOKIE['cart']);
}

$smarty->assign('shop_name',_SHOP_NAME);
$smarty->assign('op', $op);
$smarty->display('index.html');
?>
