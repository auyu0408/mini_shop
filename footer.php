<?php
$smarty->assign('shop_name',_SHOP_NAME);
$smarty->assign('op', $op);
$smarty->display('index.html');

$isAdmin = $isUser = false;
if(isset($_SESSION['user_sn']))
{
	$isUser = true;
	$smarty->assign('login_user',$_SESSION['user']);
	if(in_array($SESSION['user']['user_id'],$admin_array))
	{
		$isAdmin = true;
	}
}
$smarty->assign('isAdmin',$isAdmin);
$smarty->assign('isUser',$isUser);
?>
