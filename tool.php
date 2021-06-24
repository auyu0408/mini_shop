<?php
namespace Verot\Upload;
/*引入*/
require_once "header.php";
if (!isset($_SESSION['user_name'])){
	header("location:index.php");
}

/*流程控制*/
$op = isset($_REQUEST['op']) ? my_filter($_REQUEST['op'], "string") :'';
$goods_sn = isset($_REQUEST['goods_sn'])?my_filter($_REQUEST['goods_sn'], "int") :'';
switch($op){
	case 'goods_form':
		goods_form($goods_sn);
		break;

	case 'update_goods':
		update_goods($goods_sn);
		header("location:index.php?goods_sn=($goods_sn)");
		exit;
		break;

	case 'delete_goods':
		delete_goods($goods_sn);
		header("location:index.php");
		exit;
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
function goods_form($goods_sn)
{
	global $mysqli, $smarty;
	if(empty($goods_sn))
	{
		$sql = "explain goods";
		$result = $mysqli->query($sql) or die($mysqli->connect_error);
		while(list($field_name) = $result->fetch_row())
		{
			$goods[$field_name]='';
		}
	}
	else
	{
		$sql = "select * from goods where goods_sn={$goods_sn}";
		$result = $mysqli->query($sql) or die($mysqli->connect_error);
		$goods = $result->fetch_assoc();
		$goods['pic'] = get_goods_pic($goods_sn, 'thumbs');
	}
	$smarty->assign('goods', $goods);
}
//insert_goods
function insert_goods(){
	global $mysqli;
	$goods_title = $mysqli->real_escape_string($_POST['goods_title']);
	$goods_content = $mysqli->real_escape_string($_POST['goods_content']);
	$goods_price = $mysqli->real_escape_string($_POST['goods_price']);
	$goods_date = date("Y-m-d H:i:s");


	$sql = "INSERT INTO goods(goods_title,goods_content,goods_price,goods_counter,goods_date) VALUES('{$goods_title}','{$goods_content}','{$goods_price}','0','{$goods_date}')";
	$mysqli->query($sql) or die($mysqli->counter_error);
	$goods_sn = $mysqli->insert_id;
	save_goods_pic($goods_sn);
	return $goods_sn;
}
//upload pic
function save_goods_pic($goods_sn = "")
{
	include_once "vendor/upload/src/class.upload.php";
	$pic = new Upload($_FILES['goods_pic'],'zh_TW');
	if($pic->uploaded)
	{
		//big
		$pic->file_new_name_body = $goods_sn;
		$pic->file_overwrite = true;
		$pic->image_resize = true;
		$pic->image_x = 600;
		$pic->image_y = 400;
		$pic->image_convert = 'png';
		$pic->image_ratio_crop = true;
		$pic->Process('uploads/goods/');
		if(!$pic->processed)
		{
			return 'error:'.$pic->error;
		}

		//small,應該是需要寫兩遍沒錯,他一次設定好像只能傳一次:w
		$pic->file_new_name_body = $goods_sn;
		$pic->file_overwrite = true;
		$pic->image_resize = true;
		$pic->image_x = 300;
		$pic->image_y = 200;
		$pic->image_convert = 'png';
		$pic->image_ratio_crop = true;
		$pic->Process('uploads/thumbs/');
		if($pic->processed)
		{
			$pic->Clean();
		}
		else
		{
			return 'error:'.$pic->error;
		}
	}
}
//update
function update_goods($goods_sn)
{
	global $mysqli;
	foreach($_POST as $var_name => $var_val)
	{
		$$var_name = $mysqli->real_escape_string($var_val);
	}

	$goods_date = date("Y-m-d H:i:s");

	$sql = "update goods set
		goods_title = '{$goods_title}',
		goods_content = '{$goods_content}',
		goods_price = '{$goods_price}',
		goods_date = '{$goods_date}'
		where goods_sn = {$goods_sn}";
	$mysqli->query($sql) or die ($mysqli->connect_error);
	save_goods_pic($goods_sn);
}
//delete
function delete_goods($goods_sn)
{
	global $mysqli;
	$sql = "delete from goods where goods_sn={$goods_sn}";
	$mysqli->query($sql) or die($mysqli->connect_error);
	delete_goods_pic($goods_sn);
}
//delete pic
function delete_goods_pic($goods_sn)
{
	if (file_exists("uploads/goods/{$goods_sn}.png")){
		unlink("uploads/goods/{$goods_sn}.png");
	}
	if (file_exists("uploads/thumbs/{$goods_sn}.png")){
		unlink("uploads/thumbs/{goods_sn}.png");
	}
}
?>

