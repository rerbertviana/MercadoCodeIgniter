<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos_model extends CI_Model{

    function __construct(){
        parent::__construct();
    }

    public function buscarprodutos() {
        return $this->db->get("produtos")->result_array();
    }
}