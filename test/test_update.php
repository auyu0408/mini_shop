<?php
require_once "header.php";

update_goods(45);

function update_goods($goods_sn)
{
	global $mysqli;
	//foreach($_POST as $var_name => $var_val)
	//{
	//	$$var_name = $mysqli->real_escape_string($var_val);
	//}

	$goods_title="Gura";
	$goods_content="REFLECT";
	$goods_price=620;
	$goods_date=date("Y-m-d H:i:s");

	$sql = "update goods set
		goods_title = '{$goods_title}',
		goods_content = '{$goods_content}',
		goods_price = '{$goods_price}',
		goods_date = '{$goods_date}'
		where goods_sn = {$goods_sn}";
	echo $sql;
	$mysqli->query($sql) or die ($mysqli->connect_error);
	//save_goods_pic($goods_sn);
}
?>
