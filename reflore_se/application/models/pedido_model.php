<?php
    class Pedido_model extends CI_Model{
        public $codigo;
        public $quantidade;
        public $status;
        public $data_pedido;
        public $codigo_flora;
        public $codigo_usuario;
        public $codigo_instituicao;
        public $codigo_local;

        public function __construct(){
            parent:: __construct();
        }

        public function fazer_pedido($pedido){
            $this->db->insert("pedido", $pedido);
            $this->db->insert("pedido_inst", $pedido);
        }
        public function gravarStatus($status){
            $this->db->insert("pedido", $status);
        }
        public function deletar($codigo){
            $this->db->where('codigo', $codigo);
            $this->db->delete('pedido');
        }
        public function delet($infouser){
            $this->db->where('codigo', $infouser);
            $this->db->delete('pedido_inst'); 
        }
        
    }
?>