<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Otorrino extends CI_Controller {
	
	public function index()
	{
		$dados['page_title'] = 'Otorrinolaringológica';
		$dados['page_name'] = 'otorrino';
		$dados['departments'] = [];
		$this->load->view('laudo_base',$dados);
	}
}
