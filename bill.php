<?php
//include
require_once "header.php";
if(!$isUser)
{
	header("location:index.php?msg=請先登入");
	exit;
}
//control
$op = isset($_REQUEST['op']) ? myfilter($_REQUEST['op'], "string") :'';
$bill_sn = isset($_REQUEST['bill_sn']) ? myfilter($_REQUEST['bill_sn'], "int") : 0;

switch($op)
{
case 'check_out':
	check_out();
	break;

case 'save_bill':
	$bill_sn = save_bill();
	header("location:bill.php?op=display_bill&bill_sn={$bill_sn}");
	exit;
	break;

case 'display_bill':
	display_bill($bill_sn);
	break;

case 'delete_bill':
	delete_bill($bill_sn);
	header("location:bill.php");
	exit;
	break;

case 'list_bill':
default:
	$op = "list_bill";
	list_bill();
	breal;
}

//output
require_once "footer.php";

//function
//check out
function check_out()
{
	global $smarty, $mysqli;
	$bill_total = 0;
	foreach($_POST['goods_amount'] as $goods_sn => $goods_amount)
	{
		$sql = "select goods_title, goods_price, from goods where goods_sn='{$goods_sn}'";
		$result = $mysqli->query($sql) or die($mysqli->connect_error);
		list($goods_title, $goods_price) = $result->fetch_row();
		$cart_arr[$goods_sn]['goods_title'] = $goods_title;
		$cart_arr[$goods_sn]['goods_price'] = $goods_price;
		$cart_arr[$goods_sn]['goods_amount'] = $goods_amount;
		$cart_arr[$goods_sn]['goods_total'] = $goods_amount * $goods_price;
		$bill_total += $cart_arr[$goods_sn]['goods_total'];
	}
	$smarty->assign('cart_arr', $cart_arr);
	$smarty->assign('bill_total', $bill_total);
}

//save
function save_bill()
{

}

//display
function display_bill($bill_sn)
{

}

//delete
function delete_bill($bill_sn)
{

}

//list
//function list_bill()\
{

}
?>
