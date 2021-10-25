<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produtos_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    public function buscarprodutos()
    {
        return $this->db->get("produtos")->result_array();
    }

    public function salvar($produto)
    {
        $this->db->insert("produtos", $produto);
    }

    public function buscar($busca)
    {

        $this->db->like('nome', $busca);
        $query = $this->db->get('produtos')->result_array();
        return $query;
    }

    public function deletar($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('produtos');
        return true;
    }

    public function editar($id)
    {
        return $this->db->get_where("produtos", array(
            "id" => $id
        ))->row_array();
    }
}
