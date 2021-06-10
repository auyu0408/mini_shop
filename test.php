<?php
$link = mysqli_connect("localhost","ubuntu","Gurame5150","mini_shop");

if($link === false)
{
	die("ERROR:Colud not connect.".mysqli_connect_error());
}

$goods_title = "testing";
$goods_content = "testing";
$goods_price = 120;
$goods_date = date("Y-m-d H:i:s");

$sql="INSERT INTO goods(goods_title,goods_content,goods_price,goods_counter,goods_date) VALUES('{$goods_title}','{$goods_content}','{$goods_price}','0','{$goods_date}')";

if(mysqli_query($link, $sql)){
	echo "Record inserted successfully.";
}
else{
	echo "ERROR: Could not able to excute $sql.".mysqli_error($link);
}

mysqli_close($link);
?>
