<?php
	$expire = time()+60*60*24*30;
	setcookie("lang", "de", $expire);
	$back = $_SERVER['HTTP_REFERER'];
	header('Location:'.$back);
?>