<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Neurologica extends CI_Controller {
	
	public function index()
	{
		$dados['page_title'] = 'Avaliação Neurológica';
		$dados['page_name'] = 'neurologica';
		$dados['departments'] = [];
		$this->load->view('laudo_base',$dados);
	}
}
