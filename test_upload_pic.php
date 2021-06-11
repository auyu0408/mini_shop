<?php
namespace Verot\Upload;
require_once "vendor/upload/src/class.upload.php";

$pic = new Upload($_FILES['picture'],'zh_TW');
echo "Hello2";
if($pic->uploaded)
{
	$pic->file_new_name_body = "test";
	$pic->file_overwrite = true;
	$pic->image_resize = true;
	$pic->image_x = 600;
	$pic->image_y = 400;
	$pic->image_convert = 'png';
	$pic->image_ratio_crop = true;
	$pic->png_compression = 9;
	$pic->process('uploads/goods/');
	if($pic->processed)
	{
		echo 'image resized';
		$pic->Clean();
	}
	else
	{
		echo 'error:'.$pic->error;
	}
}
?>
