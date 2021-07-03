<?php
$smarty->assign('shop_name',_SHOP_NAME);
$smarty->assign('notice',_NOTICE);
$smarty->assign('service',_SERVICE);
$smarty->assign('special',_SPECIAL);
$smarty->assign('good',_GOOD);
if (_MODE=='S')
	$mode=1;
else 
	$mode=0;
$smarty->assign('mode',$mode);
?>
