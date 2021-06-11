<?php
require_once "vendor/verot/class.upload.php/src/class.upload.php";

echo "Hello1";

$pic = new \Verot\Upload\Upload($_FILES['picture']);
echo "Hello2";
if($pic->uploaded)
{
	$pic->file_new_name_body = "test";
	$pic->file_overwrite = true;
	$pic->image_resize = true;
	$pic->image_x = 600;
	$pic->image_y = 400;
	$pic->image_convert = 'png';
	$pic->image_ratio_crop =true;
	$pic->process('uploads/goods/');
	if($pic->processed)
	{
		echo 'image resized';
		$pic->clean();
	}
	else
	{
		echo 'error:'.$pic->error;
	}
}
?>
