<?php

class langController extends controller {

    public function __construct() {
        parent::__construct();
    }

    public function index($dados = array()) {
        $this->loadTemplate('lang','change_pt', $dados);
    }
    
    public function change_de($dados = array()) {
        $this->loadTemplate('lang','change_de', $dados);
    }
    
    public function change_en($dados = array()) {
        $this->loadTemplate('lang','change_en', $dados);
    }
    
    public function change_es($dados = array()) {
        $this->loadTemplate('lang','change_es', $dados);
    }
    
    public function change_fr($dados = array()) {
        $this->loadTemplate('lang','change_fr', $dados);
    }
    
    public function change_it($dados = array()) {
        $this->loadTemplate('lang','change_it', $dados);
    }
    
    public function change_pt($dados = array()) {
        $this->loadTemplate('lang','change_pt', $dados);
    }
}