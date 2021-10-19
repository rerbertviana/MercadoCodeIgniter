<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produtos_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    public function buscarprodutos() {
        return $this->db->get("produtos")->result_array();
    }

    public function salvar($produto) {
        $this->db->insert("produtos", $produto);
    }

    public function buscar($busca) {
       
        $this->db->like('nome', $busca);
        $query = $this->db->get('produtos')->result_array();
        return $query;
    }
}
