<?php
require_once "header.php";
update_user(1);
//update
function update_user($user_sn)
{
	global $mysqli;
	$user_name = "chang";
	$user_id = "Magicalwm";
	$user_passwd = "yoshino10621";
	$user_email = "E94086107@gs.ncku.edu.tw";
	$user_sex = "F";
	$user_tel = "0919091406";
	$user_zip = "701";
	$user_country = "台南市";
	$user_district = "東區";
	$user_address = "大學路12巷6號";
	$passwd_update = '';
	if(!empty($user_passwd))
	{
		$user_passwd = password_hash($user_passwd, PASSWORD_DEFAULT);
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
