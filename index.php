<?php
/*引入*/
require_once "header.php";

/*流程控制*/
$op = isset($_REQUEST['op']) ? my_filter($_REQUEST['op'], "string"): '';
switch($op){
case 'user_login':
	user_login();
	header("location:{$_SERVER['PHP_SELF']}");
	exit;
	break;

case 'user_logout':
	unset($_SESSION['user_name']);
	header("location:{$_SERVER['PHP_SELF']}");
	exit;
	break;

default:
	list_goods();
	break;
}

/*輸出*/
require_once "footer.php";

/*本檔使用函數*/

//login check
function user_login()
{
	global $admin_array;
	$user_name = my_filter($_POST['user_name'], "string");
	if(in_array($user_name, $admin_array)){
		$_SESSION['user_name'] = $user_name;
	}
}

//goods list
function list_goods()
{
	global $smarty;
	$smarty->assign('content', _SHOP_NAME);
}


?>

