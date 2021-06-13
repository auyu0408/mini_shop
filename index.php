<?php
/*引入*/
require_once "header.php";

/*流程控制*/
$op = isset($_REQUEST['op']) ? my_filter($_REQUEST['op'], "string"): '';
$goods_sn = isset($_REQUEST['goods_sn']) ? my_filter($_REQUEST['goods_sn'], "int") : 0;
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
	if($goods_sn)
	{
		$op = 'goods_display';
		display_goods(goods_sn);
	}
	else
	{
		list_goods();
	}
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
	global $smarty, $mysqli;
	//include_once "vendor/PageBar.php";
	$sql = "select * from `goods` order by `goods_date` desc";
	//$PageBar = getPageBar($sql, 1, 10);
	//$total = $PageBar['total'];
	//$bar = ($total > 1) ? $PageBar['bar'] : "";
	//$sql = $PageBar['sql'];
	$result = $mysqli->query($sql) or die($mysqli->connect_error);
	$i = 0;
	while($goods = $result->fetch_assoc())//fetch_assoc一次一筆，會抓到沒有，抓回來是一維陣列，放在goods內
	{
		$all_goods[$i] = $goods;//大陣列，放所有抓回來的資料
		$all_goods[$i]['pic'] = get_goods_pic($goods['goods_sn'], 'thumbs');//除了原本，多了圖片欄位
		$i++;
	}

	$smarty->assign('all_goods', $all_goods);
	//$smarty->assign('total', $total);
	//$smarty->assign('bar', $bar);
}

function get_goods_pic($goods_sn ='', $type="goods")
{
	$filename = "uploads/{$type}/{$goods_sn}.png";
	if(file_exists($filename))
	{
		return $filename;
	}
	else
	{
		$size = ($type == 'thumbs') ? "300x200" : "600x400";
		return "https://dummyimage.com/{$size}/8a909e/ffffff.gif&text=no+image";
	}
}

function display_goods($goods_sn = '')
{
	global $mysqli, $smarty;
	$sql = "select * from goods where goods_sn={$goods_sn}";
	$result = $mysqli->query($sql) or die($mysql->connect_error);
	$goods = $result->fetch_assoc();
	$goods['pic'] = get_goods_pic($goods['goods_sn']);
	$smarty->assign('goods',$goods);
}
?>

