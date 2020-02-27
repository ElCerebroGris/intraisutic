<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Evento extends CI_Controller {

    public function verificar_acesso() {
        if (!$this->session->userdata('logado')) {
            redirect('welcome/entrar');
        }
    }

    public function index() {
        $this->verificar_acesso();
        redirect('evento/listar');
    }

    public function listar() {
        $dados['eventos'] = $this->db->get('evento')->result();

        $this->load->view('evento/listar', $dados);
    }

    public function add() {
        $this->load->view('evento/add');
    }

    public function addPost() {
        $data['usuario_criador'] = $this->session->userdata('id_usuario');
        $data['titulo'] = $this->input->post('titulo');
        $data['local'] = $this->input->post('local');
        $data['descricao_evento'] = $this->input->post('descricao');
        $data['foto'] = $this->input->post('foto');
        $data['data_inicio'] = $this->input->post('data_inicio');
        $data['tempo_inicio'] = $this->input->post('tempo_inicio');
        $data['data_fim'] = $this->input->post('data_fim');
        $data['tempo_fim'] = $this->input->post('tempo_fim');
        $data['data_criacao'] = date('d/m') . '/20' . date('y');

        if ($this->db->insert('evento', $data)) {
            $this->session->set_flashdata('sms', 'Evento adicionado com sucesso');
            redirect('evento/listar');
        }
    }

    public function editar($id = null) {
        $this->db->where('id_evento', $id);
        $dados['eventos'] = $this->db->get('evento')->result();
        $this->load->view('evento/editar', $dados);
    }

    public function editarPost() {
        $id = $this->input->post('id_evento');
        $data['usuario_criador'] = $this->session->userdata('id_usuario');
        $data['titulo'] = $this->input->post('titulo');
        $data['local'] = $this->input->post('local');
        $data['descricao_evento'] = $this->input->post('descricao');
        $data['foto'] = $this->input->post('foto');
        $data['data_inicio'] = $this->input->post('data_inicio');
        $data['tempo_inicio'] = $this->input->post('tempo_inicio');
        $data['data_fim'] = $this->input->post('data_fim');
        $data['tempo_fim'] = $this->input->post('tempo_fim');
        $data['data_criacao'] = date('d/m') . '/20' . date('y');

        if (!$this->validar($data['titulo'], $id)) {
            $this->session->set_flashdata('sms', 'Erro nos dados inseridos. Evento já existe');
            redirect('evento/editar/' . $id);
        }

        $this->db->where('id_evento', $id);
        if ($this->db->update('evento', $data)) {
            $this->session->set_flashdata('sms', 'Evento atualizado com sucesso');
            redirect('evento/listar');
        }
    }

    public function validar($descricao, $id) {
        $this->db->where('id_evento !=', $id);
        $this->db->where('titulo', $descricao);
        $dados['eventos'] = $this->db->get('evento')->result();
        if (count($dados['eventos']) == 0) {
            return true;
        }
        return false;
    }
    
    public function ativar($id) {
        $data['estado'] = 1;
        $this->db->where('id_evento', $id);
        if ($this->db->update('evento', $data)) {
            $this->session->set_flashdata('sms', 'evento atualizado com sucesso');
            redirect('evento/listar');
        }
    }
    
    public function desativar($id) {
        $data['estado'] = 0;
        $this->db->where('id_evento', $id);
        if ($this->db->update('evento', $data)) {
            $this->session->set_flashdata('sms', 'evento atualizado com sucesso');
            redirect('evento/listar');
        }
    }

    public function do_upload($nome) {
        if (!file_exists("./img/eventos/")) {
            mkdir('./img/eventos/');
        }

        $config['upload_path'] = './img/eventos//';
        $config['allowed_types'] = 'png';
        $config['max_size'] = 100;
        $config['max_width'] = 1024;
        $config['max_height'] = 768;
        $config['file_name'] = $nome . '.png';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('foto')) {
            //$error = array('error' => $this->upload->display_errors());
            //$this->load->view('problema/carregar', $error);
            return false;
        } else {
            //$error = array('error' => $this->upload->data());
            //$this->load->view('problema/carregar', $error);
            return true;
        }
    }

}
