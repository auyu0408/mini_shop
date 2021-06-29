<?php
/*引入*/
require_once "header.php";

/*流程控制*/
$op = isset($_REQUEST['op']) ? my_filter($_REQUEST['op'], "string") :'';
$user_sn = isset($_REQUEST['user_sn'])?my_filter($_REQUEST['user_sn'], "int") : 0;
$user_id = isset($_REQUEST['user_id'])?my_filter($_REQUEST['user_id'], "string"):'';
switch($op){
	case 'user_form':
		user_form($user_sn);
		break;

	case 'insert_user':
		$user_sn = insert_user();
		header("location:{$_SERVER['PHP_SELF']}?op=display_user&user_sn=$user_sn");
		exit;
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
		$login = user_login($user_id);
		if($login){
			header("location:{$_SERVER['PHP_SELF']}");
		}
		else{
			header("location:index.php");
		}
		exit;
		break;

	case 'user_logout':
		user_logout();
		header("location:index.php");
		exit;
		break;
	
	case 'display_user':
	default:
		$op = 'display_user';
		display_user($user_sn);
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

	if($key != $_SESSION['key'])
	{
		die("CAPTCHA wrong, pleaise reenter it.");
	}
	$user_passwd = password_hash($_POST['user_passwd'], PASSWORD_DEFAULT);

	$sql = "insert into users(user_name, user_id, user_passwd, user_email, user_sex, user_tel, user_zip, user_country, user_district, user_address) values('{$user_name}','{$user_id}','{$user_passwd}','{$user_email}','{$user_sex}','{$user_tel}','{$user_zip}','{$user_country}','{$user_district}','{$user_address}')";

	$mysqli->query($sql) or die($mysqli->connect_error);
	$user_sn = $mysqli->insert_id;
	$_SESSION['user_sn'] = $user_sn;
	$_POST['user_sn'] = $user_sn;
	$_SESSION['user'] = $_POST;

	return $user_sn;
}
		
//display user
function display_user($user_sn)
{
	global $mysqli, $smarty, $isAdmin, $isUser;
	if(empty($user_sn))
	{
		$user_sn = $_SESSION['user_sn'];
	}
	if($isUser)
	{
		$user_sn = $isAdmin ? $user_sn: $_SESSION['user_sn'];
	}
	else
	{
		die('Not member.');
	}
	$sql = "select * from users where user_sn='{$user_sn}'";
	$result = $mysqli->query($sql) or die($mysqli->connect_error);
	$user = $result->fetch_assoc();
	$smarty->assign('user',$user);

	$all_users = '';
	if($isAdmin)
	{
		$sql = "select * from users";
		$result = $mysqli->query($sql) or die($mysqli->connect_error);
		$all_users = $result->fetch_all(MYSQLI_ASSOC);
	}
	$smarty->assign('all_users', $all_users);
	$smarty->assign('now_user_sn', $user_sn);
}

//update
function update_user($user_sn)
{
	global $mysqli, $isAdmin, $isUser;
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
	if($isUser)
	{
		$user_sn = $isAdmin ? $user_sn : $_SESSION['user_sn'];
	}
	else
	{
		return;
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
	global $mysqli, $isAdmin;
	if(!$isAdmin)
	{
		return;
	}
	$sql = "delete from users where user_sn='{$user_sn}'";
	$mysqli->query($sql) or die($mysqli>connect_error);
}

//user login
function user_login($user_id)
{
	global $mysqli;
	if(empty($user_id)){
		return false;
	}
	$sql = "select * from users where user_id='{$user_id}'";
	$result = $mysqli->query($sql) or die($mysqli->connect_error);
	$user = $result->fetch_assoc();
	if(!empty($user))
	{
		if(password_verify($_POST['user_passwd'], $user['user_passwd']))
		{
			$_SESSION['user_sn'] = $user['user_sn'];
			$_SESSION['user'] = $user;
			return true;
		}
	}
	return false;
}

//user logout
function user_logout()
{
	unset($_SESSION['user_sn']);
	unset($_SESSION['user']);
}

?>

