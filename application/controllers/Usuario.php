<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

    public function verificar_acesso() {
        if (!$this->session->userdata('logado')) {
            redirect('usuario/entrar');
        }
    }

    public function index() {
        $this->verificar_acesso();
        redirect('usuario/listar');
    }

    public function entrar() {
        //$this->verificar_acesso();
        $this->load->view('login');
    }

    public function listar() {
        $this->db->where('id_usuario !=', $this->session->userdata('id_usuario'));
        $this->db->join('nivel_usuario', 'nivel_usuario.id_nivel_usuario=usuario.id_nivel_usuario');
        $this->db->join('departamento', 'departamento.id_departamento=usuario.id_departamento');
        $dados['usuarios'] = $this->db->get('usuario')->result();

        $this->load->view('usuario/listar', $dados);
    }

    public function add() {
        $dados['departamentos'] = $this->db->get('departamento')->result();
        $dados['nivel'] = $this->db->get('nivel_usuario')->result();
        $dados['pessoas'] = $this->db->get('pessoa')->result();

        $this->load->view('usuario/add', $dados);
    }

    public function addPost() {
        $data['id_departamento'] = $this->input->post('id_departamento');
        $data['id_nivel_usuario'] = $this->input->post('id_nivel');
        $data['id_pessoa'] = $this->input->post('id_pessoa');
        $data['nome_usuario'] = $this->input->post('nome_usuario');
        $data['senha'] = $this->input->post('senha');
        $data['estado_usuario'] = 1;
        $data['data_criacao'] = date('d/m') . '20/' . date('y');

        if ($this->db->insert('usuario', $data)) {
            $this->session->set_flashdata('sms', 'Usuário adicionado com sucesso');
            redirect('usuario/listar');
        }
    }

    public function editar($id = null) {
        $dados['departamentos'] = $this->db->get('departamento')->result();
        $dados['nivel'] = $this->db->get('nivel_usuario')->result();
        $dados['pessoas'] = $this->db->get('pessoa')->result();

        $this->db->where('id_usuario', $id);
        $this->db->join('nivel_usuario', 'nivel_usuario.id_nivel_usuario=usuario.id_nivel_usuario');
        $this->db->join('departamento', 'departamento.id_departamento=usuario.id_departamento');
        $dados['usuarios'] = $this->db->get('usuario')->result();
        $this->load->view('usuario/editar', $dados);
    }

    public function editarPost() {
        $id = $this->input->post('id_usuario');

        $data['id_departamento'] = $this->input->post('id_departamento');
        $data['id_nivel_usuario'] = $this->input->post('id_nivel');
        $data['id_pessoa'] = $this->input->post('id_pessoa');
        $data['nome_usuario'] = $this->input->post('nome_usuario');
        $data['senha'] = $this->input->post('senha');
        //$data['data_criacao'] = date('d/m') . '20/' . date('y');

        $this->db->where('id_usuario', $id);
        if ($this->db->update('usuario', $data)) {
            $this->session->set_flashdata('sms', 'Usuário atualizado com sucesso');
            redirect('usuario/listar');
        }
    }

    public function sair() {
        $this->verificar_acesso();

        $this->session->sess_destroy();
        redirect('welcome');
    }

    public function entrarPost() {
        $nome_usuario = $this->input->post('usuario');
        $senha = $this->input->post('senha');

        $this->db->where('nome_usuario', $nome_usuario);
        $this->db->where('senha', $senha);
        $this->db->join('nivel_usuario', 'nivel_usuario.id_nivel_usuario=usuario.id_nivel_usuario');
        $data['usuarios'] = $this->db->get('usuario')->result();

        if (count($data['usuarios']) == 1 && $data['usuarios'][0]->estado_usuario == 1) {
            $dados['id_usuario'] = $data['usuarios'][0]->id_usuario;
            $dados['nome_completo'] = $data['usuarios'][0]->nome_completo;
            $dados['nome_usuario'] = $data['usuarios'][0]->nome_usuario;
            $dados['logado'] = true;
            $dados['nivel'] = $data['usuarios'][0]->id_nivel_usuario;
            $dados['descricao'] = $data['usuarios'][0]->descricao_nivel_usuario;
            $this->session->set_userdata($dados);

            $this->session->set_flashdata('sms', 'Seja vem-vindo ' . $dados['nome_usuario']);
            redirect('welcome/dashboard');
        }
        $this->session->set_flashdata('sms', 'Usuário/senha incorretos');
        redirect('usuario/entrar');
    }

    public function ativar($id) {
        $data['estado_usuario'] = 1;
        $this->db->where('id_usuario', $id);
        if ($this->db->update('usuario', $data)) {
            $this->session->set_flashdata('sms', 'usuario atualizado com sucesso');
            redirect('usuario/listar');
        }
    }

    public function desativar($id) {
        $data['estado_usuario'] = 0;
        $this->db->where('id_usuario', $id);
        if ($this->db->update('usuario', $data)) {
            $this->session->set_flashdata('sms', 'usuario atualizado com sucesso');
            redirect('usuario/listar');
        }
    }

}
