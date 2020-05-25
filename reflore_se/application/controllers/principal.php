<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

	public function index(){
		$this->load->view('index');
	}
	public function flora(){
	 	$this->load->view('flora');
	}
	public function login(){
		$this->load->view('login');
  	}
   	public function minhaConta(){
		$this->load->view('minhaConta');
	}
	public function pedido(){
		$this->load->view('pedido');
	}
	public function instituicao(){
		$this->load->view('instituicao');
	}
	public function informacao_flora(){
		$this->load->view('informacao_flora');
	}
	//Logar
	public function consultarlogin(){
		$this->load->model("Usuario_model");
		$email = $this->input->post("email");
		$senha = $this->input->post("senha");
		$usuario = $this->Usuario_model->logarUsuario($email, $senha);
		if($usuario){
			$this->session->set_userdata("usuario logado", $usuario);
			Principal::autenticar();
		}else{
			$this->session->set_flashdata("danger", "Email ou senha inválidos!");
			$this->load->view('login');
		}
	}
	
	public function autenticar(){
		$query = $this->session->get_userdata("usuario logado");
		foreach($query as $row){
			$row['cnpj'];
		}
		if($row['cnpj'] == 0){
			$this->load->view('pedido');
		}else{
			$this->load->view('instituicao');
		}
	}

	public function cadastro(){
		$this->load->view('cadastro');
	}

	/*Cadastro */
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
		$this->load->model('Usuario_model');
		$this->Usuario_model->cadastrar($usuario);
		$this->session->set_userdata("usuario logado", $usuario);
		$this->load->view('pedido');
	}

	/*Logoff */
	public function sair(){
		$this->session->sess_destroy('usuario logado');
		header('Location: index');
	}

	/*Fazer pedido*/
	public function fazerpedido(){
		$query = $this->session->get_userdata("usuario logado");
			foreach($query as $row){
				$nome_user_pf = $row['nome'];
			}
		$data = date('Y/m/d');
		$pedido = array(
			"codigo_usuario" => $nome_user_pf,
			"data_pedido" => $data,
			"codigo_mudas" => $this->input->post("codigo_mudas"),
			"codigo_instituicao" => $this->input->post("nome_inst")
	
		);
		$this->load->model('Pedido_model');
		$this->Pedido_model->fazer_pedido($pedido);
		$this->load->view('minhaConta', $pedido);
	}
	/*Mudar status */
	public function salvarStatus(){
		$query = $this->session->get_userdata("usuario logado");
		foreach($query as $row){
			$nome = $row['nome'];
		}
		$query = $this->db->get_where("pedido",array('codigo_instituicao=' => $nome));
		foreach($query->result_array() as $item){

		$infouser = $this->input->post("info_user");
			
			if($item['codigo'] == $infouser){
			$aprovado = $this->input->post("status");
			$negado = $this->input->post("status1");
				if($aprovado){
					$status = $this->input->post("status");
					$this->db->set('status', $status);
					$this->db->where('codigo=', $infouser);
					$this->db->update('pedido');

					$data = $this->input->post("data");
					$this->db->set('data_entrega', $data);
					$this->db->where('codigo=', $infouser);
					$this->db->update('pedido');

					$this->load->model('Pedido_model');
					$this->Pedido_model->delet($infouser);
					header('Location: instituicao');

				}else{
					$status = $this->input->post("status1");
					$this->db->set('status', $status);
					$this->db->where('codigo=', $infouser);
					$this->db->update('pedido');

					// $data = $this->input->post("data");
					// $this->db->set('data_entrega', $data);
					// $this->db->where('codigo=', $infouser);
					// $this->db->update('pedido');

					$this->load->model('Pedido_model');
					$this->Pedido_model->delet($infouser);
					header('Location: instituicao');
				}
			}
		}

	}
	public function editarDados(){
		$data = $this->input->post("data_nascimento");
		$datanova = date('Y/m/d',  strtotime($data));

		$dadosEditados  =  array( 
				"nome" => $this->input->post("nome"),
				"email" => $this->input->post("email"),
				"senha" => $this->input->post("senha"),
				"cpf" => $this->input->post("cpf"),
				"sexo" => $this->input->post("sexo"),
				"endereco" => $this->input->post("endereco"),
				"data_nascimento" => $datanova
			);
			$dadosEditadosPedido  = $this->input->post("nome");

			$this->db->replace('usuario',$dadosEditados);

			$query = $this->session->get_userdata("usuario logado");
				foreach($query as $row){
					$nome = $row['nome'];
				}

			$this->db->set('codigo_usuario', $dadosEditadosPedido);
			$this->db->where('codigo_usuario=', $nome);
			$this->db->update('pedido');

			$this->db->set('codigo_usuario', $dadosEditadosPedido);
			$this->db->where('codigo_usuario=', $nome);
			$this->db->update('pedido_inst');
			
			Principal::consultarlogin();
			header('Location: minhaConta');
	}
	public function editarDados2(){
		$dadosEditados  =  array( 
				"nome" => $this->input->post("nome"),
				"email" => $this->input->post("email"),
				"senha" => $this->input->post("senha"),
				"cnpj" => $this->input->post("cnpj"),
				"endereco" => $this->input->post("endereco")
			);
			$this->db->replace('usuario',$dadosEditados);
			header('Location: minhaConta');
	}
	public function delete_row(){
		$codigo = $this->input->get('id');
		$this->load->model('Pedido_model');
		$this->Pedido_model->deletar($codigo);
		header('Location: minhaConta');
	}
	public function adicionarmuda(){
		$query = $this->session->get_userdata("usuario logado");
			foreach($query as $row){
				$codigo = $row['codigo'];
			}
		$novaMuda  =  array( 
				"nome" => $this->input->post("nome"),
				"desc_mudas" => $this->input->post("desc_mudas"),
				"codigo_instituicao" => $codigo
			);

		$this->load->model('Usuario_model');
		$this->Usuario_model->novaMuda($novaMuda);
		$this->load->view('instituicao');
	}
	
}
