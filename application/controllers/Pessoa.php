<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pessoa extends CI_Controller {

    public function verificar_acesso() {
        if (!$this->session->userdata('logado')) {
            redirect('welcome/entrar');
        }
    }

    public function index() {
        $this->verificar_acesso();
        redirect('pessoa/listar');
    }

    public function listar() {
        $dados['pessoas'] = $this->db->get('pessoa')->result();

        $this->load->view('pessoa/listar', $dados);
    }

    public function add() {
        $dados['nivel_academico'] = $this->db->get('nivel_academico')->result();
        $dados['salas'] = $this->db->get('sala')->result();
        $this->load->view('pessoa/add', $dados);
    }

    public function addPost() {
        $this->verificar_acesso();
        $data['nome_pessoa'] = $this->input->post('nome_pessoa');
        $data['bi'] = $this->input->post('bi');
        $data['email'] = $this->input->post('email');
        $data['telefone'] = $this->input->post('telefone');
        $data['id_sala'] = $this->input->post('id_sala');
        $data['id_nivel_academico'] = $this->input->post('id_nivel_academico');
        $data['estado'] = 1;
        
        if ($this->db->insert('pessoa', $data)) {
            $this->session->set_flashdata('sms', 'Pessoa adicionado com sucesso');
            redirect('pessoa/listar');
        }
    }
    
    public function editar($id) {
        $dados['nivel_academico'] = $this->db->get('nivel_academico')->result();
        $dados['salas'] = $this->db->get('sala')->result();
        
        $this->db->where('id_pessoa', $id);
        $dados['pessoas'] = $this->db->get('pessoa')->result();
        $this->load->view('pessoa/editar', $dados);
    }

    public function editarPost() {
        $this->verificar_acesso();
        $id = $this->input->post('id_pessoa');
        $data['nome_pessoa'] = $this->input->post('nome_pessoa');
        $data['bi'] = $this->input->post('bi');
        $data['email'] = $this->input->post('email');
        $data['telefone'] = $this->input->post('telefone');
        $data['id_sala'] = $this->input->post('id_sala');
        $data['id_nivel_academico'] = $this->input->post('id_nivel_academico');
        
        $this->db->where('id_pessoa', $id);
        if ($this->db->update('pessoa', $data)) {
            $this->session->set_flashdata('sms', 'Pessoa atualizada com sucesso');
            redirect('pessoa/listar');
        }
    }
    
    public function ativar($id) {
        $data['estado'] = 1;
        $this->db->where('id_pessoa', $id);
        if ($this->db->update('pessoa', $data)) {
            $this->session->set_flashdata('sms', 'pessoa atualizado com sucesso');
            redirect('pessoa/listar');
        }
    }
    
    public function desativar($id) {
        $data['estado'] = 0;
        $this->db->where('id_pessoa', $id);
        if ($this->db->update('pessoa', $data)) {
            $this->session->set_flashdata('sms', 'pessoa atualizado com sucesso');
            redirect('pessoa/listar');
        }
    }

}
