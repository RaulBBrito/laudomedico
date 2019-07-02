<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agenda extends CI_Controller {
	
	public function index()
	{
		$dados['page_title'] = 'Agenda';
		$dados['page_name'] = 'agenda';
		$dados['departments'] = [];
		$this->load->view('laudo_base',$dados);
	}

	public function sala_espera()
	{
		$dados['page_title'] = 'Sala de Espera';
		$dados['page_name'] = 'sala_espera';
		$this->load->view('laudo_base',$dados);
	}

	function form($param1 = '', $param2 = '', $param3 = '')
	{
		$dados['page_name']   = 'Agendados';
		$dados['page_title']  = 'Agendados';
		$dados['departments'] = [];//$this->db->get('department')->result_array();
		
		$this->load->view('laudo_base', $dados);
	}
}
