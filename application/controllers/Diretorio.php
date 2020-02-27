<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Diretorio extends CI_Controller {

    public function verificar_acesso() {
        if (!$this->session->userdata('logado')) {
            redirect('candidato/entrar');
        }
    }

    public function index() {
        $this->verificar_acesso(); 
        $this->db->join('sala', 'sala.id_sala=pessoa.id_sala');
        $dados['pessoas'] = $this->db->get('pessoa')->result();
        $this->load->view('diretorio/pesquisa', $dados);
    }

    public function pesquisarPost() {
        $chave = $this->input->post('chave');
        redirect('diretorio/listar/' . $chave);
    }

    public function listar($chave = null) {
        $this->db->like('pessoa.nome_pessoa', $chave);
        $this->db->join('sala', 'sala.id_sala=pessoa.id_sala');
        $dados['pessoas'] = $this->db->get('pessoa')->result();
        $this->load->view('diretorio/pesquisa', $dados);
    }

}
