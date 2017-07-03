<?php
//Template 
    if (!isset($_COOKIE["lang"])) {
        include "lang/pt.php"; }
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

 //Carregamento da página
    //Carregando topo da página
    require 'header.php';

    //Corpo da página
    $this->loadViewInTemplate($controller, $viewName);

    //Carregando rodapé da página
    require 'footer.php';
?>