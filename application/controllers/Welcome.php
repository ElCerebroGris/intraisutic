<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function verificar_acesso() {
        if (!$this->session->userdata('logado')) {
            redirect('usuario/entrar');
        }
    }

    public function index() {
        $this->verificar_acesso();
        redirect('welcome/dashboard');
    }

    public function dashboard() {
        $this->verificar_acesso();
        $this->db->join('departamento', 'departamento.id_departamento=anuncio.id_departamento');
        $dados['anuncios'] = $this->db->get('anuncio')->result();

        $this->load->view('dashboard', $dados);
    }

    public function pesquisarPost() {
        $chave = $this->input->post('chave');
        redirect('welcome/listarPesquisa/' . $chave);
    }

    public function listarPesquisa($chave = null) {
        
        $this->db->limit(10);
        $this->db->like('titulo', $chave);
        $this->db->like('descricao_evento', $chave);
        $dados['eventos'] = $this->db->get('evento')->result();

        $this->db->like('titulo_anuncio', $chave);
        $this->db->like('descricao_anuncio', $chave);
        $this->db->limit(10);
        $dados['anuncios'] = $this->db->get('anuncio')->result();
        
        $this->db->like('pessoa.nome_pessoa', $chave);
        $this->db->join('sala', 'sala.id_sala=pessoa.id_sala');
        $this->db->limit(10);
        $dados['pessoas'] = $this->db->get('pessoa')->result();
        
        $dados['chave'] = $chave;
        $dados['quantidade'] = count($dados['pessoas'])+ count($dados['anuncios'])+ count($dados['eventos']);

        $this->load->view('pesquisa', $dados);
    }

}
