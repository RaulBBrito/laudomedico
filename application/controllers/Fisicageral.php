<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fisicageral extends CI_Controller {
	
	public function index()
	{
		$dados['page_title'] = 'Fisica Geral';
		$dados['page_name'] = 'fisica_geral';
		$dados['departments'] = [];
		$this->load->view('laudo_base',$dados);
	}
}
