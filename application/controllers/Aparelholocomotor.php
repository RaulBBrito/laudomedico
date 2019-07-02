<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aparelholocomotor extends CI_Controller {
	
	public function index()
	{
		$dados['page_title'] = 'Avaliação do Aparelho Locomotor';
		$dados['page_name'] = 'aparelho_locomotor';
		$dados['departments'] = [];
		$this->load->view('laudo_base',$dados);
	}
}
