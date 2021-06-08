<?php
/*引入*/
require_once "header.php";
if (!isset($_SESSION['user_name'])){
	header("location:index.php");
}

/*流程控制*/
$op = isset($_REQUEST['op']) ? my_filter($_REQUEST['op'], "string") :'';
switch($op){
	case 'good_form':
		goods_form();
		break;
	case 'insert_goods':
		$goods_sn = insert_goods();
		header("location:index.php?goods_sn=($goods_sn)");
		exit;
		break;
}

/*輸出*/
require_once "footer.php";

/*使用函數*/

//商品編輯表單
function goods_form(){

}
function inset_goods(){
	global $mysqli;
	$goods_title = $mysqli->real_escape_string($_POST['goods_title']);
	$goods_content = $mysqli->real_escape_string($_POST['goods_content']);
	$goods_price = $mysqli->real_escape_string($_POST['goods_price']);
	$goods_date = $mysqli->now();

	$sql = "INSERT INTO goods(goods_title, goods_content, goods_price, goods_counter, goods_date) 
		VALUES('{$goods_title}','{$goods_content}','{$goods_price}',0,'{$goods_date}')";
	$mysqli->query($sql) or die($mysqli->counter_error);
	$goods_sn = $mysqli->insert_id;
	return $goods_sn;
}
?>

