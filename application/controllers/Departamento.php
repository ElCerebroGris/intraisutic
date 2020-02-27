<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Departamento extends CI_Controller {

    public function verificar_acesso() {
        if (!$this->session->userdata('logado')) {
            redirect('usuario/entrar');
        }
    }

    public function index() {
        $this->verificar_acesso();
        redirect('departamento/listar');
    }

    public function listar() {
        $dados['departamentos'] = $this->db->get('departamento')->result();
        $this->load->view('departamento/listar', $dados);
    }

    public function add() {
        $this->load->view('departamento/add');
    }

    public function addPost() {
        $this->verificar_acesso();
        $data['descricao_departamento'] = $this->input->post('descricao');
        $data['estado'] = 1;

        if (!$this->validar($data['descricao_departamento'])) {
            $this->session->set_flashdata('sms', 'Erro nos dados inseridos. Departamento já existe');
            redirect('departamento/add');
        }

        if ($this->db->insert('departamento', $data)) {
            $this->session->set_flashdata('sms', 'Departamento Adicionado com sucesso');
            redirect('departamento/listar');
        }
    }

    public function editar($id) {
        $this->db->where('id_departamento', $id);
        $dados['departamentos'] = $this->db->get('departamento')->result();
        $this->load->view('departamento/editar', $dados);
    }

    public function editarPost() {
        $this->verificar_acesso();
        $id = $this->input->post('id_departamento');
        $data['descricao_departamento'] = $this->input->post('descricao');

        $this->db->where('id_departamento', $id);
        if ($this->db->update('departamento', $data)) {
            $this->session->set_flashdata('sms', 'Departamento atualizado com sucesso');
            redirect('departamento/listar');
        }
    }

    public function validar($descricao) {
        $this->db->where('descricao_departamento', $descricao);
        $dados['departamentos'] = $this->db->get('departamento')->result();
        if (count($dados['departamentos']) == 0) {
            return true;
        }
        return false;
    }
    
    public function ativar($id) {
        $data['estado'] = 1;
        $this->db->where('id_departamento', $id);
        if ($this->db->update('departamento', $data)) {
            $this->session->set_flashdata('sms', 'Departamento atualizado com sucesso');
            redirect('departamento/listar');
        }
    }
    
    public function desativar($id) {
        $data['estado'] = 0;
        $this->db->where('id_departamento', $id);
        if ($this->db->update('departamento', $data)) {
            $this->session->set_flashdata('sms', 'Departamento atualizado com sucesso');
            redirect('departamento/listar');
        }
    }
    
    

}
