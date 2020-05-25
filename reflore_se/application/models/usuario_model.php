<?php
    class Usuario_model extends CI_Model{
        public $codigo;
        public $cpf;
        public $cnpj;
        public $email;
        public $endereco;
        public $data_nascimento;
        public $nome;
        public $sexo;
        public $senha;

        public function __construct(){
            parent:: __construct();
        }
        
        /*Cadastrar*/

        public function cadastrar($usuario){
                $this->db->insert("usuario", $usuario);
        }

        /*Logar*/
        public function logarUsuario($email, $senha){
            $this->db->where('email', $email);
            $this->db->where('senha', $senha);
            $usuario = $this->db->get('usuario')->row_array();
            return $usuario;
        }
        /*Recuperar informações do usuario no formulário de pedido */
        public function recuperar_informacoes_usuario(){
            $query = $this->db->get('usuario');
            return $query->result();
        }

        /*Cadastrar nova muda*/

        public function novaMuda($novaMuda){
            $this->db->insert("mudas", $novaMuda);
    }
    }
?>