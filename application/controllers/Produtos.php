<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produtos extends CI_Controller
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
        } else {
            $lista = $this->produtos_model->buscarprodutos();
            $dados = array("produtos" => $lista);
        }

        $this->load->view('produtos/index', $dados);
    }

    public function novo()
    {

        $nome = $this->input->post("nome");
        $preco = $this->input->post("preco");
        $quantidade = $this->input->post("quantidade");

        $produto = array(
            "nome" => $nome,
            "preco" => $preco,
            "quantidade" => $quantidade
        );

        $this->produtos_model->salvar($produto);
        redirect(base_url());
    }

    public function filtrar()
    {
        $busca = $this->input->post("busca");
        $lista = $this->produtos_model->buscar($busca);
        $dados = array("produtos" => $lista);

        return $dados;
    }
}