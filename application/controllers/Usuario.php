<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usuario extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model("produtos_model");
    }

    public function index()
    {
        if ($this->input->post("busca")) {
            $dados = $this->filtrar();
        }
        else {
            $lista = $this->produtos_model->buscarprodutos();
            $dados = array("produtos" => $lista);
        }

        $this->load->view('usuario/index', $dados);
        
    }

    public function filtrar()
    {
        $busca = $this->input->post("busca");
        $lista = $this->produtos_model->buscar($busca);
        $dados = array("produtos" => $lista);

        return $dados;
    }
}
