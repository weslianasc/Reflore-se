<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro extends CI_Controller {

	public function novo(){
			$usuario = array(
				"nome" => $this->input->post("nome"),
				"email" => $this->input->post("email"),
				"senha" => $this->input->post("senha"),
				"cpf" => $this->input->post("cpf"),
				"sexo" => $this->input->post("sexo"),
				"cnpj" => $this->input->post("cnpj"),
				"endereco" => $this->input->post("endereco"),
				"data_nascimento" => $this->input->post("data_nascimento")
			);
			$n_cnpj = array(
				"codigo_instituicao" => $this->input->post("cnpj")
			);
			$this->load->model('Usuario_model');
			$this->Usuario_model->cadastrar($usuario, $n_cnpj);
			$this->load->view('index');
    }
		

}
