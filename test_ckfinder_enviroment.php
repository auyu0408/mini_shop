<?php
//test php version
if(version_compare(PHP_VERSION, '5.4.0') >= 0)
{
	echo '[OK] PHP version is larger than 5.4';
}
else
{
	echo '[ERROR] PHP version is too old';
}

//test GD enable
if(!function_exists('gd_info'))
{
	echo '[ERROR] GD is not enabled';
}
else
{
	echo '[OK] GD is enabled';
}

//test fileinfo
if(!function_exists('finfo_file'))
{
	echo '[ERROR] Fileinfo extension is not enabled';
}
else
{
	echo '[OK] Fileinfo is enabled';
}
?>
