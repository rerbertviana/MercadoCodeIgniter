<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model("produtos_model");
    }
	
	public function index() {
		$lista = $this->produtos_model->buscarprodutos();
        $dados = array("produtos" => $lista);
        $this->load->view('produtos/index', $dados);
	}
}
