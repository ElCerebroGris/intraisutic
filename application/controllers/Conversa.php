<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Conversa extends CI_Controller {
    
    public function verificar_acesso() {
        if (!$this->session->userdata('logado')) {
            redirect('candidato/entrar');
        }
    }

    public function index() {
        //$this->verificar_acesso(); 
        $dados['usuario'] = $this->db->get('usuario')->result();
        $this->load->view('conversa/listar', $dados);
    }

}
