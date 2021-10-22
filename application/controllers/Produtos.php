<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produtos extends CI_Controller
{


    function __construct()
    {
        parent::__construct();
        $this->load->model("produtos_model");
    }

    public function index($id = null)
    {

        if ($this->input->post("busca")) {
            $dados = $this->filtrar();
        } else {
            $lista = $this->produtos_model->buscarprodutos();

            if ($id == 1) {
                $erros = $this->novo();

                if ($erros) {
                    $dados['mensagens'] =  $erros;
                }
            } else {
                $dados['mensagens'] =  '';
            }

            $dados['produtos'] = $lista;
            
        }
        $this->load->view('produtos/index', $dados);
    }

    public function novo()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nome', 'Nome', 'required');
        $this->form_validation->set_rules('preco', 'Preço', 'required|numeric');
        $this->form_validation->set_rules('quantidade', 'Quantidade', 'required|integer');

        if ($this->form_validation->run() == FALSE) {
            $erros = array('mensagens' => validation_errors());
            return $erros;
        } else {
            $nome = $this->input->post("nome");
            $preco = $this->input->post("preco");
            $quantidade = $this->input->post("quantidade");

            $produto = array(
                "nome" => $nome,
                "preco" => $preco,
                "quantidade" => $quantidade
            );

            $this->produtos_model->salvar($produto);
            redirect(base_url('index.php/produtos'));
        }
    }

    public function filtrar()
    {
        $busca = $this->input->post("busca");
        $lista = $this->produtos_model->buscar($busca);

        $dados['produtos'] = $lista;
        $dados['mensagens'] = '';

        return $dados;
    }
}
