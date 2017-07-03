<?php
	include "detect_country.php";
	if (!isset($_COOKIE["lang"])) {	
		$ip = $_SERVER['REMOTE_ADDR'];
		$ip_data = locateIp($ip);
		if ($ip_data['country_name']=="Germany") {
			include "lang/de.php";}
		elseif ($ip_data['country_name']=="United Kingdom") {
			include "lang/en.php"; }
		elseif ($ip_data['country_name']=="Spain") {
			include "lang/es.php"; }
		elseif ($ip_data['country_name']=="France") {
			include "lang/fr.php"; }
		elseif ($ip_data['country_name']=="Italy") {
			include "lang/it.php"; }
		elseif ($ip_data['country_name']=="Portugal") {
			include "lang/pt.php"; }
		else {
			include "lang/pt.php"; }
	}
	elseif ($_COOKIE["lang"]=="de") {
		include "lang/de.php"; }
	elseif ($_COOKIE["lang"]=="en") {
		include "lang/en.php"; }
	elseif ($_COOKIE["lang"]=="es") {
		include "lang/es.php"; }
	elseif ($_COOKIE["lang"]=="fr") {
		include "lang/fr.php"; }
 	elseif ($_COOKIE["lang"]=="it") {
		include "lang/it.php"; }
 	elseif ($_COOKIE["lang"]=="pt") {
		include "lang/pt.php"; }
?>

<html>
<head>
</head>
<body>
menu público:
	inicio - quem somos - novidades - agendar - serviços (preços)- portfolio - certificados - testemunhos - contato
menu privado:
	
</body>
</html>