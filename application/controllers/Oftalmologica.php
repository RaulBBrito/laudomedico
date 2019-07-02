<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Oftalmologica extends CI_Controller {
	
	public function index()
	{
		$dados['page_title'] = 'Oftalmológica';
		$dados['page_name'] = 'oftalmologica';
		$dados['departments'] = [];
		$this->load->view('laudo_base',$dados);
	}
}
