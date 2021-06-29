<?php
session_start();
header("Content-type: image/png");
$im = imagecreatetruecolor(48,20) or die("Can not build picture.");
$text_color = imagecolorallocate($im,255,255,255);
$num = rand(0000,9999);
$_SESSION['key'] = $num;
imagestring($im,5,5,2,$num,$text_color);
imagepng($im);
imagedestroy($im);
?>
