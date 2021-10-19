<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('login/index');
    }


    public function autenticar()
    {
        $this->load->model("usuario_model");
        $email = $this->input->post("email");
        $senha = $this->input->post("senha");
        $usuario = $this->usuario_model->logarUsuarios($email, $senha);

        if ($usuario) {
            $this->session->set_userdata("usuario logado", $usuario);
            if ($this->session->userdata['usuario logado']['tipo'] == 'adm'){
                redirect(base_url());
            }
            else {
                redirect('usuario');
            }
        } else {
            $this->session->set_flashdata("danger", "Usuário ou senha inválidos!");
            redirect(base_url('index.php/login'));
        }
    }
}
