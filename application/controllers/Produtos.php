<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model("produtos_model");
    }
	
	public function index() {
		$this->produtos_model->buscarprodutos();
	}
}
