<?php

$file = get_goods_pic($goods_sn=43, $type="goods");
echo $file;

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
