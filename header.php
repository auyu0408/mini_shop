<?php
session_start();
require_once "config.php";
require_once "function.php";
require_once '/usr/local/lib/php/Smarty/Smarty.class.php';
$smarty = new Smarty;

$smarty->template_dir = 'templates';
$smarty->compile_dir = 'templates_c';
$smarty->cache_dir = 'cache';
$smarty->config_dir = 'config';

$mysqli = new mysqli(_DB_HOST, _DB_ID, _DB_PW, _DB_NAME);
if ($mysqli->connect_error){
	die('無法連上資料庫('.$mysqli->connect_error.')'.$mysqli->connect_error);
}
$mysqli->set_charset("utf8");
?>
