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
		display_user($user_sn);
		break;

	case 'update_user':
		echo "Hello";
		update_user($user_sn);
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
function insert_user()
{
	global $mysqli;
	foreach ($_POST as $var_name => $var_val)
	{
		$$var_name = $mysqli->real_escape_string($var_val);
	}
	$user_passwd = password_hash($_POST['user_passwd'], PASSWORD_DEFAULT);

	$sql = "insert into users(user_name, user_id, user_passwd, user_email, user_sex, user_tel, user_zip, user_country, user_district, user_address) values('{$user_name}','{$user_id}','{$user_passwd}','{$user_email}','{$user_sex}','{$user_tel}','{$user_zip}','{$user_country}','{$user_district}','{$user_address}')";

	$mysqli->query($sql) or die($mysqli->connect_error);
	$user_sn = $mysqli->$insert_id;
	$_SESSION['user_sn'] = $user_sn;
	$_POST['user_sn'] = $user_sn;
	$_SESSION['user'] = $_POST;

	return $user_sn;
}
		
//display user
function display_user($user_sn)
{
	global $mysqli, $smarty;
	$sql = "select * from users where user_sn='{$user_sn}'";
	$result = $mysqli->query($sql) or die($mysqli->connect_error);
	$user = $result->fetch_assoc();
	$smarty->assign('user',$user);
}

//update
function update_user($user_sn)
{
	global $mysqli;
	foreach($_POST as $var_title => $var_value)
	{
		$$var_title = $mysqli->real_escape_string($_POST[$var_title]);
	}
	$passwd_update = '';
	if(!empty($_POST['user_passwd']))
	{
		$user_passwd = password_hash($_POST['user_passwd'], PASSWORD_DEFAULT);
		$passwd_update = "`user_passwd` = '{$user_passwd}',";
	}
	$sql = "update users set
		user_name = '{$user_name}',
		user_id = '{$user_id}',
		{$passwd_update}
		user_email = '{$user_email}',
		user_sex = '{$user_sex}',
		user_tel = '{$user_tel}',
		user_zip = '{$user_zip}',
		user_country = '{$user_country}',
		user_district = '{$user_district}',
		user_address = '{$user_address}'
		where user_sn={$user_sn}";
	$mysqli->query($sql) or die($mysqli->connect_error);
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

