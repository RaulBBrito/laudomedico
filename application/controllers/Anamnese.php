<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anamnese extends CI_Controller {
	
	public function index()
	{
		$dados['page_title'] = 'Anamnese';
		$dados['page_name'] = 'anamnese';
		$dados['departments'] = [];
		$this->load->view('laudo_base',$dados);
	}
}
