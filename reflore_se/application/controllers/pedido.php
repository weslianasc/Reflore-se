<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pedido extends CI_Controller {

	public function novo_pedido(){
		$this->load->view('index');
			$pedido = array(
				"data_pedido" => $this->input->post("dataPedido"),
				"codigo_flora" => $this->input->post("flora"),
				"codigo_usuario" => $this->input->post("nome_user_pf"),
				"codigo_instituicao" => $this->input->post("nome_inst")
			);
			$this->load->model('Pedido_model');
			$this->Pedido_model->fazer_pedido($pedido);
			$this->load->view('index');
	}
}
