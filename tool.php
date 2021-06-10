<?php
/*引入*/
require_once "header.php";
if (!isset($_SESSION['user_name'])){
	header("location:index.php");
}

/*流程控制*/
echo "Hello World";
echo $_REQUEST['op'];
echo $_FILES['goods_pic']['tmp_name'];
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
	include_once "vendor/verot/class.upload.php/src/class.upload.php";
	$pic = new Upload($_FILES['goods_pic']);
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

		//small
//		$pic->file_new_name_body = $goods_sn;
//		$pic->file_overwrite = true;
//		$pic->file_resize = true;
//		$pic->image_x = 300;
//		$pic->image_y = 200;
//		$pic->image_convert = 'png';
//		$pic->image_ratio_crop = true;
//		$pic->Process('uploads/thumbs');
//		if($pic->processed)
//		{
//			$pic->Clean();
//		}
//		else
//		{
//			return 'error:'.$pic->error;
//		}
	}
}
?>

