<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sala extends CI_Controller {

    public function verificar_acesso() {
        if (!$this->session->userdata('logado')) {
            redirect('candidato/entrar');
        }
    }

    public function index() {
        //$this->verificar_acesso();      
        redirect('sala/listar');
    }

    public function listar() {
        $dados['salas'] = $this->db->get('sala')->result();
        $this->load->view('sala/listar', $dados);
    }
    
    public function listar_telefones() {
        $dados['salas'] = $this->db->get('sala')->result();
        $this->load->view('sala/listar_telefones', $dados);
    }

    public function add() {
        $this->load->view('sala/add');
    }

    public function addPost() {
        $data['numero_sala'] = $this->input->post('numero');
        $data['descricao_sala'] = $this->input->post('descricao');
        $data['telefone_sala'] = $this->input->post('telefone');

        if ($this->db->insert('sala', $data)) {
            $this->session->set_flashdata('sms', 'Sala adicionada com sucesso');
            redirect('sala/listar');
        }
    }

    public function editar($id) {
        $this->db->where('id_sala', $id);
        $dados['salas'] = $this->db->get('sala')->result();
        $this->load->view('sala/editar', $dados);
    }

    public function editarPost() {
        $id = $this->input->post('id_sala');
        $data['numero_sala'] = $this->input->post('numero');
        $data['descricao_sala'] = $this->input->post('descricao');
        $data['telefone_sala'] = $this->input->post('telefone');

        $this->db->where('id_sala', $id);
        if ($this->db->update('sala', $data)) {
            $this->session->set_flashdata('sms', 'Sala atualizada com sucesso');
            redirect('sala/listar');
        }
    }

    public function ativar($id) {
        $data['estado'] = 1;
        $this->db->where('id_sala', $id);
        if ($this->db->update('sala', $data)) {
            $this->session->set_flashdata('sms', 'sala atualizada com sucesso');
            redirect('sala/listar');
        }
    }

    public function desativar($id) {
        $data['estado'] = 0;
        $this->db->where('id_sala', $id);
        if ($this->db->update('sala', $data)) {
            $this->session->set_flashdata('sms', 'sala atualizada com sucesso');
            redirect('sala/listar');
        }
    }

}
