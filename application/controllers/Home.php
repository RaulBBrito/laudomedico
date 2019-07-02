<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function index()
	{
		//$dados['view_pagina'] = 'home_view';
		//$dados['pagina_developer'] = '';
		$dados['page_title'] = 'Dashboard';
		$dados['page_name'] = 'dashboard';
		$dados['departments'] = [];
		$this->load->view('laudo_base',$dados);
	}

	public function developer()
	{
		$dados['view_pagina'] = 'home_view';
		$dados['pagina_developer'] = 'header';
		$this->load->view('laudo_base_dev',$dados);
	}
}
