<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Administracao extends CI_Controller {
    
    public function verificar_acesso() {
        if (!$this->session->userdata('logado')) {
            redirect('usuario/entrar');
        }
    }

    public function index() {
        $this->verificar_acesso();        
        $this->load->view('administracao/geral');
    }
    
    public function listar() {        
        $this->load->view('dashboard');
    }

}
