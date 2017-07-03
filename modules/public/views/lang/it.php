<?php
if (!isset($_COOKIE["lang"])) {
	include "lang/en.php"; }
 elseif ($_COOKIE["lang"]=="du") {
	include "lang/du.php"; }
 elseif ($_COOKIE["lang"]=="en") {
	include "lang/en.php"; }
 elseif ($_COOKIE["lang"]=="fr") {
	include "lang/fr.php"; }
 elseif ($_COOKIE["lang"]=="it") {
	include "lang/it.php"; }
 elseif ($_COOKIE["lang"]=="pt") {
	include "lang/pt.php"; }
?>