<?php
/*引入*/
require_once "header.php";

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
		exit;
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
	if(empty($user_sn))
	{
		$sql = "explain users";
		$result = $mysqli->query($sql) or die($mysqli->connect_error);
		while(list($field_name) = $result->fetch_row())
		{
			$user[$field_name]='';
		}
	}
	else
	{
		$sql = "select * from users where user_sn='{$user_sn}'";
		$result = $mysqli->query($sql) or die($mysqli->connect_error);
		$user = $result->fetch_assoc();
	}
	$smarty->assign('user',$user);
}
//insert user
function insert_user(){

}
		
//display user
function display_user()
{

}

//update
function update_user()
{
}

//delete
function delete_user($user_sn)
{
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

