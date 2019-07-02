<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Disturbiosono extends CI_Controller {
	
	public function index()
	{
		$dados['page_title'] = 'Avaliação dos Distúrbio do Sono';
		$dados['page_name'] = 'disturbio_sono';
		$dados['departments'] = [];
		$this->load->view('laudo_base',$dados);
	}
}
