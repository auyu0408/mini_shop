<?php
require_once "var.php";
//look cart
if(isset($_COOKIE['cart']) and $_COOKIE['cart']!='')
{
	$smarty->assign('cart', $_COOKIE['cart']);
}

//shoe message
if(isset($_REQUEST['msg']))
{
	$smarty->assign('msg', $_REQUEST['msg']);
}

$smarty->assign('op', $op);
$smarty->display('index.html');
?>
