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


?>
