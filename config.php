<?php
require "vendor/autoload.php";
$dotenv=Dotenv\Dotenv::createMutable(__DIR__);
$dotenv->load();
define('_SHOP_NAME', 'Hololive production');

//include env variable
$DB_HOST = $_ENV['DB_HOST'];
$DB_ID = $_ENV['DB_ID'];
$DB_PW = $_ENV['DB_PW'];
$DB_NAME = $_ENV['DB_NAME'];
$ADMIN1 = $_ENV['ADMIN1'];

$admin_array = [$ADMIN1];
//define()判斷常數是否被定義
//get_defined_constants()獲得已定義常數列表
?>
