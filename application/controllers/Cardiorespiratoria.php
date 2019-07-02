<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cardiorespiratoria extends CI_Controller {
	
	public function index()
	{
		$dados['page_title'] = 'Avaliação Cardiorespiratória';
		$dados['page_name'] = 'cardiorespiratoria';
		$dados['departments'] = [];
		$this->load->view('laudo_base',$dados);
	}
}
