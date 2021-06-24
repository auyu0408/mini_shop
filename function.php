<?php

function my_filter($var, $type = 'int')
{
	switch($type){
	case 'string':
		$var = isset($var) ? filter_var($var, FILTER_SANITIZE_MAGIC_QUOTES) : '';
		break;
	case 'url':
		$var = isset($var) ? filter_var($var, FILTER_SANITIZE_URL) : '';
		break;
	case 'email':
		$var = isset($var) ? filter_var($var, FILTER_SANITIZE_EMAIL) : '';
		break;
	case 'int':
	default:	
		$var = isset($var) ? intval($var) : '';
		break;
	}

	return $var;	
}

function get_goods_pic($goods_sn ='', $type="goods")
{
	$filename = "uploads/{$type}/{$goods_sn}.png";
	if(file_exists($filename))
	{
		return $filename;
	}
	else
	{
		$size = ($type == 'thumbs') ? "300x200" : "600x400";
		return "https://dummyimage.com/{$size}/8a909e/ffffff.gif&text=no+image";
	}
}
?>
