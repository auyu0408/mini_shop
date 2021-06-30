<?php
//include
require_once "header.php";
if(!$isUser)
{
	header("location:index.php?msg=請先登入");
	exit;
}
//control
$op = isset($_REQUEST['op'])?my_filter($_REQUEST['op'], "string") :'';
$bill_sn = isset($_REQUEST['bill_sn'])?my_filter($_REQUEST['bill_sn'], "int") : 0;
//echo $op;

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
	break;
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
		$sql = "select goods_title, goods_price from goods where goods_sn='{$goods_sn}'";
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
	global $mysqli;
	$bill_total = intval($_POST['bill_total']);
	$now = date("Y-m-d H:i:s");

	$sql = "insert into bill(user_sn, bill_total, bill_date) values('{$_SESSION['user_sn']}', '{$bill_total}', '{$now}')";
	$mysqli->query($sql) or die($mysqli->connect_error);
	$bill_sn = $mysqli->insert_id;

	foreach($_POST['goods_amount'] as $goods_sn => $goods_amount)
	{
		$goods_total = intval($_POST['goods_total'][$goods_sn]);
		$sql = "insert into bill_detail(bill_sn, goods_sn, goods_amount, goods_total) values('{$bill_sn}', '{$goods_sn}', '{$goods_amount}', '{$goods_total}')";
		$mysqli->query($sql) or die($mysqli->connect_error);
		setcookie("cart[$goods_sn][goods_amount]", "", time()-3600);
		setcookie("cart[$goods_sn][goods_title]","",time()-3600);
	}
	return $bill_sn;
}

//display
function display_bill($bill_sn)
{
	global $smarty, $mysqli;
	$sql = "select a.*,b.* from bill as a join users as b on a.user_sn=b.user_sn where a.bill_sn='{$bill_sn}'";
	$result = $mysqli->query($sql) or die($mysqli->connect_error);
	$bill = $result->fetch_assoc();
	$smarty->assign('bill',$bill);

	$sql = "select a.*,b.* from bill_detail as a left join goods as b on a.goods_sn=b.goods_an where a.bill_sn='{$$bill_sn}'";
	$result = $mysqli->query($sql) or die($mysqli->connect_error);
	while($all = $result->fetch_assoc()){
		$bill_detail[] = $all;
	}
	$smarty->assign('bill_detail',$bill_detail);
	$smarty->assign('bill_sn',$bill_sn);
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
