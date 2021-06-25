<?php
namespace Verot\Upload;
/*引入*/
require_once "header.php";
//if (!isset($_SESSION['user_name'])){
//	header("location:index.php");
//}

/*流程控制*/
$op = isset($_REQUEST['op']) ? my_filter($_REQUEST['op'], "string") :'';
$user_sn = isset($_REQUEST['user_sn'])?my_filter($_REQUEST['user_sn'], "int") : 0;

switch($op){
	case 'user_form':
		user_form($user_sn);
		break;

	case 'insert_user':
		$user_sn = insert_user();
		header("location:{$_SERVER['PHP_SELF']}?op=display_user&user_sn=$user_sn");
		exit;
		break;

	case 'display_user':
		display($user_sn);
		break;

	case 'update_user':
		update_user();
		header("location:{$_SERVER['PHP_SELF']}?op=display_user&user_sn=$user_sn");
		exit
		break;

	case 'delete_user':
		delete_user($user_sn);
		header("location:{$_SERVER['PHP_SELF']}");
		exit;
		break;

	case 'user_login':
		user_login();
		header("location:{$_SERVER['PHP_SELF']}");
		exit;
		break;

	case 'user_logout':
		user_logout();
		header("location:{$_SERVER['PHP_SELF']}");
		exit;
		break;
}

/*輸出*/
require_once "footer.php";

/*使用函數*/

//user form
function user_form($user_sn)
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
//insert user
function insert_user(){
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

//display user
function display_user()
{

}

//update
function update_user()
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
function delete_user($user_sn)
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

//user login
function user_login()
{

}

//user logout
function user_logout()
{

}

?>

