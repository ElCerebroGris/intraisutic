<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class TestUnit extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->library("unit_test");
    }
    
    private function divisao($a, $b) {
        return $a/$b;
    }
    
    public function index() {
        echo 'Usando Biblioteca Unit Test';
        $test = $this->divisao(6, 3);
        $valor_experado = 2;
        $nome_test = "Teste da função Divisao";
        echo $this->unit->run($test, $valor_experado, $nome_test);
    }
    
}

