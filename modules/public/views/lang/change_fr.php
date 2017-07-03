<?php
	$expire = time()+60*60*24*30;
	setcookie("lang", "fr", $expire);
	$back = $_SERVER['HTTP_REFERER'];
	header('Location:'.$back);
?>