<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	private $error = '';
	private $message = '';
	private $validation_error = '';
	private $first_name = '';
	private $last_name = '';
	
	public function index()
	{
		$this->load->model('usuario_model','userModel');
		$dados['usuarios'] = $this->userModel->getUsuarios();
		
		echo json_encode($dados['usuarios']);
		//print_r($dados['usuarios']);
	}

	public function selectUsuarioById()
	{ 
		$output = [];
		$form_data = json_decode(file_get_contents("php://input"));
		$this->load->model('usuario_model','userModel');

		$result = $this->userModel->selectById($form_data->id);

		$output['first_name'] = $result->first_name;
		$output['last_name'] = $result->last_name;		
		
		echo json_encode($output);
	}

	public function deletById()
	{ 
		$output = [];
		$form_data = json_decode(file_get_contents("php://input"));
		$this->load->model('usuario_model','userModel');

		if($this->userModel->delById($form_data->id)){
			$output['message'] = 'Dados deletado com sucesso!';
		}		
		
		echo json_encode($output);
	}

	
	
	public function insertUpdate()
	{
		$error = '';
		 $message = '';
		$form_data = json_decode(file_get_contents("php://input"));
		$this->load->model('usuario_model','userModel');

		$dados['first_name'] = $form_data->first_name;
		$dados['last_name'] = $form_data->last_name;

		if($form_data->action == 'Insert'){
			
			if($this->userModel->addUsuario($dados)){
				$message = 'Dados inserido com sucesso!';
			}else{
				$error = 'erro ao cadastrar'; 
			}

		}else if($form_data->action == 'Edit'){
			$dados['id'] = $form_data->id;
			if($this->userModel->updateUsuario($dados)){
				$message = 'Dados editado com sucesso!';
			}else{
				$error = 'erro ao editar'; 
			}
		}

		$output = array(
			'error'		=>	$error,
			'message'	=>	$message
		);
		
		echo json_encode($output);
	}
}
