<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Anuncio extends CI_Controller {

    public function verificar_acesso() {
        if (!$this->session->userdata('logado')) {
            redirect('usuario/entrar');
        }
    }

    public function index() {
        $this->verificar_acesso();
        redirect('anuncio/listar');
    }

    public function listar() {
        $this->db->join('departamento', 'departamento.id_departamento=anuncio.id_departamento');
        $dados['anuncios'] = $this->db->get('anuncio')->result();
        $this->load->view('anuncio/listar', $dados);
    }

    public function add() {
        $dados['departamentos'] = $this->db->get('departamento')->result();
        $this->load->view('anuncio/add', $dados);
    }

    public function addPost() {
        $data['titulo_anuncio'] = $this->input->post('titulo_anuncio');
        $data['descricao_anuncio'] = $this->input->post('descricao_anuncio');
        $data['duracao_dia'] = $this->input->post('duracao_dia');
        $data['id_departamento'] = $this->input->post('id_departamento');
        $data['estado_anuncio'] = 1;
        $data['data_criacao'] = date('d/m') . '/20' . date('y');

        if ($this->db->insert('anuncio', $data)) {
            $this->session->set_flashdata('sms', 'Anuncio adicionado com sucesso');
            redirect('anuncio/listar');
        }
    }

    public function editar($id = null) {
        $dados['departamentos'] = $this->db->get('departamento')->result();
        
        $this->db->where('id_anuncio', $id);
        $this->db->join('departamento', 'departamento.id_departamento=anuncio.id_departamento');
        $dados['anuncios'] = $this->db->get('anuncio')->result();
        
        $this->load->view('anuncio/editar', $dados);
    }

    public function editarPost() {
        $id = $this->input->post('id_anuncio');
        $data['titulo_anuncio'] = $this->input->post('titulo_anuncio');
        $data['descricao_anuncio'] = $this->input->post('descricao_anuncio');
        $data['duracao_dia'] = $this->input->post('duracao_dia');
        $data['id_departamento'] = $this->input->post('id_departamento');
        $data['data_criacao'] = date('d/m') . '/20' . date('y');

        $this->db->where('id_anuncio', $id);
        if ($this->db->update('anuncio', $data)) {
            $this->session->set_flashdata('sms', 'Anuncio atualizado com sucesso');
            redirect('anuncio/listar');
        }
    }
    
    public function ativar($id) {
        $data['estado_anuncio'] = 1;
        $this->db->where('id_anuncio', $id);
        if ($this->db->update('anuncio', $data)) {
            $this->session->set_flashdata('sms', 'anuncio atualizado com sucesso');
            redirect('anuncio/listar');
        }
    }
    
    public function desativar($id) {
        $data['estado_anuncio'] = 0;
        $this->db->where('id_anuncio', $id);
        if ($this->db->update('anuncio', $data)) {
            $this->session->set_flashdata('sms', 'anuncio atualizado com sucesso');
            redirect('anuncio/listar');
        }
    }

}
